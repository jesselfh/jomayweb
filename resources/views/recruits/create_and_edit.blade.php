@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($recruit->id)
                        编辑招聘信息
                    @else
                        新建招聘
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($recruit->id)
                    <form action="{{ route('recruits.update', $recruit->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('recruits.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                	<label for="position-field">职位</label>
                	<input class="form-control" type="text" name="position" id="position-field" value="{{ old('position', $recruit->position ) }}" />
                </div>
                <div class="form-group">
                    <label for="recruit_count-field">人数</label>
                    <input class="form-control" type="text" name="recruit_count" id="recruit_count-field" value="{{ old('recruit_count', $recruit->recruit_count ) }}" />
                </div>
                <div class="form-group">
                	<label for="requirement-field">要求</label>
                	<textarea name="requirement" id="editor" class="form-control" rows="3">{{ old('requirement', $recruit->requirement ) }}</textarea>
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

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
    $(document).ready(function(){

        var editor = new Simditor({
            textarea: $('#editor'),
            toolbar:['title','bold','italic','underline','strikethrough','fontScale','color','ol','ul','blockquote','code','table','link','hr','indent','outdent','alignment'],
        });
    });
    </script>

@stop

