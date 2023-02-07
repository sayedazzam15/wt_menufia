<?php

use App\Http\Controllers\ProductController;
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
Route::get('/products', [ProductController::class, 'index']);
// Route::get('/post', function () {
//     echo 'welcome from post route';
// });
