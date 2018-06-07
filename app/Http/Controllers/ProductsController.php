<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Brand;
use App\Handlers\ImageUploadHandler;

class ProductsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(ProductRequest $request)
	{
		$products = Product::with('category')->paginate(20);
        $categories = Category::where('name', '=', 'root')->first();
		return view('products.index', compact('products','categories'));
	}

    public function show(Product $product)
    {
        $categories = Category::where('name', '=', 'root')->first();
        return view('products.show', compact('product','categories'));
    }

	public function create(Product $product)
	{
        $categories = Category::where('name', '=', 'root')->first();
        $brands = Brand::all();

		return view('products.create_and_edit', compact('product','categories', 'brands'));
	}

	public function store(ProductRequest $request, ImageUploadHandler $uploader, Product $product )
	{
		//$product = Product::create($request->all());

        $product->fill($request->all());

        if($product->doc_url){
            $result = $uploader->save($request->doc_url, 'product-docs', $product->id);
            if($result){
                $product->doc_url = $result['path'];
            }
        }

        if($product->cover_image){
            $result = $uploader->save($request->cover_image, 'products', $product->id);
            if($result){
                $product->cover_image = $result['path'];
            }
        }

        //dd($product);

        $product->save();

		return redirect()->route('products.show', $product->id)->with('message', 'Created successfully.');

	}

	public function edit(Product $product)
	{
        $this->authorize('update', $product);
		return view('products.create_and_edit', compact('product'));
	}

	public function update(ProductRequest $request, Product $product)
	{
		$this->authorize('update', $product);
		$product->update($request->all());

		return redirect()->route('products.show', $product->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Product $product)
	{
		$this->authorize('destroy', $product);
		$product->delete();

		return redirect()->route('products.index')->with('message', 'Deleted successfully.');
	}
}