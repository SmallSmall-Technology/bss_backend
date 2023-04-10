// JavaScript Document

/*var animateFlag = true

var element = document.querySelector(".element")



window.addEventListener("scroll", function() {

  if(this.pageYOffset > 0) {

    if(animateFlag) {

      element.classList.add("animateElement");

      animateFlag = false;

    }

  }

})*/
$(window).scroll(function(){
	"use strict";
	if ($(window).scrollTop() >= 150) {
		
		$('.header').removeClass('header-regular');
		$('.header').addClass('header-sticky');
		
	}else {
		
	   	$('.header').removeClass('header-sticky');
	   	$('.header').addClass('header-regular');
		
	}
});