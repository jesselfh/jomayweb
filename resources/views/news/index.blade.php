@extends('layouts.app')

@section('title', isset($newscategory) ? $newscategory->name : '新闻动态')

@section('content')
<div class="row news">

    <div class="col-md-8">
        <div class="panel">
            <div class="panel-heading">
                <div class="header-list">
                    <ul class="breadcrumb">
                        <li><a href="#">首页</a></li>
                        <li>{{ isset($newscategory) ? $newscategory->name : '新闻列表'}}</li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="infoList">
                    {{-- 新闻列表 --}}
                    @include('news._news_list',['newss'=>$newss])
                </div>
                    {{-- 分页 --}}
                    {!! $newss->render() !!}
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>

</div>

@endsection