<div class="property-page-wrapper">
        <div class="property-left-section">

            <div class="property-slide-image">
                <!----Start of Slider ---->
				<div id="slider">
					<ul class="rslides" id="slider1">
					<?php

						$dir = './uploads/buytolet/'.$property['image_folder'].'/';
					
						$url = "uploads/buytolet/".$property['image_folder'].'/';

						if (file_exists($dir) == false) {

							echo 'Directory \'', $dir, '\' not found!'; 

						} else {

							$dir_contents = scandir($dir); 

							$count = 0;

							$content_size = count($dir_contents);

							foreach ($dir_contents as $file) {

								//$file_type = strtolower(end(explode('.', $file)));

								if ( $file !== '.' && $file !== '..'&& $count <= ($content_size - 2) ){ 

						?>
									<li>
										<img src="<?php echo base_url().$url.$file; ?>" alt=" buy smallsmall property">										
									</li>
						<?php		

								}  
								$count++;

							}

						}

						?>
					</ul>
				</div>
				<!----End of Slider ---->
            </div>
           
            <div class="property-left-word-sect">
                <h1><?php echo $property['property_name']; ?></h1>
                <div class="price-discount-sect">
                    <div class="price-box">
                        <p>Starting share price</p>
                        <h2 style="font-weight:bold"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($property['price']); ?></h2>
                    </div>
                    <div class="price-box">
                        <p>Property price</p>
                        <h2 style="font-weight:bold"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($property['marketValue']); ?></h2>
                    </div>
                </div>
                <div class="price-discount-sect">
                    <div class="price-box">
                        <p>List price</p>
                        <h2 class="list-price"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($property['price']); ?></h2>
                    </div>
                    <div class="price-box">
                        <p>Hold period</p>
                        <h2 class="list-price">
                            <?php
						        if(@$property['hold_period'] == 'One year'){
						            echo "1 year";
						        }elseif(@$property['hold_period'] == 'Two years'){
						            echo "2 years";
						        }elseif(@$property['hold_period'] == 'Three years'){
						            echo "3 years";
						        }elseif(@$property['hold_period'] == 'Four years'){
						            echo "4 years";
						        }else{
						            echo @$property['hold_period'];
						        }
						    ?>
                        </h2>
                    </div>
                    <div class="price-box">
                        <p>Maturity</p>
                        <h2 class="list-price">
                            <?php
						        if(@$property['hold_period'] == 'One year'){
						            echo "1 year";
						        }elseif(@$property['hold_period'] == 'Two years'){
						            echo "2 years";
						        }elseif(@$property['hold_period'] == 'Three years'){
						            echo "3 years";
						        }elseif(@$property['hold_period'] == 'Four years'){
						            echo "4 years";
						        }else{
						            echo @$property['hold_period'];
						        }
						    ?>
                        </h2>
                    </div>
                </div>
                <div class="full-disp">
                    <div class="half-disp">
                        <h3 style="font-family:'Cera Medium'"><?php echo $property['bed']; ?> bedroom apartment</h3>
                        <div class="location-sect">
                            <i class="fa fa-map-marker"></i>
                            <p><?php echo $property['city']; ?>, Lagos</p>
                        </div>
                    </div>
                    <div class="half-disp">
                        <h3 style="font-family:'Cera Medium'">Property status</h3>
                        <div class="full-disp">
                            <div class="half-disp">
                                <span class="date-top">Start date</span>
                                <span class="date-bottom"><?php if(@$property['start_date']){ echo date('d M, Y', strtotime($property['start_date'])); }else{ echo ''; } ?></span>
                            </div>
                            <div class="half-disp">
                                <span class="date-top">Start date</span>
                                <span class="date-bottom"><?php if(@$property['finish_date']){ echo date('d M, Y', strtotime($property['finish_date'])); }else{ echo ''; } ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="property-props">
                    <p>&bullet; <?php echo $property['bed']; ?> bed</p>
                    <p>&bullet; <?php echo $property['bath']; ?> bathroom</p>
                    <p>&bullet; <?php if(@$property['property_size']){ echo number_format($property['property_size']); } else { echo 0; } ?> sqm</p>
                </div>
            </div>
            <!---<div class="features_description">
                <p>Floor plan</p>
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            </div>--->
            <div class="features_description">
                <p>Financial highlights</p>
                <!---<div class="switch">
                    <div id="monthly" class="monthly period-selector active">Monthly</div>
                    <div id="annual" class="annual period-selector">Annual</div>
                </div>--->
                <label class="toggle-switch">
                  <input class="toggle-checkbox" type="checkbox">
                  <span class="toggle-slider toggle-slider-percent round"></span>
                </label>
                <div class="highlight-tbl-container">
                    <table cellpadding="5" class="highlight-tbl">
                        <tr>
                            <th></th>
                            <th>Year 1</th>
                            <th>Year 2</th>
                            <th>Year 3</th>
                            <th>Year 4</th>
                        </tr>
                        <tr>
                            <th>Rent 
                            <div class="tooltip"><i class="fa fa-info"></i>
                                <span class="tooltiptext">
                                    Yearly Rental Rate up to maturity date
                                </span>
                            </div>
                        </th>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_rent_1']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_rent_1']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_rent_2']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_rent_2']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_rent_3']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_rent_3']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_rent_4']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_rent_4']; ?>%</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Appreciation
                                <div class="tooltip"><i class="fa fa-info"></i>
                                <span class="tooltiptext">
                                    Yearly Appreciation Rate up to maturity date
                                </span>
                            </div>
                            </th>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_appr_1']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_appr_1']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_appr_2']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_appr_2']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round($property['marketValue'] * (($property['co_appr_3']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_appr_3']; ?>%</div>
                            </td>
                            <td>
                                <div class="naira-wrapper"><span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] * ($property['co_appr_4']/100)/1000000), 1); ?>M</div>
                                <div class="percentage-wrapper"><?php echo $property['co_appr_4']; ?>%</div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Capital + Appr.
                                <div class="tooltip"><i class="fa fa-info"></i>
                                <span class="tooltiptext">
                                    Yearly Capital and Appreciation Growth Rate up to maturity date.
                                </span>
                            </th>
                            <td>
                                <?php $appr_1 = $property['marketValue'] * ($property['co_appr_1'] / 100); ?>
                                <span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] + $appr_1)/1000000, 1); ?>M
                            </td>
                            <td>
                                <?php $appr_2 = $property['marketValue'] * ($property['co_appr_2'] / 100); ?>
                                <span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] + $appr_2)/1000000, 1); ?>M
                            </td>
                            <td>
                                <?php $appr_3 = $property['marketValue'] * ($property['co_appr_3'] / 100); ?>
                                <span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] + $appr_3)/1000000, 1); ?>M
                            </td>
                            <td>
                                <?php $appr_4 = $property['marketValue'] * ($property['co_appr_4'] / 100); ?>
                                <span style="font-family:helvetica;">&#x20A6;</span><?php echo round(($property['marketValue'] + $appr_4)/1000000, 1); ?>M
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="features_description">
                
				<!--- Finance payment option ---->
				<div class="payment-box payment-boxes mortgage-finance-payment">
                    <h2>Buy now</h2>
                    
                    <p><h4>Number of shares</h4></p>
                    
                    <h1 class="price" id="unit-demo"><?php echo round((100/$property['pool_units']), 2); ?>%</h1>
					<!---- Range selector ---->
					<!---<div class="range-container">
                        <div class="percentage-container" id="share-amount-value"><?php //echo round((100/$property['pool_units']), 2); ?>%</div>
						<input type="range" min="1" max="<?php //echo $property['pool_units']; ?>" step="1" value="1" class="sliders" id="myRange"> 
						
					</div>--->
					<div class="share-quantity">
				        <input id="unit-amount" class="unit-amount" min="1" max="<?php echo $property['available_units'] - 1; ?>" value="1" type="number">
					</div>
					
					<div class="financing-options-sect">
                        <div class="option-list1">
                            <div class="finance-left-options">
                                <div class="finance">Remaining shares</div>
                            </div>
                            <div class="finance-right-options">
                                <div>
                                    <div id="remaining-shares" class="price finance-numbers"></div>
                                </div>
                            </div>
                        </div>

                        <div class="option-list2">
                            <div class="finance-left-options">
                                <div class="finance">Price</div>
								<div class="finance-desc">Price per share</div>
                            </div>
                            <div class="finance-right-options">
                                <div>
                                    <div class="finance-numbers"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($property['price']); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="option-list2">
                            <div class="finance-left-options">
                                <div class="finance">Transaction fee </div>
								<div style="font-weight:bold" class="finance-desc">Transaction fee covers <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">
								    
								    <b>Shares Certificate Fee:</b> Issuance and registration of shares certificate.<br /><br />

                                    <b>Trustee Fee:</b> For the purpose of transparency and accountability, BuySmallSmall appoints and pays fees to a Publicly Listed Asset Management Company as Trustee(s) to hold and manage properties acquired under its co-ownership package.<br /><br />
                                    
                                    <b>Property Titling Fee:</b> All properties acquired by co-owners on BuySmallSmall are immediately registered with a State Land Registry under an SPV facilitated by an independent Trustee. The original registered title documents are kept by the Trustee. <br /><br />
                                    
                                    <b>Property Insurance Fee:</b> 1 Year property insurance. Insurance fees for subsequent years are  deducted from the rental income.<br /><br />
                                    
                                    <b>Administrative Fee:</b> A portion of the transaction fee covers all administrative effort that goes into the transaction including legal work.
								</span></div></div>
								<!---<table width="100%">
								    <tr>
								        <td>
								            <div class="finance-desc">Shares Certificate Fees <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">Issuance and registration of shares certificate.</span></div></div>
								        </td>
								    </tr>
								    <tr>
								        <td>
								            <div class="finance-desc">Trustee Fees <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">For the purpose of transparency and accountability, BuySmallSmall appoints and pays fees to a Publicly Listed Asset Management Company as Trustee(s) to hold and manage properties acquired under its co-ownership package.</span></div></div>
								        </td>
								    </tr>
								    <tr>
								        <td>
								            <div class="finance-desc">Property Insurance Fees <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">1 Year property insurance. Insurance fees for subsequent years are  deducted from the rental income.</span></div></div>
								        </td>
								    </tr>
								    <tr>
								        <td>
								            <div class="finance-desc">Property Titling Fees <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">All properties acquired by co-owners on BuySmallSmall are immediately registered with a State Land Registry under an SPV facilitated by an independent Trustee. The original registered title documents are kept by the Trustee.</span></div></div>
								        </td>
								    </tr>
								    <tr>
								        <td>
								            <div class="finance-desc">Administrative Fees <div class="tooltip"><i class="fa fa-info"></i><span class="tooltiptext">A portion of the transaction fee covers all administrative effort that goes into the transaction including legal work.</span></div></div>
								        </td>
								    </tr>
								</table>--->
                            </div>
                            <div class="finance-right-options">
                                <div>
                                    <div class="finance-numbers" id="transaction-fee"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($property['price'] * 0.1); ?></div>
                                </div>
                            </div>
                        </div>
                        
						<div class="option-list3">
                            <div class="finance-left-options">
                                <div class="finance">Subtotal</div>
                            </div>
                            <div class="finance-right-options">
                                <div>
                                    <div class="total_desc finance-numbers" id="total-output"><span style="font-family:helvetica;">&#x20A6;</span><?php //echo number_format($property['price'] + ($property['price'])); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="option-list3">
                            <div class="finance-left-options">
                                <div class="finance">Who are you buying for?</div>
                            </div>
                            <div class="finance-right-options">
                                <div>
                                    <select id="purchase-beneficiary" class="minimal purchase-beneficiary">
                                        <option value="Self">Buying for self</option>
                                        <option value="Spouse">Buying for spouse</option>
                                        <option value="Children">Buying for children</option>
                                        <option value="Gift">Buying as gift</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
					<div <?php echo ( $property['availability'] == 'Available')? '' : 'disabled' ; ?> class="payment-btn <?php echo ( $property['availability'] == 'Available')? 'co-own-option-but' : 'disabled-btn' ; ?>">Continue</div>

                </div>
				<!--- Finance payment option ---->

				
                <!---<div class="book-inspection-mobile">
                    <div class="single-span-col-input">
                        <button class="book-inspection-btn" style="background:#B2A7B7;cursor:not-allowed" disabled>Book inspection</button>
                    </div>
                </div>--->
            </div>
        </div>
        <div class="property-right-wrapper">

            <div class="like-share-card">
                <div class="like-share-word-sect">
                    <h3><?php echo $property['property_name'] ?> </h3>
                    <p>at <?php echo $property['city'].', '.$property['propState']; ?></p>
                    <!---<p></p>--->
                </div>
                <!---<div class="book-inspection-btn">
                    <button style="background:#B2A7B7;cursor:not-allowed" disabled>Book inspection</button>
                </div>--->
                <div class="book-inspection-like-share">
                    <div class="share-container">
                        <div class="container-pointer"></div>
                        <span><a class="js-share-twitter-link" href="https://twitter.com/intent/tweet?url=<?php echo base_url().'property/'.$property['propertyID']; ?>"><i class="fa fa-twitter"></i></a></span>
                        <span><a href="javascript:fbShare('<?php echo base_url().'property/'.$property['propertyID']; ?>', '<?php echo $property['property_name']; ?>', 'Buy Small Small Property', '<?php echo base_url().'/uploads/buytolet/'.$property['image_folder'].'/'.$property['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a></span>
                        <span><a target="_blank" href="http://www.linkedin.com/shareArticle?url=<?php echo base_url().'property/'.$property['propertyID']; ?>"><i class="fa fa-linkedin"></i></a></span>
                        <span><a href="whatsapp://send?text=<?php echo base_url().'property/'.$property['propertyID']; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a></span>
                    </div>
                    <button id="share-btn">
                        <img src="<?php echo base_url(); ?>asset/img/Vector (5).png" alt="" />
                        <span>Share</span>
                    </button>
                    <button class="save-property favorite-prop">
                        <img src="<?php echo base_url(); ?>asset/img/Vector (6).png" alt="" />
                        <span>Save</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    
