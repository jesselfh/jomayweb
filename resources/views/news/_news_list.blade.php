@if($newss->count())

    <ul class="media-list">
        @foreach($newss as $news)
            <li class="media">
                <a href="">
                    <div class="title">{{$news->title}}</div>
                    <div class="time">

                        <span>{{$news->updated_at->toDateString()}}</span>

                        <i class="iconfont icon-jiantou"></i>
                        <a href="{{ route('newscategories.show', $news->newsCategory->id) }}" title="{{ $news->newsCategory->name }}">
                            {{$news->newsCategory->name}}
                        </a>
                    </div>
                </a>
            </li>

            @if(!$loop->last)
                <hr>
            @endif
        @endforeach
    </ul>

@else
    <h3 class="text-center alert alert-info">Empty!</h3>
@endif