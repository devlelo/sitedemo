<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class CommercialProposalLine extends Model {
    protected $fillable=['commercial_proposal_id','supply_request_item_id','description','quantity','unit','unit_price','line_total','availability_note','lead_time_days'];
    protected function casts(): array { return ['unit_price'=>'decimal:2','line_total'=>'decimal:2']; }
    public function proposal() { return $this->belongsTo(CommercialProposal::class,'commercial_proposal_id'); }
}
