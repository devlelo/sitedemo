<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ConfirmedOrder extends Model {
    protected $fillable=['supply_request_id','reference','status','confirmed_by','confirmed_at','delivery_notes'];
    protected function casts(): array { return ['confirmed_at'=>'datetime']; }
    public function request() { return $this->belongsTo(SupplyRequest::class,'supply_request_id'); }
}
