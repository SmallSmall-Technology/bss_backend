		<div class="popup-overlay">

		<div class="popup-insp">

			<div class="close-popup">X</div>

			<div class="form-report"></div>

			<div class="popup-desc">Select date and time for inspection</div>

			<div class="time-and-date-field"><i class="fa fa-calendar"></i><input type="date" class="insp-date" /></div>

			<input type="hidden" class="user-id" value="<?php echo @$userID; ?>" />

			<div class="inspection-btn">Schedule Inspection</div>

		</div>

	</div>

	<div class="footer">

		<div class="footer-inner">

			<div class="footer-chalet">

				<div class="footer-link-item">About BuytoLet</div>

				<div class="footer-link-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></div>

				<div class="footer-link-item"><a href="<?php echo base_url('faq'); ?>">FAQs</a></div>

				<div class="footer-link-item"><a href="<?php echo base_url('terms-and-conditions'); ?>">Terms and conditions</a></div>

				<div class="footer-link-item"><a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a></div>

				<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="footer logo" />

			</div>
 
			<div class="footer-chalet">

				<div class="footer-link-item">Learn</div>

				<div class="footer-link-item"><a href="<?php echo base_url('how-it-works'); ?>">How it Works</a></div>

				<div class="footer-link-item"><a href="#">Blog</a></div>

				<div class="footer-link-item"><a href="<?php echo base_url('about-us#RGO'); ?>">Guaranteed Rent</a></div>

				<div class="footer-link-item"><a href="<?php echo base_url('about-us#CSH'); ?>">Compact Starter Homes</a></div>

			

			</div>

			<div class="footer-chalet">

				<div class="footer-link-item">Contact</div>

				<div class="footer-link-item"><a href="#">General Enquiries</a></div>

				<div class="footer-link-item"><a href="tel:+234081990099999">0903 633 9800</a></div>

				<div class="footer-link-item"><a href="mailto:info@buytolet.ng">info@buy2let.ng</a></div> 

				<div class="footer-link-item">&nbsp;</div>

				<div class="footer-link-item"><a href="https://www.twitter.com/buy2letng">Twitter</a></div>

				<div class="footer-link-item"><a href="https://www.facebook.com/buy2letng">Facebook</a></div>

				<div class="footer-link-item"><a href="https://www.instagram.com/buy2letng">Instagram</a></div>

				<!--<div class="footer-link-item"><a href="https://www.linkedin.com/but2letng">LinkedIn</a></div>-->

			
 
			</div>			

		</div>

		

		<div class="copyright">Copyright &copy; 2021 <a style="color:#000;text-decoration:none" href="http://www.buy2let.ng">www.buy2let.ng</a></div>

	</div>

<script>

	var slider = document.getElementById("myRange");

	var output = document.getElementById("demo");

	var payment = document.getElementById("payment");

	var total_cost = document.getElementById("total-cost").value;	
	
	var expected_rent = document.getElementById("expected-rent").value;
	
	var tooltip = document.getElementById('pp-tooltip');

	var fourty_five_percent = document.getElementById("fourty-five-percent").value;

	var seventy_five_percent = document.getElementById("seventy-five-percent").value;

	var ninety_five_percent = document.getElementById("ninety-five-percent").value;
	
	var developerPlan = document.getElementById("developer-plan");
	
	var mortgagePlan = document.getElementById("mortgage-plan");
	
	var selfFinance = document.getElementById("self-finance");

	output.innerHTML = "<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(slider.value);



	slider.oninput = function() {
		

		var pplan_minimum = document.getElementById("payment-plan-minimum").value;

		var pplan = $(".payment-plan-option").val();

	  	output.innerHTML = "<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(this.value);
		
		payment.value = this.value;
		
		//$("input[name='repayment-duration']:checked"). val(); 
		 
		var payment_period = $(".repayment-duration"). val();
		
	
		if(pplan == 'yes'){
		    
		    
			
			if(this.value > pplan_minimum){
					
				var the_val = (total_cost - this.value) / payment_period;
				//alert(payment.value+ ' - '+payment_period+' - '+the_val+' - '+this.value);
				$('.repayment-cost').html(numberWithCommas(the_val.toFixed(0)));

				$('#subsequent-payment').val(the_val.toFixed(0));
				
				var down_pay = this.value;
				
				if(expected_rent > the_val){
				    
				    $("#pp-tooltip").html("You have selected "+numberWithCommas(down_pay.toFixed(0))+" down payment. This property generates enough monthly cash to cover the monthly installment, and gives you extra cash.");
					
				}else if(expected_rent == the_val){
					
					
					$("#pp-tooltip").html("You have selected "+numberWithCommas(down_pay.toFixed(0))+" down payment. This property generates adequate monthly cash that matches the monthly installment.");
					
				}else if(expected_rent < the_val){
					
					
					$("#pp-tooltip").html("You have selected "+numberWithCommas(down_pay.toFixed(0))+" down payment. This property does not generate enough cash to cover the monthly installment. You will be expected to pay the difference monthly.");
					
				}
				return false;
				
				
			}
					
		}
		
		//alert("value: "+this.value+" 45%: "+fourty_five_percent);
		
		if(parseInt(this.value) < parseInt(fourty_five_percent)){
			
			//$('.developer-plan').show();
			$('.mortgage-plan').show();
			$('.self-finance').show();
			
			/*selfFinance.style.display = 'block';
			mortgagePlan.style.display = 'block';
			developerPlan.style.display = 'block';*/
			
		}else if(parseInt(this.value) >= parseInt(fourty_five_percent) && parseInt(this.value) <= parseInt(seventy_five_percent)){
			//$('.developer-plan').show();
			$('.mortgage-plan').show();
			$('.self-finance').hide();
			/*selfFinance.style.display = 'none';
			mortgagePlan.style.display = 'block';
			developerPlan.style.display = 'block';*/
			
		}else if(parseInt(this.value) >= parseInt(seventy_five_percent) && parseInt(this.value) <= parseInt(ninety_five_percent)){
			//$('.developer-plan').show();
			$('.mortgage-plan').hide();
			$('.self-finance').hide();
			/*selfFinance.style.display = 'none';
			mortgagePlan.style.display = 'none';
			developerPlan.style.display = 'block';*/	
			
		}else if(parseInt(this.value) >= parseInt(ninety_five_percent)){
			//$('.developer-plan').hide();
			$('.mortgage-plan').hide();
			$('.self-finance').show();
			/*selfFinance.style.display = 'block';
			mortgagePlan.style.display = 'none';
			developerPlan.style.display = 'none';*/		 
			
		}  
 
	}

	

	function numberWithCommas(x) {

		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	}

</script>

<script src="<?php echo base_url(); ?>assets/js/property-summary.js"></script>

<script src="<?php echo base_url(); ?>assets/js/financial-hl.js"></script>

<script src="<?php echo base_url(); ?>assets/js/inspection.js"></script>

<script src="<?php echo base_url(); ?>assets/js/mobile-menu.js"></script>

</body>

</html>