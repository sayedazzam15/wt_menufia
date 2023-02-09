<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::paginate(7);
        return view('categories.index', ['categories' => $categories]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show', ['category' => $category]);
    }
}
