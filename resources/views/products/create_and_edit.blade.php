@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($product->id)
                        编辑产品 #{{$product->id}}
                    @else
                        添加产品
                    @endif
                </h2>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($product->id)
                    <form action="{{ route('products.update', $product->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('products.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                	<label for="name-field">产品名称</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $product->name ) }}" />
                </div>
                <div class="form-group">
                	<label for="model_number-field">产品型号</label>
                	<input class="form-control" type="text" name="model_number" id="model_number-field" value="{{ old('model_number', $product->model_number ) }}" />
                </div>
                <div class="form-group">
                	<label for="introduce-field">产品介绍</label>
                	<textarea name="introduce" id="introduce-editor" class="form-control" rows="3">{{ old('introduce', $product->introduce ) }}</textarea>
                </div>
                <div class="form-group">
                	<label for="doc_url-field">产品资料</label>
                    <input type="file" name="doc_url">
                    @if($product->doc_url)
                        <br>
                        <img src="{{ $product->doc_url }}" alt="" class="thumbnail img-responsive">
                    @endif
                </div>
                <div class="form-group">
                	<label for="cover_image-field">产品图片</label>
                    <input type="file" name="cover_image">

                    @if($product->cover_image)
                        <br>
                        <img src="{{ $product->cover_image }}" alt="" class="thumbnail img-responsive">
                    @endif
                </div>

                <div class="form-group">
                    <label for="brand_id-field">所属品牌</label>
                    <select name="brand_id" id="brand_id-field" class="selectpicker form-control" data-live-search="true" data-size="15">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id-field">所属分类</label>
                    <select name="category_id" id="category_id" class="selectpicker form-control" data-live-search="true" data-size="15">
                        @foreach($categories->getDescendants()  as $category)

                            @if($category->depth == 1)
                                <option data-icon="glyphicon glyphicon-th-large" style="background: #5cb85c; color: #fff;" value="{{ $category->id }}">{{ $category->name }}</option>
                            @elseif($category->depth == 2)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif

                        @endforeach
                    </select>
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('admin') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script type="text/javascript"  src="{{ asset('js/bootstrap-select.js') }}"></script>

    <script>
    $(document).ready(function(){

        var editor = new Simditor({
            textarea: $('#introduce-editor'),
            toolbar:['title','bold','italic','underline','strikethrough','fontScale','color','ol','ul','blockquote','code','table','link','image','hr','indent','outdent','alignment'],
            upload:{
                url:'{{ route('news.upload_image') }}',
                params:{_token: '{{ csrf_token() }}'},
                fileKey: 'upload_file',
                connectionCount:6,
                leaveConfirm:'文件上传中，关闭此页面将取消上传。'
            },
            pasteImage:true,
        });
    });
    </script>

@stop