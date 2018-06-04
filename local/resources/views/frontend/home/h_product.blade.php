<div id="h_product">
    @if($data['type']==1)
        <h1 class="title">{{$data['categoryId']->name}}</h1>
    @endif
    <div class="row no-gutters">
        @foreach($data['newProduct'] as $key=>$item)
            <div class="col-md-4 col-6">
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
                        <h2 class="title card-title"><a href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}
                            </a>
                        </h2>

                    </div>
                    <div class="info card-footer">
                        <hr>
                        <div class="row">
                            <div class="col-md-6 price">
                                @if($item->price==0)
                                    Liên hệ
                                @else
                                    {{$item->price}}
                                @endif
                            </div>
                            <div class="col-md-6 brand text-right">
                                <i class="fas fa-gem"></i>{{$item->categoryproduct->name}}
                            </div>
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
            </div>
        @endforeach
    </div>
</div>