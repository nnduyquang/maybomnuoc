<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Danh Mục Sản Phẩm</h4>
                        <div class="row">
                            @foreach($listFrontEndInfo['footerCategory'] as $key=>$data)
                                <div class="col-md-6 col-6">
                                    <div class="one-footer">
                                        <a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{--<div class="col-md-4">--}}
                    {{--<h4>Your Resource</h4>--}}
                    {{--<ul class="one-footer">--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<h4>Your Resource</h4>--}}
                    {{--<ul class="one-footer">--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--<li><a href="#">Customer Service</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-md-4">
                {{Html::image('images/logo/logo_footer.png','',array('class'=>'img-logo-footer'))}}
                <div class="footer-address">
                    <div class="description">
                        {!! $dataConfig['config-contact'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>