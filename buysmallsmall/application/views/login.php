	<div class="login-pane">

		<div class="form-box">

			<div class="form-box-logo">

				<img src="<?php echo base_url(); ?>assets/img/logo.png" />

			</div>

			<div class="form-text"><a href="<?php echo base_url('signup'); ?>">Need to sign up?</a></div>

			<div class="form-text">Welcome to Buy2let</div>

			<div class="form-report"></div>

			<form id="loginForm">

				<div class="field-container col-1">

					<input type="text" class="username verify-txt txt-f" id="username" placeholder="Email" />			

				</div>

				<div class="field-container col-1">

					<input type="password" class="password verify-txt txt-f" id="password" placeholder="Password" />			

				</div>

				<input type="hidden" class="current-page" id="current-page" value="<?php if(@$_SERVER['HTTP_REFERER']){ echo $_SERVER['HTTP_REFERER']; }/*else{ echo $this->session->userdata('page_link'); }*/ ?>" />

				<div class="forgot-pass">Forgot Password?</div>

				<input type="submit" class="login-button" value="Sign in" />

			</form>
            <form id="passwordForgotForm">
                <div class="reset-feedback"></div>

				<div class="field-container col-1">

					<input type="text" class="username chk-txt txt-f" id="email" placeholder="Email" />			

				</div>

				<input type="hidden" class="current-page" id="current-page" value="<?php if(@$_SERVER['HTTP_REFERER']){ echo $_SERVER['HTTP_REFERER']; }/*else{ echo $this->session->userdata('page_link'); }*/ ?>" />

				<div class="login-pass">Need to Login?</div>

				<input type="submit" class="login-button" value="Reset Password" />

			</form>
		</div>

	</div>

<script src="<?php echo base_url(); ?>assets/js/login.js"></script>