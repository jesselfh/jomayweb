@extends('layouts.app')
@section('title','首页')

@section('content')


    <div class="jumbotron">
        <h2>卓镁工控　20年供应链</h2>
        <p>一站式采购　原装进口保证</p>

        <a href="#" class="btn btn-success">查看详情</a>
    </div>



    <div class="infomation clearfix">
            <div class="col-md-2 title">
                <span>最新资讯 <i class="iconfont icon-jiantou"></i></span>
            </div>

            <div class="col-md-6 content">
                <ul id="miniNewsRegion">
                    <li>
                        <a href="#">
                            <span>
                            最近一批新上市产品不要钱，先到先得，晚来的送5000块，要不要到先得，晚来的送5000块，要不要到先得，晚来的送5000块，要不要到先得，晚来的送5000块，要不要到先得，晚来的送5000块，要不要
                            </span>
                            <span>2017/11/05</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-1 pagesize">
                <a href="javascript:void(0)" class="iconfont icon-chevron-copy-copy-copy-copy-copy-copy prev"></a>
                <a href="javascript:void(0)" class="iconfont icon-jiantou next"></a>
            </div>

            <div class="col-md-3 tel">
                <span>服务热线：</span>
                <span>400-800-600</span>
            </div>

    </div>

    <div class="summary clearfix">

            <div class="col-md-5 map">
                <img src="/images/index/map.jpg" style="width:430px; height:250px;" alt="">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <h3>热门推荐</h3>
                        <div>
                            <img src="/images/index/trends.jpg" style="width:300px; height:60px;">
                        </div>
                        <p>湖北卓镁工控设备有限公司是中国工业控制自动化领域的服务贸易商,专业从事各种国外中高端工控自动化产品的进口贸易与工程服务,主要经营来自欧洲,美国,日本等国知名品牌……</p>
                        <a href="">了解更多……</a>
                    </div>
                    <div class="col-md-6">
                        <h3>公司简介</h3>
                        <div>
                            <img src="/images/index/profile.jpg" style="width:300px; height:60px;">
                        </div>
                        <p>湖北卓镁工控设备有限公司是中国工业控制自动化领域的服务贸易商,专业从事各种国外中高端工控自动化产品的进口贸易与工程服务,主要经营来自欧洲,美国,日本等国知名品牌……</p>
                        <a href="">了解更多……</a>
                    </div>

                </div>
            </div>
    </div>

    <div class="equipment clearfix">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">最新优惠产品</a></li>
            <li><a href="#tab2" data-toggle="tab">优势品牌</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="row content">

                    @if($products->count())
                        @foreach($products as $product)
                        <div class="col-md-3">
                            <a href="{{ route('products.show', [$product->id]) }}">
                                <img src="{{ $product->cover_image }}" style="width:240px; height:120px" alt="">
                                <div class="caption text-center">
                                    <h6>{{$product->name}}</h6>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    @else
                        <h3 class="text-center alert alert-info">没有数据</h3>
                    @endif

                </div>
            </div>

            <div class="tab-pane fade" id="tab2">
                <div class="row content">

                        @if($brands->count())
                            @foreach($brands as $brand)
                            <div class="col-md-2">
                                 <a href="{{ route('brands.show', [$brand->id]) }}" class="thumbnail">

                                    <img src="{{$brand->logo}}" style="width:120px; height:60px" alt="">
                                </a>
                                <div class="caption">
                                    <h6>{{$brand->name}}</h6>
                                </div>
                            </div>
                            @endforeach

                    @else
                        <h3 class="text-center alert alert-info">没有数据</h3>
                    @endif

                 </div>
            </div>

        </div>
    </div>

    <div>

        <div class="panel">
            <div class="panel-heading">
                <img src="/images/index/category.jpg" style="width:1200px; height:204px;" class="img-responsive">
            </div>
            <div class="panel-body">


                <ul class="index-categories labels0 clearfix">


                    @foreach($categories->getImmediateDescendants()  as $category)
                        <?php $icons = array('icon-celiang','icon-analysis','icon-qidongyeya','icon-dianlichuanganqi','icon-bandaotidianzitongxin','icon-huanjing','icon-jichuang','icon-jiqiren','icon-shebei'); $key = array_rand($icons) ?>
                        <li>
                            <a target="_blank" href="{{ route('categories.show', $category->id ) }}">
                                <div class="bg">
                                    <img src="/images/index/p0.jpg"  alt="">
                                </div>
                                <div class="txt">
                                    <i class="iconfont {{ $icons[$key] }}"></i>
                                    <p>{{ $category->name }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div class="panel">
            <div class="panel-body partner">
                <h3 class="title">合作伙伴</h3>
                <div class="partner-logo">

                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/bg.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/gdas.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/hzyy.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/la.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/myhg.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/pjbflg.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/snky.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/sq.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/tg.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>
                    <div class="col-md-2">
                        <a class="thumbnail"><img src="/images/partner/ycdc.jpg" style="width:120px;height:60px;" alt=""></a>
                    </div>

                </div>
            </div>
        </div>

    </div>

@stop


@section('scripts')

    <script type="text/javascript">

            $(function(){
                $('.index-categories a:first').addClass('active');
            })

            $('.index-categories a').off('click').on('click', function(){
                $('.index-categories a').removeClass('active');
                $(this).addClass('active');
            });

    </script>
@stop