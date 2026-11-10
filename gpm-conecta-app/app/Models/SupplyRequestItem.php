<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SupplyRequestItem extends Model {
    protected $fillable=['supply_request_id','product_id','product_reference','product_name','quantity','unit','customer_note'];
    public function request() { return $this->belongsTo(SupplyRequest::class,'supply_request_id'); }
    public function product() { return $this->belongsTo(Product::class); }
}
