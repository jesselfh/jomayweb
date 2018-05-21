<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

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

        return view('products.index',compact('categories','products'));
    }

    public function searchBrands(Request $request)
    {
        $categories = Category::where('name', '=', 'root')->first();
        $keywords = $request->get('keywords');
        $brands = Brand::with('category')->where('name','like','%'.$keywords.'%')->paginate(16);

        return view('brands.index',compact('categories','brands'));
    }

    public function searchBrandsByFirstLetter($letter)
    {
        $categories = Category::where('name', '=', 'root')->first();
        //$letter = $request->get('letter');
        $brands = Brand::with('category')->where('name','like', $letter.'%')->paginate(16);

        return view('brands.index',compact('categories','brands'));
    }
}
