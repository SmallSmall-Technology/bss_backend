
$( ".pplan-rep" ).click(function(){
	
	"use strict";	
	/*
	$('.feeble-but').show();
	
	$('.unfeeble-but').hide();*/
	
	var promo_category = $('.promo-category').val();
	
	var promo_price = $('.promo-price').val();
	
	var minimum_val = $('.payment-plan-minimum').val();
	
	var total_cost = $('#total-cost').val();
	
	//If there is a promo available for payment plan or all finance options
	if(promo_category == 'all' || promo_category == 'payment-plan'){
	    
	    total_cost = promo_price;
	    
	}
	
	var cost_difference = total_cost - minimum_val;
	
	var payment_val = cost_difference / 12;
	
	$('.payment').val(minimum_val);
	
   	//if value < max
   	var sliderStep = 0.05 * total_cost;
	
	document.getElementById("myRange").step = sliderStep;
	
	document.getElementById("myRange").max = total_cost;
	
	document.getElementById("myRange").min = 0.4 * total_cost;
	
   	$("#myRange").val(minimum_val); 
	
   	$("#myRange").trigger('change');
	
	$('.repayment-cost').html(numberWithCommas(payment_val.toFixed(0)));
	
	$('#subsequent-payment').val(payment_val.toFixed(0));	
	
	$('.payment-plan-info').show();
	
	slide();
   	
   	$("#demo").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(minimum_val));
	
}); 

function slide(event, ui){
	
	"use strict";
	
    var result = true;
	
	var minimum_ = $('.payment-plan-minimum').val();
	
    if ($('#myRange').val() < minimum_){
		
        $('#myRange').slider( "value" , minimum_ );
		
        result = false;
		
    }
	
	
    return result;
}
$('.repayment-duration').on('change', function(){ 
	
	"use strict";
	
	var promo_category = $('.promo-category').val();
	
	var promo_price = $('.promo-price').val();
	
	var slider_level = $('#payment').val();
	
	var total_cost = $('#total-cost').val();
	
	//If there is a promo available for payment plan or all finance options
	if(promo_category == 'all' || promo_category == 'payment-plan'){
	    
	    total_cost = promo_price;
	    
	}
	
	var cost_difference = total_cost - slider_level;
	
	var payment_period = $(".repayment-duration"). val();
	
	var payment_val = cost_difference / payment_period;	
	
	$('.repayment-cost').html(numberWithCommas(payment_val.toFixed(0)));
	
	$('#repayment-period').val(payment_period);
	 
	$('#subsequent-payment').val(payment_val.toFixed(0));
	
});

