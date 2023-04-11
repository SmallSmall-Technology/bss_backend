// JavaScript Document

var baseUrl = "https://buy.smallsmall.com/";



function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('#income').keyup(function(){

	"use strict";
	
	var income_val = $.trim($(this).val());
	
	if(isNaN(income_val)){
		
		alert("This field accepts numbers only");
		
		$(this).val('');
		
		return false;
		
	}
}); 

$('#confirm-pass').keyup(function(){

	"use strict";

	var second_pass = $(this).val();

	var pass = $('#password').val();

	if(pass === second_pass){

		$('#confirm-pass').css("border", "1px solid #16163D");

	}else{

		$('#confirm-pass').css("border", "1px solid red");

	}

});


$('#signupForm').submit(function(e){

	"use strict"
	
	e.preventDefault();

	$('.signup-button').val("Wait...");

	var fname = $.trim($('#fname').val());

	var lname = $.trim($('#lname').val());

	var email = $.trim($('#email').val());

	var phone = $.trim($('#phone').val());

	var age = $.trim($('.age').val());

	var pass = $.trim($('#password').val());

	var pass_2 = $.trim($('#confirm-pass').val());
	
	var income = $.trim($('.income-range').val());	
	
	var address = $.trim($('.address').val());

	var occupation = $.trim($('.occupation').val());

	var position = $.trim($('.position').val());

	var gender = $.trim($('.gender').val());

	var medium = $.trim($('.medium').val());

	var ref_code = $.trim($('#referral-code').val());

	var filteredList = []; 
	
	//Check for empty fields

	filteredList = $('.verify-txt').filter(function(){

		return $(this).val() === "";

	});

	//Do something about the empty fields

	if(filteredList.length > 0){

		$('.verify-txt').css("border","1px solid #CCC");

		filteredList.css("border","1px solid rgba(251, 0, 0, 0.8)");

		$('.form-report').html("Fields in red are mandatory fields");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		window.scrollTo(0);
		
		$('.signup-button').val("Finish");

		return false;

	}

	

	var data = {

		'fname' : fname,

		'lname' : lname,

		'email' : email,

		'phone' : phone,

		'password' : pass,
		
		'medium' : medium,
		
		'income' : income,
		
		'age'   : age,
		
		'occupation' : occupation,
		
		'address' : address,
		
		'position' : position,
		
		'gender' : gender,
		
		'ref_code' : ref_code

	};

	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/signupForm/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {

			if(data == 1){
			    
				$('.loader').hide();
				
				$('.txt-f').val('');

				$('.form-report').html("Successful! Check your email for confirmation");

				$('.form-report').css("background", "green");

				$('.form-report').show();

				$('.all-fields').hide();
 
				window.scrollTo(0);			

				//window.location.href = baseUrl+"dashboard/";

			}else{
			    
			    //alert("Unsuccessful");

				$('.loader').hide();

				$('.form-report').html(data);

				$('.form-report').css("background", "red");

				$('.form-report').show();

				window.scrollTo(0);

				$('.signup-button').val("Sign Up");
				

			}

		}

	});

});