// JavaScript Document
'use strict';
$('.counter').countUp();


/* ---------------------------------------------
Preloader - Home page
 --------------------------------------------- */

jQuery(window).on('load', function() {
  
    // will first fade out the loading animation
    jQuery("#status").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(500).fadeOut("slow");

})