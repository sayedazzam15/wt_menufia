<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        // belongsTo hasOne
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        // order_product
        return $this->belongsToMany(Product::class);
    }
}



// orders     ->     products

// order_product       order_id   product_id
