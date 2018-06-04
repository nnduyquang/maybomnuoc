<div id="menu" class="d-none d-md-block d-lg-block">
    <div class="container">
        <div id="menu-top">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{URL::to('/')}}">{{Html::image('images/logo/logo.png','',array('class'=>'img-logo'))}}
                    </a>
                </div>
                <div class="col-md-8 justify-content-center align-self-center">
                    <div class="row">
                        <div class="col-md-7">
                            <ul class="main-menu">
                                <li class="no-item-down"><a href="#">Home</a></li>
                                <li class="has-item-down"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                        <li><a href="#">Menu 4</a></li>
                                        <li><a href="#">Menu 5</a></li>
                                    </ul>
                                </li>
                                <li class="no-item-down"><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 menu-contact" style="padding-top: 13px">
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
                            <i class="fas fa-bars"></i>All category
                            <ul class="list-category" style="display: none">
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 3</a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 5</a></li>
                                <li><a href="#">Menu 6</a></li>
                            </ul>
                        </button>
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(array('method'=>'POST','class'=>'frm-search h-100')) !!}
                        {!! Form::text('txtSearch',null, array('placeholder' => 'Search our store','class' => 'input-search h-100')) !!}
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