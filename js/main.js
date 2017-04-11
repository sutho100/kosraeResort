//---------------------------------------------
//Show and hide nav
//---------------------------------------------
var toggleSlideNav = function () {
    $('header nav').stop().slideToggle("fast", function () {
        $("#navIcon").toggleClass("open");
    });
};

$("#navIcon").bind("click", function () {
    toggleSlideNav();    
});

//---------------------------------------------
//Preload hover images
//---------------------------------------------
$.preloadImages = function () {
    for (var i = 0; i < arguments.length; i++) {
        $('<img />').attr('src', arguments[i]);
    }
};

$.preloadImages(
    'img/social-facebook-active.png',
    'img/social-linkedin-active.png',
    'img/social-twitter-active.png',
    'img/social-youtube-active.png'
);

//---------------------------------------------
//Make sidebar sticky
//---------------------------------------------
var sidebarWidth = $(".sidebar-wrapper").width();
var pageScrolled = $(document).scrollTop().valueOf();
var $aside = $("aside.sticky");

var resetSticky = function () {
    //update the width of the aside and use for when it is sticky
    if ($(window).width() > 991) {
        if (sidebarWidth != $aside.innerWidth()) {
            sidebarWidth = $aside.innerWidth();
        }
    }

    $aside.css("width", "auto");

    $aside.css("padding-bottom", 0 + "px");

    $aside.css("position", "static");

    $aside.css("overflow-y", "auto");
    $aside.css("height", "auto");
};

var processScroll = function () {
    //update scroll position
    pageScrolled = $(document).scrollTop().valueOf();

    if ((pageScrolled > $(".home img").height()) && ($(window).width() > 991)) {
        $aside.css("width", sidebarWidth + "px");

        $aside.css("padding-bottom", $("footer").height() + 40 + "px");

        $aside.css("position", "fixed");
        $aside.css("top", 120);

        $aside.css("overflow-y", "auto");
        $aside.css("height", (window.innerHeight - $("header").height() - 20) + "px");
    } else {
        resetSticky();
    }
};

$(window).scroll(function () {
    processScroll();
});


//---------------------------------------------
//Page load actions
//---------------------------------------------
$(document).ready(function () {
    processScroll();
    resetSticky();
});


//---------------------------------------------
//Detect resize width of browser
//---------------------------------------------
$(window).resize(function () {
    if ($(window).width() > 991) {
        $('header nav').show();
        sidebarWidth = $(".sidebar-wrapper").width();
        $aside.css("width", sidebarWidth + "px");
    } else {
        $('header nav').hide();
        //reset width so it doesn't mess with Bootstrap
        resetSticky();        
    }

    processScroll();
});

//---------------------------------------------
//Smooth scrolling to anchor links
//---------------------------------------------
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 300);
                return false;
            }
        }
    });
});