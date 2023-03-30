	<div class="section">
		<div class="section-inner">
			<div class="breadcrumb">
				<div class="journey-first journeys active-bread"> <div class="text">Buyer<br />Information</div><div class="active-bulb bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys active-bread"> <div class="text">Marketplace<br />Fee</div><div class="bulb active-bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys"> <div class="text">Verify</div><div class="text-last">Done!</div><div class="active-bulb bulb"><i class="fa fa-check"></i></div> <div class="bulb-last fourth-bulb"><i class="fa fa-check"></i></div></div>
			</div>
			<form id="marketPlaceForm">
				<div class="buyer-spc align-center">
					<div class="desc-spc">Verify information</div>
					<div class="marketplace-desc" style="text-align:center;">
						Confirm before you proceed 
					</div>
					<table style="font-family:mulish-regular" width="100%" >
						<tr>
							<td width="50%" style="text-align:left"><b style="color:#16163D;">Firstname:</b></td>
							<td style="text-align:left"><span class="firstname"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Lastname:</b></td>
							<td style="text-align:left"><span class="lastname"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Phone:</b></td>
							<td style="text-align:left"><span class="phone"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Email:</b></td>
							<td style="text-align:left"><span class="email"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Property Name:</b></td>
							<td style="text-align:left"><span class="prop-name"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Share Price:</b></td>
							<td style="text-align:left"><span style="font-family:helvetica;">&#x20A6;</span> <span class="prop-price"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">No of Shares:</b></td>
							<td style="text-align:left"> <span class="num-of-shares">0</span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Plan:</b></td>
							<td style="text-align:left"><span class="plan"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Marketplace Fee:</b></td>
							<td style="text-align:left"><span style="font-family:helvetica;">&#x20A6;</span> <span class="payable"> </span></td>
						</tr>
						<tr>
							<td style="text-align:left"><b style="color:#16163D;">Payment Method:</b></td>
							<td style="text-align:left"> <span class="mop"> </span></td>
						</tr>
					</table>
					<!--<div class="payment-info">Marketplace fee is <span style="font-family:helvetica;">&#x20A6;</span> <span class="total-price"> </span></div>
					<div class="paystack-logo"></div>-->
					
					<div style="float:right" class="btn verify-but" />Next</div>
				</div>
				
			</form>
			<form id="paymentForm">

				<input type="hidden" class="email" id="email-address" required />			  

				<input type="hidden" class="payable" id="amount" required />

				<input class="firstname" type="hidden" id="first-name" />

				<input class="lastname" type="hidden" id="last-name" />

				<button type="submit" class="btn paystack-but" onclick="payWithPaystack()"> Pay </button>

			</form> 
		</div>
	</div> 
<script src="<?php echo base_url(); ?>assets/js/payment.js"></script>
<script>
	function numberWithCommas(x) {

		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	}
	var order = JSON.parse(localStorage.getItem('buytolet_basket'));
	
	$('.firstname').html(order.marketplace_fee[0].firstname);
	$('.lastname').html(order.marketplace_fee[0].lastname);
	$('.email').html(order.marketplace_fee[0].email);
	$('.phone').html(order.marketplace_fee[0].phone);
	$('.prop-name').html(order.property_name);
	$('.prop-price').html(numberWithCommas(order.property_cost));
	$('.num-of-shares').html(order.unit_amount);
	$('.plan').html(order.paymentPlan+" plan");
	$('.payable').html(numberWithCommas(order.payable));
	$('.mop').html(order.method);
	
	if(order.method == 'paystack'){
		
		$('#first-name').val(order.marketplace_fee[0].firstname);
		$('#last-name').val(order.marketplace_fee[0].lastname);
		$('#email-address').val(order.marketplace_fee[0].email);
		$('#amount').val(order.payable);
		$('.verify-but').hide();
		
	}else{
		
		$('.paystack-but').hide();
		
	}
	
	const paymentForm = document.getElementById('paymentForm');

	paymentForm.addEventListener("submit", payWithPaystack, false);

	function payWithPaystack(e) {

	  e.preventDefault();

	  let handler = PaystackPop.setup({

		key: 'pk_live_7741a8fec5bee8102523ef51f19ebb467893d9d2', // Replace with your public key

		email: document.getElementById("email-address").value,

		amount: document.getElementById("amount").value * 100,

		ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

		// label: "Optional string that replaces customer email"

		onClose: function(){

		  

		},

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;

      alert(message);

    }

  });

  handler.openIframe();

}
</script>
<script src="https://js.paystack.co/v1/inline.js"></script> 