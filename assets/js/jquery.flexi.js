// Flexislider Document
$(function() {
    'use strict';
    $(window).on("load", function() {
        $('#carousel').flexslider({

            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 50,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
});