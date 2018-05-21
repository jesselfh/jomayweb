@if($brands->count())
    <div class="brands-list clearfix">
        @foreach($brands as $brand)
            <div class="brand">
                <a href="{{ route('brands.show', [$brand->id]) }}" class="thumbnail">
                    <img src="{{ $brand->logo }}" alt="品牌名称">
                </a>
            </div>
        @endforeach
    </div>
@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif