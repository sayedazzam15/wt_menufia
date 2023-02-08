<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'myproducts';
    protected $fillable = ['name', 'description', 'price', 'quantity'];
    // created_at update_at
    public $timestamps = false;
}
// update_at
