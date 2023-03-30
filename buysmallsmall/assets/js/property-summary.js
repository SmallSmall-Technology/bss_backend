// JavaScript Document
$('.summary-menu-item').click(function(){
	"use strict";
	var id = $(this).attr("id");
	$('.summary-menu-item').removeClass('active-summary-menu');
	$('#'+id).addClass('active-summary-menu');
	$('.summary-container').hide(300);
	$('.'+id).show(300);
});