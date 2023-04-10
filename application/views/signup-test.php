	<div class="section">

		<div class="section-inner">

			<div class="logo-box">

				<div class="signup-logo-container">

					<img src="<?php echo base_url(); ?>assets/img/logo.png" />

				</div>

			</div>

			<div class="sign-up-form-box"> 

				<div class="form-text">Sign Up</div>

				<div class="form-text">Welcome to Buy2let</div>

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
					<div class="field-container col-2">

						<input type="text" class="age verify-txt txt-f" id="age" placeholder="Age" />
						
						<input type="text" class="income verify-txt txt-f" id="income" placeholder="Income (Monthly)" />			

					</div>
					<div class="field-container col-2">

						<input type="text" class="occupation verify-txt txt-f" id="occupation" placeholder="Occupation" />
						
						<input type="text" class="position verify-txt txt-f" id="position" placeholder="Position" />			

					</div>
					<div class="field-container col-1">
						
						<input type="text" class="address verify-txt txt-f" id="address" placeholder="Address" /> 
						
					</div>
					<div class="field-container col-2"> 
						<div class="box"> 
							<label>Gender</label>
							<select class="gender verify-txt" id="soflow">
								<option selected="selected" value="">Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="box">
							<label>Are you an Accredited Investor</label>
							<select class="accredited-investor verify-txt" id="soflow">
								<option selected="selected" value="">Are you an Accredited Investor</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
					
					<div class="field-container col-2"> 
						
						<div class="box">
							<label>What's your experience with rental property investing?</label>
							<select class="investment-experience verify-txt" id="soflow">
								<option value="I am just getting started">I am just getting started</option>
								<option value="I have purchased investment property before">I have purchased investment property before</option>
							</select>						
						</div>
						<div class="box">
							<label>What is your investment goal? Please pick your primary goal.</label>
							<select class="investment-goal verify-txt" id="soflow">
								<option value="Earn passive income">Earn passive income</option>
								<option value="Diversify my investment portfolio">Diversify my investment portfolio</option>
								<option value="Profit from a market with strong appreciation potential">Profit from a market with strong appreciation potential</option>
								<option value="Have a real asset in my name">Have a real asset in my name</option>
							</select>						
						</div>
					</div>
					<div class="field-container col-2"> 
						
						<div class="box">
							<label>How much are you looking to invest?</label>
							<select class="investment-capital verify-txt" id="soflow">
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
						<div class="box">
							<label>Financing choice</label>
							<select class="financing-choice verify-txt" id="soflow">
								<option selected="Cash" value="">Cash</option>
								<option value="Mortgage">Mortgage</option>
								<option value="Payment Plan">Payment Plan</option>
							</select>						
						</div>
					</div>
					<div class="field-container col-2"> 
						
						<div class="box">
							<label>How long do you plan to hold this investment before selling?</label>
							<select class="investment-period verify-txt" id="soflow">
								<option value="5">Less than 5 years</option>
								<option value="5 - 10">5 - 10 years</option>
								<option value="10 - 20">10 - 20 years</option>
								<option value="Over 20 years">Over 20 years</option>
								<option value="Indefinitely">Indefinitely</option>
								<option value="Undecided">Undecided</option>
								<option value="Depends on market conditions">Depends on market conditions</option>
							</select>						
						</div>
						<div class="box">
							<label>How soon would you like to make the purchase?</label>
							<select class="purchase-plan verify-txt" id="soflow">
								<option value="Less than 30 days">Less than 30 days</option>
								<option value="1 - 3 months">1 - 3 months</option>
								<option value="3 - 6 months">3 - 6 months</option>
								<option value="More than 6 months">More than 6 months</option>
							</select>						
						</div> 
					</div>
					<div class="field-container col-2">
						
						<input type="text" class="preferred-location-1 verify-txt txt-f" id="preferred-location-1" placeholder="Preferred Location 1" />
						
						<input type="text" class="preferred-location-2 verify-txt txt-f" id="preferred-location-2" placeholder="Preferred Location 2" />
					</div>
					<div class="field-container"> 

						<select class="medium verify-txt" id="soflow">
							<option value="">How did you hear about us</option>
							<option value="Instagram">Instagram</option>
							<option value="Facebook">Facebook</option>
							<option value="Twitter">Twitter</option>
							<option value="Television">Television</option>
							<option value="Radio">Radio</option>
							<option value="Word of mouth">Word Of Mouth</option>
							<option value="Instagram">Newpaper</option>
						</select>			

					</div>

					<div class="field-container disclaimer">

						By clicking Sign Up or registering, I agree<br />to  Buy2let’s <a href="">Terms and Conditions</a><br /> and I acknowledge that I understand the <a href="">agency relationship</a>.

					</div>

					<div class="field-container align-center">

						<input type="submit" class="signup-button" value="Sign Up" />

					</div>

				</form>

			</div>

		</div>

	</div>

<script src="<?php echo base_url(); ?>assets/js/register.js"></script>