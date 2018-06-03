var plugins = {
    btCategory:$('.bt-category'),
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    marquee:$('.marquee'),
    owlCarousel:$('.owl-carousel')
};
$(document).ready(function () {
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
    plugins.btCategory.click(function(){
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
    function runMarquee(){
        plugins.marquee.marquee({
            direction:'up',
            duplicated: true,
            delayBeforeStart: 0,
            duration: 10000,
            pauseOnHover:true,
        });
    }
    function runOwlCarousel(){
        plugins.owlCarousel.owlCarousel({
            dots:false,
            nav:true,
            autoplay:true,
            navContainer:'.nav-arrow',
            loop:true,
            navText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if(plugins.marquee.length){
        runMarquee();
    }
    if(plugins.owlCarousel.length){
        runOwlCarousel();
    }
});