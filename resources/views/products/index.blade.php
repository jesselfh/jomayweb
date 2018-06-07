@extends('layouts.app')
@section('title', '产品')

@section('content')
    <div class="row products">

        <div class="col-md-12 banner">
            <img src="/images/products/banner.jpg" alt="" class="img-responsive center-block">
        </div>


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
                        <form action="/search/products" method="get" class="navbar-form" role="search">
                            <input name="keywords" type="search" class="form-control" placeholder="关键词">
                            <button class="btn btn-success" type="submit">查询</button>
                        </form>
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

@section('scripts')
    <script>
        $(function(){
            $('.category li.active').parent().addClass('in'); //选中的分类展开

            $('.category li.active').parent().parent().addClass('active'); //分类的父类选中样式

            $('li.active .category-title span').removeClass('glyphicon-menu-down');
            $('li.active .category-title span').addClass('glyphicon-menu-up');
        });
    </script>
@stop
