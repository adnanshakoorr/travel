$(function () {

    // Animate On Scroll
    AOS.init();

    // BackToTop
    var btn = $('#backToTop');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    //  SmoothScroll
    $('.smoothScroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });

    $("#add-hotel").click(function () {
        // $(this).toggleClass('active')
        $(".add-hotels").slideToggle();

    });

    $("#add-flight").click(function () {
        // $(this).toggleClass('active')
        $(".add-flights").slideToggle();

    });


    $('.owl_tabs').owlCarousel({
        loop: false,
        margin: 2,
        responsiveClass: true,
        autoplayHoverPause: true,
        autoplay: false,
        slideSpeed: 400,
        paginationSpeed: 400,
        autoplayTimeout: 3000,
        mouseDrag: false,
        responsive: {
            0: {
                items: 3,
                nav: true,
                loop: false
            },
            600: {
                items: 3,
                nav: true,
                loop: false
            },
            1000: {
                items: 8,
                nav: true,
                loop: false
            }
        }
    })

    $(".owl_tabs .owl-item .item").each(function (e) {
        $(".owl-item .item").click(function () {
            $(".owl-item .item").removeClass('active');
        });
    });


});





$(document).ready(function() {
    var li = $(".owl-item li a");
    $(".owl-item li").click(function() {
        li.removeClass('active');
    });
    $('[data-toggle="tooltip"]').tooltip();
});

// $(function () {
//     init();
// });