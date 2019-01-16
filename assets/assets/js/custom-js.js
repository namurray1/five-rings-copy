// JavaScript Document
$(document).ready(function() {
	'use strict';
	
    $(".link-1").on("click", function() {
        $(".mobile-div-2").removeClass("in");

    });

    $(".link-2").on("click", function() {
        $(".mobile-div-1").removeClass("in");
    });

    $(".navbar-toggle").on("click", function() {
        $(".mobile-div-2").removeClass("in");
        $(".mobile-div-1").removeClass("in");

    });



});

