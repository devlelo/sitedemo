<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,CatalogController,PortalController,StaffController,CartController};
Route::get('/', fn()=>view('home'))->name('home');
Route::get('/catalogo',[CatalogController::class,'index'])->name('catalog.index');
Route::get('/produto/{product:slug}',[CatalogController::class,'show'])->name('catalog.show');
Route::get('/carrinho',[CartController::class,'show'])->name('cart.show');
Route::post('/carrinho/{product}/adicionar',[CartController::class,'add'])->name('cart.add');
Route::patch('/carrinho/{productId}',[CartController::class,'update'])->name('cart.update');
Route::delete('/carrinho/{productId}',[CartController::class,'remove'])->name('cart.remove');
Route::post('/carrinho/submeter',[CartController::class,'submit'])->middleware('auth')->name('cart.submit');
Route::middleware('guest')->group(function() {
 Route::get('/entrar',[AuthController::class,'loginForm'])->name('login');
 Route::post('/entrar',[AuthController::class,'login'])->name('login.store');
 Route::get('/registar',[AuthController::class,'registerForm'])->name('register');
 Route::post('/registar',[AuthController::class,'register'])->name('register.store');
});
Route::post('/sair',[AuthController::class,'logout'])->middleware('auth')->name('logout');
Route::middleware('auth')->prefix('portal')->name('portal.')->group(function() {
 Route::get('/',[PortalController::class,'dashboard'])->name('dashboard');
 Route::post('/pedidos',[PortalController::class,'createRequest'])->name('requests.store');
 Route::get('/pedidos/{supplyRequest}',[PortalController::class,'showRequest'])->name('requests.show');
 Route::post('/pedidos/{supplyRequest}/mensagens',[PortalController::class,'message'])->name('requests.message');
 Route::post('/propostas/{proposal}/aceitar',[PortalController::class,'acceptProposal'])->name('proposals.accept');
});
Route::middleware(['auth','role:admin,staff'])->prefix('gestao')->name('staff.')->group(function() {
 Route::get('/',[StaffController::class,'dashboard'])->name('dashboard');
 Route::get('/pedidos',[StaffController::class,'requests'])->name('requests');
 Route::get('/pedidos/{supplyRequest}',[StaffController::class,'showRequest'])->name('requests.show');
 Route::post('/pedidos/{supplyRequest}/estado',[StaffController::class,'status'])->name('requests.status');
 Route::post('/pedidos/{supplyRequest}/fornecedores',[StaffController::class,'supplierCheck'])->name('requests.supplier');
 Route::post('/pedidos/{supplyRequest}/propostas',[StaffController::class,'proposal'])->name('requests.proposal');
 Route::post('/pedidos/{supplyRequest}/confirmar',[StaffController::class,'confirm'])->name('requests.confirm');
 Route::get('/produtos',[StaffController::class,'products'])->name('products');
 Route::post('/produtos',[StaffController::class,'storeProduct'])->name('products.store');
});
