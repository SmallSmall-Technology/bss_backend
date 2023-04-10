		<div class="login-wrapper">
			
			<div class="login-title reset">
				<h1>Enter New Password</h1>
			</div>
			<div class="login-form-container">
				<div id="form-report"></div>
				<form id="newPassForm" method="POST">
				    
					<div class="login-input-form password-input">
						<input type="password" class="password verify-txt txt-f" id="password" placeholder="New password" />
						<i class='fa fa-eye-slash' id="unleashPass" style='cursor:pointer;color:grey'></i>
					</div>
					
					<div class="login-input-form password-input">
						<input type="password" class="password verify-txt txt-f" id="password_2" placeholder="Confirm password" />
					</div>


					<button class="reset-button login-submit">Change password</button>
					
					<input type="hidden" id="userID" value="<?php echo @$user_id; ?>" />

				</form>
			</div>
		</div>	

<script src="<?php echo base_url(); ?>assets/js/login.js"></script>
<script>
	$(document).ready(function(){

		$('#unleashPass').on('click', function(){

			var passInput = $("#password");

			if(passInput.attr('type')==='password')
			{

				passInput.attr('type','text');

			}else{

				passInput.attr('type','password');

			}
		});
	});
</script>