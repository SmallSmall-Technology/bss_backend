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
            <img src="<?php echo base_url(); ?>asset/images/accountstatecolour.svg" alt="account information" /><br/>Account statement & ID<br/>
            <input id="personal__headinfo" type="text" />
        </div>

        <div class='header__img'>
            <img src="<?php echo base_url(); ?>asset/images/summary.svg" alt="summary" /><br/>summary<br/>
            <input class="header__info" type="text" />
        </div>
    </div>
    <div class="info">
        <h1> Financing Application</h1>
        
        <div  class="form_elem">
            <h3 id="persona"> Upload Documents</h3>
        </div>
    
        <form id="uploadForm" method="POST">
            <div class="form__one">
                <div class="finance-form-elem-container">
                    <div class="uploadArea" id="dropzone-id">
                        Upload ID<br />
                        (int'l passport,drivers license,voters card,national ID)
                        <input type="file" class="input2 identification-inp" id="upload" hidden />
                        <div id="dd-dir">Drag and Drop or <span class="browse-btn-2">Browse</span></div> 
                    </div>
                </div>
                <div class="finance-form-elem-container">
                    <div class="uploadArea" id="dropzone-bank">
                        Upload 6 months<br /> bank statement minimum                 
                        <input type="file" class="input statement-inp" id="upload" hidden />
                        <div id="dd-dir">Drag and Drop or <span class="browse-btn">Browse</span></div>
                    </div>
                </div>
                <div class="finance-form-elem-container">
                    <input type="hidden" id="userID" value="<?php echo @$userID; ?>" />
        
                    <input type="hidden" id="statement" value="" />
            
                    <input type="hidden" id="idcard" value="" />
            
                    <input type="hidden" id="statement-state" value="0" />
            
                    <input type="hidden" id="id-state" value="0" />
                    
                </div>
                <div class="finance-form-elem-container">
                    <p><input type="checkbox" id="agreement" />I have read the <a href="<?php echo base_url('faq'); ?>" target="_blank">financing Terms and Condition.</a> </p>
                    <div id="btn__tags">
                       <div id="back__btn">Back</div>
                   
                       <button class="finance-form-btns" type="submit" id="next__btn">Proceed</button>
                    </div>
                </div>
            </div>
        </form>
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
    <script src="<?php echo base_url(); ?>asset/js/upload-page.js"></script>