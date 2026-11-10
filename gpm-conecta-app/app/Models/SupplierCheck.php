<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SupplierCheck extends Model {
    protected $fillable=['supply_request_id','supplier_name','supplier_contact','status','requested_at','responded_at','notes','created_by'];
    protected function casts(): array { return ['requested_at'=>'datetime','responded_at'=>'datetime']; }
    public function request() { return $this->belongsTo(SupplyRequest::class,'supply_request_id'); }
    public function lines() { return $this->hasMany(SupplierCheckLine::class); }
}
