@if(1==1)
    <div class="products-list">
        @for($i=0; $i<10; $i++)
        <div class="product">
            <a href="#" class="thumbnail">
                <img src="http://www.deppre.com/upload/images/20160921/20169213174840786.jpg.thumb.jpg" alt="通用的占位符缩略图">
            </a>
            <div class="caption">
                <p class="text-center">产品名称</p>
            </div>
        </div>
        @endfor
    </div>
@else
    <div class="empty-block">暂无数据 ~_~ </div>
@endif