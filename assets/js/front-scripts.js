jQuery(document).ready(function($){
	"use strict";
	//general var
	var $windowHeight = jQuery(window).outerHeight();

	
	//================Ajax Links
	jQuery('a').on('click', function(){
		var $href = jQuery(this).attr('href');
		
		jQuery('html').load($href, function(){
		
		})
	})
	
	
	
}); /*End of document*/