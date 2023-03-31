// JavaScript Document

var baseUrl = "https://buy.smallsmall.com/";



$('.inspection-button').click(function(){

	"use strict";

	$('.popup-overlay').css("display", "flex");

});

$('.close-popup').click(function(){

	"use strict";

	$('.popup-overlay').css("display", "none");

});

$('.time-and-date-field').change(function(){

	"use strict";

	if($('.form-report').is(':hidden')){

		

		return false;

		

	}else{

		

		$('.form-report').hide();

		

	}

		

});

$('.inspection-btn').click(function(){

	"use strict";

	

	$('.inspection-btn').html("Scheduling...");

	var insp_date = $('.insp-date').val();

	var user_id = $('.user-id').val();

	var prop_id = $('.prop-id').val();

	if(!user_id){

	   	

		var ans = confirm("Do you wish to login to proceed?");

		

		if(ans){

			window.location.href = baseUrl+"login";

		}else{

			$('.inspection-btn').html("Schedule Inspection");

			return false;

		}

		

	}

	

	if(insp_date == ""){

		$('.form-report').css("background", "red");

		$('.form-report').html("Pick a date for inspection");

		$('.form-report').show();

		$('.time-and-date-field').css("border", "1px solid red");

		$('.inspection-btn').html("Schedule Inspection");

		return false;

	}

	

	var data = { "insp_date" : insp_date, "propID" : prop_id };

	

	$.ajaxSetup ({ cache: false });

	$.ajax({			

		url: baseUrl+"buytolet/scheduleInsp/",

		type: "POST",

		data: data,

		success: function(data) {

			

			if(data == 1){

				$('.form-report').css("background", "green");

				$('.form-report').html("Inspection successfully scheduled. We will contact you soon.");

				$('.form-report').show();

				$('.inspection-btn').html("Schedule Inspection");

			}else{

				$('.form-report').css("background", "red");

				$('.form-report').html(data);

				$('.form-report').show();

				$('.inspection-btn').html("Schedule Inspection");

			}

		}

	});

	

	

	

	

	

});