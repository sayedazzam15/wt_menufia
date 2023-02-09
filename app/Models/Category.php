<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    // protected $primaryKey = 'category_id';
    public function products()
    {
        // category_id
        // return $this->hasMany(Product::class, 'cat_id', 'category_id');
        return $this->hasMany(Product::class);
    }
    public function getPaginatedProducts()
    {
        return $this->products()->paginate(5);
    }
}
// category product cat_id
