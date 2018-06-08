<div id="h_sidebar" class="d-none d-md-block d-lg-block">
    <div class="col-md-12 p-0">

        <h3>DANH MỤC <span class="sub-title">THƯƠNG HIỆU</span></h3>
        <ul>
            @foreach($sidebar['categoryRight'] as $key=>$item)
                @if($data['type']==1)
                    @if($item->id== $data['categoryId']->id)
                        <li><a class="active" href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>
                    @else
                        <li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>
                    @endif
                @else
                    <li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>
                @endif
            @endforeach

        </ul>

        <img class="mt-3 mb-3" src="images/slider/slider2/tips-to-find-a-professional-water-pump-supplier-in-cork-1-638.jpg" alt="" style="width: 100%;height: auto;">


        <h3>SẢN PHẨM <span class="sub-title">TIÊU BIỂU</span></h3>
        <div class="col-md-12 marquee">
            @foreach($sidebar['productBestSale'] as $key=>$item)
                <div class="one-product">
                    @php
                        $mainImage=explode(';',$item->image);
                    @endphp
                    <a href="{{URL::to('danh-muc/'.$item->path)}}">{{ Html::image($mainImage[0],'',array('class'=>'img-one-product-1')) }}</a>
                    <h2 class="title"><a href="{{URL::to('danh-muc'.$item->path)}}">{{$item->name}}</a></h2>
                    <hr>
                    <div class="info">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="price">$120.00</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="brand">{{$item->categoryproduct->name}}</span>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div id="realFake" class="col-md-12">
            <a href="{{URL::to('tin-tuc/cach-phan-biet-may-bom-nuoc-chinh-hang-va-hang-gia')}}">{{ Html::image('images/temps/may_bom_nuoc_real_fake.jpg','',array('class'=>'img-real-fake')) }}</a>
        </div>

        <style>

            span.sub-title{
                color: #0561a8;
            }

            div.left-banner {
                box-sizing: border-box;
            }

            div.left-banner img {
                width: 100%;
                height: auto;
            }

            div.left-banner a {
                display: block;
                position: relative;
                text-align: center;
            }

            div.left-banner a:before {
                content: "";
                position: absolute;
                z-index: 10;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.1);
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                -webkit-transform-origin: 50%;
                transform-origin: 50%;
                -webkit-transition-property: transform;
                transition-property: transform;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-timing-function: ease-out;
                transition-timing-function: ease-out;
            }
        </style>

        <div class="col-md-12 left-banner mt-3">
            <a href="">
                <img src="http://pentaxpump.com/Data/upload/images/banner_right4_216x300.jpg" alt="">
            </a>
        </div>
    </div>
</div>