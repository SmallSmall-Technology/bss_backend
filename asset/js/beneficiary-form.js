var co_own_order = JSON.parse(localStorage.getItem('co_own_basket'));

//Populate necessary fields
$('#property_id').val(co_own_order.property_id);

$('#cost').val(co_own_order.property_cost);

$('#payable').val(co_own_order.payable_amount);

$('#beneficiary_type').val(co_own_order.purchase_beneficiary);

$('#unit_amount').val(co_own_order.shares_amount);
    
if(co_own_order.purchase_beneficiary != 'Self'){
    
    $('.second-party-form').css('display', 'block');
    
    $('#beneficiary-val').val('1');
    
    $('#beneficiary-identifier').html(co_own_order.purchase_beneficiary+"'s");
}
if(co_own_order.purchase_beneficiary != 'Self' && co_own_order.purchase_beneficiary == 'Children'){
    $('.add-beneficiary').css('display', 'block');   
}
    	