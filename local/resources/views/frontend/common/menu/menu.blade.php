<div id="menu" class="d-none d-md-block d-lg-block">
    <div class="container">
        <div id="menu-top">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{URL::to('/')}}">{{Html::image('images/logo/logo.png','',array('class'=>'img-logo'))}}
                    </a>
                </div>
                <div class="col-md-9 justify-content-center align-self-center">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="main-menu">
                                <li class="no-item-down"><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                                <li class="no-item-down"><a href="{{URL::to('gioi-thieu')}}">Giới Thiệu</a></li>
                                <li class="has-item-down"><a href="#">Sản Phẩm</a>
                                    <ul>
                                        @foreach($listMenu['menuCategory'] as $key=>$data)
                                        <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="no-item-down"><a href="{{URL::to('tin-tuc')}}">Tin Tức</a></li>
                                <li class="no-item-down"><a href="{{URL::to('lien-he')}}">Liên Hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 menu-contact" style="padding-top: 13px">
                            <div class="row">
                                <div class="col-md-9 pr-0">
                                    <div class="c-content">
                                        <p><i class="fas fa-phone-square"></i>0907.468.264</p>
                                        <span>8am ~ 6pm PST / Mon ~ Sun</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    {{Html::image('images/temps/img_service.png','',array('class'=>'img-service'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pl-0 pr-0">
                        <button aria-expanded="false" class="bt-category" type="button">
                            <i class="fas fa-bars"></i>Tất Cả Sản Phẩm
                            <ul class="list-category" style="display: none">
                                @foreach($listMenu['menuCategory'] as $key=>$data)
                                    <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </button>
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(array('route' => 'home.search','method'=>'POST','class'=>'frm-search h-100')) !!}
                        {!! Form::text('txtSearch',null, array('placeholder' => 'Tìm kiếm sản phẩm','class' => 'input-search h-100')) !!}
                        <button class="bt-search" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>