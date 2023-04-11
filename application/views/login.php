		<div class="login-wrapper">
			<div class="login-title login-user">
				<h1>Login</h1>
			</div>
			<div class="login-title reset">
				<h1>Reset Password</h1>
			</div>
			<div class="login-form-container">
				<div id="form-report"></div>
				<form id="loginForm" method="POST">
					<div class="login-input-form">
						<input type="text" class="verify-txt txt-f username" id="username" placeholder="Email" />
					</div>
					<div class="login-input-form password-input">
						<input type="password" class="password verify-txt txt-f" id="password" placeholder="Password" />
						<i class='fa fa-eye-slash' id="unleashPass" style='cursor:pointer;color:grey'></i>
					</div>

					<div class="login-forgot-password">
						<a class="forgot-password forgot-pass" >forgot password?</a>
					</div>

					<input type="hidden" class="current-page" id="current-page" />

					<button class="login-button login-submit">Login</button>

					<div class="sign-up-link-box">
						<span>Don't have an account? </span> <a class="forgot-password" href="<?php echo base_url('signup'); ?>">Sign up</a>
					</div>
				</form>

				<form id="passwordForgotForm" method="POST">
					<div class="reset-feedback"></div>

					<div class="login-input-form">
						<input type="text" class="txt-f reset-username" id="reset-username" placeholder="Email" />
					</div>

					<input type="hidden" class="current-page" id="current-page" />

					<div class="login-forgot-password">
						<a class="forgot-password login-pass">Need to login?</a>
					</div>
					<button class="reset-btn login-submit">Reset Password</button>

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