<input type="hidden" id="userID" value="<?php echo @$userID; ?>" />
<input type="hidden" class="prop-id" value="<?php echo $property['propertyID']; ?>" />
<input type="hidden" class="pool_check" value="<?php echo $property['pool_buy']; ?>" />
<input type="hidden" id="expected_rent" class="expected-rent-inp" value="<?php echo $property['expected_rent']; ?>" />	
<input type="hidden" class="property_id" id="property_id" value="<?php echo @$property['propertyID']; ?>" />
<input type="hidden" class="property_name" id="property_name" value="<?php echo @$property['property_name']; ?>" />
<input type="hidden" class="pps" id="pps" value="<?php echo @$property['percentage_per_share']; ?>" />
<input type="hidden" class="pool_units" id="pool_units" value="<?php echo @$property['pool_units']; ?>" />
<input type="hidden" class="pool-total-cost" id="pool-total-cost" value="<?php echo $property['price'] * $property['pool_units']; ?>" />
<input type="hidden" class="expected-rent" id="expected-rent" value="<?php echo @$property['expected_rent']; ?>" />
<input type="hidden" class="total-cost" id="total-cost" value="<?php echo @$property['price']; ?>" />
<input type="hidden" class="payment" id="payment" value="" />
<input type="hidden" class="total-amount" value="<?php echo @$property['price']; ?>" />
<input type="hidden" id="promo-price" class="promo-price" value="<?php if(@$property['promo_price']){ echo $property['promo_price']; }else{ echo 0; } ?>" />
<input type="hidden" class="promo-category" value="<?php if(@$property['promo_category']){ echo $property['promo_category']; }else{ echo "none"; } ?>" />

