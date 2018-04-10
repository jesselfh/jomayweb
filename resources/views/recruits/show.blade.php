@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 recruit-content">
        <div class="panel panel-default">
            <div class="panel-body">

                <h4>招聘职位：<small>{{ $recruit->position }}</small></h4>
                <h4>招聘人数：<small>{{ $recruit->recruit_count }}</small></h4>
                <h4>要求：</h4>
                <div class="recruit-body">
                    {!! $recruit->requirement !!}
                </div>

                @can('update', $recruit)
                    <div class="operate">
                        <hr>
                        <a href="{{ route('recruits.edit', $recruit->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>

                            <form action="{{ route('recruits.destroy', $recruit->id) }}" method="post">
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

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs recruit-list">
        <div class="panel panel-default">
            <div class="panel-body">
                @include('recruits._sider_recruits_list')
            </div>
        </div>
    </div>
</div>

@endsection
