	<div class="section">

		<div class="section-inner">

			<div class="empty-spc">

				<div class="all-prop-button"><a href="<?php echo base_url('properties'); ?>">all properties</a></div>

			</div>

			<div class="empty-spc">
				<?php if($property['availability'] == "Sold"){ ?>
				    <div class="sold-inspection-button">Sold</div>
				<?php }else{ ?>
				    <div class="inspection-button">Book Inspection</div>
				
                
    				<div class="prop-status">
    					<span></span>
    					<?php if($property['tenantable'] == 'yes'){ ?>
    
    								Occupied
    
    						<?php } else { ?>
    
    								Vacant
    
    						<?php } ?>
    				</div>
                <?php } ?>
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

						<?php echo $property['property_name']; ?>

					</div>
					<?php 
					    $lvl = 'no-lvl';
					    
					    if(@$property['construction_lvl'] == 'Ongoing'){
					        $lvl = 'ongoing';
					        
					    }else if(@$property['construction_lvl'] == 'Off Plan'){
					        $lvl = 'off-plan';
					        
					    }else if(@$property['construction_lvl'] == 'Completed'){
					        $lvl = 'completed';
					        
					    }
					?>
					<?php if(!is_null(@$property['construction_lvl'])){ ?>
    					<div class="construction-level-pane">
    					    <span class="construction-level-icn">
    					        <img src="<?php echo base_url(); ?>assets/img/construction-level.svg" />
    					    </span>
    					    <div class="construction-level-txt <?php echo $lvl; ?>">
    					        <?php echo @$property['construction_lvl']; ?>
    					    </div>
    					    <?php if(@$property['construction_lvl'] != 'Completed'){ ?>
        					    <div class="lvl_desc">
        					        <span class="lvl_duration">Start date</span>
        					        <span class="lvl_date"><?php echo date('d M, Y', strtotime(@$property['start_date'])); ?></span>
        					    </div>
    					    <?php } ?>
    					    <div class="lvl_desc">
    					        <span class="lvl_duration">End date</span>
    					        <span class="lvl_date"><?php echo date('d M, Y', strtotime(@$property['finish_date'])); ?></span>
    					    </div>
    					</div>
					<?php } ?>

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

						<span style="position:relative;display:inline-block;" class="<?php if($property['promo_price']) { echo "strikeout"; }  ?>"><span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['price']); ?></span>

					</div>
					<?php if($property['pool_buy'] == 'yes'){ ?>
    					<div class="main-prop-desc">
    						Property Price
    					</div>
    					<div class="median-prop-price">
    
    						<span style="position:relative;display:inline-block;" class="<?php if($property['promo_price']) { echo "strikeout"; }  ?>"><span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['price'] * $property['pool_units']); ?></span>

					    </div>
                    <?php } ?>
                    <?php if($property['pool_buy'] == 'yes'){ ?>
                        <?php if($property['promo_price'] > 0 && $property['promo_price'] != ""){ ?>
        					<div class="main-prop-desc">
        						Promo Price
        					</div>
        					<div class="median-prop-price">
        
        						<span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['promo_price'] * $property['pool_units']); ?>
    
    					    </div>
                        <?php } ?>
                    <?php }else if($property['promo_price'] > 0 && $property['promo_price'] != ""){ ?>
                            <div class="main-prop-desc">
        						Promo Price
        					</div>
                            <div class="main-prop-price">

        						<span style="font-family:helvetica;font-weight:bold;">&#x20A6;</span> <?php echo number_format($property['promo_price']); ?>
        
        					</div>
                    <?php } ?>
                    <?php if($property['pool_buy'] == 'yes'){ ?>
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
					</div>
					<?php } ?>
					<div class="social-and-like">
					
						<div class="sal share-prop">
							<span class="sal-icns share"></span>
							<span class="sal-txt" style="cursor:pointer">
								Share
							</span>
							<div class="share-content">
								<a class="js-share-twitter-link" href='https://twitter.com/intent/tweet?url=<?php echo base_url().'property/'.$property['propertyID']; ?>'><i class="fa fa-twitter"></i></a>
								<a href="javascript:fbShare('<?php echo base_url().'property/'.$property['propertyID']; ?>', '<?php echo @$title; ?>', 'Buy2Let Properties For Sale', '<?php echo base_url().'uploads/buytolet/'.$property['image_folder'].'/'.$property['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
								<a href="whatsapp://send?text=<?php echo base_url().'property/'.$property['propertyID']; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
							</div>
						</div>
					
						<div class="sal favorite-prop">
							<span class="sal-icns like"></span>
							<span class="sal-txt">Favorite</span>
						</div>
						
					</div>
					<?php if($property['pool_buy'] == 'yes'){ ?>
					    <div class="fee-disclaimer">
    					    <div class="head-title">Cost Breakdown</div>
    					    <u><b>Price:</b></u> This property has been divided into shares. The listed price covers a share which gives you a fraction of the ownership.<br /><br />
    					    <u><b>Fees:</b></u> The listed price is inclusive of marketplace and transaction fees. 
    					</div>
					
					<?php }else{ ?>
    					<!---<div class="fee-disclaimer">
    					    <div class="head-title">Buy2let Fees</div>
    					    <u><b>Marketplace Fee:</b></u> You are required to pay 1% of the price of property you are interested in purchasing on Buy2let. In the case this 1% fee is lower than 200,000 Naira, you will be charged 200,000 Naira as Marketplace fee. This fee can be paid online via Paystack or Bank transfer.<br /><br />
    					    <u><b>Transaction Fee:</b></u> You will also be required to pay a transaction fee. Which is 4% of the price of property you are interested in purchasing on Buy2let. 
    					</div>--->
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
    
    								<td width="33.3%">Appreciation</td>
    
    								<td style="text-align:center" width="33.3%"><span id="asset-appr-yr">1 Year</span></td>
    								
    								<td style="text-align:right" width="33.3%"><span style="font-family:helvetica;">&#x20A6;</span><span id="asset-appr-val"><?php echo number_format($property['price'] + (($property['asset_appreciation_1'] / 100) * $property['price'])); ?></span></td>
    
    							</tr>
    							<tr>
    
    								<td>Guaranteed Rent</td>
    
    								<td style="text-align:center"><span id="expected-rent-yr">1 Year</span></td>
    								
    								<td style="text-align:right"><span style="font-family:helvetica;">&#x20A6;</span><span id="expected-rent-val"><?php echo number_format($property['expected_rent']); ?></span></td>
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
                                <?php $price = $property['price']; if($property['promo_price'] > 0 && $property['promo_price'] != ""){ $price = $property['promo_price']; } ?>
								<td><?php echo round((@$property['expected_rent'] / @$price) * 100, 2); ?>%</td>

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
                            <span id="rs-bullet" class="rs-label"><span id="aa_dp" class="aa-dp">12%</span><span id="yr_dp" class="yr-dp">1 Year</span></span>
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
					
					<div id="market-comparison" class="summary-menu-item">Market Comparison</div>

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
					    <?php
					        $slider_price = $property['price'];
					        
					        $cash_finance_price = $property['price'];
					        
					        $payment_plan_price = $property['price'];
					        
					        if(($property['promo_category'] == 'mortgage_finance' || $property['promo_category'] == 'all') && ($property['promo_price'] > 0 || $property['promo_price'] != "")){
					            
					            $slider_price = $property['promo_price'];
					            
					        }
					        if(($property['promo_category'] == 'cash-finance' || $property['promo_category'] == 'all') && ($property['promo_price'] > 0 || $property['promo_price'] != "")){
					            
					            $cash_finance_price = $property['promo_price'];
					            
					        }
					        if(($property['promo_category'] == 'payment-plan' || $property['promo_category'] == 'all') && ($property['promo_price'] > 0 || $property['promo_price'] != "")){
					            
					            $payment_plan_price = $property['price'];
					            
					        }
					    ?>

						<input type="range" min="<?php echo (0.4 * $slider_price); ?>" max="<?php echo $slider_price; ?>" step="<?php echo (0.05 * $slider_price); ?>" value="<?php echo (0.4 * $slider_price); ?>" class="sliders" id="myRange"> 
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

							Financing Options <?php echo $property['availability']; ?>

						</div>

					<div>
					    <?php
					        $cf_price = $property['price'];
					        
					        if($property['promo_category'] == 'cash-finance' || $property['promo_category'] == ''){
					            
					            $cf_price = $property['promo_price'];
					            
					        }
					    ?>
					<div class="responsive-table"> 
							<table cellpadding="5" class="finance-option-table" width="100%" style="word-wrap: normal; word-break: normal;">
							 <?php if($property['pool_buy'] != 'yes'){ ?>
								<tr class="f-options self-finance" id="self-finance">
									<td style="width:50px" valign="top">
										<label class="container">
											<input type="radio" name="option-but" class="self-finance-but" value="self-<?php echo $cf_price.'-'.$property['propertyID']; ?>" />
											<span class="checkmark self-finance-rep" id="self-<?php echo $cf_price.'-'.$property['propertyID']; ?>"></span>
										</label>
									</td>
									<td valign="top">
										<span class="f-option-item">Cash Finance</span>
									</td>
									<td valign="top" style="width:250px;text-align:right;font-family:mulish-regular">
										<span style="font-family:helvetica;">&#x20A6;</span> <?php if(@$cash_finance_price){ echo "<span class='figures'>".number_format($cash_finance_price)."</span>"; }else{ echo "<span class='figures'>0</span>"; } ?>
										<span class="tooltip">
											<span class="tooltipcircle"><i class="fa fa-info"></i></span>
											<span class="tooltiptext">You purchase the property outrightly and make 100% cash payment.</span>										
										</span>
									</td>
								</tr>
								<tr class="f-options self-finance" id="self-finance">

									<td>&nbsp;</td>
									<td>&nbsp;</td>									
									<td>&nbsp;</td>								

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
											<span class="payment-plan-info repayment-text">
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
														<?php if(@$property['payment_plan_period'] >= '18'){ ?>
															<option value="18">18 Months</option>
														<?php } ?>
														<?php if(@$property['payment_plan_period'] == '24'){ ?>
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

										<td width="250px" valign="top" style="text-align:center;font-family:mulish-regular;">
											<span class="pool-buy-info repayment-text">
											    <span class="tooltip">
    												<span class="tooltipcircle"><i class="fa fa-info"></i></span>
    												<span class="tooltiptext pool-tooltip" id="pool-tooltip">
    											        Select the amount of shares you wish to purchase.
    												</span>
    
    											</span>
												<span style="font-family:helvetica;">&#x20A6;</span><span class="pool-cost"><?php echo number_format(@$property['price']); ?></span>
											</span>
											<!---<span class="tooltip">
												<span class="tooltipcircle"><i class="fa fa-info"></i></span>
												<span class="tooltiptext pool-tooltip" id="pool-tooltip">
											        Select the amount of shares you wish to purchase.
												</span>

											</span>--->
										</td> 
										

									</tr>
									<tr class="f-options pool-buy" id="pool-buy">
										<td width="150px"></td>
										<td><span class="repayment-text">Select amount of shares</span></td>
										<td style="text-align:center">
											<span class="pool-buy-info">
												<div class="" style="margin:auto;width:150px;">
												    <?php //echo intval($property['available_units']); ?>
												    <div class="share-quantity">
												        <input id="unit-amount" class="unit-amount" min="1" max="<?php echo intval($property['available_units']); ?>" value="1" type="number">
													</div>
													
												</div>
											</span>
										</td>
										<td>&nbsp;</td>
                                        <input type="hidden" id="pps" value="<?php echo (100/$property['pool_units']); ?>" />
									</tr>
									<tr class="f-options pool-buy" id="pool-buy">
										<td width="150px"></td>
										<td><span class="repayment-text">Your ownership percentage share is :</span></td>
										<td style="text-align:center">
											<span id="share-amount-value"><?php echo (100 / $property['pool_units']) * 1; ?>%</span>
										</td>
										
										<td>&nbsp;</td>
									</tr>
								
								<?php } ?>
								<?php if($property['availability'] != 'Sold'){ ?>
    									<tr class="f-options">
    										<td>&nbsp;</td>
    										<td>&nbsp;</td>
    										<td style="text-align:center">
    											<div class="option-but" id="">Pay</div></td>
    										<td>&nbsp;</td>
    									</tr>
						        <?php }else{ ?>
						                <tr class="f-options">
    										<td>&nbsp;</td>
    										<td>&nbsp;</td>
    										<td style="text-align:right">
    											<div style="float:right" class="sold-but" id="">Sold</div>
    										</td>
    										<td>&nbsp;</td>
    									</tr>
						        <?php } ?>
							</table>
							<?php if($property['pool_buy'] == 'yes'){ ?>
							<div class="pool-lecture">
							    <div class="lecture-head">What is included in your investment:</div>

                                <b>Fractional Ownership:</b> When you buy one or more shares of this property you own a fraction of the property equivalent to the shares purchased. Your shares are freehold; meaning you can hold for as long as you want, you can transfer, or sell anytime. As a pool-buy investor, you enjoy zero running cost. All expenses of the property are covered by the rent yield.
                                
                                <p><b>Guaranteed Asset Appreciation Annually:</b> In order to protect individual investor interest in a pooled investment when exiting, Buy2Let is providing a 10years guaranteed Asset appreciation in the situation you don’t find an investor to buy your listed shares within 7days (See the offered appreciation under financial highlights). This is an assurance from Buy2Let that your shares will not devalue because of your ties to other co-owners.</p>
                                
                                <p><b>Guaranteed Rent:</b> Buy2Let Pool-buy investors enjoy 10 years guaranteed rent on their investment. The guaranteed rent ensures the property has enough cash-flow to handle running costs which include property insurance, property maintenance, property management, and land-use-charge. Net Rent (gross rent minus all expenses) is shared amongst shareholders in the portion of shares owned, at the end of 12months calendar circle.</p>
                                
                                <p><b>Property Insurance:</b> The property is insured year to year and the Insurance policies cover damage resulting from fire, flood and other standard items. The insurance cost is deducted from the rent yield</p>
                                
                                <p><b>Property maintenance:</b> Any maintenance issue including structural will be handled for 10years from the rent yield, by our in-house team of experts focused on optimizing the long-term income potential of your investment.</p>
                                
                                <p><b>Land Use Charge:</b> The property is classified as Residential Property, without Owner in residence. The annual LUC rates applicable to this property will be covered from the rent yield.</p> 
                                
                                <p><b>Property Letting & Management:</b> All rental properties bought on Buy2Let by investors are let-out and managed by RentSmallSmall, a leading property rental company. Letting and management fees are covered from the rent yield.
</p>
							</div>
							<?php } ?>
						</div>
					</div>

				</div>

			</div>

			<!----- End Buy Now pane ----->

			<div class="market-comparison summary-container">

				Market comparison coming soon.

			</div> 

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

										<div class="property-address"><?php echo @$s_prop['address']; ?></div>

										<div class="property-price"><span style="font-family:helvetica;">&#x20A6;</span> <?php echo number_format(@$s_prop['price']); ?></div>

										<div class="property-spec"><span><?php echo @$s_prop['bed']; ?> bed</span><span><?php echo @$s_prop['bath']; ?> bathrooms</span><span><?php echo number_format($s_prop['property_size']); ?> sqft</span></div>

										<div class="property-stat"><span>Rent P.A</span><span><span style="font-family:helvetica;">&#x20A6;</span> <?php echo @$s_prop['expected_rent'] / 1000000; ?>M</span></div>
                                        <?php $price = $s_prop['price']; if($s_prop['promo_price'] > 0 && $s_prop['promo_price'] != ""){ $price = $s_prop['promo_price']; } ?>
										<div class="property-stat"><span>Gross Rental Yeild</span><span><?php echo round((@$s_prop['expected_rent'] / @$price) * 100, 2); ?>%</span></div>

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
<input type="hidden" class="property_name" id="property_name" value="<?php echo @$property['property_name']; ?>" />
<input type="hidden" class="payment-plan-option" id="payment-plan-option" value="<?php echo @$property['payment_plan']; ?>" />
<input type="hidden" class="payment-plan-period" id="payment-plan-period" value="<?php echo @$property['payment_plan_period']; ?>" />
<?php $minimum = 40; if(@$property['minimum_payment_plan']){ $minimum = $property['minimum_payment_plan']; } ?>
	
<input type="hidden" class="payment-plan-minimum" id="payment-plan-minimum" value="<?php if(@$property['promo_category'] == 'payment-plan'){ echo @$property['promo_price'] * (@$minimum / 100); }else{ echo @$property['price'] * (@$minimum / 100); } ?>" />

<input type="hidden" class="pool_units" id="pool_units" value="<?php echo @$property['pool_units']; ?>" />
<input type="hidden" class="pool-total-cost" value="" />

<input type="hidden" class="expected-rent" id="expected-rent" value="<?php echo @$property['expected_rent']; ?>" />
<input type="hidden" class="total-cost" id="total-cost" value="<?php echo @$property['price']; ?>" />
<input type="hidden" class="payment" id="payment" value="<?php echo (@$property['price'] * 0.40); ?>" />
<input type="hidden" class="subsequent-payment" id="subsequent-payment" value="0" />
<input type="hidden" class="repayment-period" id="repayment-period" value="0" />
<input type="hidden" class="total-amount" value="<?php echo @$property['price']; ?>" />
<input type="hidden" id="promo-price" class="promo-price" value="<?php if(@$property['promo_price']){ echo $property['promo_price']; }else{ echo 0; } ?>" />
<input type="hidden" class="promo-category" value="<?php if(@$property['promo_category']){ echo $property['promo_category']; }else{ echo "none"; } ?>" />
<input type="hidden" class="fourty-percent" id="fourty-percent" value="<?php echo (@$property['price'] * 0.40); ?>" />
<input type="hidden" class="fourty-five-percent" id="fourty-five-percent" value="<?php echo (@$property['price'] * 0.45); ?>" />
<input type="hidden" class="seventy-five-percent" id="seventy-five-percent" value="<?php echo (@$property['price'] * 0.75); ?>" /> 
<input type="hidden" class="ninety-five-percent" id="ninety-five-percent" value="<?php echo (@$property['price'] * 0.95); ?>" />


<input type="hidden" class="asset_appr_1" id="asset_appr_1" value="<?php echo @$property['asset_appreciation_1']; ?>" /> 
<input type="hidden" class="asset_appr_2" id="asset_appr_2" value="<?php echo @$property['asset_appreciation_2']; ?>" /> 
<input type="hidden" class="asset_appr_3" id="asset_appr_3" value="<?php echo @$property['asset_appreciation_3']; ?>" /> 
<input type="hidden" class="asset_appr_4" id="asset_appr_4" value="<?php echo @$property['asset_appreciation_4']; ?>" />
<input type="hidden" class="asset_appr_5" id="asset_appr_5" value="<?php echo @$property['asset_appreciation_5']; ?>" />
<input type="hidden" class="asset_appr_value" id="asset_appr_value" value="<?php echo @$property['asset_appreciation_1']; ?>" />
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
</script>
<!---Number element controller ---->
<script>
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.share-quantity input');
    jQuery('.share-quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function(){
        
        var percentage_per_share = document.getElementById("pps").value;
        
        var oldValue = parseFloat(input.val());
        
        if (oldValue >= max) {
            
            var newVal = oldValue;
          
        } else {
            
            var newVal = oldValue + 1;
          
        }
        var pps = percentage_per_share * newVal;
        
        pps = Math.round(pps * 10) / 10;
        
        $('#share-amount-value').html(numberWithCommas(pps)+"%");
        
        spinner.find("input").val(newVal);10
        
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
          
        var percentage_per_share = document.getElementById("pps").value;
        
        var oldValue = parseFloat(input.val());
        
        if (oldValue <= min) {
            
            var newVal = oldValue;
          
        } else {
            
            var newVal = oldValue - 1;
          
        }
        var pps = percentage_per_share * newVal;
        
        pps = Math.round(pps * 10) / 10;
        
        $('#share-amount-value').html(numberWithCommas(pps)+"%");
        
        spinner.find("input").val(newVal);
        
        spinner.find("input").trigger("change");
      });

    });
