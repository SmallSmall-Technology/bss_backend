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
            <img src="<?php echo base_url(); ?>asset/images/accountstatement.svg" alt="account information" /><br/>Bank statement & ID<br/>
            <input class="header__info" type="text" />
        </div>

        <div class='header__img'>
            <img src="<?php echo base_url(); ?>asset/images/summary.svg" alt="summary" /><br/>summary<br/>
            <input class="header__info" type="text" />
        </div>
    </div>
    <div class="info">
        <h1> Financing Application</h1>
        
        <div  class="form_elem">
            <h3 id="persona"> Employment information</h3>
        </div>
    
        <form id="financeEmploymentInformation" method="POST">
            <div class="form__one">
                <div class="finance-form-elem-container">
                    <input type="text" id="occupation" placeholder="Occupation" class="verify-txt" >
                </div>
                <div class="finance-form-elem-container">
                    <input type="text" id="position" placeholder="Position" class="verify-txt" >
                </div>
                <div class="finance-form-elem-container">
                    <input type="text" id="company_name" placeholder="Company Name" class="verify-txt">
                </div>
                 
                <div class="finance-form-elem-container">
                    <input type="option" placeholder="Net monthly income range" id="income" list="networth" class="verify-txt">
                    <datalist id="networth">
                        <option value="Less N100k">  
                        <option value="N101k to N200k ">
                        <option value="N201k to N400k">  
                        <option value="N401k to N600k">
                        <option value="N601k to N800k">  
                        <option value="N801k to N1m">
                        <option value="N1.1m to N1.4m">  
                        <option value="N1.41m to N1.7m">
                        <option value="N1.71m to N2m">
                        <option value="N2.1m to N2.5m">
                        <option value="N2.51m to N3m">
                        <option value="N3.1m">
                    </datalist>
        
                </div>
                        
                <div class="finance-form-elem-container">      
                    <textarea placeholder="Company Address" type="text" id="company_address" class="verify-txt" ></textarea>
                </div>
                <div class="finance-form-elem-container">
                    <div id="btn__tags">
                       <div id="back__btn">Back</div>
                   
                       <button class="finance-form-btns" type="submit" id="next__btn">Proceed</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/payment.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/employment-page.js"></script>
    