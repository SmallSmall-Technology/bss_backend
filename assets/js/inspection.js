// JavaScript Document

var baseUrl = "https://buy.smallsmall.com/";



$('.book-inspection-btn').click(function(){

	"use strict";

	$('.booking-overlay').css("display", "block");

});

$('.close-popup').click(function(){

	"use strict";

	$('.booking-overlay').css("display", "none");

});

/*$('.time-and-date-field').change(function(){

	"use strict";

	if($('.form-report').is(':hidden')){

		return false;

	}else{

		$('.form-report').hide();

	}

});*/

$('#inspectionForm').submit(function(e){

	"use strict";
    
    e.preventDefault();

	$('.inspection-booking-btn').val("Booking...");

	var insp_date = $('.insp-date').val();

	var insp_time = $('#inspection-time').val();

	var insp_period = $('#inspection-period').val();

	var user_id = $('#userID').val();

	var prop_id = $('.prop-id').val();

	if(!user_id){

		var ans = confirm("Do you wish to login to proceed?");
		
		if(ans){

			window.location.href = baseUrl+"login";

		}else{

			$('.inspection-booking-btn').val("Book inspection");

			return false;

		}

	}

	if(insp_date == ""){

		$('.form-report').css("background", "red");

		$('.form-report').html("Pick a date for inspection");

		$('.form-report').show();

		$('.time-and-date-field').css("border", "1px solid red");

		$('.inspection-booking-btn').val("Book inspection");

		return false;

	}

	var data = { "insp_date" : insp_date, "insp_time" : insp_time, "insp_period" : insp_period, "propID" : prop_id };

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

				$('.inspection-booking-btn').val("Book inspection");

			}else{

				$('.form-report').css("background", "red");

				$('.form-report').html(data);

				$('.form-report').show();

				$('.inspection-booking-btn').val("Book inspection");

			}

		}

	});

});