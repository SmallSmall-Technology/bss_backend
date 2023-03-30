// JavaScript Document

$('.acordion').click(function(){

	"use strict";	

	$('.acordion-content').hide(200);

	var the_id = $(this).attr("id");
	
	if ($('#content-'+the_id).is(':hidden') ) {

		$('#content-'+the_id).show(200);
	}else{
		$('#content-'+the_id).hide(200);
	}

});

/*$('.tenant').click(function(){
	
}); */ 