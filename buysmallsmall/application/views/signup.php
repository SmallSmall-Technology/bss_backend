	<div class="section">

		<div class="section-inner">
		    <div class="breadcrumb">
				<div class="journey-first signup-journeys active-bread"> <div class="text">Get<br />Started</div><div class="active-bulb bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first signup-journeys"> <div class="text-last">Investor<br />Profile</div> <div class="bulb-last fourth-bulb"><i class="fa fa-check"></i></div></div>
			</div>

			<!---<div class="logo-box">

				<div class="signup-logo-container">

					<img src="<?php //echo base_url(); ?>assets/img/logo.png" />

				</div>
 
			</div>--->

			<div class="sign-up-form-box"> 
 
				<div class="top-form-text">Basic Profile</div> 

				<div class="form-report"></div>

				<form id="signupForm">

					<div class="field-container col-2">  

						<input type="text" class="fname verify-txt txt-f" id="fname" placeholder="First Name" />

						<input type="text" class="lname verify-txt txt-f" id="lname" placeholder="Last Name" />			

					</div>

					<div class="field-container col-2">

						<input type="text" class="email verify-txt txt-f" id="email" placeholder="Email" />

						<input type="text" class="phone verify-txt txt-f" id="phone" placeholder="Phone Number" />			

					</div>

					<div class="field-container col-2">

						<input type="password" class="pass verify-txt txt-f" id="pass" placeholder="Password" />

						<input type="password" class="confirm-pass verify-txt txt-f" id="confirm-pass" placeholder="Confirm Password" />			

					</div>
					<div class="field-container col-3">
					    <div class="box"> 
							<select class="gender verify-txt" id="soflow">
								<option selected="selected" value="">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
                        <div class="box">
						    <input type="text" class="age verify-txt txt-f" id="age" placeholder="Age" />
						</div>
						<div class="box">
						    <input type="text" class="income verify-txt txt-f" id="income" placeholder="Income (Monthly)" />			
                        </div>
					</div>
					<div class="field-container col-2">

						<input type="text" class="occupation verify-txt txt-f" id="occupation" placeholder="Occupation" />
						
						<input type="text" class="position verify-txt txt-f" id="position" placeholder="Position" />			

					</div>
					<div class="field-container col-1">
						
						<input type="text" class="address verify-txt txt-f" id="address" placeholder="Address" /> 
						
					</div>
					

					<div class="field-container align-center">

						<input type="submit" class="signup-button" value="Next" />

					</div>

				</form>

			</div>

		</div>

	</div>

<script src="<?php echo base_url(); ?>assets/js/register.js"></script>