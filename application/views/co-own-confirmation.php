    <div class="formContainer">
        <div class="header__image">
            <!---<div class='header__img'>
                <img src="<?php //echo base_url(); ?>asset/images/personalinfo.svg" alt="personal information"  /><br/>personal info<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
    
            <div class='header__img' >
                <img src="<?php //echo base_url(); ?>asset/images/purpbriefcase.svg" alt="employment information"   /><br/>Employment info<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
            <div class='header__img'>
                <img src="<?php //echo base_url(); ?>asset/images/accountstatecolour.svg" alt="account information" /><br/>Bank statement & ID<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
            <div class='header__img'>
                <img src="<?php // base_url(); ?>asset/images/summarycolor.svg" alt="summary" /><br/>summary<br/>
                <input id="personal__headinfo" type="text" />
            </div>--->
        </div>
        <div style="width:100%">
            <div class="summary-container">
                <div class="summary-header">Co Ownership</div>
                <div class="payment-summary">
                    <div class="summary-dets">
                        <div class="summary-sub-head align-left">Property information</div>
                        <div class="summary-prop-title" id="prop-title">**************</div>
                        <div class="summary-prop-dets" id="prop-address">****************************</div>
                        <div class="summary-prop-dets" id="bed-bath">**************</div>
                        <div class="summary-prop-dets" id="prop-size">********</div>
                    </div>
                    <div class="summary-dets">
                        <div class="summary-sub-head align-left">Summary</div>
                        <div class="finance-table-container">
                            <table class="summary-table" width="100%">
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Number of shares</div>
                                        <div class="summary-info" id="shares-amount">***********</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Price/Share</div>
                                        <div class="summary-info" id="price-per-share">***********</div>
                                    </td>
                                </tr>
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Total price of shares</div>
                                        <div class="summary-info" id="total-shares-price">**************</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Transaction fee (10%)</div>
                                        <div class="summary-info" id="transaction-fee">**************</div>
                                    </td>
                                </tr>
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Total price <!---<span id="actual-percentage">0%</span>---></div>
                                        <div class="summary-info" id="total-cost">**************</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Paystack charges</div>
                                        <div class="summary-info" id="payment-charges">*******</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> 
            </div> 
            
        </div> 
        <div class="uploadFormContainer">
            <form id="confirmationForm" method="POST">
                
                <input type="hidden" id="email" value="<?php echo $email; ?>" />
                
                <input type="hidden" id="due_amount" value="" />
                
                <input type="hidden" id="refID" value="<?php echo $refID; ?>" />
                
                <input type="hidden" id="propertyID" value="<?php echo $propertyID; ?>" />
                
			    
                <div class="payment-txt">Click the finish button to submit and pay <!---origination fee: <span id="payment-output">0</span>---></div>
                <button onclick="payWithPaystack()" type="submit" id="confirmationBtn" class="doc-submit-btn">Finish</button>
                
                <div class="payment-txt"><input id="terms-and-conds" type="checkbox" value="yes" /> I have agreed to BuySmallsmall's <a target="_blank" href="<?php echo base_url('co-own-tandc'); ?>">Terms and Condition</a></div>
            </form>
        </div>        
    </div>

<script src="<?php echo base_url() ?>assets/js/co-own-confirmation.js?version=<?php echo rand(999, 999999); ?>"></script>
<script src="<?php echo base_url().'assets/js/payment.js' ?>"></script>
<script>
    const paymentForm = document.getElementById('confirmationBtn');
    
    paymentForm.addEventListener("click", payWithPaystack, false);
    
    function payWithPaystack(e) {
        
        e.preventDefault();
        
        if($('#terms-and-conds').is(':checked')){
        
            $('.payment-btn').html('Wait...');
        
            let handler = PaystackPop.setup({
            
                key: 'pk_live_34a3561ac7f3d3e35d118e3e4bf3777065d92f62', // Replace with your public key
                
                email: document.getElementById("email").value,
                
                amount: parseInt(document.getElementById("due_amount").value) * 100,
                
                ref: document.getElementById("refID").value, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                
                // label: "Optional string that replaces customer email"
                
                onClose: function(){
                    
                },
                
                callback: function(response){
                
                    let message = 'Payment complete! Reference: ' + response.reference;
                    updateTransaction();
                
                }
            
            });
        
            handler.openIframe();
        }else{
            
            alert("You need to agree to our Terms and Conditions before you can proceed.");
            
            return false;
            
        }
    
    }
    
    function updateTransaction(){
        
        var payable = $('#due_amount').val();
        
        var ref = $('#refID').val();
        
        var plan = 'Co-own';
    	
    	//var cost = $('#due_amount').val();
    	
    	
    	var data = {"plan" : plan, "payable" : payable, "ref" : ref};	
            
            $.ajaxSetup ({ cache: false });
    
    		$.ajax({
    
    			url : baseUrl+'buytolet/updatePayment/',
    
    			type: "POST",
    
    			async: true,
    
    			data: data,
    
    			success	: function (data){
    			    
    				alert("Payment update Successful!");
    
    				window.location.href = baseUrl+"/successful-payment";
    
    			}
    
    		});
        
    }
</script>
<script src="https://js.paystack.co/v1/inline.js"></script>
