<style>
    #fe_common_top {
        background-color: #0d51db;
        color: white;
        font-size: 15px;
        font-family: 'Cuprum', sans-serif;
    }

    #fe_common_top_sm {
        font-family: 'Cuprum', sans-serif;
    }

    #fe_common_top_sm button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        color: #000;
    }

    #fe_common_top_logo p {
        font-size: 22px;
        color: #0d51db;
    }

    #fe_common_top_logo span {
        font-size: 15px;
        color: #70726e;
        font-family: 'Cuprum', sans-serif;
    }

    #fe_common_top_logoimage img{
        text-align: left;
        transition: .3s;
        width: 228px;
        height: auto;
    }

    @media screen and (max-width: 800px) {
        #fe_common_top_logoimage{
            text-align: center;
            margin: auto;
        }
        #fe_common_top_logoimage img{
            text-align: center;
            width: 286px;
            height: auto;
        }

    }

</style>


<div class="container-fluid d-none d-lg-block d-md-block" id="fe_common_top">
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-md-3 text-left">
                Welcome Message
            </div>
            <div class="col-md-9 text-right">Address: 25 Quang Diệu , P4, Q4</div>
        </div>
    </div>
</div>

<div class="container-fluid d-lg-none d-md-none d-sm-block d-block" id="fe_common_top_sm">
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-md-12">
                <button class=" float-left"><i class="fas fa-bars"></i></button>
                <button class="float-right"><i class="fas fa-cogs float-right"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="container" id="fe_common_top_logo">
    <div class="row pt-3 pb-3 align-self-center">
        <div class="col-md-4 align-self-center" id="fe_common_top_logoimage">
            <img src="images/logo/header_15_logo.png" alt="MÁY BƠM NƯỚC">
        </div>
        <div class="col-8 align-self-center">
            <div class="row align-self-center">
                <div class="col-lg-7 d-none d-md-block d-sm-none align-self-center text-right"
                     id="fe_common_top_smallmenu">
                    @include('frontend.common.menu.fe_common_top_smallmenu')
                </div>
                <div class="col-md-5 align-self-center d-lg-block d-md-none d-none" id="fe_common_top_phone">
                    <div class="text-right">
                        <p><i class="fas fa-phone"></i> 543 345 6789</p>
                        <span>8AM ~ 6PM PST / MON ~ SUN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('frontend.common.menu.fe_common_menu_mainmenuhidden')
