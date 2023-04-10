    <div class="form-wrapper">
        <Box class="form-input-container">
            <div class="form-title">
                <h1>Co-Own Form</h1>
                <!---<p>Create an investor profile to get started</p>--->
            </div>
            <form id="coOwnForm" method="POST">
                <div>
                    <div class="form-div-txt">Personal information</div>
                    <div class="double-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Firstname</span>
                            <input class="firstname verify-txt" id="firstname" value="<?php echo $fname; ?>" name="firstname" type="text">
                        </div>
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Lastname</span>
                            <input class="lastname verify-txt" id="lastname" value="<?php echo $lname; ?>" name="lastname" type="text">
                        </div>
                    </div>
                    <div class="single-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Email</span>
                            <input class="email verify-txt" id="email" value="<?php echo $email; ?>" name="email" type="text">
                        </div>
                    </div>
                    <div class="single-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Phone</span>
                            <input class="phone verify-txt" id="phone" value="<?php echo $phone; ?>" name="phone" type="text">
                        </div>
                    </div>
                    <div class="form-div-txt">Employment information</div>  
                    <div class="single-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Occupation</span>
                            <input class="occupation verify-txt" id="occupation" placeholder="Occupation" name="occupation" type="text">
                        </div>
                    </div>
                    <div class="single-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Position</span>
                            <input class="position verify-txt" name="position" id="position" type="text">
                        </div>
                    </div>
                    <div class="single-span-col-input">
                        <div class="textInput-box">
                            <span id="field-label" class="hanging">Company name</span>
                            <input class="company verify-txt" name="companyName" id="company" type="text">
                        </div>
                    </div>
                    <div class="single-span-col-input">
                        <span id="field-label">Income range</span>
                        <select name="income_range" class="minimal income-range verify-txt" id="income-range">
                            <option value="">Income range</option>
                                <option value="500000">Under N500,000</option>
								<option value="1000000">N500,000 - N1,000,000</option>
								<option value="2500000">N1,100,000 - N2,500,000</option>
								<option value="5000000">N2,600,000 - N5,000,000</option>
								<option value="7500000">N5,100,000 - N7,500,000</option>
								<option value="10000000">N7,600,000 - N10,000,000</option>
								<option value="15000000">N10,100,000 - N15,000,000</option>
								<option value="20000000">N15,100,000 - N20,000,000</option>
								<option value="30000000">N21,000,000 - N30,000,000</option>
								<option value="40000000">N31,000,000 - N40,000,000</option>
								<option value="50000000">N41,000,000 - N50,000,000</option>
								<option value="51000000">N51,000,000 + </option>
                        </select>
                    </div>
                    <div class="single-span-col-input">
                        <span id="field-label">Company address</span>
                        <textarea class="text-area address verify-txt" id="address" name="company_address" placeholder="Address" rows="8" cols="4"></textarea>
                    </div>
                    
                    <div class="single-span-col-input">
                        <div class="uploadArea" id="dropzone-id">
                            Upload ID<br />
                            (int'l passport,drivers license,voters card,national ID)
                            <input type="file" class="input identification-inp" id="upload" hidden />
                            <div id="dd-dir">Drag and Drop or <span class="browse-btn">Browse</span></div> 
                        </div>
                    </div>
                </div>
                <div class="second-party-form">
                    
                    <div class="form-div-txt beneficiary-form" style="color:#64318A">Add <span id="beneficiary-identifier"></span> Details <i class="fa fa-angle-down"></i></div>
                    <div class="element" id="div_0">
                    
                        <div class="double-span-col-input">
                            <div class="textInput-box">
                                <span id="field-label" class="hanging">Firstname</span>
                                <input class="beneficiary-firstname verify-ben-txt" id="beneficiary-firstname" name="beneficiary-firstname[]" value="" type="text">
                            </div>
                            <div class="textInput-box">
                                <span id="field-label" class="hanging">Lastname</span>
                                <input class="beneficiary-lastname verify-ben-txt" id="beneficiary-lastname" placeholder="Lastname" name="beneficiary-lastname[]" value="" type="text">
                            </div>
                        </div>
                        <div class="single-span-col-input">
                            <div class="textInput-box">
                                <span id="field-label" class="hanging">Email</span>
                                <input class="beneficiary-email verify-ben-txt" id="beneficiary-email" placeholder="Email" value="" name="beneficiary-email[]" type="text">
                            </div>
                        </div>
                        <div class="single-span-col-input">
                            <div class="textInput-box">
                                <span id="field-label" class="hanging">Phone</span>
                                <input class="beneficiary-phone verify-ben-txt" id="beneficiary-phone" name="beneficiary-phone[]" placeholder="Phone" value="" type="text">
                            </div>
                        </div>
                        <div class="single-span-col-input">
                            <div class="textInput-box">
                                <span id="field-label" class="hanging">Unit amount</span>
                                <input class="beneficiary-shares verify-ben-txt" id="beneficiary-shares" name="beneficiary-shares[]" value="1" type="number" min="1" />
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <!---<div class="single-span-col-input">
                        <div class="uploadArea" id="dropzone-id2">
                            Upload ID<br />
                            (int'l passport,drivers license,voters card,national ID)
                            <input type="file" class="input2 identification-2-inp" id="upload" hidden />
                            <div id="dd-dir">Drag and Drop or <span class="browse-btn-2">Browse</span></div> 
                        </div>
                    </div>--->
                    <div class="form-div-txt add-beneficiary" id="add-beneficiary-btn-0" style="color:#64318A">Add another profile <i class="fa fa-plus"></i></div>
                </div>
                
                <input type="hidden" id="userID" name="userID" value="<?php echo @$userID; ?>" />
                
                <input type="hidden" id="property_id" name="property_id" value="" />
                
                <input type="hidden" id="cost" name="cost" value="" />
                
                <input type="hidden" id="payable" name="payable" value="" />
                
                <input type="hidden" id="beneficiary_type" name="beneficiary_type" value="" />
                
                <input type="hidden" id="unit_amount" name="unit_amount" value="" />
        
                <!---<input type="hidden" id="idcard2" name="beneficiary_id_path" value="" />--->
        
                <input type="hidden" id="idcard" name="id_path" value="" />
        
                <!---<input type="hidden" id="id2-state" name="" value="0" />--->
        
                <input type="hidden" id="id-state" name="" value="0" />
        
                <input type="hidden" id="beneficiary-val" name="" value="0" />
                
                <div class="single-span-col-input">
                    
                    <input type="submit" class="co-own-form-btn button" value="Proceed" />
                    
                </div>
            
            </form>
        </Box>
        
    </div>
    <script>
        
        var baseUrl = "https://buy.smallsmall.com/";
        
        let button = document.querySelector('.browse-btn');
        let input = document.querySelector('.input');
    
        //Beneficiary input
        //let button2 = document.querySelector('.browse-btn-2');
        //let input2 = document.querySelector('.input2');
    
        let file;
        
        //Beneficiary files
        //let file2;
    
        button.onclick = () =>{
            input.click();
        };
    
        /*button2.onclick = () =>{
            input2.click();
        };*/
        
        
        //Beneficiary control
        /*input2.addEventListener('change', function() {
            
            "use strict";
            
            var fd = new FormData();
            
            var files = $(this)[0].files[0];
            
            var folderName = $('#userID').val();
            
            var filepath = "";
            
            fd.append('files',files);        
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            //$("#id-progress-bar").css("width", percentComplete + '%');
                            
                            if(percentComplete === 100){
                                
                                $('#id2-state').val(1);
                                
                            }
                        }
                    }, false);
                    return xhr;
                },
                url: baseUrl+'buytolet/uploadIdentification/'+folderName+"-beneficiary",
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.browse-btn-2').html("Uploading...");
                },
                success:function(data, folder, pictures){
                    filepath = folderName+'/'+files.name.replace(/\s+/g, '_');
                    $('.browse-btn-2').html("Done");
                    //$('#id-fileName').html("<span style='color:green;'>Successful upload</span>");
                    $('#idcard2').val(filepath);
        
                }
            });
        });*/
        input.addEventListener('change', function() {
            "use strict";
            var fd = new FormData();
            var files = $(this)[0].files[0];
            var folderName = $('#userID').val();
            var filepath = "";
                        
            fd.append('files',files);        
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            //$("#statement-progress-bar").css("width", percentComplete + '%');
                            if(percentComplete === 100){
                                
                                $('#id-state').val(1);
                                
                            }
                            
                        }
                    }, false);
                    return xhr;
                },
                url: baseUrl+'buytolet/uploadIdentification/'+folderName,
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.browse-btn').html("Uploading...");
                },
                success:function(data, folder, pictures){
                    filepath = folderName+'/'+files.name.replace(/\s+/g, '_');
                    $('.browse-btn').html("Done");
                    //$('#statement-fileName').html("<span style='color:green;'>Successful upload</span>");
                    $('#idcard').val(filepath);
        
                }
            });
        });
    
        
    </script>
    <script src="<?php echo base_url(); ?>assets/js/payment.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/upload-drag-and-drop.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/beneficiary-form.js?version=<?php echo rand(199, 9999999999); ?>"></script>
    <script>
        $('.beneficiary-form').click(function(){
            
            $('.second-party-form').css('min-height', '400px');
            
            $('.second-party-form').css('max-height', '2000px');
    
            $('.second-party-form').css('overflow', 'auto');
            
            $('.second-party-form').css('transition', '4s');
            
        });
        $('.add-beneficiary').click(function(){
            
            // Finding total number of elements added
    		var total_element = $(".element").length;
    
      		// last <div> with element class id
      		var lastid = $(".element:last").attr("id");
    
      		var split_id = lastid.split("_");
    
      		var nextindex = Number(split_id[1]) + 1;
    
      		var max = 4;
    
      		// Check total number elements
      		if(total_element < max ){
    
       			// Adding new div container after last occurance of element class
    
       			$(".element:last").after("<div class='element' id='div_"+ nextindex +"'><div class='form-div-txt beneficiary-form remove-entry' id='entry_form_"+ nextindex +"' style='color:#FF0000;cursor:pointer'>Remove entry <i class='fa fa-close'></i></div></div>");
       			
       			$("#div_"+nextindex).append('<div class="double-span-col-input"><div class="textInput-box"><span id="field-label" class="hanging">Firstname</span><input class="beneficiary-firstname verify-ben-txt" id="beneficiary-firstname-'+ nextindex +'" type="text" name="beneficiary-firstname[]"/></div><div class="textInput-box"><span id="field-label" class="hanging">Lastname</span><input class="beneficiary-lastname verify-ben-txt" id="beneficiary-lastname-'+ nextindex +'" placeholder="Lastname" type="text" name="beneficiary-lastname[]" /></div></div><div class="single-span-col-input"><div class="textInput-box"><span id="field-label" class="hanging">Email</span><input class="beneficiary-email verify-ben-txt" id="beneficiary-email-'+ nextindex +'" placeholder="Email" type="text" name="beneficiary-email[]" /></div></div><div class="single-span-col-input"><div class="textInput-box"><span id="field-label" class="hanging">Phone</span><input class="beneficiary-phone verify-ben-txt" id="beneficiary-phone-'+ nextindex +'" placeholder="Phone" type="text" name="beneficiary-phone[]" /></div></div><div class="single-span-col-input"><div class="textInput-box"><span id="field-label" class="hanging">Unit amount</span><input class="beneficiary-shares verify-ben-txt" id="beneficiary-shares-'+ nextindex +'" value="1" type="number" name="beneficiary-shares[]" min="1" /></div></div>');
    
      		    }else{
      		        
      		        alert('Maximum amount of entries reached ('+max+')');
      		    }	
            
        });
        
        $('.second-party-form').on('click', '.remove-entry', function(){
            var entry_id = $(this).attr('id').replace(/entry_form_/, '');
            //alert(entry_id);
            $('#div_'+entry_id).remove();
            return false;
        });
    </script>