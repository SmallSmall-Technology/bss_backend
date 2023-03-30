// JavaScript Document
$('.mobile-menu').click(function(){
	"use strict";
	if ($('.menu').is(':hidden') ) {
		
		$('.menu').slideDown();

	}else {
		
		$('.menu').slideUp();

	}
});

$('.sub-menu-item').click(function(){
	"use strict";
	if ($('.sub-menu').is(':hidden') ) {
		
		$('.sub-menu').slideDown();

	}else {
		
		$('.sub-menu').slideUp();

	}
});

$('.search-option').click(function(){
	"use strict";
	if ($('.search-box').is(':hidden') ) {
		
		$('.search-box').slideDown();

	}else {
		
		$('.search-box').slideUp();

	}
});