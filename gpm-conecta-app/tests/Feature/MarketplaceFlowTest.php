<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\SupplyRequest;
class MarketplaceFlowTest extends TestCase {
 use RefreshDatabase;
 public function test_customer_request_moves_through_supplier_proposal_and_gpm_confirmation(): void {
  $category=Category::create(['name'=>'Construção e materiais','slug'=>'construction','code'=>'CON','is_active'=>true,'sort_order'=>1]);
  $customer=User::create(['name'=>'Cliente Teste','email'=>'cliente@example.test','password'=>'StrongPass123!','phone'=>'900000000','company_name'=>'Empresa Teste','nif'=>'5000000000','company_address'=>'Benguela','role'=>'customer','is_active'=>true]);
  $staff=User::create(['name'=>'Equipa GPM','email'=>'staff@example.test','password'=>'StrongPass123!','role'=>'admin','is_active'=>true]);
  $product=Product::create(['category_id'=>$category->id,'reference'=>'MAT-001','name'=>'Material de teste','slug'=>'material-teste','summary'=>'Produto de teste','description'=>'Descrição de teste','is_published'=>true,'created_by'=>$staff->id]);
  $this->actingAs($customer)->post(route('cart.add',$product),['quantity'=>2])->assertRedirect(route('cart.show'));
  $this->post(route('cart.submit'))->assertRedirect();
  $request=SupplyRequest::with('items')->latest()->first();
  $this->assertNotNull($request);
  $this->actingAs($staff)->post(route('staff.requests.supplier',$request),['supplier_name'=>'Fornecedor de teste','supplier_contact'=>'Contacto de teste','notes'=>'Consulta manual','lines'=>[['item_id'=>$request->items->first()->id,'available_quantity'=>2,'unit_cost'=>1000,'currency'=>'AOA','lead_time_days'=>3]]])->assertRedirect();
  $this->assertDatabaseHas('supplier_check_lines',['available_quantity'=>2,'unit_cost'=>1000]);
  $this->post(route('staff.requests.proposal',$request),['currency'=>'AOA','valid_until'=>now()->addDays(5)->toDateString(),'notes'=>'Condições de teste','lines'=>[['item_id'=>$request->items->first()->id,'quantity'=>2,'unit_price'=>1500,'availability_note'=>'Disponível sob confirmação','lead_time_days'=>3]]])->assertRedirect();
  $proposal=$request->proposals()->latest('version')->first();
  $this->actingAs($customer)->post(route('portal.proposals.accept',$proposal))->assertRedirect();
  $this->actingAs($staff)->post(route('staff.requests.confirm',$request))->assertRedirect();
  $this->assertDatabaseHas('confirmed_orders',['supply_request_id'=>$request->id,'status'=>'confirmed']);
  $this->actingAs($customer)->get(route('documents.proposal',$proposal))->assertOk()->assertHeader('content-type','application/pdf');
 }
}
