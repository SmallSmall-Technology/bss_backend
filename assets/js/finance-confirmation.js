$(init);

function init(){

    var order = JSON.parse(localStorage.getItem('buytolet_basket'));
    
    var balance_percentage = (order.balance * 100) / order.property_cost;
    
    $('#total-amount-payable').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.payable));
    
    $('#actual-percentage').html(balance_percentage+"%");
    
    //$('#property-cost').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.property_cost));

    $('#property-cost').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.balance));
    
    $('#transaction-fee').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.transaction_fee));

    $('#originating-fee').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.origination_fee));

    $('#down-payment').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.down_payment));
    
    $('#payment-tenor').html(order.payment_period+" year");
    
    var payment = parseInt(order.transaction_fee) + parseInt(order.origination_fee);
    
    //$('#due_amount').val(payment);
    
    $('#due_amount').val(order.origination_fee);
    
    $('#payment-output').html("<span style='font-family:helvetica;'>&#x20A6;</span>"+numberWithCommas(order.origination_fee));
    
    $('#full-name').html(order.personal_details[0]['firstname']+' '+order.personal_details[0]['lastname']);
    
    $('#bvn').html(order.personal_details[0]['bvn']);
    
    $('#email-address').html(order.personal_details[0]['email']);
    
    $('#phone-number').html(order.personal_details[0]['phone']);
    
    $('#marital-status').html(order.personal_details[0]['marital_status']);
    
    $('#dob').html(order.personal_details[0]['dateOfBirth']);
    
    $('#home-address').html(order.personal_details[0]['residential_address']);
    
    $('#occupation').html(order.employment_details[0]['occupation']);
    
    $('#net-income').html(order.employment_details[0]['income_range']);
    
    $('#position').html(order.employment_details[0]['position']);
    
    $('#company-name').html(order.employment_details[0]['company_name']);
    
    $('#company-address').html(order.employment_details[0]['company_address']);

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
                $('#bed-bath').html(data.details['bed']+'Bedroom '+data.details['bath']+'Bathroom');
                $('#prop-size').html(data.details['property_size']+' sqm');
			}else{

			}				

		}

	});

    
    
}
function numberWithCommas(x) {

    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

}
