<style>
    div#footer_copyright{
        background-color: #022838;
    }

    div#footer_copyright .col-md-12{
        padding: 13px;
        color: white;
        font-size: 14px;
        font-family: 'Cuprum', sans-serif;
    }

    div#footer_copyright .col-md-12 p{
        font-size: 15px;
    }

    div#footer_copyright .col-md-12 span{
        color: #0aaee4;
    }

    div#footer_copyright .col-md-12 span a:hover{
        color: #87ceec;
    }

    div#footer_content_left .col-md-12 h4{
        /*font-family: 'Cuprum', sans-serif;*/
        font-size: 18px;
    }
</style>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row" id="footer_content_left">
                    <div class="col-md-12">
                        <h4>DANH MỤC SẢN PHẨM</h4>
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
                </div>
            </div>
            <div class="col-md-3">
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

<div class="container-fluid border-top" id="footer_copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright © 2018 <span><a href="http://smartlinks.vn">Smartlinks.vn</a></span> . All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>