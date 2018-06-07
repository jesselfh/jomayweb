<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {

        //$products = Product::where('category_id',$category->id)->paginate(20);

        //dd($category);

        $products = Product::categorized($category)->paginate(20);

        $categories = Category::where('name', '=', 'root')->first();

        return view('products.index', compact('products','category','categories'));
    }

    public function showBrands(Category $category)
    {
        $categories = Category::where('name', '=', 'root')->first();
        $brands = Brand::where('category_id',$category->id)->paginate(25);

        //dd($brands);
        return view('brands.index', compact('brands','category','categories'));
    }
}
