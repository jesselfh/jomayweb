<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

class ProductsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(ProductRequest $request)
	{
        $keywords = $request->get('keywords');
		$products = Product::paginate(20);
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
		return view('products.create_and_edit', compact('product'));
	}

	public function store(ProductRequest $request)
	{
		$product = Product::create($request->all());
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