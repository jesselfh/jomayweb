@extends('layouts.app')

@section('content')
<div class="row questions">

    <div class="col-md-8">
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
    <div class="col-md-4"></div>

</div>
@stop