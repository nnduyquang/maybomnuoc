<div id="p_detail">
    <div class="p_detail_top">
        <div class="container">
            <div class="bread">
                <a href="{{URL::to('/')}}">Trang Chủ</a > > <a href="{{URL::to('danh-muc/'.$data['product']->categoryproduct->path)}}">{{$data['product']->categoryproduct->name}}</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12 mb-3 d-lg-none d-md-none d-sm-block d-block d-xl-none mt-4 mb-5 border-bottom"
                         id="logo_mobile">
                        <div class="col-md-12">
                            <a href="{{URL::to('/')}}">{{Html::image('images/logo/logo.png','',array('class'=>'img-logo'))}}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        @include('frontend.product.p_slider')
                    </div>
                    <div class="col-md-5">
                        <h1>{{$data['product']->name}}</h1>
                        <span class="brand">Thương hiệu:<span>{{$data['product']->categoryproduct->name}}</span></span>
                        <span class="price">Giá Bán: <span>
                                @if($data['product']->price==0)
                                    Liên Hệ
                                @else
                                    {{$data['product']->price}}
                                @endif
                            </span></span>
                        <hr>
                        <div class="description">
                            {!! $data['product']->description !!}
                        </div>
                        <hr>
                        <div class="btn-confirm-wrap">
                            <input class="btn-confirm btn" type="button" value="{{$dataConfig['config-phone']}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab bg-primary">
                            <button class="tablinks" onclick="openCity(event, 'content-info')" id="defaultOpen">SẢN PHẨM CHI TIẾT
                            </button>

                        </div>
                        <!-- Tab content -->
                        <div id="content-info" class="tab-content" style="line-height: 1.5">
                            {!! $data['product']->content !!}
                        </div>

                    </div>
                    <div class="col-md-12">
                        <h3>Sản Phẩm Liên Quan</h3>
                        <div class="product-relative">
                            <div class="owl-carousel owl-theme p-d-owl">
                                @foreach($data['other'] as $key=>$item)
                                    <div class="card one-product h-100">
                                        <div class="img-wrap">
                                            <a href="{{URL::to('san-pham/'.$item->path)}}">
                                                @php
                                                    $mainImage=explode(';',$item->image);
                                                @endphp
                                                {{ Html::image($mainImage[0],'',array('class'=>'img-one-product-1')) }}
                                                @if(count($mainImage)==1)
                                                    {{ Html::image($mainImage[0],'',array('class'=>'img-one-product-2')) }}
                                                @else
                                                    {{ Html::image($mainImage[1],'',array('class'=>'img-one-product-2')) }}
                                                @endif
                                            </a>
                                        </div>
                                        <div class="card-body">

                                        </div>
                                        <div class="info card-footer">
                                            <h2 class="title card-title"><a
                                                        href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}
                                                </a>
                                            </h2>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5 price"> @if($item->price==0)
                                                        Liên Hệ
                                                    @else
                                                        $item->price}}
                                                    @endif</div>
                                                <div class="col-md-5"></div>
                                            </div>
                                        </div>
                                        @if($item->updated_at > \Carbon\Carbon::now()->subDays(30))
                                            <div class="label-new">
                                                <p>Mới</p>
                                            </div>
                                        @endif
                                        @if($item->is_best_sale==1)
                                            <div class="label-hot">
                                                <p>Hot</p>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="nav-arrow">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="more-info">
                    <h3 class="title">
                        GIỚI THIỆU
                    </h3>
                    <div style="text-align: center">
                        {{Html::image('images/temps/sb_block_sold_by_image.png','',array('class'=>'img-sold'))}}
                    </div>
                    <p>
                        Cửa Hàng Điện Cơ Điện Lạnh Duy Dương với trên 5 năm kinh doanh hoạt động trong lĩnh vực sửa
                        chữa bảo dưỡng bảo trì ngành điện nước. Thi công công trình khoang giếng, mua bán thương mại các
                        sản phẩm máy bơm nước, máy khoan đục bê tông, máy mài cầm tay, máy mô tơ kéo tời …
                    </p>
                    <hr>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-toolbox"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="sold-by-caption">
                                        <h4>Sửa Chữa Tận Nhà</h4>
                                        <p>Có mặt sau 20 phút</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="sold-by-caption">
                                        <h4>Máy Nhập Khẩu 100%</h4>
                                        <p>Từ thương hiệu nổi tiếng</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="sold-by-caption">
                                        <h4>Giảm 5% Cho Khách Hàng Lắp Mới</h4>
                                        <p>Khuyến mãi trong tháng</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>