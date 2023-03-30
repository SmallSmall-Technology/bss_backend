    <?php

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://www.quidax.com/api/1/users/me/wallets/btc/addresses',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;

    ?>

	<div class="section">

		<div class="section-inner">

			<div class="empty-spc">

				<div class="all-prop-button"><a href="<?php echo base_url('properties'); ?>">all properties</a></div>

			</div>

			<div class="empty-spc">
				
				<div class="inspection-button">Book Inspection</div>

				<div class="prop-status">
					<span></span>
					<?php if($property['tenantable'] == 'yes'){ ?>

								Occupied

						<?php } else { ?>

								Vacant

						<?php } ?>
				</div>

			</div>

			<div class="property-information">

				<div class="prop-info-right">

					<div class="image-container">

						<div class="prop-main-image">

							<img src="<?php echo base_url().'uploads/buytolet/'.$property['image_folder'].'/'.$property['featured_image']; ?>" />

						</div>

						<div class="prop-main-thumbnail">					
							<div class="thumb-controls control-left"><i class="fa fa-angle-left"></i></div>
							<div class="thumb-controls control-right"><i class="fa fa-angle-right"></i></div> 
							<div class="the_thumbs">
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

												<div class='the_thumbnails thumb-item' id='<?php echo base_url().$url.$file; ?>' >
													<img src='<?php echo base_url().$url.$file; ?>' />
												</div>

								<?php		

											}  
											$count++;

										}

									}

								?>
						<?php
							
								/*$url = 'http://test.rentsmallsmall.com/uploads/buytolet/'.$property['image_folder'];

								$html = file_get_contents($url);

								$count = preg_match_all('/<td><a href="([^"]+)">[^<]*<\/a><\/td>/i', $html, $files);

								for ($i = 0; $i < $count; ++$i) {
									//echo "File: " . $files[1][$i] . "<br />\n";
									echo "<div class='the_thumbnails thumb-item' id='".$url."/".$files[1][$i]."' >
												<img src='".$url.'/'.$files[1][$i]."' />
											</div>";
								
								}*/
								
								/*foreach ($files as $file) {
									if ($file !== '.' && $file !== '..') {
										
										echo "<div class='the_thumbnails thumb-item' id='".base_url()."".$dir."".$file."' >
												<img src='".$dir.''.$file."' />
											</div>";
									}
								}*/
								// close the FTP stream 
								//ftp_close($conn_id); 				

										
						?>
							</div>
						</div>

					</div>

				</div>

				<div class="prop-info-left">

					<div class="main-prop-address">

						<?php echo $property['address']; ?>

					</div>

					<div class="main-prop-city">

						<?php echo $property['city'].', '.$property['propState']; ?>

					</div>
					<div class="main-prop-desc" style="margin-bottom:15px;">

						<?php echo "<b>".$property['type']."</b>"; ?>

					</div>

					<div class="main-prop-desc">
                        <?php if($property['pool_buy'] != 'yes'){ ?>
                        
						        List Price
						    
						<?php }else{ ?>
						
						        Price per share
						    
						<?php } ?>

					</div>

					<div class="main-prop-price">

						<span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['price']); ?>

					</div>
					<?php if($property['pool_buy'] == 'yes'){ ?>
    					<div class="main-prop-desc">
    						Property Price
    					</div>
    					<div class="median-prop-price">
    
    						<span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['price'] * $property['pool_units']); ?>

					    </div>
                    <?php } ?>

					<div class="main-prop-city">
                        <table width="100%">
                            <tr>
                                <td><b>Total Shares</b></td> 
                                <td><b>Available Shares</b></td>
                            </tr>
                            <tr>
                                <td><?php echo $property['pool_units']; ?></td> 
                                <td><?php echo $property['available_units']; ?></td>
                            </tr>
                        </table>
						<?php //if($property['tenantable'] == 'yes'){ ?>


						<?php //} else { ?>


						<?php //} ?>

					</div>
					
					<div class="social-and-like">
					
						<div class="sal share-prop">
							<span class="sal-icns share"></span>
							<span class="sal-txt">
								Share
							</span>
							<div class="share-content">
								<a class="js-share-twitter-link" href='https://twitter.com/intent/tweet?url=<?php echo base_url().'property/'.$property['propertyID']; ?>'><i class="fa fa-twitter"></i></a>
								<a href="javascript:fbShare('<?php echo base_url().'property/'.$property['propertyID']; ?>', '<?php echo @$title; ?>', 'Buy2Let Properties For Sale', '<?php echo base_url().'uploads/buytolet/'.$property['image_folder'].'/'.$property['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					
						<div class="sal favorite-prop">
							<span class="sal-icns like"></span>
							<span class="sal-txt">Favorite</span>
						</div>
						
					</div>
					<?php if($property['pool_buy'] == 'yes'){ ?>
					    <div class="fee-disclaimer">
    					    <div class="head-title">What's included?</div>
    					    <u><b>Price:</b></u> This property has been divided into shares. The listed price covers a share which gives you a fraction of the ownership.<br /><br />
    					    <u><b>Fees:</b></u> The listed price is inclusive of marketplace and transaction fees. 
    					</div>
					
					<?php }else{ ?>
    					<div class="fee-disclaimer">
    					    <div class="head-title">BUY2LET FEES</div>
    					    <u><b>Marketplace Fee:</b></u> You are required to pay 1% of the price of property you are interested in purchasing on Buy2let. In the case this 1% fee is lower than 200,000 Naira, you will be charged 200,000 Naira as Marketplace fee. This fee can be paid online via Paystack or Bank transfer.<br /><br />
    					    <u><b>Transaction Fee:</b></u> You will also be required to pay a transaction fee. Which is 4% of the price of property you are interested in purchasing on Buy2let. 
    					</div>
					<?php } ?>

					<div class="financial-head">

						Financial highlights

					</div>
					<?php if($property['pool_buy'] != 'yes'){ ?>
    					<div class="years-dist">
    
    						<span id="1" class="year-item monthly-hl">Monthly</span>
    
    						<span id="2" class="active-year year-item yearly-hl">Annually</span>
    
    
    					</div>
					<?php } ?>
					<div class="financial-table-container">
					    
					    <?php if($property['pool_buy'] == 'yes'){ ?>
    
    						<table width="100%">
    
    							<tr>
    
    								<td width="33.3%">Asset Appreciation</td>
    
    								<td width="33.3%"><span id="asset-appr-yr">Year 1</span></td>
    								
    								<td width="33.3%"><span style="font-family:helvetica;">&#x20A6;</span><span id="asset-appr-val"><?php echo number_format($property['price']); ?></span></td>
    
    							</tr>
    							<tr>
    
    								<td>Guaranteed Rent</td>
    
    								<td><span id="expected-rent-yr">Year 1</span></td>
    								
    								<td><span style="font-family:helvetica;">&#x20A6;</span><span id="expected-rent-val"><?php echo number_format($property['expected_rent']); ?></span></td>
    							</tr>
    
    						</table>
        				<?php }else{ ?>

						<table width="100%">

							<tr>

								<td width="70%">Expected Rent</td>

								<td>
									<span style="font-family:helvetica;">&#x20A6;</span> <span class="mthly-rent"><?php echo number_format($property['expected_rent'] / 12); ?></span><span class="yrly-rent"><?php echo number_format($property['expected_rent']); ?></span> 								
								</td>

							</tr>
							
							<tr>

								<td>Gross Yeild</td>

								<td><?php echo round((@$property['expected_rent'] / @$property['price']) * 100, 2); ?>%</td>

							</tr>

						</table>
						<?php } ?>
						

						<input type="hidden" class="prop-id" value="<?php echo $property['propertyID']; ?>" />

						<input type="hidden" class="pool_check" value="<?php echo $property['pool_buy']; ?>" />

						<input type="hidden" id="act-price" value="<?php echo $property['price']; ?>" />

						<input type="hidden" id="expected_rent" class="expected-rent-inp" value="<?php echo $property['expected_rent']; ?>" />

					</div>
					<?php if($property['pool_buy'] == 'yes'){ ?>
					<!--- Custom Range Slider --->
					<div class="asset-mgmt-brd">
					    <div class="financial-head">

    						Holding Period
    
    					</div>
					    <div class="container-minax">
  
                          <div class="range-slider">
                            <span id="rs-bullet" class="rs-label"><span id="aa_dp" class="aa-dp">12%</span><span id="yr_dp" class="yr-dp">Year 1</span></span>
                            <input id="rs-range-line" class="rs-range" type="range" step="1" value="1" min="1" max="20">
                            
                          </div>
                          
                          <div class="box-minmax">
                            <span></span><span></span>
                          </div>
                          
                        </div>
    					
					</div>
					<?php } ?>
					<!---Custom Range Slider --->

				</div>

			</div>

			<div class="property-main-details">

				<div class="summary-menu">

					<div id="buy-now" class="summary-menu-item active-summary-menu">Buy Now</div>

					<div id="prop-summary" class="summary-menu-item">Property details</div>

					<div id="similar-listing" class="summary-menu-item">Similar Listings</div>

				</div> 

				<!----- Property Summary pane----->

				<div class="prop-summary summary-container">

					<div class="left-summary">

						<div class="certification">

							Buytolet Certified

						</div>

						<table width="100%">

							<tr>

								<th style="text-align: left;">Property Size</th>

								<th style="text-align: left;">Tenancy</th>

							</tr>

							<tr> 

								<td><?php echo number_format($property['property_size']) ?> sqm</td>

								<td>									
									<?php
										if($property['tenantable'] == 'yes'){
											echo "Occupied";
										}else{
											echo "Vacant";
										}									
									?>								
								</td>

							</tr>

						</table>

						<div class="details-head">Property Info</div>

						<div class="details">

							<?php echo nl2br(html_entity_decode($property['property_info'])); ?>

							



						</div>

						<div class="details-head">Location Info</div>

						<div class="details">

							

							<?php echo nl2br(html_entity_decode($property['location_info'])); ?>



						</div>

					</div>

					<div class="floor-plan">						

						<div class="details-head">Floor Plan</div>
						<?php
							if($property['floor_plan']){ 					
						?>
								<img src="<?php echo base_url().'uploads/buytolet/'.$property['image_folder'].'/floor-plan/'.$property['floor_plan']; ?>" />
						
						<?php } ?>

					</div>

				</div>

				<!----- End Property Summary pane----->

				<!----- Buy Now pane ----->

				<div class="buy-now summary-container">
                <?php if($property['pool_buy'] != 'yes'){ ?>    
					<div class="down-payment">
						Down Payment 

						<span class="tooltip">
							<span class="tooltipcircle"><i class="fa fa-info"></i></span>
							<span class="tooltiptext">
								Move the slider up or down to select your equity preference. Choose financing option that suits your equity base below
							</span>

						</span>
					</div>

					<div class="down-payment-below">What do you have?</div>

					<div id="demo" class="price"><span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['price']); ?></div>

				

					<div class="slidecontainer">

						<input type="range" min="<?php echo (0.4 * $property['price']); ?>" max="<?php echo $property['price']; ?>" step="<?php echo (0.05 * $property['price']); ?>" value="<?php echo (0.4 * $property['price']); ?>" class="sliders" id="myRange"> 
						<div class="scale">
							<span class="mark">
								<div class="rulings-left">
									40%
									<!--<span class="tooltip">
										<span class="tooltipcircle"><i class="fa fa-info"></i></span>
										<span class="tooltiptext">Savings plan tips.</span> 
									</span>-->
								</div>
								<div class="rulings">
									45%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									50%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									55%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									60%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									65%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									70%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									75%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									80%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									85%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									90%
								</div>
							</span>
							<span class="mark">
								<div class="rulings">
									95%
								</div>
							</span>
							<span class="mark"> 
								<div class="rulings">100%</div>
							</span>
							<span class="mark">
								<div class="rulings"></div>								
							</span>
						</div> 
						<!--<p>Value: <span id="demo"></span></p>-->
					</div>   
                <?php } ?>
					<div class="financing-options">

						<div class="main-prop-desc">

							Financing Options

						</div>

					<div>
					<div class="responsive-table"> 
							<table cellpadding="5" class="finance-option-table" width="100%" style="word-wrap: normal; word-break: normal;">
							 <?php if($property['pool_buy'] != 'yes'){ ?>
								<tr class="f-options self-finance" id="self-finance">
									<td style="width:50px" valign="top">
										<label class="container">
											<input type="radio" name="option-but" class="self-finance-but" value="self-<?php echo $property['price'].'-'.$property['propertyID']; ?>" />
											<span class="checkmark self-finance-rep" id="self-<?php echo $property['price'].'-'.$property['propertyID']; ?>"></span>
										</label>
									</td>
									<td valign="top">
										<span class="f-option-item">Cash Finance</span>
									</td>
									<td valign="top" style="width:250px;text-align:right;font-family:mulish-regular">
										<span style="font-family:helvetica;">&#x20A6;</span> <?php if(@$property['price']){ echo "<span class='figures'>".number_format($property['price'])."</span>"; }else{ echo "<span class='figures'>0</span>"; } ?>
										<span class="tooltip">
											<span class="tooltipcircle"><i class="fa fa-info"></i></span>
											<span class="tooltiptext">You purchase the property outrightly and make 100% cash payment.</span>										
										</span>
									</td>
								</tr>
								<tr class="f-options self-finance" id="self-finance">

									<td >&nbsp;</td>
									<td  >&nbsp;</td>									
									<td >&nbsp;</td>								

								</tr>

								<tr class="f-options mortgage-plan" id="mortgage-plan">
									<td style="width:20px" valign="top">
										<label class="container">
											<input type="radio" checked="checked" name="option-but" class="mortgage-but" value="mortgage-<?php if(@$property['mortgage']){ echo @$property['mortgage']; }else{ echo 0; }'-'.$property['propertyID']; ?>" /> 
											<span class="checkmark mortgage-rep" id="self-mortgage-<?php if(@$property['mortgage']){ echo @$property['mortgage']; }else{ echo 0; }'-'.$property['propertyID']; ?>"></span>
										</label>
									</td>

									<td valign="top"> 

										<span class="f-option-item">Mortgage finance</span>
										

									</td>
									
									<td valign="top" style="text-align:right;font-family:mulish-regular">
										<span style="font-family:helvetica;">&#x20A6;</span> <?php if(@$property['mortgage']){ echo "<span class='figures'>".number_format($property['mortgage'])."</span>"; }else{ echo "<span class='figures'>0</span>"; } ?>
										<span class="tooltip">
											<span class="tooltipcircle"><i class="fa fa-info"></i></span>
											<span class="tooltiptext">												
												<?php if($property['mortgage'] == ''){ $property['mortgage'] = 0; } ?>
												<?php if(@$property['expected_rent'] > @$property['mortgage']){ ?>
														You have selected <?php echo "<span style='font-family:helvetica;'>&#x20A6; </span>".number_format(@$property['mortgage']); ?> equity contribution. This property generates enough monthly cash to cover the monthly mortgage repayment, and gives you extra cash.
												<?php } ?>
												<?php if(@$property['expected_rent'] == @$property['mortgage']){ ?>
														You have selected <?php echo "<span style='font-family:helvetica;'>&#x20A6; </span>".number_format(@$property['mortgage']); ?> equity contribution. This property generates adequate monthly cash that matches the monthly mortgage repayment.
												<?php } ?>
												<?php if(@$property['expected_rent'] < @$property['mortgage']){ ?>
														You have selected <?php echo "<span style='font-family:helvetica;'>&#x20A6; </span>".number_format(@$property['mortgage']); ?> equity contribution. This property does not generate enough cash to cover the mortgage repayment. You will be expected to pay the difference monthly.
												<?php } ?>
											</span>
										
										</span>
									</td>

								</tr>
								<tr class="f-options mortgage-plan" id="mortgage-plan">

									<td >&nbsp;</td>
									<td  >&nbsp;</td>
									
									<td >&nbsp;</td>
									

								</tr>
								<?php } ?>
								<?php if($property['payment_plan'] == 'yes' && $property['pool_buy'] != 'yes'){ ?>
									<tr class="f-options payment-plan" id="payment-plan">
										<td style="width:20px" valign="top">
											<label class="container">
												<input type="radio" name="option-but" class="pplan-but" value="pplan-<?php echo '0-'.@$property['propertyID']; ?>" />  
												<span class="checkmark pplan-rep"  id="pplan-<?php echo '0-'.@$property['propertyID']; ?>" ></span>
											</label>

										</td>

										<td width="450px" valign="top">

											<span class="f-option-item">Payment plan</span>

										</td>			

										<td width="250px" valign="top" style="text-align:right;font-family:mulish-regular;">
											<!--<span style="font-family:helvetica;">&#x20A6;</span>--> <?php //if(@$property['developer']){ echo number_format($property['developer']); }else{ echo 0; } ?><span class="payment-plan-info repayment-text">
												<span style="font-family:helvetica;">&#x20A6;</span><span class="repayment-cost">0 </span>/Month
											</span>
											<span class="tooltip">
												<span class="tooltipcircle"><i class="fa fa-info"></i></span>
												<span class="tooltiptext pp-tooltip" id="pp-tooltip">
											
												</span>

											</span>
										</td> 
										

									</tr>
									<tr class="f-options payment-plan" id="payment-plan">
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td style="text-align:right">
											<span class="payment-plan-info repayment-text">
												<div class="" style="width:150px;">
													<select class="soflow repayment-duration">
														<option selected="selected" value="12">12 Months</option>
														<?php if(@$property['payment-plan-period'] == '18'){ ?>
															<option value="18">18 Months</option>
														<?php } ?>
														<?php if(@$property['payment-plan-period'] == '24'){ ?>
															<option value="24">24 Months</option>
														<?php } ?>
													</select>
												</div>
											</span>
										</td>
										<td>&nbsp;</td>

									</tr>
									<?php } ?>
									<?php if($property['pool_buy'] == 'yes'){ ?>
									
									<tr class="f-options pool-buy" id="pool-buy">
										<td style="width:20px" valign="top">
											<label class="container">
												<input checked="checked" type="radio" name="option-but" class="pool-buy-but" value="pool-<?php echo '0-'.@$property['propertyID']; ?>" />  
												<span class="checkmark pool-buy-rep"  id="pool-<?php echo '0-'.@$property['propertyID']; ?>" ></span>
											</label>

										</td>

										<td width="450px" valign="top">

											<span class="f-option-item">Pool Buy</span>

										</td>			

										<td width="250px" valign="top" style="text-align:right;font-family:mulish-regular;">
											<!--<span style="font-family:helvetica;">&#x20A6;</span>--> <?php //if(@$property['developer']){ echo number_format($property['developer']); }else{ echo 0; } ?>
											<span class="pool-buy-info repayment-text">
												<span style="font-family:helvetica;">&#x20A6;</span><span class="pool-cost">0 </span>
											</span>
											<span class="tooltip">
												<span class="tooltipcircle"><i class="fa fa-info"></i></span>
												<span class="tooltiptext pool-tooltip" id="pool-tooltip">
											        Select the amount of shares you wish to purchase.
												</span>

											</span>
										</td> 
										

									</tr>
									<tr class="f-options pool-buy" id="pool-buy">
										<td>&nbsp;</td>
										<td><span class="repayment-text">Select amount of shares</span></td>
										<td style="text-align:right">
											<span class="pool-buy-info repayment-text">
												<div class="" style="width:150px;">
													<select style="float:right" class="soflow unit-amount">
													    <option selected="selected" value="">Select</option>
													    <?php for($i = 1; $i <= $property['available_units']; $i++){ ?>
													    
														    <option value="<?php echo $i; ?>"><?php echo $i; ?> Share<?php if($i > 1){ echo "s"; }; ?></option>
														
														<?php } ?>
													</select>
												</div>
											</span>
										</td>
										<td>&nbsp;</td>

									</tr>
									<tr class="f-options pool-buy" id="pool-buy">
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td style="text-align:right">
											<div style="float:right" class="option-but" id="">Pay</div>
										</td>

									</tr>
								
								<?php } ?>
								
							</table>
						</div>
					</div>

				</div>

			</div>

			<!----- End Buy Now pane ----->

			<!--<div class="finance-hl summary-container">

				Financial Highlight

			</div>--> 

			<div class="similar-listing summary-container">

				<ul class="property-container">

				<?php if(isset($similarProps) && !empty($similarProps)){ ?>

					<?php foreach($similarProps as $similarProp => $s_prop){ ?>

						<li class="property-item">

							<a href="<?php echo base_url()."property/".$s_prop['propertyID']; ?>">

								<div class="property-content">
 
									<div class="property-img">

										<div class="property-type"><?php echo $s_prop['type']; ?></div>

										<img src="<?php echo base_url().'/uploads/buytolet/'.$s_prop['image_folder'].'/'.$s_prop['featured_image']; ?>" />

									</div>

									<div class="property-details">

										<div class="property-address"><?php echo $s_prop['address']; ?></div>

										<div class="property-price"><span style="font-family:helvetica;">&#x20A6;</span> <?php echo number_format($s_prop['price']); ?></div>

										<div class="property-spec"><span><?php echo $s_prop['bed']; ?> bed</span><span><?php echo $s_prop['bath']; ?> bathrooms</span><span><?php echo number_format($s_prop['property_size']); ?> sqft</span></div>

										<div class="property-stat"><span>Rent P.A</span><span><span style="font-family:helvetica;">&#x20A6;</span> <?php echo $s_prop['expected_rent'] / 1000000; ?>M</span></div>

										<div class="property-stat"><span>Gross Rental Yeild</span><span><?php round((@$s_prop['expected_rent'] / @$s_prop['price']) * 100, 2); ?>%</span></div>

										<div class="property-stat"><span>HPI Growth</span><span><?php echo $s_prop['hpi']; ?>%</span></div>

									</div>

								</div>

							</a>

						</li>

					<?php } ?> 

				<?php } ?>

				</ul> 

			</div>

		</div>

	</div>
