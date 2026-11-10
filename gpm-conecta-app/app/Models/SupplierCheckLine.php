<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SupplierCheckLine extends Model {
    protected $fillable=['supplier_check_id','supply_request_item_id','available_quantity','unit_cost','currency','lead_time_days','minimum_quantity','conditions'];
    public function check() { return $this->belongsTo(SupplierCheck::class,'supplier_check_id'); }
}
