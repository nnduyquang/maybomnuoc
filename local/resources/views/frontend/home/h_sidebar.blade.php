<div id="h_sidebar" class="d-none d-md-block d-lg-block">
    <div class="col-md-12">
        <h3>Danh Mục</h3>
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
        <h3>Sản Phẩm Tiêu Biểu</h3>
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
    </div>
</div>