<!---- Co own data for purchase ---->
<input type="hidden" class="co-own-payable" id="co-own-payable" value="<?php echo ($property['price'] + ($property['price'] * 0.1)); ?>" />
<input type="hidden" class="co-own-shares-amount" id="co-own-shares-amount" value="1" />
<input type="hidden" id="current_num_of_shares" value="<?php echo $property['available_units'] - 1; ?>" />
<!----Co own data for purchase---->




<input type="hidden" class="asset_appr_1" id="asset_appr_1" value="<?php echo @$property['asset_appreciation_1']; ?>" /> 
<input type="hidden" class="asset_appr_2" id="asset_appr_2" value="<?php echo @$property['asset_appreciation_2']; ?>" /> 
<input type="hidden" class="asset_appr_3" id="asset_appr_3" value="<?php echo @$property['asset_appreciation_3']; ?>" /> 
<input type="hidden" class="asset_appr_4" id="asset_appr_4" value="<?php echo @$property['asset_appreciation_4']; ?>" />
<input type="hidden" class="asset_appr_5" id="asset_appr_5" value="<?php echo @$property['asset_appreciation_5']; ?>" />
<input type="hidden" class="asset_appr_value" id="asset_appr_value" value="<?php echo @$property['asset_appreciation_1']; ?>" />
<script src="<?php echo base_url(); ?>assets/js/payment.js?version=<?php echo rand(1, 20); ?>.<?php echo rand(1, 50); ?>.<?php echo rand(1, 70); ?>"></script>
<script src="<?php echo base_url(); ?>assets/js/favorite.js"></script>
<script src="<?php echo base_url(); ?>assets/js/payment-plan-slider.js?version=<?php echo rand(1, 30); ?>.<?php echo rand(1, 70); ?>.<?php echo rand(1, 90); ?>"></script> 
<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
	$('.js-share-twitter-link').click(function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		window.open(href, "Twitter", "height=285,width=550,resizable=1");
	});