$('.unit-amount').on('change', function(){ 
	
	"use strict";
	
	//Asset appreciation percentage
	var asset_slider_val = $('.asset_appr_value').val();
	
	//Amount of years
	var holding_years = $('.rs-range').val();
	
    var pool_check = $('.pool_check').val();
	
	var total_pool_units = $('.pool_units').val();
	
	var expected_rent = $('#expected-rent').val();
	
	var expected_mthly =  $('#expected-rent').val() / 12;
	
	var per_unit_cost = $('#total-cost').val();
	
	var selected_units = $('.unit-amount').val();
	
	var sum = 0;
	
	var actual_add = 0;
	
	var asset_appr_1 = document.getElementById("asset_appr_1");
	
    var asset_appr_2 = document.getElementById("asset_appr_2");
    
    var asset_appr_3 = document.getElementById("asset_appr_3");
    
    var asset_appr_4 = document.getElementById("asset_appr_4");
    
    var asset_appr_5 = document.getElementById("asset_appr_5");
	
	if(selected_units == ''){
	    
	    $('.pool-cost').html(numberWithCommas(0));
	
	    $('.pool-total-cost').val(0);
	    
	    $('.mthly-share').html(numberWithCommas(expected_mthly.toFixed(0)));
	
	    $('.yrly-share').html(numberWithCommas(expected_rent));
	    
	    return false;
	}
	
	//alert(per_unit_cost);
	
	var monthly_share = ((expected_rent * selected_units) / total_pool_units ) / 12;
	
	var yearly_share = (expected_rent * selected_units) / total_pool_units;
	
	$('.pool-cost').html(numberWithCommas(per_unit_cost * selected_units));
	
	$('.pool-total-cost').val(per_unit_cost * selected_units);
	
	$('.mthly-share').html(numberWithCommas(monthly_share.toFixed(0)));
	
	$('.yrly-share').html(numberWithCommas(yearly_share.toFixed(0)));
	
	//Update financial highlights
	
	//Guaranteed rent will be (rent * asset_appr/ 100) * number of apartments

	/*if(holding_years >= 2){
	    
        var val = (5 * holding_years) - 5;
        
        var per = (val / 100) * expected_rent;
        
        val = parseInt(expected_rent) + parseInt(per);
        
        $('#expected-rent-val').html(numberWithCommas(val * selected_units));
        
    }else{
        
        $('#expected-rent-val').html(numberWithCommas(expected_rent * selected_units));
    }*/
        
    //Asset appreciation calculation
    if(holding_years == 1){
        
        actual_add = (parseInt(asset_appr_1.value) / 100) * per_unit_cost;
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
    }
    
    if(holding_years > 1 && holding_years <= 5){
        if(holding_years == 5){
            sum = 70;
        }else{
            sum = asset_appr_1.value * holding_years;
        }
        
        actual_add = (parseInt(sum) / 100) * per_unit_cost;
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
        
    }else if(holding_years >= 6 && holding_years <= 9){
        
        sum = asset_appr_2.value * holding_years;
    
        actual_add = (parseInt(sum) / 100) * per_unit_cost;
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
        
        //update the current asset appreciation percentage value
        asset_appr_value.value = sum;
        
    }else if(holding_years >= 10 && holding_years <= 14){
        if(holding_years == 160){
            sum = 70;
        }else{
            sum = asset_appr_3.value * holding_years;
        }
        aa_dp.innerHTML = sum+"%";
        actual_add = (parseInt(sum) / 100) * per_unit_cost;
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
        
        
    }else if(holding_years >= 15 && holding_years <= 19){
        if(holding_years == 5){
            sum = 270;
        }else{
            sum = asset_appr_4.value * holding_years;
        }
      
        actual_add = (parseInt(sum) / 100) * per_unit_cost;
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
        
    }else if(holding_years >= 20){
        
        sum = 400;
        
        actual_add = (parseInt(sum) / 100) * per_unit_cost;
        
        $('#asset-appr-val').html(numberWithCommas((parseInt(per_unit_cost) + parseInt(actual_add)) * selected_units));
        
    }
	
	
});

$('.self-finance-rep').click(function(){ 
	
	"use strict";
	
	var promo_category = $('.promo-category').val();
	
	var promo_price = $('.promo-price').val();
	
	$('.repayment-cost').html('');
	
	$('#repayment-period').val('');
	
	$('#subsequent-payment').val('');
	
	$('.payment-plan-info').hide();
	
	var total_cost = $('#total-cost').val();
	
	//If there is a promo available for payment plan or all finance options
	if(promo_category == 'all' || promo_category == 'cash-finance'){
	    
	    total_cost = promo_price;
	    
	}
	//if value < max
   	var sliderStep = 0.05 * total_cost;
	
	document.getElementById("myRange").step = sliderStep;
	
	document.getElementById("myRange").max = total_cost;
	
	document.getElementById("myRange").min = 0.4 * total_cost;
	
   	$("#myRange").val(total_cost); 
	
   	$("#myRange").trigger('change');
   	
   	$("#demo").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(total_cost));
	
	
}); 
$('.mortgage-rep').click(function(){
	
	"use strict";
	
	var promo_category = $('.promo-category').val();
	
	var promo_price = $('.promo-price').val();
	
	var minimum_slide = $('#fourty-percent').val();
	
	if(promo_category == 'mortgage-finance' || promo_category == 'all'){
	    
	}
	
	$('.repayment-cost').html('');
	
	$('#repayment-period').val('');
	
	$('#subsequent-payment').val('');
	
	$('.payment-plan-info').hide();
	
   	$("#myRange").val(minimum_slide);
	
   	$("#myRange").trigger('change');
   	
   	$("#demo").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(minimum_slide));
	
});
function numberWithCommas(x) {
	"use strict";
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

}