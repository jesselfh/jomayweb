@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Recruit / Show #{{ $recruit->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('recruits.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('recruits.edit', $recruit->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Position</label>
<p>
	{{ $recruit->position }}
</p> <label>Recruit_count</label>
<p>
	{{ $recruit->recruit_count }}
</p> <label>Requirement</label>
<p>
	{{ $recruit->requirement }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
