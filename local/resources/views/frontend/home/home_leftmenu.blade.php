<style>

    .font_chuan {
        font-family: 'Comfortaa', cursive;
        font-size: 14px;
    }

    #fe_home_leftmenu-content {

    }

    #fe_home_leftmenu-content ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    #fe_home_leftmenu-content ul li {
        display: block;
        border-bottom: 1px solid #cdcfcb;
        padding: 15px 0 15px 0;
    }

    #fe_home_leftmenu-content ul li a {
        font-family: 'Comfortaa', cursive;
        font-size: 14px;
        color: #5c5c5c;
        transition: .3s;
        font-weight: 500;
    }

    #fe_home_leftmenu-content ul li a:hover {
        padding-left: 10px;
    }

    #fe_home_leftmenu-content > p {
        font-family: 'Comfortaa', cursive;
        position: relative;
        font-size: 16px;
        font-weight: 600;
    }

    #fe_home_leftmenu-content > p:after {
        content: "";
        width: 40px;
        height: 4px;
        position: absolute;
        bottom: 5px;
        left: 0;
        background-color: #0d51db;
    }

    p.home_p_style {
        font-family: 'Comfortaa', cursive;
        position: relative;
        font-size: 16px;
        font-weight: 600;
    }

    p.home_p_style:after {
        content: "";
        width: 40px;
        height: 4px;
        position: absolute;
        bottom: 5px;
        left: 0;
        background-color: #0d51db;
    }

    #home_top_sort button {
        cursor: pointer;
        color: white;
        border: 0;
        border-radius: 5px;
        width: 40px;
        height: 40px;
        padding: 10px;
        background-color: #5c5c5c;

    }

    #home_top_sort button.active {
        color: white;
        border: 0;
        border-radius: 5px;
        padding: 10px;
        background-color: #0d51db;
    }

    #home_top_sort span {
        font-size: 14px;
    }

    #selection_categories_option {
        border-radius: 5px;
    }

    .old-price {
        color: #f28300;
        font-weight: 600;
        font-size: 18px;
    }

    .new-price {
        text-decoration: line-through;
    }

    .fe_pro_detailpro .card-body span {
        font-size: 13px;
        color: #5c5c5c;
    }

    .fe_pro_detailpro .card-body span.rating {
        font-size: 13px;
        color: #f28300;
    }

    .img-hover-visible {
        position: absolute;
        z-index: 8;
        display: none;
        top: 15%;
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

    .img-hover-visible:hover {
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

    .p_small_title {
        font-size: 15px;
        color: #0d51db;
        font-weight: 600;
    }

    .p_small_rate > i {
        font-size: 11px;
        color: #f60;
    }

    .p_small_rate span {

    }

    .p_small_price > div:first-child {
        color: #f60;
        font-weight: 600;
    }

    .p_small_price > div:last-child {
        font-size: 13px;
        text-decoration: line-through;
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

<div class="container-fluid border-top mb-5">

    <div class="container">
        <div class="row position-relative">
            <div class="col-3 text-light lmenucontent_2 p-0">
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

    <div class="container">
        <div class="row">
            <div class="col-md-3 p-0 d-none d-sm-none d-md-block d-lg-block" id="fe_home_leftmenu-content">
                <p class="pt-3 pb-3">Categories</p>
                <ul>
                    <li>
                        <a href="">Máy bơm akita</a>
                    </li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li>
                        <a href="">Máy bơm TP2</a>
                    </li>
                    <li>
                        <a href="">Máy bơm akita</a>
                    </li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li>
                        <a href="">Máy bơm akita</a>
                    </li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>
                    <li class="pl-3"><a href="">Máy bơm akita 1</a></li>

                </ul>

                <div class="row mb-4 mt-4">
                    <div class="col-12">
                        <p class="pt-3 pb-3 home_p_style">New Products</p>
                    </div>


                    <div class="col-12 text-center">
                        <div class="row">
                            <marquee direction="up" height="180px" scrolldelay="1">
                                <div class="col-12">
                                    <div class="row mb-5 border p-2">
                                        <div class="col-4 align-self-center">
                                            <img src="https://cdn.shopify.com/s/files/1/1769/3917/products/TC-60CX650U-800_10524c6f-f004-4b0c-a5ce-eeb52f6a2e30_small.jpg"
                                                 alt="" style="width: 100%;height:auto;
">
                                        </div>
                                        <div class="col-8 align-self-center text-left">
                                            <p class="p_small_title pb-2">Single Sundex</p>
                                            <p class="p_small_rate pb-2">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>(0)</span>
                                            </p>
                                            <div class="row p_small_price align-self-center">
                                                <div class="col-6 align-self-center">$300.00</div>
                                                <div class="col-6 align-self-center">$600.00</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-5 border p-2">
                                        <div class="col-4 align-self-center">
                                            <img src="https://cdn.shopify.com/s/files/1/1769/3917/products/TC-60CX650U-800_10524c6f-f004-4b0c-a5ce-eeb52f6a2e30_small.jpg"
                                                 alt="" style="width: 100%;height:auto;
">
                                        </div>
                                        <div class="col-8 align-self-center text-left">
                                            <p class="p_small_title pb-2">Single Sundex</p>
                                            <p class="p_small_rate pb-2">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>(0)</span>
                                            </p>
                                            <div class="row p_small_price align-self-center">
                                                <div class="col-6 align-self-center">$300.00</div>
                                                <div class="col-6 align-self-center">$600.00</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-5 border p-2">
                                        <div class="col-4 align-self-center">
                                            <img src="https://cdn.shopify.com/s/files/1/1769/3917/products/TC-60CX650U-800_10524c6f-f004-4b0c-a5ce-eeb52f6a2e30_small.jpg"
                                                 alt="" style="width: 100%;height:auto;
">
                                        </div>
                                        <div class="col-8 align-self-center text-left">
                                            <p class="p_small_title pb-2">Single Sundex</p>
                                            <p class="p_small_rate pb-2">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>(0)</span>
                                            </p>
                                            <div class="row p_small_price align-self-center">
                                                <div class="col-6 align-self-center">$300.00</div>
                                                <div class="col-6 align-self-center">$600.00</div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </marquee>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="pt-3 pb-3 home_p_style">Customer support</p>
                    </div>

                    <div class="col-12 mt-2 mb-2">
                        <img src="https://cdn.shopify.com/s/files/1/1769/3917/t/27/assets/clsb_static_block_2_img.png?17978861903448136539"
                             alt="">
                    </div>

                    <div class="col-12">
                        <span class="font-weight-bold font_chuan">This is a custom block title</span>
                        <br>
                        <span class="font_chuan">Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Cras non placerat mi. Etiam non tellus.
                            </span>
                    </div>
                </div>


            </div>
            <div class="col-md-9">
                {{--image banner--}}
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <img src="https://cdn.shopify.com/s/files/1/1769/3917/t/27/assets/collection-slideshow-1.jpg?17978861903448136539"
                             alt="" style="width: 100%;height: auto;">
                    </div>
                </div>

                {{--phần chuyển cột sang 2 cột title--}}
                <div class="row" id="home_top_sort">
                    <div class="col-md-12 mt-3 mb-4">
                        <button class="active"><i class="fas fa-th-large"></i></button>
                        <button><i class="fas fa-minus-square"></i></button>
                        <span class="pl-1 pr-1">Sort by</span>
                        <select name="" id="selection_categories_option" class="p-2 border">
                            <option value="">Featured</option>
                            <option value="">Check 2</option>
                            <option value="">Check 3</option>
                            <option value="">Check 4</option>
                        </select>
                    </div>
                </div>

                {{--phần sản phẩm--}}


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
</div>