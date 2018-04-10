<div>其他职位</div>
<hr>
<div>
    @if($recruits->count())
        @foreach($recruits as $recruit)
            <div><a href="{{ route('recruits.show',[$recruit->id]) }}">{{ $recruit->position }}</a></div>
        @endforeach
    @else
        <h3 class="text-center alert alert-info">暂无数据！</h3>
    @endif
</div>