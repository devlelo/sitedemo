<?php
namespace App\Http\Controllers;
use App\Models\SupplyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PortalController extends Controller {
    public function dashboard(Request $request) {
        $requests=SupplyRequest::where('customer_id',$request->user()->id)->withCount('items')->latest()->paginate(12);
        return view('portal.dashboard',compact('requests'));
    }
    public function createRequest(Request $request) {
        $data=$request->validate(['items'=>['required','array','min:1'],'items.*.product_id'=>['required','exists:products,id'],'items.*.quantity'=>['required','numeric','min:0.01','max:1000000'],'customer_note'=>['nullable','string','max:3000']]);
        $user=$request->user();
        $record=DB::transaction(function() use($data,$user) {
            $ref='GPM-'.now()->format('ymd').'-'.Str::upper(Str::random(5));
            $order=SupplyRequest::create(['reference'=>$ref,'customer_id'=>$user->id,'status'=>'submitted','customer_note'=>$data['customer_note']??null,'submitted_at'=>now(),'currency'=>'AOA','snapshot_company'=>$user->company_name,'snapshot_nif'=>$user->nif,'snapshot_address'=>$user->company_address]);
            foreach($data['items'] as $row) {
                $product=\App\Models\Product::published()->findOrFail($row['product_id']);
                $order->items()->create(['product_id'=>$product->id,'product_reference'=>$product->reference,'product_name'=>$product->name,'quantity'=>$row['quantity'],'unit'=>'unidade']);
            }
            $order->events()->create(['user_id'=>$user->id,'from_status'=>null,'to_status'=>'submitted','reason'=>'Pedido submetido pelo cliente.']);
            return $order;
        });
        return redirect()->route('portal.requests.show',$record)->with('success','Pedido recebido. Isto não confirma venda, preço ou disponibilidade.');
    }
    public function showRequest(Request $request, SupplyRequest $supplyRequest) {
        abort_unless($supplyRequest->customer_id===$request->user()->id,404);
        $supplyRequest->load(['items','proposals.lines','messages.user','events.user']);
        return view('portal.request',compact('supplyRequest'));
    }
    public function message(Request $request, SupplyRequest $supplyRequest) {
        abort_unless($supplyRequest->customer_id===$request->user()->id,404);
        $data=$request->validate(['body'=>['required','string','max:4000']]);
        $supplyRequest->messages()->create(['user_id'=>$request->user()->id,'body'=>$data['body'],'is_internal'=>false]);
        return back()->with('success','Mensagem enviada.');
    }
    public function acceptProposal(Request $request, \App\Models\CommercialProposal $proposal) {
        abort_unless($proposal->request->customer_id===$request->user()->id,404);
        abort_unless($proposal->status==='sent' && (!$proposal->valid_until || $proposal->valid_until->isFuture()),409,'Esta proposta já não pode ser aceite.');
        $proposal->update(['status'=>'customer_accepted','accepted_at'=>now()]);
        $proposal->request->events()->create(['user_id'=>$request->user()->id,'from_status'=>$proposal->request->status,'to_status'=>'customer_accepted','reason'=>'Cliente aceitou a proposta.']);
        $proposal->request->update(['status'=>'customer_accepted']);
        return back()->with('success','Aceitação registada. A encomenda ainda depende da confirmação final da GPM.');
    }
}
