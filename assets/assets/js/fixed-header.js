// JavaScript Document

$(window).scroll(function(){
'use strict';						  
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-theme');
  else sticky.removeClass('fixed-theme');
});