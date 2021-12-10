$(document).ready(function() {
    $(document).mouseup(function(e) {
        var container = $('.search-wrapper');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.search-form').removeClass('search-focus');
            $('.search-result-wrapper').slideUp();
        } else {
            $('.search-form').addClass('search-focus');
        }
    });

    $('.category-keyword').click(function(e) {
        e.stopPropagation();
        var $this = $(this);
        var $content = $this.parent().find('.content');
        var $item = $this.parent().find('.autocomplte-item');

        $('.input-dropdown').blur();
        setTimeout(function() {
            $content.removeClass('hidden')
            $('.content').not($content).addClass('hidden')
        }, 100);

        //child click
        $item.click(function() {
            var option = $(this).text();
            $this.val(option);
            $(this).addClass('active');
            $(childValue).addClass('selected').siblings().removeClass('selected');
            $item.not($(this)).removeClass('active');
            $(this).parent().parent().parent().find('.category-keyword.focus,.category-keyword.input-dropdown,.input.input-dropdown').attr('value', option);
            $content.addClass('hidden')
        })
    })
    $('.content').click(function(e) {
        e.stopPropagation()
    })
    $('html').click(function() {
        $('.content').addClass('hidden')
    })

    $('.choose-country .autocomplte-item').click( function () {
        var parentValue =  $(this).attr('data-country');
        $(parentValue).addClass('selected').siblings().removeClass('selected');
    })


    $(document).on('click', '.search-keyword', function () {
        if (screen.width < 990) {
            $('.search-wrapper').addClass('search-action')
        }
    })

    $(document).on('click', '.search-icon', function () {
        if (screen.width < 990) {
            $('.search-wrapper').removeClass('search-action');
            $('.default-loading').hide();
            $('.default-search-icon').fadeIn();
        }
    })

    $(document).on('keyup', function(evt) {
        if (evt.keyCode == 27) {
            $('.search-result-wrapper').slideUp();
        }
    });

    if ($('.menu-dummy').is(':visible') == true && screen.width > 990) {
        var heightMenu = $('.main-menu').height();
        $('.menu-dummy').css('height', heightMenu);
    }

    if (screen.width < 990) {
        $(document).on('click', '.menu-item-link', function (menu) {
            $(this).next().slideToggle();
            $(this).toggleClass('menu-active');
            menu.preventDefault();
        })
    }

    $(document).on('click', '.menu-icon', function (menu) {
        $('body').addClass('open-menu')
    })
    $(document).on('click', '.navigation-background', function (menu) {
        $('body').removeClass('open-menu')
    })

    $('.recommendation-slider').slick({
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        dots: false,
    });


});
