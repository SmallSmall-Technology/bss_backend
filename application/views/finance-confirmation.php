    <div class="formContainer">
        <div class="header__image">
            <div class='header__img'>
                <img src="<?php echo base_url(); ?>asset/images/personalinfo.svg" alt="personal information"  /><br/>personal info<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
    
            <div class='header__img' >
                <img src="<?php echo base_url(); ?>asset/images/purpbriefcase.svg" alt="employment information"   /><br/>Employment info<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
            <div class='header__img'>
                <img src="<?php echo base_url(); ?>asset/images/accountstatecolour.svg" alt="account information" /><br/>Bank statement & ID<br/>
                <input id="personal__headinfo" type="text" />
            </div>
    
            <div class='header__img'>
                <img src="<?php echo base_url(); ?>asset/images/summarycolor.svg" alt="summary" /><br/>summary<br/>
                <input id="personal__headinfo" type="text" />
            </div>
        </div>
        <div style="width:100%">
            <div class="summary-container">
                <div class="summary-header">Finance Application</div>
                <div class="payment-summary">
                    <div class="summary-dets">
                        <div class="summary-sub-head align-left">Property information</div>
                        <div class="summary-prop-title" id="prop-title">**************</div>
                        <div class="summary-prop-dets" id="prop-address">****************************</div>
                        <div class="summary-prop-dets" id="bed-bath">**************</div>
                        <div class="summary-prop-dets" id="prop-size">********</div>
                    </div>
                    <div class="summary-dets">
                        <div class="summary-sub-head align-left">Financing information</div>
                        <div class="finance-table-container">
                            <table class="summary-table" width="100%">
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Down payment</div>
                                        <div class="summary-info" id="down-payment">***********</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Originating fee</div>
                                        <div class="summary-info" id="originating-fee">***********</div>
                                    </td>
                                </tr>
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Transaction fee</div>
                                        <div class="summary-info" id="transaction-fee">**************</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Total initial payment</div>
                                        <div class="summary-info" id="total-amount-payable">**************</div>
                                    </td>
                                </tr>
                                <tr class="summary-tr">
                                    <td width="50%">
                                        <div class="summary-desc">Principal <span id="actual-percentage">0%</span></div>
                                        <div class="summary-info" id="property-cost">**************</div>
                                    </td>
                                    <td>
                                        <div class="summary-desc">Payment tenure</div>
                                        <div class="summary-info" id="payment-tenor">**************</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> 
            </div> 
            
            <!--- Summary container ---->
            <div class="summary-container">
                <div class="summary-header">Personal Information</div>
                <div class="finance-table-container">
                    <table width="100%">
                        <tr>
                            <td width="33.3%">
                                <div class="summary-desc">Full name</div>
                                <div class="summary-info" id="full-name">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">BVN</div>
                                <div class="summary-info" id="bvn">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">Email</div>
                                <div class="summary-info" id="email-address">***********</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="33.3%">
                                <div class="summary-desc">Phone</div>
                                <div class="summary-info" id="phone-number">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">Marital Status</div>
                                <div class="summary-info" id="marital-status">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">DOB</div>
                                <div class="summary-info" id="dob">***********</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="33.3%">
                                <div class="summary-desc">Home Address</div>
                                <div class="summary-info" id="home-address">***********</div>
                            </td>
                            <td width="33.3%">
                                <!---<div class="summary-desc">BVN</div>
                                <div class="summary-info" id="bvn">***********</div>--->
                            </td>
                            <td width="33.3%">
                                <!---<div class="summary-desc">Email</div>
                                <div class="summary-info" id="email-address">***********</div>--->
                            </td>
                        </tr>
                    </table> 
                </div>
            </div> 
            <!--- Summary container ---->
            
            <!--- Summary container ---->
            <div class="summary-container">
                <div class="summary-header">Employment Information</div>
                <div class="finance-table-container">
                    <table width="100%">
                        <tr>
                            <td width="33.3%">
                                <div class="summary-desc">Occupation</div>
                                <div class="summary-info" id="occupation">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">Net Income</div>
                                <div class="summary-info" id="net-income">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">Position</div>
                                <div class="summary-info" id="position">***********</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="33.3%">
                                <div class="summary-desc">Company Name</div>
                                <div class="summary-info" id="company-name">***********</div>
                            </td>
                            <td width="33.3%">
                                <div class="summary-desc">Company Address</div>
                                <div class="summary-info" id="company-address">***********</div>
                            </td>
                            <td width="33.3%">
                                <!---<div class="summary-desc">DOB</div>
                                <div class="summary-info" id="dob">***********</div>--->
                            </td>
                        </tr>
                        <tr>
                            <td width="33.3%">
                                <!---<div class="summary-desc">Home Address</div>
                                <div class="summary-info" id="home-address">***********</div>--->
                            </td>
                            <td width="33.3%">
                                <!---<div class="summary-desc">BVN</div>
                                <div class="summary-info" id="bvn">***********</div>--->
                            </td>
                            <td width="33.3%">
                                <!---<div class="summary-desc">Email</div>
                                <div class="summary-info" id="email-address">***********</div>--->
                            </td>
                        </tr>
                    </table> 
                </div>
            </div> 
            <!--- Summary container ---->
        </div> 
        <div class="uploadFormContainer">
            <form id="confirmationForm" method="POST">
                
                <input type="hidden" id="email" value="<?php echo $email; ?>" />
                
                <input type="hidden" id="due_amount" value="" />
                
                <input type="hidden" id="refID" value="<?php echo md5(date('YmdHis')); ?>" />
                
			    
                <div class="payment-txt">Click the finish button to submit and pay origination fee: <span id="payment-output">0</span></div>
                <button onclick="payWithPaystack()" type="submit" id="" class="doc-submit-btn">Finish</button>

            </form>
        </div>        
    </div>

<script src="<?php echo base_url().'assets/js/finance-confirmation.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/payment.js' ?>"></script>
<script>
    
    const paymentForm = document.getElementById('confirmationForm');
    
    paymentForm.addEventListener("click", payWithPaystack, false);
    
    function payWithPaystack(e) {
        
        e.preventDefault();
        
        $('.payment-btn').html('Wait...');
    
        let handler = PaystackPop.setup({
        
        key: 'pk_live_34a3561ac7f3d3e35d118e3e4bf3777065d92f62', // Replace with your public key
        
        email: document.getElementById("email").value,
        
        amount: document.getElementById("due_amount").value * 100,
        
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
    
    }
    
    function updateTransaction(){
        
        var payable = $('#due-amount').val();
        
        var ref = $('#refID').val();
        
        var propertyID = $('.prop-id').val();
        
        var plan = 'Financing';
    	
    	var cost = $('.total-amount').val();
    	
    	
    	var data = {"propertyID": propertyID, "plan" : plan, "payable" : payable, "cost" : cost, "ref" : ref};	
            
            $.ajaxSetup ({ cache: false });
    
    		$.ajax({
    
    			url : baseURL+'buytolet/updatePayment/',
    
    			type: "POST",
    
    			async: true,
    
    			data: data,
    
    			success	: function (data){
    			    
    				alert("Payment update Successful!");
    
    				window.location.href = baseURL+"/successful-payment";
    
    			}
    
    		});
        
    }
</script>
<script src="https://js.paystack.co/v1/inline.js"></script>
