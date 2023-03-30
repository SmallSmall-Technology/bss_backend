	<table style="box-sizing:border-box" width="100%" style="margin-top:30px">
			<tr>
				<td width="100%">
					<div class="message-container" style="width:100%;border-radius:10px;text-align:center;background:#cdcdf6;padding:40px;box-sizing:border-box;">
						<div style="width:100%;	min-height:10px;overflow:auto;text-align:center;font-family:helvetica;font-size:30px;margin-bottom:20px;box-sizing:border-box;" class="name">Hello,</div>
						<div style="width:100%;min-height:10px;overflow:auto;text-align:center;font-family:helvetica;font-size:20px;margin-bottom:20px;" class="intro">Password Reset</div>
						<div style="width:100%;min-height:30px;	overflow:auto;text-align:center;font-family:helvetica;font-size:16px;margin-bottom:20px;box-sizing:border-box;">You have initiated a password reset on www.buy2let.com. Click on the button below to complete the password reset process.<p> The reset link is valid for only 48 hours. Alternatively, you can copy and paste the link below in the address bar of your browser.</p><p>If you didn't initiate this process, just ignore the message.</p></div>
						<div style="background:#f2f2f2;color:#16163D;font-family:helvetica;font-size:14px;padding:10px;border-radius:8px;margin-bottom:15px;margin-top:15px;box-sizing:border-box;">
						<?php echo @$resetLink; ?></div>
						<div style="width:100px;line-height:30px;border-radius:4px;text-align:center;margin:auto;border-radius:4px;" ><a style="text-decoration:none;display:inline-block;width:100%;height:100%;background:#16163D;color:#FFF;font-family:helvetica;border-radius:4px;font-size:14px;" href="<?php echo @$resetLink; ?>">Reset</a></div>
					</div>
				</td>
			</tr>
		</table> 
