@extends('layouts.app')

@section('title', isset($newscategory) ? $newscategory->name : '新闻动态')

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
                <span>
                    @if(isset($newscategory))
                       {{ $newscategory->name }}
                    @else
                        新闻动态
                    @endif
                </span>
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