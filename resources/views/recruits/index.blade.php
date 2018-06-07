@extends('layouts.app')

@section('content')
<div class="row recruits">
    <!--
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
    </div>-->

    <div class="col-md-12 banner">
        <img src="/images/recruit/banner.jpg" alt="" class="img-responsive center-block">
    </div>

    <div class="col-md-9">

        <div class="panel">
            <div class="panel-heading">
                <div class="header-list">
                    <ul class="breadcrumb">
                        <li><a href="">首页</a></li>
                        <li>招贤纳士</li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                {{-- 招聘列表 --}}
                @include('recruits._recruits_list',['recruits'=>$recruits])
                {{-- 分页 --}}
                {!! $recruits->render() !!}
            </div>
        </div>

    </div>
    <div class="col-md-3"></div>




</div>

@endsection