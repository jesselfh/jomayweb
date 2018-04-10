@extends('layouts.app')

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
                	<textarea name="requirement" id="requirement-field" class="form-control" rows="3">{{ old('requirement', $recruit->requirement ) }}</textarea>
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