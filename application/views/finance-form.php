    <div class="form-wrapper">
        <Box class="form-input-container">
            <div class="form-title">
                <h1>Finance application</h1>
                <!---<p>Create an investor profile to get started</p>--->
            </div>
            <form id="financeForm" method="POST">
                <div class="form-div-txt">Personal information</div>
                <div class="double-span-col-input">
                    <div class="textInput-box">
                        <input class="firstname verify-txt" id="firstname" placeholder="Firstname" value="<?php echo $fname; ?>" type="text">
                    </div>
                    <div class="textInput-box">
                        <input class="lastname verify-txt" id="lastname" placeholder="Lastname" value="<?php echo $lname; ?>" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="email verify-txt" id="email" placeholder="Email" value="<?php echo $email; ?>" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="phone verify-txt" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" type="text">
                    </div>
                </div>
                <div class="form-div-txt">Employment information</div>  
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="occupation verify-txt" id="occupation" placeholder="Occupation" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="position verify-txt" id="position" placeholder="Position" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="textInput-box">
                        <input class="company verify-txt" id="company" placeholder="Company Name" type="text">
                    </div>
                </div>
                <div class="single-span-col-input">
                    <select class="minimal income-range verify-txt" id="income-range">
                        <option value="">Income range</option>
                        <option value="500000 - 1000000">500k - 1M</option>
                        <option value="1000000 - 1500000">1M - 1.5M</option>
                        <option value="1500000 - 2000000">1.5M - 2M</option>
                    </select>
                </div>
                <div class="single-span-col-input">
                    <textarea class="text-area address verify-txt" id="address" placeholder="Address" rows="8" cols="4"></textarea>
                </div>
                
                <div class="single-span-col-input">
                    <div class="uploadArea" id="dropzone-id">
                        Upload ID<br />
                        (int'l passport,drivers license,voters card,national ID)
                        <input type="file" class="input2 identification-inp" id="upload" hidden />
                        <div id="dd-dir">Drag and Drop or <span class="browse-btn-2">Browse</span></div> 
                    </div>
                </div>
                <div class="single-span-col-input">
                    <div class="uploadArea" id="dropzone-bank">
                        Upload 6 months<br /> bank statement minimum                 
                        <input type="file" class="input statement-inp" id="upload" hidden />
                        <div id="dd-dir">Drag and Drop or <span class="browse-btn">Browse</span></div>
                    </div>
                </div>
                
                <input type="hidden" id="userID" value="<?php echo @$userID; ?>" />
        
                <input type="hidden" id="statement" value="" />
        
                <input type="hidden" id="idcard" value="" />
        
                <input type="hidden" id="statement-state" value="0" />
        
                <input type="hidden" id="id-state" value="0" />
                
                <div class="single-span-col-input">
                    <input type="submit" class="finance-form-btn button" value="Next" />
                    <p>I have read the financing payment schedule and BuySmallsmall's Terms and Condition.  </p>
                </div>
            
            </form>
        </Box>
        
    </div>
    <script>
        
        var baseUrl = "https://buy.smallsmall.com/";
        
        let button = document.querySelector('.browse-btn');
        let input = document.querySelector('.input');
    
        let button2 = document.querySelector('.browse-btn-2');
        let input2 = document.querySelector('.input2');
    
        let file;
        let file2;
    
        button.onclick = () =>{
            input.click();
        };
    
        button2.onclick = () =>{
            input2.click();
        };
        
        input2.addEventListener('change', function() {
            
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
                    $('.browse-btn-2').html("Uploading...");
                },
                success:function(data, folder, pictures){
                    filepath = folderName+'/'+files.name.replace(/\s+/g, '_');
                    $('.browse-btn-2').html("Done");
                    //$('#id-fileName').html("<span style='color:green;'>Successful upload</span>");
                    $('#idcard').val(filepath);
        
                }
            });
        });
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
                                
                                $('#statement-state').val(1);
                                
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
                    $('#statement').val(filepath);
        
                }
            });
        });
    
        
    </script>
    <script src="<?php echo base_url(); ?>assets/js/payment.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/upload-drag-and-drop.js"></script>