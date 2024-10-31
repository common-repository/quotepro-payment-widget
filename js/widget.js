(function ($) {
	"use strict";
	$(function () {
	      $('form.quotepro-payment-widget .colorbox').colorbox({iframe: true, top: 50, width: "90%",height: $(window).height()-100, close:"X"});
              $('form.quotepro-payment-widget input[name=Phone]').mask('(999) 999-9999');
              $('form.quotepro-payment-widget input[name=ZipCode]').mask('99999');
		$('form.quotepro-payment-widget').submit(function(e) {
                var action = $(this).prop('action')+"?"+$(this).serialize();
                e.preventDefault();
		    	if ( $(window).width() < 900 ) {
			 		document.location = action;
                } else {
	        		$('.colorbox',this).attr('href',action).click();
                }
            });
	});
}(jQuery));