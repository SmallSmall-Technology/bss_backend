    <div class="formContainer">
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
                                    <div class="summary-desc">Principal 80%</div>
                                    <div class="summary-info" id="property-cost">**************</div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div> 
            </div> 
        </div> 
        <div class="uploadFormContainer">
            <form id="confirmationForm">
                

                <div class="payment-txt">Click the finish button to submit and pay origination fee: <span>N800,000</span></div>
                <button type="submit" class="doc-submit-btn">Pay Now</button>

            </form>
        </div>        
    </div>

<script src="<?php echo base_url().'assets/js/finance-confirmation.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/payment.js' ?>"></script>
