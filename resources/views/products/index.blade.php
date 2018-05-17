@extends('layouts.app')
@section('title', '产品')

@section('content')
    <div class="row products">

        <div class="col-md-2">
            @include('libs._category')
        </div>

        <div class="col-md-10">
            <div class="panel">

                <div class="panel-heading">
                    <div class="header-list">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li><a href="#">分类</a></li>
                            <li>{{ isset($category)? $category->name : '产品列表'}}</li>
                        </ul>
                    </div>
                    <div class="header-list search">
                        @include('libs._search')
                    </div>
                </div>

                <div class="panel-body">
                    @include('products._list')
                    {{-- 分页 --}}
                    <div class="text-center">
                        {!! $products->render() !!}
                    </div>
                </div>

            </div>
        </div>

    </div>

@stop
