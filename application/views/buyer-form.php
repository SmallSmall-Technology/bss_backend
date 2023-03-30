    <div class="form-wrapper">
        <Box class="form-input-container">
            <div class="form-title">
                <h1>Buyer Information</h1>
                <p>Create an investor profile to get started</p>
            </div>
            <form id="buyerForm" method="POST">
                <div class="form-div-txt">Personal information</div>
                <div class="double-span-col-input">
                    <div class="textInput-box">
                        <input class="firstname" id="firstname" placeholder="Firstname" type="text">
                    </div>
                    <div class="textInput-box">
                        <input class="lastname" id="lastname" placeholder="Lastname" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="email" id="email" placeholder="Email" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="phone" id="phone" placeholder="Phone" type="text">
                    </div>
                </div>
                <div class="form-div-txt">Employee information</div>  
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="occupation" id="occupation" placeholder="Occupation" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="position" id="position" placeholder="position" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="company" id="company" placeholder="Company Name" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <select class="minimal income-range" id="income-range">
                        <option>Income range</option>
                        <option value="500000 - 1000000">500k - 1M</option>
                        <option value="1000000 - 1500000">1M - 1.5M</option>
                        <option value="1500000 - 2000000">1.5M - 2M</option>
                    </select>
                </div>
                <div class="single-span-col-input">
                    <textarea class="text-area address" id="address" placeholder="Address" rows="8" cols="4"></textarea>
                </div>
                <div class="single-span-col-input">
                    <button type="submit" class="finance-form-btn button">Next</button>
                    <p>I have read the financing payment schedule and BuySmallsmall's Terms and Condition.  </p>
                </div>
            
            </form>
        </Box>
        
    </div>