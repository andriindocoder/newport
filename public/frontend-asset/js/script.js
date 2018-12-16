$(document).ready(function() {
    (function($) {

        $.fn.menumaker = function(options) {

            var navbarmenu = $(this),
                settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

            return this.each(function() {
                navbarmenu.prepend('<div id="menu-button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>' + settings.title + '</div>');
                $(this).find("#menu-button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideUp(300).removeClass('open');
                    } else {
                        mainmenu.slideDown(300).addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').slideDown(300);
                        }
                    }
                });

                navbarmenu.find('li ul').parent().addClass('has-sub');

                multiTg = function() {
                    navbarmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    navbarmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideUp();
                        } else {
                            $(this).siblings('ul').addClass('open').slideDown();
                        }
                    });
                };

                if (settings.format === 'multitoggle') multiTg();
                else navbarmenu.addClass('dropdown');

                if (settings.sticky === true) navbarmenu.css('position', 'fixed');

                resizeFix = function() {
                    if ($(window).width() > 767) {
                        navbarmenu.find('ul').show();
                    }

                    if ($(window).width() <= 767) {
                        navbarmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);

            });
        };
    })(jQuery);

    (function($) {
        $(document).ready(function() {

            $(".navbar-menu").menumaker({
                title: "",
                format: "multitoggle"
            });

        });
    })(jQuery);

    (function() {
        'use strict';

        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');

            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $('#slider-home').on('init', function(e, slick) {
        var $firstAnimatingElements = $('div.slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    $('#slider-home').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });
    $('#slider-home').slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: true,
        fade: true
    });

    $('.form-control-file').filestyle();

    $('.selectpicker').selectpicker();

    $("[data-fancybox]").fancybox({
        transitionEffect: "tube"
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

});