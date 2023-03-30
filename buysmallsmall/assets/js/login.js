// JavaScript Document

var baseUrl = "https://buy.smallsmall.com/";

function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('.forgot-pass').click(function(){
    
   $('#loginForm').hide();
   
   $('#passwordForgotForm').show();
   
});

$('.login-pass').click(function(){
   
   $('#passwordForgotForm').hide();
    
   $('#loginForm').show();
   
});

$('#loginForm').submit(function(e){

	"use strict";

	e.preventDefault();

	$('.login-button').val("Wait...");

	var username = $.trim($('#username').val());

	var password = $.trim($('#password').val());

	var current_page = $('#current-page').val();
	
	/*if(current_page == ''){
		current_page = "https//www.buy2let.ng";   
	}*/
	var filteredList = [];	

	//Check for empty fields

	filteredList = $('.verify-txt').filter(function(){

		return $(this).val() === "";

	});

	//Do something about the empty fields

	if(filteredList.length > 0){

		$('.verify-txt').css("border","1px solid #CCC");

		filteredList.css("border","1px solid rgba(251,1,1,0.5)");

		$('.form-report').html("Fields in red are mandatory fields");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.login-button').val("Sign in");

		return false;

	}

	

	if(!isEmail(username)){

		$('.form-report').html("Wrong email format");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.login-button').val("Sign in");

		return false;

	}

	

	var data = {

		'username' : username,

		'password' : password

	};

	

	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/loginForm/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {

			if(data == 1){
				
				window.location.href = current_page;
				
				return false;

			}else{

				$('.loader').hide();

				$('.form-report').html(data);

				$('.form-report').css("background", "red");

				$('.form-report').show();

				window.scrollTo(0,100);
				
				$('.login-button').val("Sign in");

				$('.signup-button').html("Sign Up");
				
				return false;

			}

		}

	});

});

$('#passwordForgotForm').submit(function(e){

	"use strict";

	e.preventDefault();

	$('.login-button').val("Wait...");

	var username = $('.username').val();
	
	
	//Do something about the empty fields

	if(username === ""){

		$('.username').css("border","1px solid #CCC");

		filteredList.css("border","1px solid rgba(251,1,1,0.5)");

		$('.form-report').html("Fields in red are mandatory fields");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.login-button').val("Reset Password");

		return false;

	}

	if(!isEmail(username)){

		$('.form-report').html("Wrong email format");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.login-button').val("Reset Password");

		return false;

	}

	

	var data = {

		'username' : username

	};

	

	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/resetForm/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {

			if(data == 1){
				
			    $('.loader').hide();

				$('.form-report').html("Check your email for reset instructions.");

				$('.form-report').css("background", "green");

				$('.form-report').show();

				window.scrollTo(0,100);
				
				$('.login-button').val("Reset Password");
				
				return false;

			}else{

				$('.loader').hide();

				$('.form-report').html(data);

				$('.form-report').css("background", "red");

				$('.form-report').show();

				window.scrollTo(0,100);
				
				$('.login-button').val("Reset Password");
				
				return false;

			}

		}

	});

});

$('#newPassForm').submit(function(e){

	"use strict";

	e.preventDefault();

	$('.login-button').val("Wait...");

	var password = $.trim($('#password').val());

	var userID = $('#userID').val();
	
	if(!password){

		$('.form-report').html("Please enter a password");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.login-button').val("Change Password");

		return false;

	}

	var data = {
	    
	    'userID' : userID,

		'password' : password

	};

	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/newPass/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {

			if(data == 1){
				
				$('.form-report').html('Password successfully changed.');

				$('.form-report').css("background", "green");

				$('.form-report').show();

				window.scrollTo(0,100);
				
				$('.login-button').val("Change Password");
				
				return false;

			}else{

				$('.loader').hide();

				$('.form-report').html(data);

				$('.form-report').css("background", "red");

				$('.form-report').show();

				window.scrollTo(0,100);
				
				$('.login-button').val("Change Password");
				
				return false;

			}

		}

	});

});