</script>
<script>
    var rangeSlider = document.getElementById("rs-range-line");
    var rangeBullet = document.getElementById("rs-bullet");
    var asset_appr_1 = document.getElementById("asset_appr_1");
    var asset_appr_2 = document.getElementById("asset_appr_2");
    var asset_appr_3 = document.getElementById("asset_appr_3");
    var asset_appr_4 = document.getElementById("asset_appr_4");
    var asset_appr_5 = document.getElementById("asset_appr_5");
    var asset_appr_yr = document.getElementById("asset-appr-yr");
    var exp_rent_yr = document.getElementById("expected-rent-yr");
    var asset_appr_value = document.getElementById("asset_appr_value");
    
    
    var asset_appr_val = document.getElementById("asset-appr-val");
    var exp_rent_val = document.getElementById("expected-rent-val");
    var yr_dp = document.getElementById("yr_dp");
    var aa_dp = document.getElementById("aa_dp");
    var exp_rent = document.getElementById("expected_rent").value;
    var prop_price = document.getElementById("act-price").value;
    var unit_amount = document.getElementById("unit-amount");
    
    /*if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     alert("mobile");
    }*/
    
    rangeSlider.addEventListener("input", showSliderValue, true);
    
    function showSliderValue() {
        
        var sum = 0;
        var actual_add = 0;
        
        if(rangeSlider.value == 1){
            aa_dp.innerHTML = asset_appr_1.value+"%";
            
            actual_add = (parseInt(asset_appr_1.value) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum * unit_amount;
        }
        
        if(rangeSlider.value > 1 && rangeSlider.value <= 5){
            if(rangeSlider.value == 5){
                sum = 70;
            }else{
                sum = asset_appr_1.value * rangeSlider.value;
            }
            aa_dp.innerHTML = sum+"%";
            actual_add = (parseInt(sum) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum;
            
        }else if(rangeSlider.value >= 6 && rangeSlider.value <= 9){
            
            sum = asset_appr_2.value * rangeSlider.value;
            aa_dp.innerHTML = sum+"%";
            actual_add = (parseInt(sum) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum;
            
        }else if(rangeSlider.value >= 10 && rangeSlider.value <= 14){
            if(rangeSlider.value == 160){
                sum = 70;
            }else{
                sum = asset_appr_3.value * rangeSlider.value;
            }
            aa_dp.innerHTML = sum+"%";
            actual_add = (parseInt(sum) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum;
            
        }else if(rangeSlider.value >= 15 && rangeSlider.value <= 19){
            if(rangeSlider.value == 5){
                sum = 270;
            }else{
                sum = asset_appr_4.value * rangeSlider.value;
            }
            aa_dp.innerHTML = sum+"%";
            actual_add = (parseInt(sum) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum;
            
        }else if(rangeSlider.value >= 20){
            
            sum = 400;
            aa_dp.innerHTML = sum+"%";
            actual_add = (parseInt(sum) / 100) * prop_price;
            asset_appr_val.innerHTML = numberWithCommas((parseInt(prop_price) + parseInt(actual_add)) * unit_amount.value);
            
            //update the current asset appreciation percentage value
            asset_appr_value.value = sum;
            
        }
        
        var pluralize = "";
        
        if(rangeSlider.value > 1){
            pluralize = "s";
        }
        
        yr_dp.innerHTML = rangeSlider.value+" Year"+pluralize;
        
        asset_appr_yr.innerHTML = rangeSlider.value+" Year"+pluralize;
        
        exp_rent_yr.innerHTML = rangeSlider.value+" Year"+pluralize;
        
        if(rangeSlider.value >= 2){
            var val = (5 * rangeSlider.value) - 5;
            
            var per = (val / 100) * exp_rent;
            
            val = parseInt(exp_rent) + parseInt(per);
            
            //alert(unit_amount);
            
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
        
        function numberWithCommas(x) {

    		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    
    	}
    }
</script>