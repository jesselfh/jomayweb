@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 recruit-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>招聘职位：<small>{{ $recruit->position }}</small></h4>
                <h4>招聘人数：<small>{{ $recruit->recruit_count }}</small></h4>
                <h4>要求：</h4>
                <div class="recruit-body">
                    {!! $recruit->requirement !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs recruit-list">
        <div class="panel panel-default">
            <div class="panel-body">
                @include('recruits._sider_recruits_list')
            </div>
        </div>
    </div>
</div>

@endsection
