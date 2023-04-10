// JavaScript Document

$('.monthly-hl').click(function(){

	"use strict";
	
	var pool_check = $('.pool_check').val();

	var id = $(this).attr("id");
	
	$('.year-item').removeClass('active-year');
    
	$('#'+id).addClass('active-year');
	
	$('.yrly-rent').hide();
	
	$('.mthly-rent').show();
	
	if(pool_check == 'yes'){
    	
    	$('.yrly-share').hide();
    	
    	$('.mthly-share').show();
	}
});

$('.yearly-hl').click(function(){

	"use strict";
	
	var pool_check = $('.pool_check').val();

	var id = $(this).attr("id");	

	$('.year-item').removeClass('active-year');

	$('#'+id).addClass('active-year');
	
	$('.yrly-rent').show();
	
	$('.mthly-rent').hide();
	
	if(pool_check == 'yes'){
    	
    	$('.yrly-share').show();
    	
    	$('.mthly-share').hide();
	}

});