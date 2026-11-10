<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\SupplyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CartController extends Controller {
 private function cart(Request $request): array { return $request->session()->get('gpm_cart',[]); }
 public function show(Request $request) { return view('cart.index',['items'=>$this->cart($request)]); }
 public function add(Request $request, Product $product) {
  abort_unless($product->is_published,404);
  $data=$request->validate(['quantity'=>['required','numeric','min:0.01','max:1000000']]);
  $cart=$this->cart($request); $id=(string)$product->id;
  if(isset($cart[$id])) $cart[$id]['quantity']=(float)$cart[$id]['quantity']+(float)$data['quantity'];
  else $cart[$id]=['product_id'=>$product->id,'reference'=>$product->reference,'name'=>$product->name,'quantity'=>(float)$data['quantity']];
  $request->session()->put('gpm_cart',$cart);
  return redirect()->route('cart.show')->with('success','Produto adicionado ao pedido.');
 }
 public function update(Request $request, int $productId) {
  $data=$request->validate(['quantity'=>['required','numeric','min:0.01','max:1000000']]);
  $cart=$this->cart($request); abort_unless(isset($cart[(string)$productId]),404);
  $cart[(string)$productId]['quantity']=(float)$data['quantity']; $request->session()->put('gpm_cart',$cart);
  return back()->with('success','Quantidade atualizada.');
 }
 public function remove(Request $request, int $productId) {
  $cart=$this->cart($request); unset($cart[(string)$productId]); $request->session()->put('gpm_cart',$cart);
  return back()->with('success','Produto removido do pedido.');
 }
 public function submit(Request $request) {
  $cart=$this->cart($request); abort_if(empty($cart),422,'O pedido está vazio.');
  $user=$request->user();
  $record=DB::transaction(function() use($cart,$user) {
   $ref='GPM-'.now()->format('ymd').'-'.Str::upper(Str::random(5));
   $order=SupplyRequest::create(['reference'=>$ref,'customer_id'=>$user->id,'status'=>'submitted','submitted_at'=>now(),'currency'=>'AOA','snapshot_company'=>$user->company_name,'snapshot_nif'=>$user->nif,'snapshot_address'=>$user->company_address]);
   foreach($cart as $row) {
    $product=Product::published()->findOrFail($row['product_id']);
    $order->items()->create(['product_id'=>$product->id,'product_reference'=>$product->reference,'product_name'=>$product->name,'quantity'=>$row['quantity'],'unit'=>'unidade']);
   }
   $order->events()->create(['user_id'=>$user->id,'from_status'=>null,'to_status'=>'submitted','reason'=>'Pedido submetido a partir do carrinho do cliente.']);
   return $order;
  });
  $request->session()->forget('gpm_cart');
  return redirect()->route('portal.requests.show',$record)->with('success','Pedido recebido. Isto não confirma venda, preço ou disponibilidade.');
 }
}
