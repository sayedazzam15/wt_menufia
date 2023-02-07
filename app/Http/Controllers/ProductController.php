<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // get products from database
        $products = Product::get()->take(5);
        // dump and die
        return view('products', ['products' => $products]);
    }
}
