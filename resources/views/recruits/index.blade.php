@extends('layouts.app')

@section('content')
<div class="recruit">

    <div class="banner">
        <img src="./images/recruit/banner.jpg" width="1200" height="260" alt="">
    </div>

    <div class="img-content clearfix">
        <div class="leftContent">
            <div class="img">
                <img src="./images/recruit/banner1.png" width="508" height="228" alt="">
            </div>
            <div class="title">
                <span>人才招聘</span>
            </div>
        </div>
    </div>

    <div class="infoList" style="margin-top: 300px;">
        {{-- 招聘列表 --}}
        @include('recruits._recruits_list',['recruits'=>$recruits])
    </div>
        {{-- 分页 --}}
        {!! $recruits->render() !!}

</div>

@endsection