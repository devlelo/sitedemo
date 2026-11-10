<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model {
    protected $fillable=['name','slug','code','description','is_active','sort_order'];
    protected function casts(): array { return ['is_active'=>'boolean']; }
    public function products() { return $this->hasMany(Product::class); }
}
