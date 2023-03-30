// JavaScript Document
$('.the_thumbnails').click(function(){
	"use strict";
	var imgUrl = $(this).attr('id');
	$('.prop-main-image').html('<img src="'+imgUrl+'" />');
});