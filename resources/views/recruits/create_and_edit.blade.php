@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Recruit /
                    @if($recruit->id)
                        Edit #{{$recruit->id}}
                    @else
                        Create
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
                	<label for="position-field">Position</label>
                	<input class="form-control" type="text" name="position" id="position-field" value="{{ old('position', $recruit->position ) }}" />
                </div> 
                <div class="form-group">
                    <label for="recruit_count-field">Recruit_count</label>
                    <input class="form-control" type="text" name="recruit_count" id="recruit_count-field" value="{{ old('recruit_count', $recruit->recruit_count ) }}" />
                </div> 
                <div class="form-group">
                	<label for="requirement-field">Requirement</label>
                	<textarea name="requirement" id="requirement-field" class="form-control" rows="3">{{ old('requirement', $recruit->requirement ) }}</textarea>
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('recruits.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection