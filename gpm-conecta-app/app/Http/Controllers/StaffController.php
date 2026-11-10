<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\SupplyRequest;
use App\Models\SupplierCheck;
use App\Models\CommercialProposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class StaffController extends Controller {
    public function dashboard() {
        $counts=SupplyRequest::selectRaw('status, count(*) as total')->groupBy('status')->pluck('total','status');
        $recent=SupplyRequest::with('customer')->latest()->take(12)->get();
        return view('staff.dashboard',compact('counts','recent'));
    }
    public function requests(Request $request) {
        $query=SupplyRequest::with('customer');
        if($request->filled('status')) $query->where('status',$request->status);
        return view('staff.requests',['requests'=>$query->latest()->paginate(20)->withQueryString()]);
    }
    public function showRequest(SupplyRequest $supplyRequest) {
        $supplyRequest->load(['customer','items','supplierChecks.lines','proposals.lines','messages.user','events.user']);
        return view('staff.request',compact('supplyRequest'));
    }
    public function status(Request $request, SupplyRequest $supplyRequest) {
        $data=$request->validate(['status'=>['required','in:under_review,supplier_check,awaiting_customer,rejected,preparing,dispatched,delivered'],'reason'=>['required','string','max:1000']]);
        $allowed=['submitted'=>['under_review','supplier_check','rejected'],'under_review'=>['supplier_check','awaiting_customer','rejected'],'supplier_check'=>['under_review','awaiting_customer','rejected'],'awaiting_customer'=>['under_review','supplier_check','rejected'],'customer_accepted'=>['preparing'],'confirmed'=>['preparing'],'preparing'=>['dispatched'],'dispatched'=>['delivered']];
        abort_unless(in_array($data['status'],$allowed[$supplyRequest->status]??[],true),422,'Transição de estado não permitida.');
        $old=$supplyRequest->status;
        DB::transaction(function() use($request,$supplyRequest,$data,$old) {
            $supplyRequest->update(['status'=>$data['status'],'assigned_to'=>$supplyRequest->assigned_to??$request->user()->id]);
            $supplyRequest->events()->create(['user_id'=>$request->user()->id,'from_status'=>$old,'to_status'=>$data['status'],'reason'=>$data['reason']]);
        });
        return back()->with('success','Estado atualizado e auditado.');
    }
    public function supplierCheck(Request $request, SupplyRequest $supplyRequest) {
        $data=$request->validate(['supplier_name'=>['required','string','max:180'],'supplier_contact'=>['nullable','string','max:180'],'notes'=>['nullable','string','max:2000']]);
        $check=$supplyRequest->supplierChecks()->create($data+['status'=>'requested','requested_at'=>now(),'created_by'=>$request->user()->id]);
        if($supplyRequest->status!=='supplier_check') {
            $old=$supplyRequest->status; $supplyRequest->update(['status'=>'supplier_check']);
            $supplyRequest->events()->create(['user_id'=>$request->user()->id,'from_status'=>$old,'to_status'=>'supplier_check','reason'=>'Consulta a fornecedor criada.']);
        }
        return back()->with('success','Consulta manual registada. Contacto e resposta do fornecedor devem ser confirmados pela equipa.');
    }
    public function proposal(Request $request, SupplyRequest $supplyRequest) {
        $data=$request->validate(['currency'=>['required','in:AOA,USD,EUR'],'valid_until'=>['required','date','after_or_equal:today'],'notes'=>['nullable','string','max:2000'],'lines'=>['required','array','min:1'],'lines.*.item_id'=>['required','exists:supply_request_items,id'],'lines.*.quantity'=>['required','numeric','min:0.01'],'lines.*.unit_price'=>['required','numeric','min:0'],'lines.*.availability_note'=>['nullable','string','max:500'],'lines.*.lead_time_days'=>['nullable','integer','min:0']]);
        $proposal=DB::transaction(function() use($request,$supplyRequest,$data) {
            $version=(int)$supplyRequest->proposals()->max('version')+1;
            $proposal=$supplyRequest->proposals()->create(['version'=>$version,'status'=>'sent','currency'=>$data['currency'],'valid_until'=>$data['valid_until'],'subtotal'=>0,'notes'=>$data['notes']??null,'sent_at'=>now(),'created_by'=>$request->user()->id]);
            $sum=0;
            foreach($data['lines'] as $line) {
                $item=$supplyRequest->items()->findOrFail($line['item_id']);
                $total=round($line['quantity']*$line['unit_price'],2); $sum+=$total;
                $proposal->lines()->create(['supply_request_item_id'=>$item->id,'description'=>$item->product_name,'quantity'=>$line['quantity'],'unit'=>$item->unit,'unit_price'=>$line['unit_price'],'line_total'=>$total,'availability_note'=>$line['availability_note']??null,'lead_time_days'=>$line['lead_time_days']??null]);
            }
            $proposal->update(['subtotal'=>$sum]);
            $old=$supplyRequest->status; $supplyRequest->update(['status'=>'proposal_sent']);
            $supplyRequest->events()->create(['user_id'=>$request->user()->id,'from_status'=>$old,'to_status'=>'proposal_sent','reason'=>'Proposta comercial versão '.$version.' enviada.']);
            return $proposal;
        });
        return back()->with('success','Proposta enviada ao portal do cliente.');
    }
    public function confirm(SupplyRequest $supplyRequest, Request $request) {
        abort_unless($supplyRequest->status==='customer_accepted',409,'A proposta ainda não foi aceite pelo cliente.');
        abort_if($supplyRequest->confirmedOrder()->exists(),409,'Já existe encomenda confirmada.');
        DB::transaction(function() use($request,$supplyRequest) {
            $supplyRequest->update(['status'=>'confirmed']);
            $supplyRequest->confirmedOrder()->create(['reference'=>'GPM-ORD-'.now()->format('ymd').'-'.Str::upper(Str::random(4)),'status'=>'confirmed','confirmed_by'=>$request->user()->id,'confirmed_at'=>now()]);
            $supplyRequest->events()->create(['user_id'=>$request->user()->id,'from_status'=>'customer_accepted','to_status'=>'confirmed','reason'=>'GPM confirmou o fornecimento após aceitação do cliente.']);
        });
        return back()->with('success','Encomenda confirmada pela GPM.');
    }
    public function products() { return view('staff.products',['products'=>Product::with('category')->latest()->paginate(20),'categories'=>Category::orderBy('sort_order')->get()]); }
    public function storeProduct(Request $request) {
        $data=$request->validate(['category_id'=>['required','exists:categories,id'],'reference'=>['required','string','max:80','unique:products,reference'],'name'=>['required','string','max:180'],'summary'=>['nullable','string','max:500'],'description'=>['nullable','string','max:5000'],'is_published'=>['nullable','boolean']]);
        $data['slug']=Str::slug($data['name']).'-'.Str::lower(Str::random(4)); $data['is_published']=$request->boolean('is_published'); $data['created_by']=$request->user()->id;
        Product::create($data);
        return back()->with('success','Produto guardado.');
    }
}
