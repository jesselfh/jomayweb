@if($newss->count())

    <ul class="media-list">
        @foreach($newss as $news)
            <li class="media">
                <a class="media-left" href="#">
                    <img style="width:215px; height:140px;" src="https://gss0.baidu.com/9vo3dSag_xI4khGko9WTAnF6hhy/lvpics/w%3D1600%3Bc%3Dlvyou%2C94%2C96/sign=a6386f1ccc3d70cf4cfaae0bc8ecea63/e7cd7b899e510fb3d6224ab2dc33c895d1430cdf.jpg" alt="" class="media-object">
                </a>
                <div class="media-body new">
                    <h4 class="media-heading">
                        <a href="{{ route('news.show', [$news->id]) }}">{{$news->title}}</a>
                    </h4>
                    <p>{{$news->title}}{{$news->title}}</p>
                    <div class="tips">
                        <i class="glyphicon glyphicon-time"></i>
                        <span>发布时间：{{$news->updated_at->toDateString()}}</span>
                        &nbsp;&nbsp;
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <a href="{{ route('newscategories.show', $news->newsCategory->id) }}" title="{{ $news->newsCategory->name }}">
                            {{$news->newsCategory->name}}
                        </a>
                    </div>
                </div>
            </li>

            @if(!$loop->last)
                <hr>
            @endif
        @endforeach
    </ul>

@else
    <h3 class="text-center alert alert-info">Empty!</h3>
@endif