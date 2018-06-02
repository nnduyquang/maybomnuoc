<style>
    #fe_common_menu_mainmenuhidden .col-md-3 {
        border-radius: 6px 6px 0 0;
        border: 3px solid #0d51db;
        background-color: #0d51db;
        color: #fff;
        font-family: 'Comfortaa', cursive;
        padding: 13px;
        padding-bottom: 18px;
    }

    #fe_common_menu_mainmenuhidden .col-md-9 div {
        float: right;
        width: fit-content;
        border: 2px solid #989997;
        border-radius: 6px;
    }

    #fe_common_menu_mainmenuhidden .col-md-9 button, input {
        font-size: 14px;
        padding: 10px;
        border: none;
        font-family: 'Cuprum', sans-serif;
    }

    #fe_common_menu_mainmenuhidden .col-md-9 input {
        width: 386px;
    }

    #fe_common_menu_mainmenuhidden .col-md-9 button {
        color: #0d51db;
        margin-top: 2px;
        cursor: pointer;
        background-color: transparent;
    }



    #fe_common_menu_mainmenuleft > .col-3 {
        top: 55px;
        visibility: visible;
        position: absolute;
        border: 1px solid #cdcfcb;
        padding: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;!important;
    }

    #fe_common_menu_mainmenuleft ul {
        z-index: 1;
        list-style-type: none;
    }

    .xoayicon {
        -ms-transform: rotate(180deg); /* IE 9 */
        -webkit-transform: rotate(180deg); /* Safari 3-8 */
        transform: rotate(180deg);
    }

    #fe_common_menu_mainmenuhidden_click {
        cursor: pointer;
    }

    @media screen and (max-width: 800px) {
        #fe_common_menu_mainmenuhidden .col-md-9 div {
            width: inherit;

        }

        #fe_common_menu_mainmenuhidden .col-md-9 input {
            font-size: 18px;
            width: 80%;
            float: left;
        }

        #fe_common_menu_mainmenuhidden .col-md-9 button {
            float: right;
            font-size: 18px;
        }

    }

</style>
<div class="container" id="fe_common_menu_mainmenuhidden">

    <div class="row">
        <div class="col-md-3 d-none d-sm-none d-md-block" id="fe_common_menu_mainmenuhidden_click">
            <i class="fas fa-bars"></i> All Categories
            <i class="fas fa-angle-down float-right icondown"></i>
        </div>
        <div class="col-md-9 text-right">
            <div>
                <input type="text" placeholder="Search..">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>

    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $(document).ready(function () {
        $('#fe_common_menu_mainmenuhidden_click').click(function () {


            var m = $('.lmenucontent_2').css('visibility');

            if (m == 'hidden') {
                $('.lmenucontent_2').css("visibility", "visible");
                $('.icondown').addClass("xoayicon")
            } else {
                $('.lmenucontent_2').css("visibility", "hidden");
                $('.icondown').removeClass("xoayicon")
            }

        });
    });

</script>