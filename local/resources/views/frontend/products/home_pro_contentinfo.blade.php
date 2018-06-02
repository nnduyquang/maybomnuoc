<style>
    /*phần ul li theo mũi tên*/
    .breadcrumb {
        background-color: transparent;
        font-family: 'Comfortaa', cursive;
        font-size: 14px;
    }

    .breadcrumb li:first-child:after, .breadcrumb li:first-child:before {
        border-color: #F4A137;
    }

    .breadcrumb li:after {
        content: "";
        background: transparent;
        border-right: 1px solid #e1e1e1;
        border-top: 1px solid #e1e1e1;
        display: inline-block;
        height: 17px;
        width: 16px;
        position: absolute;
        right: -8px;
        top: 3px;
        z-index: 0;
        transform: rotate(45deg);
    }

    .breadcrumb li + li:before {
        content: "";
        background: transparent;
        border-left: 1px solid #e1e1e1;
        border-top: 1px solid #e1e1e1;
        display: inline-block;
        height: 18px;
        width: 17px;
        position: absolute;
        left: -9px;
        top: 2px;
        transform: rotate(135deg);
    }

    .breadcrumb li:first-child {
        border-left: 1px solid #ddd;
        border-color: #F4A137 !important;
    }

    .breadcrumb li:first-child a {
        color: #F4A137 !important;
    }

    .breadcrumb li {
        position: relative;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        height: 24px;
        line-height: 24px;
        margin-right: 3px;
        padding: 0 15px 0 20px;
    }

    .breadcrumb > li {
        display: inline-block;
    }

    .breadcrumb > li:hover, .breadcrumb > li:hover:before, .breadcrumb > li:hover:after {
        display: inline-block;
        border-color: #F4A137;
    }

    .breadcrumb li a {
        color: #666;
    }

    .breadcrumb li a:hover {
        color: #F4A137;
        text-decoration: none;
    }

    /*phần style slider*/

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 55%;
        width: auto;
        padding: 6px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        color: #f2f2f2;
        /*background-color: rgba(0, 0, 0, 0.8);*/
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        border: 1px solid #e2e2e2;
        float: left;
        width: 33%;
        margin: auto;
    }

    #pro_prices ul {
        list-style-type: none;
    }

    #pro_prices ul li {
        display: inline-flex;
    }

    #pro_prices ul li:first-child {

        font-size: 26px;
        color: #f60;
    }

    .lb-product-detail {
        background: #f60;
        height: 20px;
        line-height: 20px;
        font-size: 16px;
        padding: 0 10px;
        margin-left: 13px;
        color: white;
    }

    #home_pro_content_btn button {
        cursor: pointer;
        border: 0;
        border-radius: 5px;
        width: 46px;
        height: 46px;
        text-align: center;
        margin-top: 15px;
        color: white;
        background-color: #0d51db;
    }

    .home-pro-title {
        font-size: 26px;
    }

    /*phần tab content css*/

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: white;
    }

    /* Style the buttons inside the tab */
    .tab button {
        box-sizing: border-box;
        font-family: 'Comfortaa', cursive;
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 20px;
        transition: 0.3s;
        font-size: 17px;

    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        box-sizing: border-box;
        background-color: white;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        box-sizing: border-box;
        border-left: 1px solid #cdcfcb;
        border-righ: 1px solid #cdcfcb;
        background-color: #e0e0e0;
        color: #616161;

    }

    /* Style the tab content */
    .tabcontent {
        border: 1px solid #cdcfcb;
        font-family: 'Comfortaa', cursive;
        display: none;
        padding: 18px 18px;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @media only screen and (max-width: 1000px) {

    }

    @media only screen and (max-width: 400px) {
        .tab {
            float: left;
            width: 100%;
        }

        .tab button {
            width: 100%;
        }

        .tabcontent {
            width: 100%;
        }
    }

    #product_relate_pro #relate_pro_child > p {

        font-family: 'Comfortaa', cursive;
        position: relative;
        font-size: 18px;
        font-weight: 600;
    }

    #product_relate_pro #relate_pro_child > p:after {
        content: "";
        width: 180px;
        height: 4px;
        position: absolute;
        top: 20px;
        left: 0;
        background-color: #0d51db;

    }

    .fe_pro_detailpro .card-body span {
        font-size: 13px;
        color: #5c5c5c;
    }

    .fe_pro_detailpro .card-body span.rating {
        font-size: 13px;
        color: #f28300;
    }


    .old-price {
        color: #f28300;
        font-weight: 600;
        font-size: 18px;
    }

    .new-price {
        text-decoration: line-through;
    }


    .img-hover-visible {
        position: absolute;
        z-index: 8;
        display:none;
        top:15%;
        left: 0;
        transition: .3s;
    }

    .img-hover-first:hover {
        opacity: 0;
        visibility: hidden;
    }

    .img-hover-first:hover + .img-hover-visible {
        opacity: 1;
        top: 0;
        display: block;
    }

    .img-hover-visible:hover{
        display: block;
    }

    .sale-percent {
        z-index: 111;
        position: absolute;
        background-color: #f60;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        font-size: 15px;
        line-height: 50px;
        text-align: center;
        width: 50px;
        height: 50px;
    }

    .sale-percent p {
        color: white;
    }


    /*phần centent menu hidden */

    .lmenucontent_2{
        position: absolute;
        z-index: 1;
        visibility: hidden;
    }
    .lmenucontent_2 ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        border: 1px solid #e6e1e0;
        border-top: 3px solid #0d51db;
    }

    .lmenucontent_2 ul li {
        background-color: white;
    }

    .lmenucontent_2 ul li:last-child {
        border-top: 1px solid #e6e1e0;
    }

    .lmenucontent_2 ul li a {
        text-decoration: none;
        font-size: 15px;
        padding: 10px;
        display: block;
        color: #1b1e21;
    }

    .lmenucontent_2 ul li a:hover {
        background-color: #F4A137;
        color: white;
    }


