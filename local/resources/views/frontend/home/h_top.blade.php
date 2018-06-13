<div id="h_top">
    <div class="info-top">
        <div class="row">
            <div class="col-md-4">
                <div class="card one-item h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 h-top-item">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <div class="col-md-9">
                                <a href="{{URL::to('tin-tuc/sua-may-bom-nuoc-tan-nha')}}">
                                    <div class="sold-by-caption">
                                        <h4>SỮA CHỮA TẬN NHÀ</h4>
                                        <p>Có mặt sau 20 phút</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card one-item h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 h-top-item">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="col-md-9">
                                <a href="{{URL::to('tin-tuc/cam-ket-tu-duy-duong')}}">
                                    <div class="sold-by-caption">
                                        <h4>MÁY NHẬP KHẨU 100%</h4>
                                        <p>Từ thương hiệu nổi tiếng</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card one-item h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 h-top-item">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="col-md-9">
                                <a href="{{URL::to('tin-tuc/uu-dai-nam-2018')}}">
                                    <div class="sold-by-caption">
                                        <h4>GIẢM 5% KHÁCH MỚI</h4>
                                        <p>Khuyến mãi trong tháng</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-bottom marquee left-h-top col-md-12">
        @foreach($data['brandProduct'] as $key=>$item)
            <div class="one-brand">
                <a href="{{URL::to('danh-muc/'.$item->path)}}">{{ Html::image($item->image,'',array('class'=>'img-one-brand')) }}</a>
            </div>
        @endforeach
    </div>
</div>