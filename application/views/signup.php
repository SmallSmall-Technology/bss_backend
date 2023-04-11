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
						
						<div class="single-span-col-input all-fields">
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
						<div class="single-span-col-input all-fields">
							<div class="textInput-box">
								<input placeholder="Occupation" id="occupation" class="occupation verify-txt" type="text">
							</div>
						</div>
						<div class="single-span-col-input all-fields">
							<div class="textInput-box">
								<input class="position verify-txt" id="position" placeholder="Position" type="text">
							</div>
						</div>
						<div class="single-span-col-input all-fields">
							<textarea class="text-area address"	rows="4" placeholder="Address"></textarea>
						</div>
					
						<div class="single-span-col-input all-fields">
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
						
						<div class="single-span-col-input all-fields">
							<div class="textInput-box">
								<input class="referral-code txt-f" id="referral-code" placeholder="Referral code" type="text" value="<?php echo ($refCode) != '' ? $refCode : ''; ?>"> 
							</div>
						</div>
					
						<div class="single-span-col-input all-fields">
						    
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