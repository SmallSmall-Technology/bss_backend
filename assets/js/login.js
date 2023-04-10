// JavaScript Document

var baseUrl = "https://localhost/buysmallsmall/";

function isEmail(email) {

	"use strict";

   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   return regex.test(email);

}

$('.forgot-pass').click(function(){
    
   $('#form-report').hide();
    
   $('#loginForm').hide();
   
   $('.login-title.reset').show();
   
   $('.login-title.login-user').hide();
   
   $('#passwordForgotForm').show();
   
});

$('.login-pass').click(function(){
    
   $('#form-report').hide();
   
   $('#passwordForgotForm').hide();
   
   $('.login-title.login-user').show();
   
   $('.login-title.reset').hide();
    
   $('#loginForm').show();
   
});

$('#loginForm').submit(function(e){

	"use strict";

	e.preventDefault();

	$('.login-button').val("Wait...");

	var username = $.trim($('#username').val());

	var password = $.trim($('#password').val());

	//var current_page = $('#current-page').val();
	
	var current_page = "https//localhost/buysmallsmall/";   
	
	var filteredList = [];	

	//Check for empty fields

	filteredList = $('.verify-txt').filter(function(){

		return $(this).val() === "";

	});

	//Do something about the empty fields

	if(filteredList.length > 0){

		$('.verify-txt').css("border","1px solid #CCC");

		filteredList.css("border","1px solid rgba(251,1,1,0.5)");

		$('#form-report').html("Fields in red are mandatory fields");

		$('#form-report').css("background", "red");

		$('#form-report').show();

		$('.loader').hide();
		
		$('.login-button').val("Sign in");

		return false;

	}

	

	if(!isEmail(username)){

		$('#form-report').html("Wrong email format");

		$('#form-report').css("background", "red");

		$('#form-report').show();

		$('.loader').hide();

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

				$('#form-report').html(data);

				$('#form-report').css("background", "red");

				$('#form-report').show();
				
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

	$('.reset-btn').html("Wait...");

	var username = $('.reset-username').val();
	
	
	//Do something about the empty fields

	if(username === ""){

		$('.reset-username').css("border","1px solid #CCC");

		$('#form-report').html("Please enter your email address");

		$('#form-report').css("background", "red");

		$('#form-report').css('display', 'block');
		
		$('.reset-btn').html("Reset Password");

		return false;

	}

	if(!isEmail(username)){

		$('#form-report').html("Wrong email format");

		$('#form-report').css("background", "red");

		$('#form-report').show();
		
		$('.reset-btn').html("Reset Password");

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

				$('#form-report').html("Check your email for reset instructions.");

				$('#form-report').css("background", "green");

				$('#form-report').show();
				
				$('.reset-btn').html("Reset Password");
				
				return false;

			}else{

				$('#form-report').html(data);

				$('#form-report').css("background", "red");

				$('#form-report').show();
				
				$('#login-button').html("Reset Password");
				
				return false;

			}

		}

	});

});

/*$('#newPassForm').submit(function(e){

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

});*/


$('#newPassForm').submit(function(e){
	
	"use strict";
	
	e.preventDefault();
	
	$('.reset-button').html("Wait...");
	
	var password = $.trim($('#password').val());

	var pass2 = $.trim($('#password_2').val());
	
	var userID = $('#userID').val();

	//Check for empty fields

	var filteredList = $('.verify-txt').filter(function(){

		return $(this).val() === "";

	});
	

	//Do something about the empty fields

	if(filteredList.length > 0){

		$('.mand-f').css("border","1px solid #CCC");

		filteredList.css("border","1px solid rgba(251,1,1,0.5)");

		$('#form-report').html("Fields in red are mandatory fields");

		$('#form-report').css("background", "red");

		$('#form-report').show();
		
		$('.reset-button').html('Change password');

		return false;

	}
	
	var data = {

		'password' : password,
		'userID' : userID

	};
	
	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/newPass/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {			

			if(data == 1){				
				
				$('.reset-button').html('Change password');

				$('#form-report').html("Password Successfully Changed. Proceed to Login");

				$('#form-report').css("background", "#00CDA6");

				$('#form-report').css("color", "#FFF");

				$('#form-report').show();
				
				$('.verify-txt').val("");

			}else if(data == 2){
				
				//Go to homepage
				window.location.href = baseUrl+"login";	
				
			}else{

				$('.reset-button').html('Change password');

				$('#form-report').html(data);

				$('#form-report').css("background", "red");

				$('#form-report').show();

			}

		}

	});
	
});