<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'myproducts';
    protected $fillable = ['name', 'description', 'price', 'quantity'];
    // created_at update_at
    public $timestamps = false;
    protected $with = ['category'];
    public function category()
    {
        // belongsTo   hasOne
        // hasMany
        // return $this->belongsTo(Category::class, 'cat_id', 'category_id');
        return $this->belongsTo(Category::class);
    }
}
// update_at
