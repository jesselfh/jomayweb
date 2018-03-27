@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($news->id)
                        编辑新闻 #{{$news->id}}
                    @else
                        添加新闻
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($news->id)
                    <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="form-group">
                    	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $news->title ) }}" placeholder="请填写标题" required />
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="news_category_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($newscategories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                    	<textarea name="body" id="editor" class="form-control" rows="3" placeholder="请填入至少3个字符的内容。" required>{{ old('body', $news->body ) }}</textarea>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>保存</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
    $(document).ready(function(){
        var editor = new Simditor({
            textarea: $('#editor'),
            upload:{
                url:'{{ route('news.upload_image') }}',
                params:{_token: '{{ csrf_token() }}'},
                fileKey: 'upload_file',
                connectionCount:6,
                leaveConfirm:'文件上传中，关闭此页面将取消上传。'
            },
            pasteImage:true,
        });
    });
    </script>

@stop