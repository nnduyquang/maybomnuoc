var plugins = {
    btCategory: $('.bt-category'),
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    marqueeSideBar: $('.marquee.up-sidebar'),
    marqueeHTop: $('.marquee.left-h-top'),
    owlCarouselProduct: $('.p-d-owl'),
    owlCarouselHBottom: $('.h-b-owl')
};
$(document).ready(function () {
    $('.fancybox').fancybox({
        beforeShow: function () {
            this.title = $(this.element).data("caption");
        }
    });
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }

    sidebar();
    plugins.btCategory.click(function () {
        $('ul.list-category').toggle();
    });
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }

    function runMarqueeSideBar() {
        plugins.marqueeSideBar.marquee({
            direction: 'up',
            duplicated: true,
            delayBeforeStart: 0,
            duration: 10000,
            pauseOnHover: true,
        });
    }
    function runMarqueeHTop() {
        plugins.marqueeHTop.marquee({
            direction: 'right',
            duplicated: true,
            delayBeforeStart: 0,
            duration: 10000,
            pauseOnHover: true,
        });
    }

    function runOwlCarouselProduct() {
        plugins.owlCarouselProduct.owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
            navContainer: '.nav-arrow',
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    }

    function runOwlCarouselHBottom() {
        plugins.owlCarouselHBottom.owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
            navContainer: '.nav-arrow',
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.marqueeSideBar.length) {
        runMarqueeSideBar();
    }
    if (plugins.marqueeHTop.length) {
        runMarqueeHTop();
    }
    if (plugins.owlCarouselProduct.length) {
        runOwlCarouselProduct();
    }
    if (plugins.owlCarouselHBottom.length) {
        runOwlCarouselHBottom();
    }
    $('input[name=txtSearch]').keyup(function (e) {
        if (e.keyCode == 13) {
            if ($(this).val() != '')
                $('.frm-search').submit();
        }
    });
});