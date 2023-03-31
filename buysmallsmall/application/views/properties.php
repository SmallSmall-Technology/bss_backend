	<div class="section">

		<div class="section-inner">

			<div class="empty-spc">

				<div class="all-prop-button"><a href="<?php echo base_url('properties'); ?>">all properties</a></div>

			</div>

			<!---<div class="empty-spc">

				<span class="active-sort-option sort-options">All</span> 

				<span class="sort-options">Newly Listed</span>

				<span class="sort-options">2 - 4 Units</span> 

				<span class="sort-options">2 - 4 Units</span>

				<span class="sort-options search-option">More Options <i class="fa fa-search"></i></span> 

			</div>--->

			<div class="empty-spc search-box">
				<form id="filterForm" action="<?php echo base_url(); ?>filter" method="POST">

				<div class="sort-boxes">

					<select name="price" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Prices</option><span style="font-family:helvetica;">&#x20A6;</span>
						
						<option value="500000" > <span style="font-family:helvetica;">&#x20A6;</span>0 - <span style="font-family:helvetica;">&#x20A6;</span>500,000</option>
						
						<option value="1000000" > <span style="font-family:helvetica;">&#x20A6;</span>501,000 - <span style="font-family:helvetica;">&#x20A6;</span>1,000,000</option>
						
						<option value="2500000" > <span style="font-family:helvetica;">&#x20A6;</span>1,100,000 - <span style="font-family:helvetica;">&#x20A6;</span>2,500,000</option>
						
						<option value="5000000" > <span style="font-family:helvetica;">&#x20A6;</span>2,600,000 - <span style="font-family:helvetica;">&#x20A6;</span>5,000,000</option>
						
						<option value="7500000" > <span style="font-family:helvetica;">&#x20A6;</span>5,100,000 - <span style="font-family:helvetica;">&#x20A6;</span>7,500,000</option>
						
						<option value="10000000" > <span style="font-family:helvetica;">&#x20A6;</span>7,600,000 - <span style="font-family:helvetica;">&#x20A6;</span>10,000,000</option>
						
						<option value="15000000" > <span style="font-family:helvetica;">&#x20A6;</span>10,100,000 - <span style="font-family:helvetica;">&#x20A6;</span>15,000,000</option>
						
						<option value="20000000" > <span style="font-family:helvetica;">&#x20A6;</span>15,100,000 - <span style="font-family:helvetica;">&#x20A6;</span>20,000,000</option>
						
						<option value="30000000" > <span style="font-family:helvetica;">&#x20A6;</span>21,000,000 - <span style="font-family:helvetica;">&#x20A6;</span>30,000,000</option>
						
						<option value="40000000" > <span style="font-family:helvetica;">&#x20A6;</span>31,000,000 - <span style="font-family:helvetica;">&#x20A6;</span>40,000,000</option>
						
						<option value="50000000" > <span style="font-family:helvetica;">&#x20A6;</span>41,000,000 - <span style="font-family:helvetica;">&#x20A6;</span>50,000,000</option>
						
						<option value="100000000" > <span style="font-family:helvetica;">&#x20A6;</span>51,000,000 - <span style="font-family:helvetica;">&#x20A6;</span>100,000,000</option>

					</select>

				</div>

				<div class="sort-boxes">

					<select name="apt_type" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Type of Property</option>
						<?php if(isset($apts) && !empty($apts)){ ?>
									
								<?php foreach($apts as $apt => $apt_value){ ?>
										<option value="<?php echo $apt_value['id']; ?>"><?php echo $apt_value['type']; ?></option>
								<?php } ?>
						
						<?php } ?>
						
					</select>

				</div>

				<div class="sort-boxes">

					<select name="city" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Location</option>
						<?php if(isset($cities) && !empty($cities)){ ?>
									
								<?php foreach($cities as $city => $city_value){ ?>
										<option value="<?php echo $city_value['name']; ?>"><?php echo $city_value['name']; ?></option>
								<?php } ?>
						
						<?php } ?>

					</select>

				</div>

				<div class="sort-boxes">

				   	<select name="tenancy" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Tenancy</option>
						
						<option value="yes">Occupied</option>
						
						<option value="no">Vacant</option>

					</select>

				</div>

				<div class="sort-boxes">

				   	<select name="rooms" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Rooms</option>
						
						<option value="1" >1</option>
						
						<option value="2" >2</option>
						
						<option value="3" >3</option>
						
						<option value="4" >4</option>
						
						<option value="5" >5 +</option>
					</select>

				</div>

				<div class="sort-boxes">

				   	<select name="bath" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Bathrooms</option>	
						
						<option value="1" >1</option>
						
						<option value="2" >2</option>
						
						<option value="3" >3</option>
						
						<option value="4" >4</option>
						
						<option value="5" >5 +</option>						  

					</select>
					
				</div>		

				<div class="sort-boxes">

				    <select name="bedrooms" class="verify-txt-f" id="soflow">

					  	<option value="" selected="selected">Bedrooms</option>	
						
						<option value="1" >1</option>
						
						<option value="2" >2</option>
						
						<option value="3" >3</option>
						
						<option value="4" >4</option>
						
						<option value="5" >5 +</option>						  

					</select>
 
				</div>
				<div class="sort-boxes">
					<input type="submit" class="search-button" value="Search" />
				</div>
				</form>
			</div>

			<div class="empty-spc"> 
                <?php 
                    $from = 0;
                    
                    $to = 0;
                    
                    if(@$from_row){
                        
                        $from = $from_row;
                        
                    }
                    
                    if(@$to_row){
                        
                        $to = $to_row;
                        
                    }
                ?>
				<div class="page-numbering">Showing <?php echo @$from; ?>-<?php echo @$to; ?> of <?php echo @$total_count; ?> properties</div>

			</div>

			<ul class="property-container-inside">

				<?php if(isset($properties) && !empty($properties)){ ?>	 			

					<?php foreach($properties as $property => $each_prop){ ?>						

							<li class="property-item-inside">

									<div class="property-content">

										<a href="<?php echo base_url()."property/".$each_prop['propertyID']; ?>">
										    <div class="property-img">
    										    <?php if($each_prop['pool_buy'] == 'yes'){ ?>
    										        <div class="pooling">Pool Buy</div>
    										    <?php } ?>
    											<div class="property-type"><?php echo $each_prop['type']; ?></div>
    											<?php 
    											    $lvl = 'no-lvl';
    											    if(@$each_prop['construction_lvl'] == 'Ongoing'){
    											        $lvl = 'ongoing';
    											        
    											    }else if(@$each_prop['construction_lvl'] == 'Off Plan'){
    											        $lvl = 'off-plan';
    											        
    											    }else if(@$each_prop['construction_lvl'] == 'Completed'){
    											        $lvl = 'completed';
    											        
    											    }
    											?>
    											<div class="construction-lvl <?php echo $lvl; ?>"><?php echo @$each_prop['construction_lvl']; ?></div>
    											
    											<?php if($each_prop['featured_image'] == ''){ ?>
    													<img src="<?php echo base_url().'uploads/buytolet/default/default.png'; ?>" />
    											<?php }else{ ?>
    													<img src="<?php echo base_url().'uploads/buytolet/'.$each_prop['image_folder'].'/'.$each_prop['featured_image']; ?>" />
    											<?php } ?>
    											<?php if($each_prop['availability'] == "Sold"){ ?>
                                                    <div class="sold-overlay">
                                                        <div class="sold-overlay-text">SOLD</div>
                                                    </div>
                                                <?php } ?>
    										</div>
										</a>
										<div class="property-details">

											<a href="<?php echo base_url()."property/".$each_prop['propertyID']; ?>"><div class="property-address"><?php

											$CI =& get_instance();

											$CI->shorten_title($each_prop['property_name']); 
												?><?php //echo $each_prop['propState']; ?></div></a>

											<div class="property-price"><span style="position:relative;display:inline-block;" class="<?php if($each_prop['promo_price'] != 0 && $each_prop['promo_price'] > 0) { echo "strikeout"; }  ?>"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['price']); ?></span>
											
											    <?php if($each_prop['promo_price'] > 0){ ?>
											<span style="position:relative;display:inline-block;"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['promo_price']); ?></span>
											    <?php } ?>
											</div>

											<div class="property-spec"><span><?php echo $each_prop['bed']; ?> bed</span><span><?php echo $each_prop['bath']; ?> bathrooms</span><span><?php if(@$each_prop['property_size']){ echo number_format($each_prop['property_size']); } else { echo 0; } ?> sqm</span></div>

											<div class="property-stat"><span>Rent P.A</span><span><span style="display:inline-block;font-family:helvetica;line-height:9px;">&#x20A6;</span><?php echo @$each_prop['expected_rent'] / 1000000; ?>M</span></div>
											
										<?php if(@$prop['floor_level']){ ?>
										
    										<div class="property-stat"><span>Floor</span><span> <?php echo $prop['floor_level']; ?></span></div>
    										
										<?php } ?>
											
											<?php if($each_prop['pool_buy'] == 'yes'){ ?>
											
											    <div class="property-stat"><span>Asset Appreciation</span><span><?php echo @$each_prop['rent_appreciation_1']; ?></span></div>
											    
											<?php }else{ ?>
											
											    <?php $price = $each_prop['price']; if($each_prop['promo_price'] > 0 && $each_prop['promo_price'] != ""){ $price = $each_prop['promo_price']; } ?>

											    <div class="property-stat"><span>Gross Rental Yeild</span><span><?php echo round((@$each_prop['expected_rent'] / $price) * 100, 2); ?>%</span></div> 
                                            
                                            <?php } ?>
											<!--<div class="property-stat"><span>HPI Growth</span><span><?php //echo @$each_prop['hpi']; ?>%</span></div>-->
										</div>
										<!--- Share buttons ---->
										<div class="share-content-outside">
            								<a class="js-share-twitter-link" href='https://twitter.com/intent/tweet?url=<?php echo base_url().'property/'.$each_prop['propertyID']; ?>'><i class="fa fa-twitter"></i></a>
            								<a href="javascript:fbShare('<?php echo base_url().'property/'.$each_prop['propertyID']; ?>', '<?php echo @$each_prop['property_name']; ?>', 'Buy2Let Properties For Sale', '<?php echo base_url().'uploads/buytolet/'.$each_prop['image_folder'].'/'.$each_prop['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
            								<a class="whatsapp-link" href="whatsapp://send?text=<?php echo base_url().'property/'.$each_prop['propertyID']; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
            							</div>
            							
										<!--- Share buttons ---->
									</div> 
								
								
							</li>
					<?php } ?>			

				<?php } ?>

			</ul>
			<div class="pagination">

				<?php echo @$page_links; ?>

			</div>

		</div>

	</div>
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