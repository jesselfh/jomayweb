@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Brand /
                    @if($brand->id)
                        Edit #{{$brand->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($brand->id)
                    <form action="{{ route('brands.update', $brand->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('brands.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $brand->name ) }}" />
                </div> 
                <div class="form-group">
                	<label for="logo-field">Logo</label>
                	<input class="form-control" type="text" name="logo" id="logo-field" value="{{ old('logo', $brand->logo ) }}" />
                </div> 
                <div class="form-group">
                	<label for="place-field">Place</label>
                	<input class="form-control" type="text" name="place" id="place-field" value="{{ old('place', $brand->place ) }}" />
                </div> 
                <div class="form-group">
                	<label for="introduce-field">Introduce</label>
                	<textarea name="introduce" id="introduce-field" class="form-control" rows="3">{{ old('introduce', $brand->introduce ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $brand->category_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('brands.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection