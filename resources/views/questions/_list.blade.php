@if($questions->count())

    <ul class="list-group">
        @foreach($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('questions.show', $question->id) }}">{{$question->title}}</a>
                <span class="pull-right"><img src="/images/customer.png" style="width:20px; height:20px;"></span>
            </li>
        @endforeach
    </ul>
    {!! $questions->render() !!}
@else
    <h3 class="text-center alert alert-info">没有数据!</h3>
@endif