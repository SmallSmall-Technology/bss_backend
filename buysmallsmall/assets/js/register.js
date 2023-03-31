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

	

	var pass = $('#pass').val();

	

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

	var pass = $.trim($('#pass').val());
	
	var income = $.trim($('.income').val());	
	
	var address = $.trim($('.address').val());

	var occupation = $.trim($('.occupation').val());

	var position = $.trim($('.position').val());

	var gender = $.trim($('.gender').val());

	var filteredList = []; 
	
	var profile = "";

	

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
		
		$('.signup-button').val("Next");

		return false;

	}

	

	if(!isEmail(email)){

		$('.form-report').html("Wrong email format");

		$('.form-report').css("background", "red");

		$('.form-report').show();

		$('.loader').hide();

		window.scrollTo(0,100);
		
		$('.signup-button').val("Next");

		return false;

	}

	if(localStorage.getItem('userProfile') === null){


		var newProfile = {

							'fname' : fname,

                    		'lname' : lname,
                    
                    		'email' : email,
                    
                    		'phone' : phone,
                    
                    		'password' : pass,
                    		
                    		'income' : income,
                    		
                    		'age'   : age,
                    		
                    		'occupation' : occupation,
                    		
                    		'address' : address,
                    		
                    		'position' : position,
                    		
                    		'gender' : gender

						   };

		window.localStorage.setItem('userProfile', JSON.stringify(newProfile));

	}else{
		//Get all cart products

			profile = JSON.parse(localStorage.getItem('userProfile'));

			profile.fname = fname;
			
			profile.lname = lname;
                    
    		profile.email = email;
    
    		profile.phone = phone;
    
    		profile.password = pass;
    		
    		profile.income = income;
    		
    		profile.age = age;
    		
    		profile.occupation = occupation;
    		
    		profile.address = address;
    		
    		profile.position = position;
    		
    		profile.gender = gender;
		
			window.localStorage.setItem('userProfile', JSON.stringify(profile));

	} 
	
	window.location.href = "https://www.buy2let.ng/signup-investor-profile";

});

$('#signupInvestorForm').submit(function(e){

	"use strict"
	
	e.preventDefault();

	$('.signup-button').val("Wait...");
	
	
	
	if(localStorage.getItem('userProfile') === null){
	    
	    $('.signup-button').val("Sign Up");
	    
	    window.location.href = "https//www.buy2let.ng/signup";
	    
	    return false;
	    
	}
	
	var profile = JSON.parse(localStorage.getItem('userProfile'));
	
	if(profile.fname === ""){
	    
	    $('.signup-button').val("Sign Up");
	    
	    window.location.href = "https//www.buy2let.ng/signup";
	    
	    return false;
	    
	}
	
	

	var fname = profile.fname;

	var lname = profile.lname;

	var email = profile.email;

	var phone = profile.phone;

	var age = profile.age;

	var pass = profile.password;
	
	var income = profile.income;	
	
	var address = profile.address;

	var occupation = profile.occupation;

	var position = profile.position;

	var gender = profile.gender;

	var medium = $.trim($('.medium').val());

	var accredited_investor = $.trim($('.accredited-investor').val());

	var investment_experience = $.trim($('.investment-experience').val());

	var investment_goal = $.trim($('.investment-goal').val());

	var investment_capital = $.trim($('.investment-capital').val());

	var financing_choice = $.trim($('.financing-choice').val());

	var investment_period = $.trim($('.investment-period').val());

	var purchase_plan = $.trim($('.purchase-plan').val());

	var preferred_location_1 = $.trim($('.preferred-location-1').val());

	var preferred_location_2 = $.trim($('.preferred-location-2').val());

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
		
		$('.signup-button').val("Sign Up");

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
		
		'accredited_investor' : accredited_investor,
		
		'investment_experience' : investment_experience,
		
		'investment_goal' : investment_goal,
		
		'investment_capital' : investment_capital,
		
		'financing_choice' : financing_choice,
		
		'investment_period' : investment_period,
		
		'purchase_plan' : purchase_plan,
		
		'preferred_location_1' : preferred_location_1,
		
		'preferred_location_2' : preferred_location_2

	};

	

	$.ajaxSetup ({ cache: false });

	$.ajax({

		url: baseUrl+"buytolet/signupForm/",

		type: "POST",

		async: true,

		data: data,

		success: function(data) {

			if(data == 1){
			    
			    alert("Successful!");

				$('.loader').hide();
				
				$('.txt-f').val('');

				$('.form-report').html("Successful! Check your email for confirmation");

				$('.form-report').css("background", "green");

				$('.form-report').show();
 
				window.scrollTo(0,100);

				$('.signup-button').val("Sign Up");
				
				window.localStorage.removeItem('userProfile');
				
				//window.location.href = baseUrl+"login";
				
				return false;

				//window.location.href = baseUrl+"dashboard/";

			}else{
			    alert("Unsuccessful");

				$('.loader').hide();

				$('.form-report').html(data);

				$('.form-report').css("background", "red");

				$('.form-report').show();

				window.scrollTo(0,100);

				$('.signup-button').val("Sign Up");
				
				return false;

			}

		}

	});

});