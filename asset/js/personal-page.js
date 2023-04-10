$(init);

function init(){
    
    var baseUrl = 'https://buy.smallsmall.com/';

    var order = JSON.parse(localStorage.getItem('buytolet_basket'));
    
    if(order.personal_details.length){
        //Fill up the fields
        
        $("#fname").val(order.personal_details[0]['firstname']);
	
    	$("#lname").val(order.personal_details[0]['lastname']);
    	
    	$("#email").val(order.personal_details[0]['email']);
    
    	$("#phone").val(order.personal_details[0]['phone']);
    	
    	$("#bvn").val(order.personal_details[0]['bvn']);
    	
    	$("#residential_address").val(order.personal_details[0]['residential_address']);
    	
    	$("#dob").val(order.personal_details[0]['dateOfBirth']);
    	
    	$("#marital_status").val(order.personal_details[0]['marital_status']);
    	
    	$('#finance-button').addClass('activated-button');
        		        
        $('#finance-button').prop('disabled', false);
    	
    }
    
    $('#bvn').keyup(function(){
        
        var bvn_number = $(this).val();
    
        if(bvn_number.length == 11){
            
            var data = {"bvn" : bvn_number};
            
            $.ajaxSetup ({ cache: false });
        	$.ajax({			
        
        		url: baseUrl+"buytolet/validate_bvn/",
        
        		type: "POST",
        
        		data: data,
        
        		success: function(data){
        		    
        		    if(data == 200){
        		        
        		        $('#bvn').css('border', '1px solid green');
        		        
        		        $('#finance-button').addClass('activated-button');
        		        
        		        $('#finance-button').prop('disabled', false);
        		        
        		        return false;
        		        
        		    }else{
        		        
        		        alert('Error validating BVN');
        		        
        		        $('#bvn').val('');
        		        
        		        $('#bvn').css('border', '1px solid red');
        		        
        		        console.log(data);
        		        
        		        return false;
        		    }
        		},
        		
        		error: function(){
        			
        			return false;
        			
        		}
        
        	});
            
        }
        
        
    });
    
}