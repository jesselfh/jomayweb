<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function search(Request $request)
    {
        $categories = Category::where('name', '=', 'root')->first();
        $keywords = $request->get('keywords');
        $products = Product::with('category')->where('name','like','%'.$keywords.'%')->paginate(20);

        //dd($products);

        return view('products.index',compact('categories','products'));
    }
}
