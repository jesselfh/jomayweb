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
                            <a class="btn btn-link" href="{{ route('recruits.index') }}">
                                <i class="glyphicon glyphicon-backward"></i> 返回</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('recruits.edit', $recruit->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>
                        </div>
                    </div>
                </div>

                    <label>招聘职位：</label>
                    <p>
                    	{{ $recruit->position }}
                    </p>
                    <label>招聘人数：</label>
                    <p>
                    	{{ $recruit->recruit_count }}
                    </p>
                    <label>要求：</label>
                    <p>
                    	{{ $recruit->requirement }}
                    </p>
            </div>
        </div>
    </div>
</div>

@endsection
