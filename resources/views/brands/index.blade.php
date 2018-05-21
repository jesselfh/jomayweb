@extends('layouts.app')
@section('title','品牌')

@section('content')
    <div class="row brands">

        <div class="col-md-2">
            @include('brands._sidebar_category_list')
        </div>
        <div class="col-md-10">
            <div class="panel">

                <div class="panel-heading">
                    <div class="header-list">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li><a href="#">分类</a></li>
                            <li><a href="#">品牌列表</a></li>
                        </ul>
                    </div>
                    <div class="header-list">
                        <div class="btn-group btn-group-sm letters">
                            <?php $letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') ?>
                            @foreach($letters as $letter)
                                <a href="{{ route('letter.brands', $letter ) }}" class="btn btn-default">{{ $letter }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="header-list search">
                       <form action="/search/brands" method="get" class="navbar-form" role="search">
                            <input name="keywords" type="search" class="form-control" placeholder="关键词">
                            <button class="btn btn-success" type="submit">查询</button>
                        </form>
                    </div>
                </div>

                <div class="panel-body">
                    @include('brands._list')
                    <div class="text-center">
                         {!! $brands->render() !!}
                    </div>
                </div>



            </div>
        </div>

    </div>
@stop
