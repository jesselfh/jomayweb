<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {


        $products = Product::where('category_id',$category->id)->paginate(20);
        $categories = Category::where('name', '=', 'root')->first();

        return view('products.index', compact('products','category','categories'));
    }
}
