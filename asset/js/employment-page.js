$(init);

function init(){
    
    var baseUrl = 'https://buy.smallsmall.com/';

    var order = JSON.parse(localStorage.getItem('buytolet_basket'));
    
    if(order.employment_details.length){
        //Fill up the fields
        
        $("#occupation").val(order.employment_details[0]['occupation']);
	
    	$("#position").val(order.employment_details[0]['position']);
    	
    	$("#company_name").val(order.employment_details[0]['company_name']);
    
    	$("#income").val(order.employment_details[0]['income_range']);
    	
    	$("#company_address").val(order.employment_details[0]['company_address']);
    }
    
    $('#back__btn').click(function(e){
        
        window.location.href = baseUrl+"personal-info";
        
    });
    
}