@extends('layouts.app')

@section('content')

<div class="row question">
    <div class="col-md-9">

        <div class="panel">
            <div class="header-list">
                <ul class="breadcrumb">
                    <li><a href="">首页</a></li>
                    <li><a href="">问答</a></li>
                    <li>问题详情</li>
                </ul>
            </div>
        </div>

        <div class="panel content">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {{ $question->title }}
                </h3>
            </div>
            <div class="panel-body">
                {{ $question->content }}
            </div>
        </div>

    </div>
    <div class="col-md-3">
        @include('questions._sider_questions_list')
    </div>
</div>

@stop
