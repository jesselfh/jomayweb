@extends('layouts.app')

@section('title',$news->title)
@section('description',$news->excerpt)

@section('content')

<div class="row new">

    <div class="col-md-9 news-show-page">
        <div class="panel">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $news->title }}
                </h1>
                <div class="article-meta text-center">
                    <i class="glyphicon glyphicon-time"></i>
                    {{ $news->created_at->diffForHumans() }}
                    &nbsp;&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-user"></i>
                    {{ $news->user->name }}
                </div>
                <div class="news-body">
                    {!! $news->body !!}
                </div>

                @can('update', $news)
                    <div class="operate">
                        <hr>
                        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>

                        <form action="{{ route('news.destroy', $news->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left:6px;">
                                <i class="glyphicon glyphicon-trash"></i> 删除
                            </button>
                        </form>
                    </div>
                @endcan

            </div>

        </div>

        <div class="panel">
            <div class="panel-body about-news">
                <h4>相关新闻：</h4>
                <ul>
                    @if($newss->count())
                        @foreach($newss as $news)
                            <li>
                                <a href="{{ route('news.show',[$news->id]) }}"> {{ $news->title }}</a>
                                <i class="glyphicon glyphicon-time"></i>
                                {{ $news->created_at->diffForHumans() }}
                            </li>
                        @endforeach
                    @else
                        <h3 class="text-center alert alert-info">暂无数据！</h3>
                    @endif

                </ul>
            </div>

        </div>

    </div>

    <div class="col-md-3">
         <div class="panel">
             <div class="panel-body">
                 <img src="/images/news/news.png" alt="" class="img-responsive center-block">
             </div>
         </div>
    </div>
</div>

@stop
