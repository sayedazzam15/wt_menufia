<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::paginate(5);
        return view('orders.index', ['orders' => $orders]);
    }
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', ['order' => $order]);
    }
}



// Order   Product   Catgeory User
// OrderController   ProductController   CatgeoryController UserController
