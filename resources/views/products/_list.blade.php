
@if($products->count())
    <div class="products-list clearfix">
        @foreach($products as $product)
        <div class="product">
            <a href="{{ route('products.show', $product->id) }}" class="thumbnail">
                <img src="{{ $product->cover_image }}" alt="通用的占位符缩略图">
            </a>
            <div class="caption">
                <p class="text-center">{{ $product->name }}</p>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif
