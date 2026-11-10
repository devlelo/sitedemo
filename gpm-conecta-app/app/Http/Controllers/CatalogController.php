<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
class CatalogController extends Controller {
    public function index(Request $request) {
        $query=Product::published()->with('category');
        if ($request->filled('q')) $query->where(function($q) use($request) { $term=$request->string('q')->toString(); $q->where('name','like',"%$term%")->orWhere('reference','like',"%$term%")->orWhere('summary','like',"%$term%"); });
        if ($request->filled('area')) $query->whereHas('category',fn($q)=>$q->where('slug',$request->area));
        return view('catalog.index',['products'=>$query->orderBy('name')->paginate(18)->withQueryString(),'categories'=>Category::where('is_active',true)->orderBy('sort_order')->get()]);
    }
    public function show(Product $product) { abort_unless($product->is_published,404); return view('catalog.show',compact('product')); }
}
