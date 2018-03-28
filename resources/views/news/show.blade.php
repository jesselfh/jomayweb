@extends('layouts.app')

@section('title',$news->title)
@section('description',$news->excerpt)

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    作者：{{ $news->user->name }}
                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="{{ route('users.show', $news->user->id) }}">
                            <img class="thumbnail img-responsive" src="{{ $news->user->avatar }}" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 news-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $news->title }}
                </h1>

                <div class="article-meta text-center">
                    {{ $news->created_at->diffForHumans() }}
                    ⋅
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    {{ $news->reply_count }}
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
    </div>

</div>

@stop
