<style>

    .font_chuan {
        font-family: 'Comfortaa', cursive;
        font-size: 14px;
    }

    .font_chuan_2 {
        font-family: 'Cuprum', sans-serif;
        font-size: 22px;
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

    #fe_home_leftmenu-content p {
        font-family: 'Comfortaa', cursive;
        position: relative;
        font-size: 16px;
        font-weight: 600;
    }

    #fe_home_leftmenu-content p:after {
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

    .fe_pro_detailpro .card-body span{
        font-size: 13px;
        color: #5c5c5c ;
    }

    .fe_pro_detailpro .card-body span.rating{
        font-size: 13px;
        color: #f28300 ;
    }

    .fe_pro_detailpro:hover .card img:hover{
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    .sale-percent {
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

    .sale-percent p{
       color: white;
    }

</style>

<div class="container-fluid border-top mb-5">
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
                        <p class="pt-3 pb-3">New Products</p>
                    </div>

                    <div class="col-12 mt-2 mb-2">
                        <img src="http://diennuochongphuc.net/wp-content/uploads/2017/09/lap-dat-may-bom-nuoc-tai-ha-noi-678x381.jpg"
                             alt="" style="width: 100%;height: auto;">
                    </div>

                    <div class="col-12 text-center">
                        <span class="font_chuan_2 text-warning"><a href="">MÁY BƠM NƯỚC Pentax P012</a></span>
                        <div class="row align-self-center">
                            <div class="col-6 align-self-center fa-1x text-info p-2">$30.000</div>
                            <div class="col-6 align-self-center text-secondary p-2">$40.000</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="pt-3 pb-3">Customer support</p>
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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

                                <img src="http://maybomnuoc.org.vn/products/1453078619LD%20370.jpg"
                                     alt="" style="width: 98%;height: auto;margin: auto">
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