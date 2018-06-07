<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Handlers\ImageUploadHandler;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(16);
        $categories = Category::where('name', '=', 'root')->first();
        return view('brands.index',compact('brands','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Brand $brand)
    {
        $categories = Category::where('name', '=', 'root')->first();
        return view('brands.create_and_edit',compact('brand','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImageUploadHandler $uploader, Brand $brand)
    {
        $brand->fill($request->all());

        if($brand->logo){
            $result = $uploader->save($request->logo, 'brand-logos', $brand->id);
            if($result){
                $brand->logo = $result['path'];
            }
        }

        dd($brand);

        $brand->save();

        return redirect()->route('brands.show', $brand->id)->with('message', '品牌添加成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $categories = Category::where('name', '=', 'root')->first();
        $products = Product::where('brand_id', $brand->id)->get();
        //dd($products);
        return view('brands.show', compact('brand','categories','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
