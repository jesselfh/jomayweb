@extends('layouts.app')
@section('title','产品详情')

@section('content')

<div class="row product">
    <div class="col-md-2">
        @include('libs._category')
    </div>

    <div class="col-md-10">
        <div class="panel">
            <div class="panel-heading">
                <div class="header-list">
                    <ul class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li><a href="{{ route('products.index') }}">分类</a></li>
                        <li><a href="{{ route('categories.show','[$product->category]') }}">{{ $product->category->name }}</a></li>
                        <li>产品 · {{ $product->name }}</li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <h3>制动器</h3>
                <div class="media">
                    <a href="" class="media-left">
                        <img src="{{ $product->cover_image }}" alt="" class="media-object thumbnail product-img" style="width:260px;height:220px">
                    </a>
                    <div class="media-body">
                        <div class="product-block">
                            <h4 class="title-green">{{ $product->name }}</h4>
                        </div>
                        <div class="product-block">
                            <p>品牌：{{ $product->brand_id }}</p>
                            <p>型号：{{ $product->model_number }}</p>
                        </div>
                        <div class="product-block">
                            <a href="#" target="_blank">
                                <img src="/images/qq-online.png">
                            </a>
                        </div>
                        <div class="product-block">
                            <a href="#" target="_blank">
                                <img src="/images/doc.png" style="width:48px;height:54px;">
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <h3>产品介绍</h3>
                <div class="media">
                    {!! $product->introduce !!}
                </div>
            </div>
        </div>
    </div>

</div>

@stop
