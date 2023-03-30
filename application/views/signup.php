<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-step.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/progress-bar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/global.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-extra.css">	
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-register.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	

</head>

<body>
	
		<form id="signupForm" class="register-form">
			
			<fieldset>
				<!--- Sixth form here --->
				<div class="form-wrapper">
					<Box class="form-input-container">
						<div class="form-title">
							<h1>Create an account</h1>
							<p>Create an investor profile to get started</p>
						</div>
						<div class="form-report">Error signing you up</div>
					
						<div class="double-span-col-input">
							<div class="textInput-box">
								<input placeholder="Firstname" class="verify-txt" id="fname" type="text">
							</div>
							<div class="textInput-box">
								<input placeholder="Lastname" class="verify-txt" id="lname" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input placeholder="Email" class="verify-txt" id="email" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input placeholder="Phone number" class="verify-txt" id="phone" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input placeholder="Password" class="verify-txt" id="password" type="password">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input placeholder="Confirm password" class="verify-txt" id="confirm-pass" type="password">
							</div>
						</div>

						<div class="double-span-col-input">
							<div class="single-span-col-input">
								<select id="gender" class="minimal gender verify-txt">
    								<option>Gender</option>
    								<option value="Male">Male</option>
    								<option value="Female">Female</option>
    							</select>
							</div>
							<div class="single-span-col-input">
								<select id="age" class="minimal age verify-txt">
									<option>Age</option>
									<?php for($i = 18; $i < 80; $i++){ ?>
									    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="single-span-col-input">
						    <div class="textInput-box">
								<select class="minimal income-range verify-txt" id="income-range">
                                    <option value="">Income range</option>
                                    <option value="500000">Under N500,000</option>
								<option value="1000000">N500,000 - N1,000,000</option>
								<option value="2500000">N1,100,000 - N2,500,000</option>
								<option value="5000000">N2,600,000 - N5,000,000</option>
								<option value="7500000">N5,100,000 - N7,500,000</option>
								<option value="10000000">N7,600,000 - N10,000,000</option>
								<option value="15000000">N10,100,000 - N15,000,000</option>
								<option value="20000000">N15,100,000 - N20,000,000</option>
								<option value="30000000">N21,000,000 - N30,000,000</option>
								<option value="40000000">N31,000,000 - N40,000,000</option>
								<option value="50000000">N41,000,000 - N50,000,000</option>
								<option value="51000000">N51,000,000 + </option>
                                </select>
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input placeholder="Occupation" id="occupation" class="occupation verify-txt" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input class="position verify-txt" id="position" placeholder="Position" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
						<textarea class="text-area address"	rows="8" cols="4" placeholder="Address"></textarea>
						</div>
						<div class="single-span-col-input">
							<a class="button next">Next</a>
						</div>
						<!---<div class="sign-up-link">
						<span>Already have an account?</span>  <a href="">Sign in</a>
						</div>--->

					</Box>
				</div>
				<!--- Sixth form here --->

			</fieldset>

			<fieldset>
				<!--- Seventh form here --->
				<div class="form-wrapper">
					<Box class="form-input-container">
						<div class="form-title">
							<h1>Create an account</h1>
							<p>Create an investor profile to get started</p>
						</div>
						<div class="form-report">Error signing you up</div>
						
						<div class="single-span-col-input">
							<select class="minimal accredited-investor verify-txt">
								<option value="">Are you an accredited investor?</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal investment-experience verify-txt">
								<option>Whats your exeperience with rental property investment?</option>
								<option value="I am just getting started">I am just getting started</option>
								<option value="I have purchased investment property before">I have purchased investment property before</option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal investment-goal verify-txt">
							    <option value="">What is your investment goal? Please pick your primary goal.</option>
								<option value="Earn passive income">Earn passive income</option>
								<option value="Diversify my investment portfolio">Diversify my investment portfolio</option>
								<option value="Profit from a market with strong appreciation potential">Profit from a market with strong appreciation potential</option>
								<option value="Have a real asset in my name">Have a real asset in my name</option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal investment-capital verify-txt">
							    <option value="">How much are you looking to invest?</option>
								<option value="100000">Less than N100,000</option>
								<option value="200000">N101,000 - N200,000</option>
								<option value="400000">N201,000 - N400,000</option>
								<option value="600000">N401,000 - N600,000</option>
								<option value="800000">N601,000 - N800,000</option>
								<option value="1000000">N801,000 - N1,000,000</option>
								<option value="1400000">N1,100,000 - N1,400,000</option>
								<option value="1700000">N1,401,000 - N1,700,000</option>
								<option value="2000000">N1,701,000 - N2,000,000</option>
								<option value="2500000">N2,100,000 - N2,500,000</option>
								<option value="3000000">N2,501,000 - N3,000,000</option>
								<option value="3100000">N3,100,000 + </option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal financing-choice verify-txt">
							    <option value="">Payment choice</option>
								<option selected="selected" value="Outright cash">Outright cash</option>
								<option value="BuySmallSmall Financing">BuySmallSmall Financing</option>
								<option value="Mortgage">Mortgage</option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal investment-period verify-txt">
								<option value="">How long do you plan to hold this investment before selling?</option>
								<option value="5">Less than 5 years</option>
								<option value="5 - 10">5 - 10 years</option>
								<option value="10 - 20">10 - 20 years</option>
								<option value="Over 20 years">Over 20 years</option>
								<option value="Indefinitely">Indefinitely</option>
								<option value="Undecided">Undecided</option>
								<option value="Depends on market conditions">Depends on market conditions</option>
							</select>
						</div>

						<div class="single-span-col-input">
							<select class="minimal purchase-plan verify-txt">
							    <option value="">How soon would you like to make the purchase?</option>
								<option value="Within 5 working days">Within 5 working days</option>
								<option value="Next 10 to 30 days">Next 10 to 30 days</option>
								<option value="Less than 30 days">Less than 30 days</option>
								<option value="1 - 3 months">1 - 3 months</option>
								<option value="3 - 6 months">3 - 6 months</option>
								<option value="More than 6 months">More than 6 months</option>
							</select>
						</div>
					

						<div class="single-span-col-input">
							<div class="textInput-box">
								<input class="preferred-location-1 verify-txt txt-f" id="preferred-location-1" placeholder="Preferred Location 1" type="text">
							</div>
						</div>
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input class="preferred-location-2 verify-txt txt-f" id="preferred-location-2" placeholder="Preferred Location 2" type="text">
							</div>
						</div>
					
						<div class="single-span-col-input">
							<select class="medium verify-txt minimal">
							<option value="">How did you hear about us</option>
							<option value="Instagram">Instagram</option>
							<option value="Facebook">Facebook</option>
							<option value="Twitter">Twitter</option>
							<option value="Television">Television</option>
							<option value="Radio">Radio</option>
							<option value="Word of mouth">Word Of Mouth</option>
							<option value="Instagram">Newpaper</option>
							<option value="Billboards/Banner Ads">Billboards/Banner Ads</option>
							<option value="Newsletter/Email Campaigns">Newsletter/Email Campaigns</option>
							</select>
						</div>
						
						<div class="single-span-col-input">
							<div class="textInput-box">
								<input class="referral-code txt-f" id="referral-code" placeholder="Referral code" type="text">
							</div>
						</div>
					
						<div class="single-span-col-input">
						    
							<input type="submit" class="signup-button button" value="Finish" />
							
							<p>By signing up I agree to BuySmallsmall's Terms of Service and Privacy Policy. </p>
						</div>
						<!---<div class="sign-up-link">
						<span>Already have an account?</span>  <Link to="">Sign in</Link>
						</div>--->

					</Box>
				</div>
				<!--- Seventh form here --->
			</fieldset>
		</form>
    </div>	
</body>

</html>	
<script src="<?php echo base_url(); ?>assets/js/register.js"></script>
<script>
	$(document).ready(function(){
		
		//jQuery time
		var current_fs, next_fs, previous_fs; //fieldsets

		$(".next").click(function(){
								
			current_fs = $(this).closest("fieldset");
			
			next_fs = $(this).closest("fieldset").next();
			
			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
			
			//show the next fieldset
			next_fs.show(); 
			//hide the current fieldset with style

			current_fs.hide();
			
		});

		$(".previous").click(function(){
								
			current_fs = $(this).closest("fieldset");
			previous_fs = $(this).closest("fieldset").prev();
			
			//de-activate current step on progressbar
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
			
			//show the previous fieldset
			previous_fs.show(); 
			//hide the current fieldset with style
			current_fs.hide();
		});

	});
</script>
<script>
	$(document).ready(function(){

		$('.investment-purpose').click(function(){

			var id = $(this).attr('id');

			var purpose = $('#'+id).attr('data-investment-purpose');

			$('.investment-purpose').removeClass('active');

			$('#'+id).addClass('active');

			$('.investment-purpose-val').val(purpose);

		});

		$('.advert-medium').click(function(){

			var id = $(this).attr('id');

			var medium = $('#'+id).attr('data-advert-medium');

			$('.advert-medium').removeClass('active');

			$('#'+id).addClass('active');

			$('.medium').val(medium);

		});

	});
</script>