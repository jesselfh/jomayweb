@extends('layouts.app')

@section('content')

<div class="row recruit">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 recruit-content">
        <div class="panel">

            <div class="header-list">
                <ul class="breadcrumb">
                    <li><a href="">首页</a></li>
                    <li><a href="">招贤纳士</a></li>
                    <li>{{ $recruit->position }}</li>
                </ul>
            </div>

        </div>

        <div class="panel">
            <div class="panel-heading content">
                <h3 class="panel-title">
                    {{ $recruit->position }}
                    <span class="pull-right">10k-15k</span>
                </h3>
            </div>
            <div class="panel-body content">
                <p class="city">襄阳市 | 本科 | 经验 1-3 年</p>
                <p class="time">发布时间：{{ $recruit->updated_at->format('Y/m/d  h:m:s') }}</p>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading content">
                 <h3 class="panel-title explain">职位说明</h3>
            </div>
            <div class="panel-body content">
                {!! $recruit->requirement !!}
            </div>
            <div class="panel-heading content">
                 <h3 class="panel-title other">其他</h3>
            </div>
            <div class="panel-body content">
                <p class="addr">工作地点：湖北襄阳高新区长虹北路 6 号广景碧云天国际商务大厦</p>
                <p class="publisher">发布人：卓镁</p>
            </div>
        </div>

    </div>

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs recruit-list">
        @include('recruits._sider_recruits_list')
    </div>
</div>

@endsection
