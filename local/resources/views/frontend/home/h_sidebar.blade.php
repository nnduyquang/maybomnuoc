<div id="h_sidebar" class="d-none d-md-block d-lg-block">
    <div class="col-md-12">
        <h3>Danh Mục</h3>
        <ul>
            @foreach($data['categoryRight'] as $key=>$item)
            <li><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>
            @endforeach

        </ul>
        <h3>Sản Phẩm Tiêu Biểu</h3>
        <div class="col-md-12 marquee">
            @foreach($data['productBestSale'] as $key=>$item)
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
    </div>
</div>