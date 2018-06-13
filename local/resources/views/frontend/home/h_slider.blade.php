<div class="row p-0 d-lg-none d-md-none d-sm-block d-block  border-bottom mt-5 mb-2">
    <div class="col-md-12 mb-3" id="logo_mobile">
        <div class="col-md-12">
            <a href="{{URL::to('/')}}">{{Html::image('images/logo/logo.png','',array('class'=>'img-logo'))}}
            </a>
        </div>
    </div>
</div>

<div id="slider2">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="edit-slide">
                    {{ Html::image('images/slider/slider2/slider1.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
            <div class="carousel-item">
                <div class="edit-slide">
                    {{ Html::image('images/slider/slider2/slider2.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
            <div class="carousel-item">
                <div class="edit-slide" style="position: relative">
                    {{ Html::image('images/slider/slider2/slider3.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
            <div class="carousel-item">
                <div class="edit-slide" style="position: relative">
                    {{ Html::image('images/slider/slider2/slider4.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>