</style>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-light lmenucontent_2 p-0">
            <ul>
                <li><a href=""><i class="fab fa-app-store"></i> Salon & Spa Equipment</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Fragrances</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Shaving & Hair Removal</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Gift for Woman</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Gift for Man</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Walkera</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> FPV System & Parts</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> Gadgets & Auto Parts</a></li>
                <li><a href=""><i class="fab fa-app-store"></i> More Car Accessories</a></li>
                <li><a href=""><i class="far fa-plus-square"></i> More Categories</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid border-top bg-light">
    <div class="container p-0">
        <div class="row">
            <div class="col-12 p-0">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li><a href="#">Máy bơm Panasonic P10134</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 mb-5 p-0">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-7">
                    <div class="row fe_products_proinfo_childimg">
                        <div class="col-12">
                            <div class="container p-0 border">
                                <!-- Full-width images with number text -->
                                <div class="mySlides">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/product/e11.jpg"
                                         style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/product/34.jpg"
                                         style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 3</div>
                                    <img src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                         style="width:100%">
                                </div>


                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)"><i
                                            class="fas fa-arrow-circle-left text-secondary"></i></a>
                                <a class="next" onclick="plusSlides(1)"><i
                                            class="fas fa-arrow-circle-right text-secondary"></i></a>
                            </div>
                            <!-- Image text -->

                            <!-- Thumbnail images -->
                            <div class="row p-3">
                                <div class="column">
                                    <img class="demo cursor active"
                                         src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/product/e11.jpg"
                                         style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="demo cursor"
                                         src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/product/34.jpg"
                                         style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
                                </div>
                                <div class="column">
                                    <img class="demo cursor"
                                         src="http://demo.smartaddons.com/templates/html/market/image/demo/shop/resize/E3-270x270.jpg"
                                         style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-md-5 mb-2">
                    <div class="row pr-3 pl-3">
                        <div class="col-12">
                            <span class=""><h1 class="text-primary home-pro-title"><b>LCD Acer X0123</b></h1></span>
                            <div class=" pt-2 pb-2">
                            </div>
                        </div>

                        <div class="col-12">
                            <span>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="far fa-star"></i>
                            </span>

                            <span style="font-size: 14px;color: #999696;">0 reviews	| Write a review</span><br>
                            <span style="font-size: 13px;color: #999696;">Be the first to review this produc</span>
                        </div>

                        <div class="col-md-12 mt-3" id="pro_prices">
                            <ul>
                                <li>$12.000</li>
                                <li>$30.000</li>
                                <li>
                                    <span class="lb-product-detail">
                                     -60%
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 mt-4 mb-4 border-top border-bottom pt-3 pb-3">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id purus et nisl
                                elementum ornare sit amet non mi.
                                Phasellus euismod sapien et sapien mollis auctor. Suspendisse interdum erat ut...
                            </p>
                        </div>

                        <div class="col-md-12 pt-1" id="fe_product_availoption">
                            <p>Availability: in stock</p>
                        </div>

                    </div>


                    <div class="col-md-12 mt-4 mb-5 border-top pt-3" id="home_pro_content_btn">
                        <span>Social network: </span><br>
                        <button><i class="fab fa-facebook-f"></i></button>
                        <button><i class="fab fa-facebook-f"></i></button>
                        <button><i class="fab fa-facebook-f"></i></button>

                    </div>

                </div>
            </div>


            {{--phần Tab navigation--}}
            <div class="row mt-4">
                <div class="col-md-12">

                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">DESCRIPTION
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">AUDITION INFO</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">TAGS</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo2')">CUSTOM TAB</button>
                    </div>

                    <div id="London" class="tabcontent">
                        <h3>London</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id purus et nisl elementum
                            ornare sit amet non mi.
                            Phasellus euismod sapien et sapien mollis auctor. Suspendisse interdum erat ut metus euismod
                            sed elementum massa euismod.
                            Donec eget magna orci, at fermentum metus. Sed rhoncus, nibh nec dapibus adipiscing, felis
                            felis convallis arcu,
                            quis semper justo mauris sed magna. Nulla facilisi. Aliquam ultricies diam non turpis
                            tristique porta. Sed nec ligula
                            id turpis iaculis adipiscing.
                            Phasellus viverra urna sed purus porta rutrum. Nam ultrices molestie tellus, ac vulputate
                            odio condimentum in.</p>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <h3>Paris</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id purus et nisl elementum
                            ornare sit amet non mi.
                            Phasellus euismod sapien et sapien mollis auctor. Suspendisse interdum erat ut metus euismod
                            sed elementum massa euismod.
                            Donec eget magna orci, at fermentum metus. Sed rhoncus, nibh nec dapibus adipiscing, felis
                            felis convallis arcu,
                            quis semper justo mauris sed magna. Nulla facilisi. Aliquam ultricies diam non turpis
                            tristique porta. Sed nec ligula
                            id turpis iaculis adipiscing.
                            Phasellus viverra urna sed purus porta rutrum. Nam ultrices molestie tellus, ac vulputate
                            odio condimentum in.</p>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id purus et nisl elementum
                            ornare sit amet non mi.
                            Phasellus euismod sapien et sapien mollis auctor. Suspendisse interdum erat ut metus euismod
                            sed elementum massa euismod.
                            Donec eget magna orci, at fermentum metus. Sed rhoncus, nibh nec dapibus adipiscing, felis
                            felis convallis arcu,
                            quis semper justo mauris sed magna. Nulla facilisi. Aliquam ultricies diam non turpis
                            tristique porta. Sed nec ligula
                            id turpis iaculis adipiscing.
                            Phasellus viverra urna sed purus porta rutrum. Nam ultrices molestie tellus, ac vulputate
                            odio condimentum in.</p>
                    </div>

                    <div id="Tokyo2" class="tabcontent">
                        <h3>Tokyo 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id purus et nisl elementum
                            ornare sit amet non mi.
                            Phasellus euismod sapien et sapien mollis auctor. Suspendisse interdum erat ut metus euismod
                            sed elementum massa euismod.
                            Donec eget magna orci, at fermentum metus. Sed rhoncus, nibh nec dapibus adipiscing, felis
                            felis convallis arcu,
                            quis semper justo mauris sed magna. Nulla facilisi. Aliquam ultricies diam non turpis
                            tristique porta. Sed nec ligula
                            id turpis iaculis adipiscing.
                            Phasellus viverra urna sed purus porta rutrum. Nam ultrices molestie tellus, ac vulputate
                            odio condimentum in.</p>
                    </div>

                </div>
            </div>

            {{--phần relate product--}}
            <div class="row mt-4 mb-4" id="product_relate_pro">
                <div class="col-md-12 mb-5" id="relate_pro_child">
                    <p>Related Products</p>
                </div>

                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-12 mb-4 fe_pro_detailpro" id="">
                            <div class="card one-product h-100 shadow-sm bg-white rounded">

                                <a href="sanpham-chitiet.html" class="pt-5 pb-5 position-relative">

                                    <div class="sale-percent">
                                        <p>-60%</p>
                                    </div>

                                    <div class="img-hover-first">
                                        <img class="" src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>

                                    <div class="img-hover-visible">
                                        <img class=""
                                             src="http://maybomnuocdailoan.com/file/images/TinTuc/khai-niem-va-phan-loai-may-bom-nuoc.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>
                                </a>

                                <div class="card-body text-left p-2 mb-3">

                                    <p class="">
                                        <a href="sanpham-chitiet.html" class="text-primary">MÁY BƠM PANASONIC </a>
                                    </p>
                                    <br>

                                    <span class="pt-3 pb-3">THE ROCKY STEEL</span>
                                    <br>
                                    <span class="rating pt-2 pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </span>
                                </div>

                                <div class="info card-footer bg-transparent border-top p-2 pb-3">
                                    <div class="card-text mt-2 align-self-center" class="pbtn_price">
                                        <div class="old-price float-left align-self-center">$120.000</div>
                                        <div class="new-price float-right align-self-center">$150.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-4 fe_pro_detailpro" id="">
                            <div class="card one-product h-100 shadow-sm bg-white rounded">

                                <a href="sanpham-chitiet.html" class="pt-5 pb-5 position-relative">

                                    <div class="sale-percent">
                                        <p>-60%</p>
                                    </div>

                                    <div class="img-hover-first">
                                        <img class="" src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>

                                    <div class="img-hover-visible">
                                        <img class=""
                                             src="http://maybomnuocdailoan.com/file/images/TinTuc/khai-niem-va-phan-loai-may-bom-nuoc.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>
                                </a>

                                <div class="card-body text-left p-2 mb-3">

                                    <p class="">
                                        <a href="sanpham-chitiet.html" class="text-primary">MÁY BƠM PANASONIC </a>
                                    </p>
                                    <br>

                                    <span class="pt-3 pb-3">THE ROCKY STEEL</span>
                                    <br>
                                    <span class="rating pt-2 pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </span>
                                </div>

                                <div class="info card-footer bg-transparent border-top p-2 pb-3">
                                    <div class="card-text mt-2 align-self-center" class="pbtn_price">
                                        <div class="old-price float-left align-self-center">$120.000</div>
                                        <div class="new-price float-right align-self-center">$150.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 mb-4 fe_pro_detailpro" id="">
                            <div class="card one-product h-100 shadow-sm bg-white rounded">

                                <a href="sanpham-chitiet.html" class="pt-5 pb-5 position-relative">

                                    <div class="sale-percent">
                                        <p>-60%</p>
                                    </div>

                                    <div class="img-hover-first">
                                        <img class="" src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>

                                    <div class="img-hover-visible">
                                        <img class=""
                                             src="http://maybomnuocdailoan.com/file/images/TinTuc/khai-niem-va-phan-loai-may-bom-nuoc.jpg"
                                             alt="" style="width: 98%;height: auto;margin: auto">
                                    </div>
                                </a>

                                <div class="card-body text-left p-2 mb-3">

                                    <p class="">
                                        <a href="sanpham-chitiet.html" class="text-primary">MÁY BƠM PANASONIC </a>
                                    </p>
                                    <br>

                                    <span class="pt-3 pb-3">THE ROCKY STEEL</span>
                                    <br>
                                    <span class="rating pt-2 pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </span>
                                </div>

                                <div class="info card-footer bg-transparent border-top p-2 pb-3">
                                    <div class="card-text mt-2 align-self-center" class="pbtn_price">
                                        <div class="old-price float-left align-self-center">$120.000</div>
                                        <div class="new-price float-right align-self-center">$150.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-3">

            @include('frontend.products.home_pro_content_right')

        </div>

    </div>

</div>


<script>


    {{--Phần vertical tab--}}

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
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

    document.getElementById("defaultOpen").click();

    //end phần tab

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>