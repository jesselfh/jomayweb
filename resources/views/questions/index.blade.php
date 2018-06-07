@extends('layouts.app')

@section('content')
<div class="row questions">

    <div class="col-md-12 banner">
        <img src="/images/problem/banner.jpg" alt="" class="img-responsive center-block">
    </div>

    <div class="col-md-12 banner">
        <img src="/images/problem/problem.png" alt="" class="img-responsive">
    </div>


    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
               <div class="header-list">
                   <ul class="breadcrumb">
                       <li><a href="#">首页</a></li>
                       <li>问答列表</li>
                   </ul>
               </div>
            </div>

            <div class="panel-body">
                @include('questions._list',['questions'=>$questions])
            </div>
        </div>
    </div>

</div>
@stop