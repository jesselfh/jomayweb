@extends('admin.layouts.admin')

@section('title','管理中心')

@section('content')

<div class="row admin">

    <div class="col-md-12">

        <div class="panel">
            <div class="panel-heading panel-info">
                <h3>添加操作</h3>
            </div>
            <div class="panel-body">

                @guest
                    <div class="col-md-offset-4 col-md-4">
                        <p>您未登录~_~  &nbsp;&nbsp; 点击右上角登录~</p>
                    </div>
                @else
                    <div class="col-md-offset-4 col-md-4">
                        @include('users._sidebar')
                    </div>
                @endguest

            </div>
        </div>

    </div>



</div>



@stop