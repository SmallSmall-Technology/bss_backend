	<div class="login-pane">

		<div class="form-box">

			<div class="form-box-logo">

				<img src="<?php echo base_url(); ?>assets/img/logo.png" />

			</div>

			<div class="form-text">Enter New Password</div>

			<div class="form-report"></div>

			<form id="newPassForm">

				<div class="field-container col-1">

					<input type="password" class="password verify-txt txt-f" id="password" placeholder="Password" />			

				</div>

				<input type="hidden" id="userID" value="<?php echo @$user_id; ?>" />

				<input type="submit" class="login-button" value="Change Password" />

			</form>
            
		</div>

	</div>

<script src="<?php echo base_url(); ?>assets/js/login.js"></script>