</script>
<!---Number element controller ---->

<script src="<?php echo base_url(); ?>asset/js/responsiveslides.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

		// Slideshow 1
		$("#slider1").responsiveSlides({
			maxwidth: 1500,
			speed: 800
		});

		// Slideshow 2
		$("#slider2").responsiveSlides({
			auto: false,
			pager: true,
			speed: 300,
			maxwidth: 540
		});

		// Slideshow 3
		$("#slider3").responsiveSlides({
			manualControls: '#slider3-pager',
			maxwidth: 540
		});

		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
    });
  </script>
  <script>

	/*var slider = document.getElementById("myRange");

	var output = document.getElementById("unit-demo");

	var percentage_per_share = document.getElementById("pps").value;

	var pool_units = document.getElementById("pool_units").value;

	var total_cost = document.getElementById("total-cost").value;

	var transaction_fee = document.getElementById("transaction-fee");
	
	var total_output = document.getElementById("total-output");
	
	var coOwnSharesAmount = document.getElementById("co-own-shares-amount");
	
	var coOwnPayable = document.getElementById("co-own-payable");
	
	var pps = 0;
	
    var total_price = 0;
    
    var default_trans_fee = total_cost * 0.1;

    total_price = (total_cost * slider.value);

	output.innerHTML = numberWithCommas(slider.value);

    total_output.innerHTML = "<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas((slider.value * total_cost) + parseInt(default_trans_fee));
		
	slider.oninput = function() {
	    
	    //Insert percentage in div
		//$('.percentage-container').html(((slider.value * 100) / total_cost)+"%");
		
		pps = (slider.value * 100) / pool_units; //percentage_per_share * slider.value;
        
        //pps = Math.round(pps * 10) / 10;
        
        $('#share-amount-value').html((pps).toFixed(2)+"%");

        total_price = parseInt(this.value) * parseInt(total_cost);

	  	total_output.innerHTML = "<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas((this.value * total_cost) + parseInt(total_price * 0.1));
	  	
	  	transaction_fee.innerHTML = "<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(total_price * 0.1);
		
        output.innerHTML = numberWithCommas(slider.value);
				
		coOwnPayable.value = ((slider.value * total_cost) + ((slider.value * total_cost) * 0.1));
		
		coOwnSharesAmount.value = slider.value;

	}*/

	function numberWithCommas(x) {

		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	}
    $('#share-btn').click(function(){

        if($('.share-container').is(':hidden')){
            
            $('.share-container').slideDown();

        }else{
            
            $('.share-container').slideUp();

        }
    });
