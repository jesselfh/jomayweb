@if($recruits->count())
<ul class="media-list recruit">
    @foreach($recruits as $recruit)
        <li class="media" style="background-color: #dedede">
            <div class="media-body">
                <a href="{{ route('recruits.show',[$recruit->id]) }}" class="title">
                    · {{ $recruit->position }}
                </a>
                <span class="num">
                    <span class="moreBall">{{ $recruit->recruit_count }}人</span>
                </span>
                <div class="time">
                    <span class="moreBall">...</span>
                    <span>|</span>
                    <span>{{ $recruit->updated_at->format('m/d') }}</span>
                    <span>|</span>
                </div>
            </div>
        </li>
        <div class="recruitContent">
            {{ $recruit->requirement}}
        </div>
    @endforeach
</ul>
@else
    <h3 class="text-center alert alert-info">没有数据！</h3>
@endif