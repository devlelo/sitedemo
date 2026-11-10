<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SupplyRequest extends Model {
    protected $fillable=['reference','customer_id','assigned_to','status','customer_note','submitted_at','currency','snapshot_company','snapshot_nif','snapshot_address'];
    protected function casts(): array { return ['submitted_at'=>'datetime']; }
    public function customer() { return $this->belongsTo(User::class,'customer_id'); }
    public function assignee() { return $this->belongsTo(User::class,'assigned_to'); }
    public function items() { return $this->hasMany(SupplyRequestItem::class); }
    public function supplierChecks() { return $this->hasMany(SupplierCheck::class); }
    public function proposals() { return $this->hasMany(CommercialProposal::class); }
    public function messages() { return $this->hasMany(RequestMessage::class); }
    public function events() { return $this->hasMany(RequestEvent::class); }
    public function confirmedOrder() { return $this->hasOne(ConfirmedOrder::class); }
}
