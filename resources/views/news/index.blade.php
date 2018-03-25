@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> News
                    <a class="btn btn-success pull-right" href="{{ route('news.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($newss->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th> <th>Body</th> <th>User_id</th> <th>News_category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($newss as $news)
                                <tr>
                                    <td class="text-center"><strong>{{$news->id}}</strong></td>

                                    <td>{{$news->title}}</td> <td>{{$news->body}}</td> <td>{{$news->user_id}}</td> <td>{{$news->news_category_id}}</td> <td>{{$news->reply_count}}</td> <td>{{$news->view_count}}</td> <td>{{$news->last_reply_user_id}}</td> <td>{{$news->order}}</td> <td>{{$news->excerpt}}</td> <td>{{$news->slug}}</td>

                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('news.show', $news->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </a>

                                        <a class="btn btn-xs btn-warning" href="{{ route('news.edit', $news->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>

                                        <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $newss->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection