// JavaScript Document
'use strict';
jQuery(document).ready(function($) {
				$(".scroll").on("click", function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});