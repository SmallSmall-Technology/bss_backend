	<table style="box-sizing:border-box" width="100%" style="margin-top:30px">
			<tr>
				<td width="100%">
					<div class="message-container" style="width:100%;border-radius:10px;text-align:center;background:#cdcdf6;padding:40px;box-sizing:border-box;">
						<div style="width:100%;	min-height:10px;overflow:auto;text-align:center;font-family:helvetica;font-size:30px;margin-bottom:20px;box-sizing:border-box;" class="name">Hello <?php echo @$name; ?>,</div>
						<div style="width:100%;min-height:10px;overflow:auto;text-align:center;font-family:helvetica;font-size:20px;margin-bottom:20px;" class="intro">Welcome to Buy2Let</div>
						<div style="width:100%;min-height:30px;	overflow:auto;text-align:center;font-family:helvetica;font-size:16px;margin-bottom:20px;box-sizing:border-box;">You need to verify your email before your account becomes active.
						<p>You can copy the link below and paste in your web browser or click the button below to activate your account.</p>Thank you for registering.<br /></div>
						<div style="background:#f2f2f2;color:#16163D;font-family:helvetica;font-size:14px;padding:10px;border-radius:8px;margin-bottom:15px;margin-top:15px;box-sizing:border-box;">
						<?php echo @$confirmationLink; ?></div>
						<div style="width:100px;line-height:30px;border-radius:4px;text-align:center;margin:auto;border-radius:4px;" ><a style="text-decoration:none;display:inline-block;width:100%;height:100%;background:#16163D;color:#FFF;font-family:helvetica;border-radius:4px;font-size:14px;" href="<?php echo @$confirmationLink; ?>">Verify</a></div>
					</div>
				</td>
			</tr>
		</table> 
