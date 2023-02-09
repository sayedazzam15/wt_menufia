<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// facebook.com/profile
// products
// Pascal case
// product

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/post', function () {
//     echo 'welcome from post route';
// });




// get
// post
// delete
// put



Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/show/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])
    ->name('products.destroy');


// Product
// Category


// crud
// relations



Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::put('/products/update/{id}', [ProductController::class, 'update'])
    ->name('products.update');

Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');



Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');

Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
// mvc
// route
