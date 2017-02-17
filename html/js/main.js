(function() {
    'use strict';

    var indicator = $(".page-loader .p-p")[0];

    Pace.on("progress", function(ctx) {
        indicator.innerHTML = Math.floor(ctx) + "%";
    });

    Pace.on("done", function() {
        indicator.innerHTML = "100%";
    });
}());

// Avoid `console` errors in browsers that lack a console.
(function() {
    'use strict';

    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any code in here.
$(function() {
    'use strict';

    /**
     * STICKY MENU
     **/
    var $navbar = $("#main-navigation"),
        stickyPoint = $(".main-header").height()/3*2;

    function navbarSticky() {
        if ($(window).scrollTop() >= stickyPoint) {
            $navbar.addClass("navbar-sticky");
        } else {
            $navbar.removeClass("navbar-sticky");
        }
    }

    $(window).scroll(function () {
        navbarSticky();
    });

    navbarSticky();

    /**
     *  NAVBAR SIDE COLLAPSIBLE
     **/
    $(".navbar-toggle").on("click", function() {
        $navbar.toggleClass("navbar-expanded");
    });

    /**
     * SCROLLING NAVIGATION
     * Enable smooth transition animation when scrolling
     **/
    $('.navbar-nav a:not([target]), a.scrollto').on('click', function (event) {
        event.preventDefault();

        var scrollAnimationTime = 1200;
        var target = this.hash;
        $('html, body').stop().animate({
            scrollTop: $(target).offset().top
        }, scrollAnimationTime, 'easeInOutExpo', function () {
            window.location.hash = target;
        });
    });

    /** COLLAPSE MOBILE TOP NAVIGATION
     * Collapse navbar menu when clicked an option
     **/
    $navbar.on('click', '.navbar-nav', function (e) {
        if ($(e.target).is('a')) {
            $navbar.removeClass("navbar-expanded");
        }
    });

    /**
     * HEADER VARIATIONS
     **/
    /** - Particleground **/
    $('.header-particleground').particleground({
        dotColor: '#7094A8', //lighten 30%
        lineColor: '#3D6175' //lighten 10% of element background color
    });

    /** - Particle.js **/
    if (document.getElementById("particles-js")) {
        particlesJS.load('particles-js', 'js/particles/sky.json');
    }

    /** - Video preview **/
    $("[data-video]").each(function (i, e) {
        var $e = $(e);
        var url = $e.data("video");

        // append image
        var $img = $("<img/>", { "src": url + ".png" });
        $img.prependTo($e);

        var $trigger = $(".video-controls i", $e);

        // append video
        var $video = $('<video loop>' +
            '<source src="' + url + '.mp4" type="video/mp4">' +
            '<source src="' + url + '.webm" type="video/webm">' +
            '<source src="' + url + '.ogv" type="video/ogg">' +
            'Sorry, your browser does not support HTML5 video.</video>').prependTo($e);

        $trigger.on("click", function() {
            var video = $video.get(0);
            console.log(video);

            if ($(this).hasClass("ion-play")) {
                $(this).addClass('ion-pause').removeClass('ion-play');

                $e.addClass('video-playing');
                video.play();
            } else {
                $(this).removeClass('ion-pause').addClass('ion-play');

                $e.removeClass('video-playing');
                video.pause();
            }
        });
    });

    /**
     * PULSE TABS EFFECTS
     **/
    $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
        var $this = $(this);
        var $target = $($this.attr('href'));

        $this.addClass("active").siblings().removeClass("active");
        $target.css('left', '-' + $(window).width() + 'px');
        var left = $target.offset().left;
        $target.css({left: left}).animate({"left": "0px"}, "10");
    });

    /**
     * FORMS STUFF
     **/
    $('.input-wrapper > .form-control')
        .on('focus', function () {
            $(this).closest('.input-wrapper').addClass('active');
        })
        .on('blur', function () {
            var $control = $(this);
            var $parent = $control.closest('.input-wrapper');

            $parent.removeClass('active');
            if($control.val()) {
                $parent.addClass("filled");
                $control.addClass('filled');
            }
            else {
                $parent.removeClass('filled');
                $control.removeClass('filled');
            }

            // valid() function is part of jQuery validate plugin
            if (!$control.valid()) {
                $parent.addClass("has-error").removeClass("has-success");
            } else {
                $parent.removeClass("has-error").addClass("has-success");
            }
        });

    $(".form:not([novalidate])").each(function(i, form) {
        var $message = $('.form-message', form);
        if (!$message.length) {
            $("<div/>", {
                class: 'form-message alert hidden'
            }).appendTo(form);
        }

        var options = {
            errorPlacement: function(error, element) {
                if (element.parent().hasClass("input-wrapper")) {
                    error.insertAfter(element.parent());
                } else {
                    if (element.is(':checkbox,:radio')) {
                        error.insertAfter(element.next('.control-label'));
                    } else {
                        error.insertAfter(element);
                    }
                }
            }
        };

        if ($(form).data("validate-on") == "submit") {
            $.extend(options, {
                onfocusout: false,
                onkeyup: false
            });
        }

        $(form).validate(options);

        // set bootstrap button for submit buttons
        var $submit = $('button[type="submit"]', form);

    });

    $(".form").submit(function(event) {
        function writeError (errors) {
            var $fm = $message
                .removeClass('alert-success')
                .addClass('alert-danger')
                .html('<i class="lnr lnr-warning"></i><b>Oops!</b><br/>Something went wrong');

            if (errors) {
                var ul = $("<ul class='list list-unstyled'></ul>");
                $.each(errors, function(i, v) {
                    ul.append("<li><b> " + i + ": </b>" + v + "</li>");
                    $("#" + form_name  + "_form_" + i, $form).removeClass('valid').addClass("error");
                });

                $fm.append(ul);
            }
        }

        // Submit the form
        event.preventDefault();
        var $form = $(this);
        var form_name = $form.attr("name");
        var $submit = $("button[type=submit]", $form);
        var $message = $('.form-message', $form);

        // Verify everything is OK
        // valid() method is part of jQuery.validation plugin
        if($form.valid()) {
            $submit.button('loading');
            var action = $form.attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                data: $form.serializeArray(),
                dataType : 'json'
            }).done(function(data) {
                if (data.result) {
                    $("input, textarea", $form).removeClass("error").addClass('valid');

                    $message
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .html('<i class="lnr lnr-checkmark-circle"></i><b>Thank you!</b><br/>' + data.message);

                    $form[0].reset();

                    if ($message.data("replace")) {
                        $($message.data("replace")).replaceWith($message);
                    }
                } else {
                    writeError(data.errors);
                }
            }).fail(function() {
                writeError();
            }).always(function() {
                $submit.button('reset');
                $message.removeClass('hidden').addClass('fadeInUp');
            });
        }

        return false;
    });

    $("#trial-request").on("show.bs.modal", function (e) {
        var trigger = e.relatedTarget;
        var form = trigger.form;

        if (form != null) {
            var email = $("[type='email']", form);
            var modalEmail = $("form [type='email']", this);

            modalEmail.val(email.val());
        }
    })

    $(".modal-dialog").on("click", ".modal-submit", function() {
        var target = $(this).data("target");
        if (target) {
            $(target).submit();
        }
    });

    /** PAGE ANIMATIONS WHEN SCROLLING
     * 1. Using waypoints & animate.css
     **/
    if(Modernizr.mq('only all and (min-width: 768px)')) {
        var getAnimationData = function(e, attr, def) {
            var value = e.data("animation-" + attr);
            if (typeof value == "undefined" || value == false) {
                value = def;
            }

            return value;
        };

        $('[data-animation]').each(function() {
            var $this = $(this);
            var animation = $this.data("animation");
            var duration = getAnimationData($this, "duration", 1);
            var delay = getAnimationData($this, "delay", 0);

            $this.css({
                "animation-duration": duration + "s",
                "animation-delay": delay + "s",
                "visibility": "visible"
            });

            $this.waypoint(function() {
                $this.addClass(animation);
            },{
                triggerOnce: true,
                offset: '90%'
            });
        });
    }

    /** 2. Using scrollreveal.js **/
    if (Modernizr.csstransforms3d) {
        window.sr = ScrollReveal();

        var getScrollData = function(e, attr, def) {
            var value = e.data("scroll-" + attr);
            if (typeof value == "undefined" || value == false) {
                value = def;
            }

            return value;
        };

        $('[data-scroll-reveal]').each(function() {
            var $this = $(this);
            var origin = getScrollData($this, "reveal", "bottom");
            var distance = getScrollData($this, "distance", 20);
            var duration = getScrollData($this, "duration", 800);

            sr.reveal(this, {
                origin: origin,
                distance: distance + 'px',
                duration: duration,
                delay: 400,
                opacity: 1,
                scale: 0,
                easing: 'linear',
                reset: true
            });
        });
    }

    /**
     * TESTIMONIALS CAROUSEL
     * Testimonials only need one step and one item at once
     **/
    $('.testimonials-wrapper .slides').owlCarousel({
        autoPlay: 5000,
        singleItem: true,
        navigation: true,
        pagination: false,
        navigationText : ["<i></i>", "<i></i>"]
    });

    /**
     * SCREENSHOTS CAROUSEL
     **/
    /** ( ! ) This section could be done in html markup directly
     * since we are just generating HTML markup to make the slider.
     * You could just take this script off and write your own markup, in the following way
     * <a href="path/to/your/image"><img src="path/to/your/image"/></a>
     * write as many <a> tags as images you would like to show
     **/
    var $screenshots = $(".screenshots.carousel .slides");
    var count = $screenshots.data("slides-count");
    var $slides = [];

    for (var i = 1; i <= count; i++) {
        var src = "img/screenshots/" + i + ".jpg";

        $slides.push(
            $("<a/>", {
                "data-lightbox-gallery": "gallery5",
                href: src,
                html: $("<img/>", {
                    src: src
                })
            })
        );
    };

    // Append the markup just generated and make it carousel
    $screenshots.append($slides);

    // Screenshots Fullscreen lightbox
    $("a", ".screenshots").nivoLightbox({
        theme: 'app5'
    });

    // 2. Variation 1: Carousel
    $screenshots.owlCarousel({
        autoPlay: 4000,
        loop: true,
        items: 7,
        itemsDesktop: [1200,5],
        itemsDesktopSmall: [900,3],
        itemsTablet: [600,1],
        itemsMobile: [400,1]
    });

    // 2.1 Variation 2: One slide with description per screenshot
    $(".screenshots.descriptive .slides").owlCarousel({
        autoPlay: 5000,
        singleItem: true,
        navigation: true,
        pagination: false,
        navigationText : ["<i></i>", "<i></i>"]
    });

    /**
     * COUNTERS
     **/
    $('.counter .value').counterUp();

    /**
     * ANIMATION BAR
     **/
    /** ( ! ) This section could be done in html markup directly
     * since we are just generating random height/width for elements.
     * You could just take this script off and write your own markup, in the following way
     * <ul class="progress-bars [progress-vertical | progress-horizontal]">
     *     <li><b class="progress" style="[height | width]: 92%"><i class="progress-bar" style="[height | width]: 50%"></i></b></li>
     * </ul>
     * write as many <li/> tags as bars you like to show
     * progress-vertical or progress-horizontal css class must be added to <ul/>
     * use height or width styles whether your orientation is vertical or horizontal
     **/
    $(".progress-bars").each(function() {
        var $this = $(this);
        var orientation = $this.data("orientation");
        var count = $this.data("bars-count");
        var bars = [];

        for (var idx = 1; idx <= count; idx++) {
            var barSize =  Math.floor(1 + (Math.random() * 100));
            var percent = Math.floor(8 + (Math.random() * 90));
            var $i = $("<i/>", {
                class: "progress-bar"
            });
            var $bar = $("<b/>", {
                class: "progress",
                html: $i
            }).data("percent", percent);

            if (orientation == "horizontal") {
                $bar.css({ width: barSize + "%" });
                $i.css({ width: 0 });
            } else {
                $bar.css({ height: barSize + "%" });
                $i.css({ height: 0 });
            }

            bars.push($("<li/>", { html: $bar }));
        }

        $this
        .append(bars)
        .addClass("progress-"+orientation);
    });

    // make bars animated
    $(".progress-bars > li").each(function(index) {
        var orientation = $(this).parent().data("orientation");

        $("b", this).animateBar({
            "step": index * 100,
            "orientation" : orientation,
            "duration": 1000
        });
    });

    /**
     * SECTION VIDEO
     **/
    $('#video').videoplayer('video/nights', {
        play: "ion-play",
        pause: "ion-pause"
    });

    /**
     * PRICING TABLES
     **/
    /** Table variation **/
    var $pricingTable = $(".pricing-table table");
    function moveToPricingTab(tab) {
        var hid = "ph-" + tab;

        $("thead th.visible-cell", $pricingTable).removeClass("visible-cell").removeAttr("colspan");
        $("thead th#" + hid, $pricingTable).addClass("visible-cell").attr("colspan", 2);

        $('td[headers].visible-cell', $pricingTable).removeClass("visible-cell");
        $('td[headers*=' + hid + ']', $pricingTable).addClass("visible-cell");
    }

    $(".pricing-table-tabs").on("change", 'input[name="pricing-plan"]', function() {
        moveToPricingTab(this.value);
    });

    $(".pricing-table-basis").on("change", 'input[name="pricing-value"]', function() {
        var period = this.value;

        $(".odometer").each(function() {
            this.innerHTML = $(this).data(period + "-price");
        });
    });

    /* FAQS */
    var faqsId = "frequently-asked-questions";
    var $faqs = $("<div/>", {
        id: faqsId
    });

    $(".faqs-container li").each(function(i, v) {
        var $title = $("<h4/>", {
            class: "accent",
            html: $("<a/>", {
                html: $("h4", v).html(),
                href: "#faq-" + i,
                class: (i==0 ? "" : "collapsed"),
                "data-toggle": "collapse"
            }).data("parent", "#"+faqsId)
        });
        var $body = $("<div/>", {
            id: "faq-" + i,
            class: "collapse" + (i==0 ? " in" : ""),
            html: $("p", v).html()
        });
        var $panel = $("<div/>", {
            class: "panel panel-clean"
        }).append([$title, $body]);

        $faqs.append($panel);
    });

    $(".faqs-container").replaceWith($faqs).remove();
    $faqs.collapse();

    // Windows resize
    var gridFloatBreakpointMax = 768 - 1;
    function resizeWindow(e) {
        if(e.innerWidth <= gridFloatBreakpointMax) {
            $(".pricing-table table > thead .visible-cell").attr("colspan", 2);
        } else {
            $(".pricing-table table > thead .visible-cell").removeAttr("colspan");
        }
    }

    $(window).resize(function() {
        resizeWindow(this);
    });

    resizeWindow(window);

    // Activate Popovers
    $('[data-toggle="popover"]').popover();
});
