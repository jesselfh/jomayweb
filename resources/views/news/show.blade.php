@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>News / Show #{{ $news->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('news.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('news.edit', $news->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	{{ $news->title }}
</p> <label>Body</label>
<p>
	{{ $news->body }}
</p> <label>User_id</label>
<p>
	{{ $news->user_id }}
</p> <label>News_category_id</label>
<p>
	{{ $news->news_category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $news->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $news->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $news->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $news->order }}
</p> <label>Excerpt</label>
<p>
	{{ $news->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $news->slug }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
