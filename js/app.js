$(document).foundation();

$(document).ready(function () {
    $('.dev_phone_mask').mask('+7 (999) 999-99-99');

    $('#dev_slider').slick({
        fade: true,
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $('.slider-arrow_prev'),
        nextArrow: $('.slider-arrow_next'),
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 640,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    $('#dev_offer_slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        swipe: false,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    arrows: false
                }
            },
            {
                breakpoint: 640,
                settings: {
                    swipe: true,
                    arrows: false
                }
            }
        ]
    });

    $('.dev_color_slider').slick({
        fade: true,
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        swipe: false,
       customPaging: function (slider, i) {
            var path = $(this.$slides[i]).data('color-path');
            if (typeof path !== 'undefined')
                return '<span style="background:url(' + path + ') no-repeat"></span>';
        }
    });

    $('#dev_dropdown_open').on('click', function () {
        $('#dev_dropdown').fadeIn();
    });
    $('#dev_dropdown_close').on('click', function () {
        $('#dev_dropdown').fadeOut();
    });
    $('#dev_dropdown .menu-list li a').on('click', function () {
        $('#dev_dropdown').fadeOut();
    });

    $('.dev_desc_toogle').on('click', function () {
        $(this).parent('.desc').toggleClass('is-active');
    });
});

$(window).on('load scroll', function () {
    var sticky = $('#dev_sticky');
    if ($(window).scrollTop() > 147) {
        sticky.addClass('is-fixed');
        sticky.find('.large-shrink').show();
        sticky.find('.large-expand').addClass('large-offset-1');

    } else {
        sticky.removeClass('is-fixed');
        sticky.find('.large-shrink').hide();
        sticky.find('.large-expand').removeClass('large-offset-1');
    }
});

$(window).on('resize', function () {
    $('#dev_offer_slider').slick('refresh');
});

