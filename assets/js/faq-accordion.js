// JavaScript Document

$('.question').click(function(){

	"use strict";	

	$('.answer').hide();
	
	$('.present-caret').removeClass('fa-caret-down');
	
	$('.present-caret').addClass('fa-caret-right');
	
	$('.present-caret').removeClass('present-caret');

	var the_id = $(this).attr("id").replace(/question-/,'');
	
	$('#caret-'+the_id).addClass('fa-caret-down');
	
	$('#caret-'+the_id).removeClass('fa-caret-right');
	
	$('#caret-'+the_id).addClass('present-caret');
	
	$('#answer-'+the_id).css('transition', '.4s');
	
	$('#answer-'+the_id).css('display', 'inline-block');
	
	$('#answer-'+the_id).css('height', 'auto');
	
	$('#answer-'+the_id).css('overflow', 'auto');
	
	
	
	/*if ($('#answer-'+the_id).is(':hidden') ) {

		$('#answer-'+the_id).slideDown();
		
	}else{
	    
		$('#answer-'+the_id).slideUp();
		
	}*/

});

/*$('.tenant').click(function(){
	
}); */ 