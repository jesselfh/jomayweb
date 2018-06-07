<div class="panel">
    <div class="panel-body">
        <img src="/images/recruit/recruit.png" alt="" class="img-responsive center-block">
    </div>
</div>
<div class="panel sider">
    <div class="panel-heading content">
        <h3 class="panel-title other-position">公司其他职位</h3>
    </div>
    <div class="panel-body content">
        @if($recruits->count())
            @foreach($recruits as $recruit)
                <div><a href="{{ route('recruits.show',[$recruit->id]) }}"> · {{ $recruit->position }}</a></div>
            @endforeach
        @else
            <h3 class="text-center alert alert-info">暂无数据！</h3>
        @endif
    </div>
</div>