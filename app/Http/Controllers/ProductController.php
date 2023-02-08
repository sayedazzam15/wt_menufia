<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // lab
        // crud operation for user


        // get products from database
        // orm

        // products , orders , users
        // Product , Order , User
        // pagination
        $products = Product::orderBy('id', 'DESC')->simplePaginate(5);
        $previousUrl = $products->path() . '?' . $products->getPageName() . '=' . ($products->currentPage() - 1);
        $nextUrl = $products->path() . '?' . $products->getPageName() . '=' . ($products->currentPage() + 1);
        // dump and die
        // dd($products->last());
        // $products = array_filter($products->toArray(), function ($product) {
        //     if ($product['price'] > 500) {
        //         return true;
        //     }
        //     return false;
        // });
        // $products = $products->where('price', '>', 500);
        // $product->map()

        return view('products.index', ['products' => $products, 'previous' => $previousUrl, 'next' => $nextUrl]);
    }
    public function show($id)
    {
        // $product = Product::where('id', $id)->first();
        $product = Product::find($id);
        $product->price = 200;
        return view('products.show', ['product' => $product]);
    }
    public function destroy($id)
    {
        // delete product from db
        /*********       method 1          ************** */
        // $product = Product::find($id);
        // $product->destroy();
        /*********       method 2          ************** */
        Product::where('id', $id)->delete();
        // display all products
        return redirect()->route('products.index');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    public function update($id, Request $request)
    {
        //

        // update product
        /*******  method 1  ********** */
        // $product = Product::find($id);
        // $product->update($request->except('_method', '_token'));
        // Product::where('id',$id)->update($request->except('_method', '_token'))
        // display all products
        /*******  method 2  ********** */
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        // dd($product);
        return redirect()->route('products.index');
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        Product::create($request->except('_token'));
        return redirect()->route('products.index');
    }
}



// delete
