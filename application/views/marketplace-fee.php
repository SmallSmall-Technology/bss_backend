	<div class="section">
		<div class="section-inner">
			<div class="breadcrumb">
				<div class="journey-first journeys active-bread"> <div class="text">Buyer<br />Information</div><div class="active-bulb bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys"> <div class="text">Marketplace<br />Fee</div><div class="bulb active-bulb"><i class="fa fa-check"></i></div></div>
				<div class="journey-first journeys"> <div class="text">Verify</div><div class="text-last">Done!</div><div class="bulb third-bulb"><i class="fa fa-check"></i></div> <div class="bulb-last fourth-bulb"><i class="fa fa-check"></i></div></div>
			</div>
			<form id="marketPlaceForm">
				<div class="buyer-spc align-center">
					<div class="desc-spc">Marketplace Fee</div>
					<div class="marketplace-desc" style="text-align:center;">
						Select a mode of payment below and proceed to payment. 
					</div>
					<select class="payment-option" id="soflow">
						<option value="">Payment Option</option>
						<option selected="selected" value="paystack">Debit Card/Credit Card</option>
						<!--<option value="transfer">Bank Transfer</option>-->
					</select>
					<div style="width:100%;height:1px;background:#E3E3E3;margin-top:15px;margin-bottom:15px;"></div>
					<div class="field-container col-1">
						<input type="text" class="promo-code txt-f" id="promo-code" placeholder="Promo code (Optional)" />			
					</div>
					<div class="payment-info">Marketplace fee is <span style="font-family:helvetica;">&#x20A6;</span> <span class="total-price"> </span></div> 
					<div style="width:100%;display:inline-block;margin-bottom:15px">
    					<div style="float:left" class="btn recalculate-but" />Recalculate</div>
    					<div style="float:right" class="btn mp-fee-but" />Next</div>
					</div>
					<div class="paystack-logo"></div>
					
				</div>
				
			</form> 
		</div>
	</div>
<script src="<?php echo base_url(); ?>assets/js/payment.js"></script>
<script>
	
	function numberWithCommas(x) {

		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	}
	var order = JSON.parse(localStorage.getItem('buytolet_basket'));
	
	//var marketplaceFee = parseInt(order.property_cost) * 0.01;
	
	var marketplaceFee = order.property_cost;
	
	if(order.promo_price){
	    
	    marketplaceFee = order.promo_price;
	    
	}
	
	var pool_cost = 0;
	
	
	//if(marketplaceFee > 200000){
		
	   mFee = marketplaceFee;
		
	//}
	
	if(order.paymentPlan == "poolbuy"){
	   
	  // mFee = parseInt(order.cost) + parseInt(order.cost * 0.10);
	    mFee = order.payable;
	}
	
	order.payable = mFee;
	
	window.localStorage.setItem('buytolet_basket', JSON.stringify(order));
	
	$('.total-price').html(numberWithCommas(mFee));
	 
</script>