</div>
<input type="hidden" class="property_id" id="propety_id" value="<?php echo @$property['propertyID']; ?>" />
<input type="hidden" class="property_name" id="propety_name" value="<?php echo @$property['property_name']; ?>" />
<input type="hidden" class="payment-plan-option" id="payment-plan-option" value="<?php echo @$property['payment_plan']; ?>" />
<input type="hidden" class="payment-plan-period" id="payment-plan-period" value="<?php echo @$property['payment_plan_period']; ?>" />
<?php $minimum = 40; if(@$property['minimum_payment_plan']){ $minimum = $property['minimum_payment_plan']; } ?>
	
<input type="hidden" class="payment-plan-minimum" id="payment-plan-minimum" value="<?php echo @$property['price'] * (@$minimum / 100); ?>" />

<input type="hidden" class="pool_units" id="pool_units" value="<?php echo @$property['pool_units']; ?>" />
<input type="hidden" class="pool-total-cost" value="" />

<input type="hidden" class="expected-rent" id="expected-rent" value="<?php echo @$property['expected_rent']; ?>" />
<input type="hidden" class="total-cost" id="total-cost" value="<?php echo @$property['price']; ?>" />
<input type="hidden" class="payment" id="payment" value="<?php echo (@$property['price'] * 0.40); ?>" />
<input type="hidden" class="subsequent-payment" id="subsequent-payment" value="0" />
<input type="hidden" class="repayment-period" id="repayment-period" value="0" />
<input type="hidden" class="total-amount" value="<?php echo @$property['price']; ?>" />
<input type="hidden" class="fourty-percent" id="fourty-percent" value="<?php echo (@$property['price'] * 0.40); ?>" />
<input type="hidden" class="fourty-five-percent" id="fourty-five-percent" value="<?php echo (@$property['price'] * 0.45); ?>" />
<input type="hidden" class="seventy-five-percent" id="seventy-five-percent" value="<?php echo (@$property['price'] * 0.75); ?>" /> 
<input type="hidden" class="ninety-five-percent" id="ninety-five-percent" value="<?php echo (@$property['price'] * 0.95); ?>" />