</script>
<!---<script src="<?php //echo base_url('asset/js/financial-highlights.js'); ?>"></script>--->
<script src="<?php echo base_url('assets/js/inspection.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/toggle-switch.js'); ?>"></script>
<script>
    function insertDate(){
        
        $('#inspection-date').attr('type', 'date');
        
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        
        var day = dtToday.getDate();
        
        var year = dtToday.getFullYear();
        
        if(month < 10)
        
            month = '0' + month.toString();
            
        if(day < 10)
        
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        
        // or instead:
        // var maxDate = dtToday.toISOString().substr(0, 10);
    
        $('#inspection-date').attr('min', maxDate);
    }
</script>
<script>

    var pool_units = $("#pool_units").val();
    
    var percentage_per_share = $("#pps").val();

	var total_cost = $("#total-cost").val();
	
	var amount_of_units = $("#unit-amount").val();
	
	var pps = 0;
	
    var total_price = 0;
    
    var default_trans_fee = total_cost * 0.1;

    total_price = (total_cost * amount_of_units);

	$("#unit-demo").val(numberWithCommas(pool_units));
	
	$("#total-output").val("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas((slider.value * total_cost) + parseInt(default_trans_fee)));
	
	$('#remaining-shares').html(numberWithCommas(pool_units - 1));
    
    jQuery('<div class="quantity-nav-home"><div class="quantity-button-home upp">+</div><div class="quantity-button-home ddown">-</div></div>').insertAfter('.share-quantity input');
    jQuery('.share-quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.upp'),
        btnDown = spinner.find('.ddown'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
          
        var oldValue = parseFloat(input.val());
        
        if (oldValue >= max) {
            
          var newVal = oldValue;
          
        } else {
            
          var newVal = oldValue + 1;
          
        }
        
        var curr_units = $('#current_num_of_shares').val();
        
        
        pps = (newVal * 100) / pool_units;
        
        $("#unit-demo").html((pps).toFixed(2)+"%");

        total_price = parseInt(newVal) * parseInt(total_cost);

	  	$("#total-output").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas((newVal * total_cost) + parseInt(total_price * 0.1)));
	  	
	  	$("#transaction-fee").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(total_price * 0.1));
		
        //$("#unit-demo").val(numberWithCommas(newVal));
				
		var coOwnPayable = ((newVal * total_cost) + ((newVal * total_cost) * 0.1));
		
		$("#co-own-payable").val(coOwnPayable);
		
		$('#co-own-shares-amount').val(newVal);
        
        spinner.find("input").val(newVal);
        
        spinner.find("input").trigger("change");
        
        $('#remaining-shares').html(numberWithCommas(pool_units - newVal));
        
        $('#current_num_of_shares').val(pool_units - newVal);
      });

      btnDown.click(function() {
        
        
        var oldValue = parseFloat(input.val());
        
        if (oldValue <= min) {
            
          var newVal = oldValue;
          
        } else {
            
          var newVal = oldValue - 1;
          
        }
        
        var curr_units = $('#current_num_of_shares').val();
        
        if(parseInt(curr_units) === parseInt((pool_units - 1))){
            
            return false;
            
        }
        
        pps = (newVal * 100) / pool_units;
        
        $("#unit-demo").html((pps).toFixed(2)+"%");

        total_price = parseInt(newVal) * parseInt(total_cost);

	  	$("#total-output").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas((newVal * total_cost) + parseInt(total_price * 0.1)));
	  	
	  	$("#transaction-fee").html("<span style='font-family:helvetica;'>&#x20A6;</span> "+numberWithCommas(total_price * 0.1));
		
        //$("#unit-demo").val(numberWithCommas(newVal));
				
		var coOwnPayable = ((newVal * total_cost) + ((newVal * total_cost) * 0.1));
		
		$("#co-own-payable").val(coOwnPayable);
		
		$('#co-own-shares-amount').val(newVal);
        
        spinner.find("input").val(newVal);
        
        spinner.find("input").trigger("change");
        
        $('#remaining-shares').html(numberWithCommas(parseInt(curr_units) + 1));
        
        spinner.find("input").val(newVal);
        
        spinner.find("input").trigger("change");
        
        $('#current_num_of_shares').val(parseInt(curr_units) + 1);
      });

    });
</script>