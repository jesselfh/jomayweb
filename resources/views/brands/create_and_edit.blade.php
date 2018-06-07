@extends('layouts.app')

@section('content')

<div class="container create-or-edit">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($brand->id)
                        编辑品牌 #{{$brand->id}}
                    @else
                        新建品牌
                    @endif
                </h2>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($brand->id)
                    <form action="{{ route('brands.update', $brand->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('brands.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                	<label for="name-field">品牌名称</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $brand->name ) }}" />
                </div>
                <div class="form-group">
                	<label for="logo-field">品牌 Logo</label>
                    <input type="file" name="logo">
                    @if($brand->logo)
                        <br>
                        <img class="thumbnail img-responsive" src="{{ $brand->logo }}" width="200px">
                    @endif
                </div>

                <div class="form-group">
                	<label for="place-field">品牌产地</label>
                	<input class="form-control" type="text" name="place" id="place-field" value="{{ old('place', $brand->place ) }}" />
                </div>
                <div class="form-group">
                	<label for="introduce-field">品牌介绍</label>
                	<textarea name="introduce" id="introduce-editor" class="form-control" rows="3">
                        {{ old('introduce', $brand->introduce ) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="nationality-field">国籍</label>
                    <input class="form-control" type="text" name="nationality" id="nationality-field" value="{{ old('nationality', $brand->nationality ) }}" />
                </div>
                <div class="form-group">
                    <label for="major_products-field">主要产品</label>
                    <textarea name="major_products" id="major_products-field" class="form-control" rows="3">{{ old('major_products', $brand->major_products ) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="major_models-field">主要型号</label>
                    <textarea name="major_models" id=">major_models-field" class="form-control" rows="3">{{ old('major_models', $brand->major_models ) }}</textarea>
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
                        <button type="submit" class="btn btn-primary">保存</button>
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