<input type="hidden" class="asset_appr_1" id="asset_appr_1" value="<?php echo @$property['asset_appreciation_1']; ?>" /> 
<input type="hidden" class="asset_appr_2" id="asset_appr_2" value="<?php echo @$property['asset_appreciation_2']; ?>" /> 
<input type="hidden" class="asset_appr_3" id="asset_appr_3" value="<?php echo @$property['asset_appreciation_3']; ?>" /> 
<input type="hidden" class="asset_appr_4" id="asset_appr_4" value="<?php echo @$property['asset_appreciation_4']; ?>" />
<input type="hidden" class="asset_appr_5" id="asset_appr_5" value="<?php echo @$property['asset_appreciation_5']; ?>" />
<script src="<?php echo base_url(); ?>assets/js/payment.js?version=<?php echo rand(1, 20); ?>.<?php echo rand(1, 50); ?>.<?php echo rand(1, 70); ?>"></script>
<script src="<?php echo base_url(); ?>assets/js/thumbnail-scroller.js"></script>
<script src="<?php echo base_url(); ?>assets/js/image-swap.js"></script>
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
	var rangeSlider = document.getElementById("rs-range-line");
    var rangeBullet = document.getElementById("rs-bullet");
    var asset_appr_1 = document.getElementById("asset_appr_1");
    var asset_appr_2 = document.getElementById("asset_appr_2");
    var asset_appr_3 = document.getElementById("asset_appr_3");
    var asset_appr_4 = document.getElementById("asset_appr_4");
    var asset_appr_yr = document.getElementById("asset-appr-yr");
    var exp_rent_yr = document.getElementById("expected-rent-yr");
    
    
    var asset_appr_val = document.getElementById("asset-appr-val");
    var exp_rent_val = document.getElementById("expected-rent-val");
    var yr_dp = document.getElementById("yr_dp");
    var aa_dp = document.getElementById("aa_dp");
    var exp_rent = document.getElementById("expected_rent").value;
    var prop_price = document.getElementById("act-price").value;
    
    /*if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     alert("mobile");
    }*/
    
    rangeSlider.addEventListener("input", showSliderValue, true);
    
    function showSliderValue() {
        
        var sum = 0;
        
        if(rangeSlider.value >= 1 && rangeSlider.value <= 5){
            
            sum = asset_appr_1.value * rangeSlider.value;
            aa_dp.innerHTML = sum+"%";
            
            var actual_add = (parseInt(sum) / 100) * prop_price;
            
            asset_appr_val.innerHTML = numberWithCommas(parseInt(prop_price) + parseInt(actual_add));
            
        }else if(rangeSlider.value >= 6 && rangeSlider.value <= 9){
            
            sum = asset_appr_2.value * rangeSlider.value;
            aa_dp.innerHTML = sum+"%";
            
            var actual_add = (parseInt(sum) / 100) * prop_price;
            
            asset_appr_val.innerHTML = numberWithCommas(parseInt(prop_price) + parseInt(actual_add));
            
        }else if(rangeSlider.value >= 10 && rangeSlider.value <= 14){
            
            sum = asset_appr_3.value * rangeSlider.value;
            aa_dp.innerHTML = sum+"%";
            
            var actual_add = (parseInt(sum) / 100) * prop_price;
            
            asset_appr_val.innerHTML = numberWithCommas(parseInt(prop_price) + parseInt(actual_add));
            
        }else if(rangeSlider.value >= 15){
            
            sum = asset_appr_4.value * rangeSlider.value;
            aa_dp.innerHTML = sum+"%";
            
            var actual_add = (parseInt(sum) / 100) * prop_price;
            
            asset_appr_val.innerHTML = numberWithCommas(parseInt(prop_price) + parseInt(actual_add));
            
        }
        yr_dp.innerHTML = "Year "+rangeSlider.value;
        asset_appr_yr.innerHTML = "Year "+rangeSlider.value;
        exp_rent_yr.innerHTML = "Year "+rangeSlider.value;
        
        if(rangeSlider.value >= 2){
            var val = (5 * rangeSlider.value) - 5;
            
            var per = (val / 100) * exp_rent;
            
            val = parseInt(exp_rent) + parseInt(per);
            
            exp_rent_val.innerHTML = numberWithCommas(val);
            
        }else{
            exp_rent_val.innerHTML = numberWithCommas(exp_rent);
        }
        var bulletPosition = (rangeSlider.value /rangeSlider.max);
        if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            rangeBullet.style.left = (bulletPosition * 248) + "px";
        }else{
            rangeBullet.style.left = (bulletPosition * 348) + "px"; 
        }
        
    }
    function numberWithCommas(x) {

		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	}
</script>