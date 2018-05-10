@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Product /
                    @if($product->id)
                        Edit #{{$product->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($product->id)
                    <form action="{{ route('products.update', $product->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('products.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $product->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="model_number-field">Model_number</label>
                	<input class="form-control" type="text" name="model_number" id="model_number-field" value="{{ old('model_number', $product->model_number ) }}" />
                </div> 
                <div class="form-group">
                	<label for="introduce-field">Introduce</label>
                	<textarea name="introduce" id="introduce-field" class="form-control" rows="3">{{ old('introduce', $product->introduce ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="doc_url-field">Doc_url</label>
                	<input class="form-control" type="text" name="doc_url" id="doc_url-field" value="{{ old('doc_url', $product->doc_url ) }}" />
                </div> 
                <div class="form-group">
                	<label for="cover_image-field">Cover_image</label>
                	<input class="form-control" type="text" name="cover_image" id="cover_image-field" value="{{ old('cover_image', $product->cover_image ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $product->category_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="brand_id-field">Brand_id</label>
                    <input class="form-control" type="text" name="brand_id" id="brand_id-field" value="{{ old('brand_id', $product->brand_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('products.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection