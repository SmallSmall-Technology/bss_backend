//Javascript document
var baseUrl = "https://buy.smallsmall.com/";

$('.option-but').click(function(){
	 
	"use strict";
	
	$(this).html("Wait...");	
	
	var option_taken = $("input[name='option-but']:checked").val();	
	
	var pool_check = $('.pool_check').val();	
	
	var total_pool_units = 0;
	
	var pplan_repayment = $('#subsequent-payment').val();
	
	var property_name = $('#property_name').val();
	
	var payment_period = $('#repayment-period').val();
	
	var option_value = option_taken.split("-");
	
	var plan = option_value[0];
	
	var repayment_val = option_value[1];
	
	var propertyID = option_value[2];
	
	var payable = $('.payment').val();
	
	var property_cost = $('.total-amount').val();
	
	var unit_amount = 0;
	
	var promo = $('.promo-price').val();
	
	var promo_type = $('.promo-category').val();
	
	var promo_code = '';
	
	if(plan == 'pplan'){
		
		repayment_val = pplan_repayment;
		
	}
	
	if(pool_check == 'yes'){
	    
	    repayment_val = $('.pool-total-cost').val();
	    
	    payable = $('.pool-total-cost').val();
	    
    	unit_amount = $('.unit-amount').val();
    	
    	total_pool_units = $('.pool_units').val();
	    
	    plan = "poolbuy";
	}
	
	if(plan != 'pplan'){
		
		payment_period = 0;
		
	}
	
	if(localStorage.getItem('buytolet_basket') === null){
		


		var newBasket = {

						"paymentPlan" : plan,

						"property_id" : propertyID,

						"property_name" : property_name,

						"cost"        : repayment_val,
			
						"payable"     : payable,
			
						"method"      : '',
			
						"property_cost" : property_cost,
			
						"payment_period" : payment_period,
						
						"unit_amount" : unit_amount,
						
						"promo_price" : promo,
						
						"promo_type" : promo_type,
						
						"promo_code" : promo_code,

						"marketplace_fee" : []

				   };

		window.localStorage.setItem('buytolet_basket', JSON.stringify(newBasket));	
		
	}else{
		
		//Get all cart products

		var order = JSON.parse(localStorage.getItem('buytolet_basket'));


		order.paymentPlan = plan;
		
		order.property_id = propertyID;

		order.property_name = property_name;
		
		order.cost = repayment_val;
		
		order.payable = payable;
			
		order.payment_period = payment_period,
		
		order.property_cost = property_cost;
						
		order.unit_amount = unit_amount,
		
		order.promo_price = promo;
		
		order.promo_type = promo_type;
		
		order.promo_code = '';
		
		order.method = '';


		//Update the cart counter icon on the page header

		window.localStorage.setItem('buytolet_basket', JSON.stringify(order));	
		
		
	}	
	//Add to local storage
	
	//alert(option_value[0]+' '+option_value[1]);
	
	window.location.href = baseUrl+"buyer-information";
});

$('#buyerInfoForm').submit(function(e){
	
	"use strict";
	
	e.preventDefault();
	
	$('.buyer-info').val("Wait...");

	var firstname = $.trim($(".fname").val());
	
	var lastname = $.trim($(".lname").val());
	
	var email = $.trim($(".email").val());
	
	var phone = $.trim($(".phone").val());
	
	var address = $.trim($(".address").val());
	
	var country = $(".country").val();
	
	var state = $(".state").val();

	var buyer_type = $.trim($(".buyer-type").val());
	
	var city = $.trim($(".city").val());
	
	

	var order = JSON.parse(localStorage.getItem('buytolet_basket'));
	
	/*var data = {"payment_plan" : order.payment_plan, "property_id" : order.property_id, "cost" : order.cost, "firstname" : firstname, "lastname" : lastname, "email" : email, "phone" : phone, "address" : address, "country" : country, "state" : state, "city" : city, "buyer_type" : buyer_type, "payable" : order.payable};*/

	var customerDetails = {"firstname": firstname, "lastname" : lastname, "email" : email, "phone" : phone, "address" : address, "country" : country, "state" : state, "city" : city, "buyer_type" : buyer_type};	

	order.marketplace_fee.push(customerDetails);
	
	window.localStorage.setItem('buytolet_basket', JSON.stringify(order));
	
	
	window.location.href = baseUrl+"marketplace-fee";
	
	return false;	
	
});
$('.mp-fee-but').click(function(){
	
	"use strict";
	
	$('.mp-fee-but').html("Wait...");
	
	var method_of_payment = $('.payment-option').val();
	
	if(method_of_payment == ''){
		
		alert("Please select a mode of payment");
		
		return false;
		
	}
	
	var order = JSON.parse(localStorage.getItem('buytolet_basket'));
	
	order.method = method_of_payment;
	
	window.localStorage.setItem('buytolet_basket', JSON.stringify(order));
	
	
	window.location.href = baseUrl+"verify";
	
	
});

$('.recalculate-but').click(function(){
	
	"use strict";
	
	$(this).html("Recalculating...");
	
	var promo_code = $('.promo-code').val();
	
	var promo_val = 0;
	
	var new_price = 0;
	
	if(!promo_code){
	    
	    $('.promo-code').css('border', '1px solid red');
	    
	    $('.recalculate-but').html('Recalculate');
	    
	    return false;
	    
	}
	
	var data = {"promocode" : promo_code};
	
	//Check promo code
	$.ajaxSetup ({ cache: false });
	$.ajax({			

		url: baseUrl+"buytolet/confirmCode/",

		type: "POST",

		data: data,

		dataType : 'json',

		success: function(data){

			if(data.result == 'success'){
                
                var order = JSON.parse(localStorage.getItem('buytolet_basket'));
                
                promo_val = data.msg / 100;
                
                order.promo_code = promo_code;
                
                order.payable = order.payable - (order.payable * promo_val);
                
                order.promo_price = order.promo_price - (order.promo_price * promo_val);
                
                window.localStorage.setItem('buytolet_basket', JSON.stringify(order));
                
                location.reload(true);

			}else{

				alert("Promo code not valid");
				
				$('.recalculate-but').html('Recalculate');
				
				return false;

			}				

		},
		
		error: function(){
		    
		    alert("Error!");
			
			$('.recalculate-but').html('Recalculate');
			
			return false;
			
		}

	});
	
});

$('.verify-but').click(function(){
	
	"use strict";
	
	$('.verify-but').html("Wait...");
	
	var order = JSON.parse(localStorage.getItem('buytolet_basket'));
	
	
	var data = {"payment_plan" : order.paymentPlan, "property_id" : order.property_id, "cost" : order.cost, "firstname" : order.marketplace_fee[0].firstname, "lastname" : order.marketplace_fee[0].lastname, "email" : order.marketplace_fee[0].email, "phone" : order.marketplace_fee[0].phone, "address" : order.marketplace_fee[0].address, "country" : order.marketplace_fee[0].country, "state" : order.marketplace_fee[0].state, "city" : order.marketplace_fee[0].city, "buyer_type" : order.marketplace_fee[0].buyer_type, "payable" : order.payable, "method_of_payment" : order.method, "payment_period" : order.payment_period, "promo_code" : order.promo_code};
	
	$.ajaxSetup ({ cache: false }); 

	$.ajax({			

		url: baseUrl+"buytolet/insertRequest/",

		type: "POST",

		data: data,

		success: function(data){

			if(data == 1){

				//Redirect to pay
				//$('#continue-but').html("Continue");
				
				window.localStorage.removeItem('buytolet_basket');
	
				window.location.href = baseUrl+"final";

				$('.verify-but').html("Next");
				
				return false;

			}else{

				alert("Error!!!"); 

				$('.verify-but').html("Next");
				return false;

			}				

		},
		
		error: function(){
			
			$('.verify-but').html("Next");
			return false;
			
		}

	});
	
});
