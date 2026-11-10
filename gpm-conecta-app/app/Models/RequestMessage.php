<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class RequestMessage extends Model {
    protected $fillable=['supply_request_id','user_id','body','is_internal'];
    protected function casts(): array { return ['is_internal'=>'boolean']; }
    public function request() { return $this->belongsTo(SupplyRequest::class,'supply_request_id'); }
    public function user() { return $this->belongsTo(User::class); }
}
