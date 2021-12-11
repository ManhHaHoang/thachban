$(document).ready(function() {
    $('.product-gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.product-thumb'
    });
    $('.product-thumb').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.product-gallery',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $(document).on('click', '.js-customer-button, .cancel-comment', function () {
        $('#moduleReviewForm').slideToggle();
        $('.js-customer-button').toggleClass('comment-active')
        if ($('.js-customer-button').hasClass('comment-active')) {
            $('.js-customer-button').text('Hủy').addClass('js-close-form');
        } else {
            $('.js-customer-button').text('Đánh giá và nhận xét').removeClass('js-close-form');
        }
    })

    $(document).on('click', '.js-reply-comment', function () {
        $(this).next().slideDown();
    })
    $(document).on('click', '.product-sub-title', function () {
        // $(this).next().slideToggle();
    })

});
