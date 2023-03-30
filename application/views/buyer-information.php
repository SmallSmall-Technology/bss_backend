	<div class="section">
		<div class="section-inner">
			<div class="breadcrumb">
				<div class="journey-first journeys"> <div class="text">Buyer<br />Information</div><div class="active-bulb bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys"> <div class="text">Marketplace<br />Fee</div><div class="bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys"> <div class="text">Verify</div><div class="text-last">Done!</div><div class="bulb third-bulb"><i class="fa fa-check"></i></div> <div class="bulb-last fourth-bulb"><i class="fa fa-check"></i></div></div>
			</div>
			<form id="buyerInfoForm">
				<div class="buyer-spc align-center">
					<div class="desc-spc">Buyer Information</div>
					<select class="buyer-type" id="soflow">
						<option value="individual">Individual</option>
						<option value="corporate">corporate</option>
					</select>
				</div>
				<div class="left-form">
					<div class="field-container col-2">
						<input type="text" class="fname txt-f" id="fname" placeholder="First Name" value="<?php echo @$fname; ?>" />
						
						<input type="text" class="lname txt-f" id="lname" placeholder="Last Name" value="<?php echo @$lname; ?>" />			
					</div>
					<div class="field-container col-1">
						<input type="text" class="email txt-f" id="email" placeholder="Email" value="<?php echo @$email; ?>" />			
					</div>
					<div class="field-container col-1">
						<input type="text" class="phone txt-f" id="phone" placeholder="Phone Number" value="<?php echo @$phone; ?>" />			
					</div>
					<div class="field-container col-1">
						<input type="text" class="address txt-f" id="address" placeholder="Address" />			
					</div>
				</div>
				<div class="right-form">
					<div class="field-container col-1">
						<input type="text" class="country txt-f" id="country" placeholder="Country" />		
					</div>
					<div class="field-container col-1">
						<input type="text" class="state txt-f" id="state" placeholder="State" />			
					</div>
					<div class="field-container col-1">
						<input type="text" class="city txt-f" id="city" placeholder="City" />			
					</div>
				</div>
				<div class="empty-spc align-center">
					<input type="submit" class="btn buyer-info" value="Next" /> 
				</div>
			</form>
		</div>
	</div>
<script src="<?php echo base_url(); ?>assets/js/payment.js"></script>