// Progress Bar
		$(document).ready(function() {
			'use strict';					   
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });