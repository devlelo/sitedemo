<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $fillable=['category_id','reference','name','slug','summary','description','specifications','keywords','image_path','is_published','created_by'];
    protected function casts(): array { return ['specifications'=>'array','keywords'=>'array','is_published'=>'boolean']; }
    public function category() { return $this->belongsTo(Category::class); }
    public function requestItems() { return $this->hasMany(SupplyRequestItem::class); }
    public function scopePublished($query) { return $query->where('is_published', true); }
}
