<div class="panel sider">
    <div class="panel-heading">
        <h3 class="panel-title rela-question">相关问题</h3>
    </div>
    <hr>
    <div class="panel-body">
        @if($questions->count())
            @foreach($questions as $question)
                <div><a href="{{ route('questions.show',[$question->id]) }}"> · {{ $question->title }}</a></div>
            @endforeach
        @else
            <h3 class="text-center alert alert-info">暂无数据！</h3>
        @endif
    </div>
</div>