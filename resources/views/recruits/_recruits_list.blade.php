@if($recruits->count())
<ul class="list-group">
    @foreach($recruits as $recruit)
        <li class="list-group-item">
            <h4 class="list-group-item-heading">
                <a href="{{ route('recruits.show',[$recruit->id]) }}">
                    {{ $recruit->position }} | <small>襄阳 </small>
                </a>
            </h4>
            <p class="list-group-item-text">
                经验：1-5年 / 本科 / {{ $recruit->recruit_count }} 人
                <span class="pull-right">发布时间：{{ $recruit->updated_at->format('Y/m/d') }}</span>
            </p>

        </li>
        @if(!$loop->last)
            <hr>
        @endif

    @endforeach
</ul>
@else
    <h3 class="text-center alert alert-info">没有数据！</h3>
@endif