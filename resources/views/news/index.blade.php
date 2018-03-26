@extends('layouts.app')

@section('content')
<div class="news">

    <div class="banner">
        <img src="{{ URL::asset('/images/news/banner.jpg') }}" width="1200px" height="260px">
    </div>

    <div class="img-content clearfix">
        <div class="leftContent">
            <div class="img">
                <img src="{{ URL::asset('/images/news/new0.png') }}" width="506px" height="229px">
            </div>
            <div class="title">
                <span>新闻动态</span>
            </div>
        </div>
    </div>

    <div class="infoList">
        {{-- 新闻列表 --}}
        @include('news._news_list',['newss'=>$newss])
    </div>
        {{-- 分页 --}}
        {!! $newss->render() !!}

</div>

@endsection