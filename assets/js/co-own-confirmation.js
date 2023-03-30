$(init);

function init(){
    
    var paystack_charges = 0.0195;

    var order = JSON.parse(localStorage.getItem('co_own_basket'));
    
    var transaction_fee = (order.share_cost * order.shares_amount) * 0.1;
    
    var total_shares_amount = (order.share_cost * order.shares_amount); //order.payable_amount - transaction_fee;
    
    var due_amount = parseInt(order.payable_amount);
    
    var charges = paystack_charges * due_amount;
    
    var final_amount = 0;
    
    if(charges < 2000){
        
        //
        final_amount = (due_amount / (1 - paystack_charges)) + parseFloat(0.01);
        
    }else{
        
        final_amount = parseInt(due_amount) + parseInt(2000);
        
    }
    
    $('#shares-amount').html(order.shares_amount);
    
    $('#total-shares-price').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(total_shares_amount));
    
    $('#price-per-share').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.share_cost));
    
    $('#transaction-fee').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(transaction_fee));
    
    $('#total-cost').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas((final_amount).toFixed(2)));
    
    $('#payment-charges').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas((final_amount - due_amount).toFixed(2)));
    
    $('#due_amount').val((final_amount).toFixed(2));
    

    var data = {"prop_id" : order.property_id};
	
	//Check promo code
	$.ajaxSetup ({ cache: false });
	$.ajax({			

		url: baseUrl+"buytolet/getProperty/",

		type: "POST",

		data: data,

		dataType : 'json',

		success: function(data){

			if(data.result == 'success'){
                //console.log(data.details);
                $('#prop-title').html(data.details['property_name']);
                $('#prop-address').html(data.details['address']+', '+data.details['city']+'.');
                $('#bed-bath').html(data.details['bed']+' Bedroom '+data.details['bath']+' Bathroom');
                $('#prop-size').html(data.details['property_size']+' sqm');
			}else{

			}				

		}

	});

    
    
}
function numberWithCommas(x) {

    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

}
