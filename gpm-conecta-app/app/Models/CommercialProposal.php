<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class CommercialProposal extends Model {
    protected $fillable=['supply_request_id','version','status','currency','valid_until','subtotal','notes','sent_at','accepted_at','created_by'];
    protected function casts(): array { return ['valid_until'=>'date','sent_at'=>'datetime','accepted_at'=>'datetime','subtotal'=>'decimal:2']; }
    public function request() { return $this->belongsTo(SupplyRequest::class,'supply_request_id'); }
    public function lines() { return $this->hasMany(CommercialProposalLine::class); }
}
