@extends('layouts.app')
@section('title','品牌')

@section('content')
    <div class="row brands">

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
                            <li><a href="#">品牌列表</a></li>
                        </ul>
                    </div>
                    <div class="header-list">
                        <div class="btn-group btn-group-sm letters">
                            <?php $letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') ?>
                            @foreach($letters as $letter)
                                <a href="" class="btn btn-default">{{ $letter }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="header-list">
                        @include('libs._search')
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
