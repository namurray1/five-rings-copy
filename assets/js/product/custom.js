
$(document).ready(function(){
'use strict';

// ---------------------------------------------------------
// Tabs
// ---------------------------------------------------------
$(".tabs").each(function(){

		$(this).find(".tab").hide();
		$(this).find(".tab-menu li:first a").addClass("active").show();
		$(this).find(".tab:first").show();

});
$(".tabs").each(function(){

		$(this).find(".tab").hide();
		$(this).find(".tab-menu p:first a").addClass("active").show();
		$(this).find(".tab:first").show();

});

$(".tabs").each(function(){

		$(this).find(".tab-menu a").on("click", function() {

				$(this).parent().parent().find("a").removeClass("active");
				$(this).addClass("active");
				$(this).parent().parent().parent().parent().find(".tab").hide();
				var activeTab = $(this).attr("href");
				$(activeTab).fadeIn();
				return false;

		});

});


// ---------------------------------------------------------
// Toggle
// ---------------------------------------------------------

$(".toggle").each(function(){

		$(this).find(".box").hide();

});

$(".toggle").each(function(){

		$(this).find(".trigger").on("click", function() {

				$(this).toggleClass("active").next().stop(true, true).slideToggle("normal");

				return false;

		});

});



// ---------------------------------------------------------
// Social Icons
// ---------------------------------------------------------

jQuery(".social-networks li a").tooltip({ effect: 'slide', position: 'bottom center', opacity: .5 });

// jQuery("#mcs_container").mCustomScrollbar("horizontal",800,"easeOutCirc",1,"fixed","yes","yes",20);



jQuery(".list-1 li:nth-child(2n)").addClass('nomargin');
jQuery(".recent-posts.team li:nth-child(3n)").addClass('nomargin');
jQuery(".recent-posts.fresh_ideas li:nth-child(3n)").addClass('nomargin');
jQuery(".recent-posts.team > li").addClass('maxheight');
jQuery(".list-1 li:first-child").next().addClass('second');


});


// $(window).load(function() {
	// $("#mcs_container").mCustomScrollbar("horizontal",500,"easeOutCirc",1,"fixed","yes","yes",20); 
// });