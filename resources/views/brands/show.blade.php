@extends('layouts.app')

@section('content')

<div class="row brand">
    <div class="col-md-2">
        @include('brands._sidebar_category_list')
    </div>
    <div class="col-md-10">

        <div class="panel">
            <div class="panel-heading">
                <div class="header-list">
                    <ul class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li><a href="{{ route('brands.index') }}">品牌列表</a></li>
                        <li>品牌 · {{ $brand->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <h3>品牌简介</h3>
                <div class="media">
                    <a href="" class="media-left">
                        <img src="{{ $brand->logo }}" alt="" class="media-object" style="width:150px;height:80px;">
                    </a>
                    <div class="media-body">
                        <div class="brand-block">
                            <h4 class="title">名称：{{ $brand->name }}</h4>
                            <h4 class="title">国籍：{{ $brand->nationality }}</h4>
                        </div>
                        <div class="brand-block">
                            <p>{{ $brand->introduce }}</p>
                        </div>
                        <div class="brand-block">
                            <h4 class="title-green">{{$brand->name}} · 主要产品</h4>
                            <p>{{ $brand->major_products }}</p>
                        </div>
                        <div class="brand-block">
                            <h4 class="title-green">主要型号</h4>
                            <p>{{ $brand->major_models }}</p>
                        </div>
                        <div class="brand-block">
                            <a href="#" target="_blank">
                                <img src="/images/qq-online.png">
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <h3>产品系列</h3>
                <div class="media">
                    @include('brands._brand_products_list',['products' => $products])

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
