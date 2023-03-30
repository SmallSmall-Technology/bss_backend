	<div class="slider">
    <?php $CI =& get_instance(); ?>
        
        <div class="slider-left">
            <div class="slider-left-content">
                <div class="slider-left-text">
                    Invest and build wealth with real estate
                </div>
                <div class="slider-left-button">
                    <a href="<?php echo base_url('properties'); ?>">
                        see properties 
                    </a>
                </div>
            </div>
        </div>
		<div class="slider-right">
            <!---<img src="<?php //echo base_url()."assets/images/home-bg.png"; ?>" />--->
            <img src="<?php echo base_url('assets/images/3e8b40bb32563c359ec275f550b4dd95.jpg'); ?>" alt="buy2let hompage background" />
        </div>
	</div>

	<div class="section light-grey">

		<div class="section-inner">

			<div class="section-title">Why invest through us?</div>

			<ul class="reason-container">

				<li class="reason-item">

					<div class="reason-content">

						<div class="reason-title">

							rent guarantee

						</div>

						<div class="reason-note">

							Earn guaranteed rent monthly from day one of ownership. 

						</div>

						<div class="reason-button"><a href="<?php echo base_url()."about-us"; ?>">Learn More</a></div>

					</div>

				</li>

				<li class="reason-item">

					<div class="reason-content">

						<div class="reason-title">

							high rent yeild

						</div>

						<div class="reason-note">

							We’ve carefully hand picked properties that gives high gross yield 

						</div>

						<div class="reason-button"><a href="<?php echo base_url()."about-us"; ?>">Learn More</a></div>
					

					</div>				

				</li>
				
				<li class="reason-item">

					<div class="reason-content">

						<div class="reason-title">

							data and insight

						</div>

						<div class="reason-note">

							Make investment decisions using insights, proprietary data and technology 

						</div>

						<div class="reason-button"><a href="#">Learn More</a></div>

					

					</div>				

				</li>

			</ul>

		</div>

	</div>

	<div class="section">

		<div class="section-inner">

			<div class="section-title">Featured properties</div>

			<ul class="property-container">

				<?php if(isset($properties) && !empty($properties)){ ?>
				    <?php //foreach($pool_properties as $pool_property => $pool_prop){ ?>

							<!---<li class="property-item">

								<div class="property-content">

									<a href="<?php //echo base_url()."property/".$pool_prop['propertyID']; ?>">
										<div class="property-img">

											<div class="property-type"><?php //echo $pool_prop['type']; ?></div>
											
											<?php 
											    //$lvl = 'no-lvl';
											    //if(@$each_prop['construction_lvl'] == 'Ongoing'){
											        //$lvl = 'ongoing';
											        
											    //}else if(@$each_prop['construction_lvl'] == 'Off Plan'){
											        //$lvl = 'off-plan';
											        
											    //}else if(@$each_prop['construction_lvl'] == 'Completed'){
											        //$lvl = 'completed';
											        
											    //}
											?>
    										<div class="construction-lvl <?php //echo $lvl; ?>"><?php //echo @$each_prop['construction_lvl']; ?></div>

											<?php //if($pool_prop['featured_image'] == ''){ ?>
													<img src="<?php //echo 'http://test.rentsmallsmall.com/uploads/buytolet/default/default.png'; ?>" />
											<?php //}else{ ?>
													<img src="<?php //echo base_url().'uploads/buytolet/'.$pool_prop['image_folder'].'/'.$pool_prop['featured_image']; ?>" />
											<?php //} ?>
											
                                            <div class="pooling">Pool Buy</div>
                                            <?php //if($pool_prop['availability'] == "Sold"){ ?>
                                                <div class="sold-overlay">
                                                    <div class="sold-overlay-text">SOLD</div>
                                                </div>
                                            <?php //} ?>
										</div> 
                                    </a>
									<div class="property-details">
                                        <a href="<?php //echo base_url()."property/".$pool_prop['propertyID']; ?>">
										    <div class="property-address"><?php //$CI->shorten_title($pool_prop['property_name']); ?></div>
										</a>

										<div class="property-price"><span style="font-family:helvetica;">&#x20A6;</span> <?php //echo number_format($pool_prop['price']); ?></div>

										<div class="property-spec"><span><?php //echo $pool_prop['bed']; ?> bed</span><span><?php //echo $pool_prop['bath']; ?> bathrooms</span><span><?php //echo number_format($pool_prop['property_size']); ?> sqm</span></div>

										<div class="property-stat"><span>Rent P.A</span><span><span style="display:inline-block;font-family:helvetica;line-height:9px;">&#x20A6;</span> <?php //echo $pool_prop['expected_rent'] / 1000000; ?>M</span></div>

										<div class="property-stat"><span>Asset Appreciation</span><span><?php //echo @$pool_prop['asset_appreciation_1']."%"; ?></span></div> 
                                        
										

									</div>
                                    <div class="share-content-outside">
        								<a class="js-share-twitter-link" href='https://twitter.com/intent/tweet?url=<?php //echo base_url().'property/'.@$pool_prop['propertyID']; ?>'><i class="fa fa-twitter"></i></a>
        								<a href="javascript:fbShare('<?php //echo base_url().'property/'.$pool_prop['propertyID']; ?>', '<?php //echo @$pool_prop['property_name']; ?>', 'Buy2Let Properties For Sale', '<?php //echo base_url().'uploads/buytolet/'.@$pool_prop['image_folder'].'/'.@$pool_prop['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
        								<a class="whatsapp-link" href="whatsapp://send?text=<?php //echo base_url().'property/'.@$pool_prop['propertyID']; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
        							</div>
								</div>

							</li>--->

					<?php //} ?>

					<?php foreach($properties as $property => $prop){ ?>

							<li class="property-item">

								<div class="property-content">
                                    <a href="<?php echo base_url()."property/".$prop['propertyID']; ?>">
										<div class="property-img">

											<div class="property-type"><?php echo $prop['type']; ?></div>
											<?php 
											    $lvl = 'no-lvl';
											    if(@$prop['construction_lvl'] == 'Ongoing'){
											        $lvl = 'ongoing';
											        
											    }else if(@$prop['construction_lvl'] == 'Off Plan'){
											        $lvl = 'off-plan';
											        
											    }else if(@$prop['construction_lvl'] == 'Completed'){
											        $lvl = 'completed';
											        
											    }
											?>
											<div class="construction-lvl <?php echo $lvl; ?>"><?php echo @$prop['construction_lvl']; ?></div>

											<?php if($prop['featured_image'] == ''){ ?>
													<img src="<?php echo 'http://test.rentsmallsmall.com/uploads/buytolet/default/default.png'; ?>" />
											<?php }else{ ?>
													<img src="<?php echo base_url().'uploads/buytolet/'.$prop['image_folder'].'/'.$prop['featured_image']; ?>" />
											<?php } ?>
                                            <?php if($prop['availability'] == "Sold"){ ?>
                                                <div class="sold-overlay">
                                                    <div class="sold-overlay-text">SOLD</div>
                                                </div>
                                            <?php } ?>
										</div> 
									</a>
                                    
									<div class="property-details">
                                        <a href="<?php echo base_url()."property/".$prop['propertyID']; ?>">
											<div class="property-address"><?php $CI->shorten_title($prop['property_name']); ?></div>
										</a>

										<div class="property-price"><span style="position:relative;display:inline-block;" class="<?php if($prop['promo_price'] != 0 && $prop['promo_price'] > 0) { echo "strikeout"; }  ?>"><span style="font-family:helvetica;">&#x20A6;</span> <?php echo number_format($prop['price']); ?></span>
										<?php if($prop['promo_price'] > 0){ ?>
											<span style="position:relative;display:inline-block;float:right"><span style="font-family:helvetica;">&#x20A6;</span> <?php echo number_format($prop['promo_price']); ?></span>
									    <?php } ?>
									    </div>

										<div class="property-spec"><span><?php echo $prop['bed']; ?> bed</span><span><?php echo $prop['bath']; ?> bathrooms</span><span><?php echo number_format(@$pool_prop['property_size']); ?> sqm</span></div>

										<div class="property-stat"><span>Rent P.A</span><span><span style="font-family:helvetica;">&#x20A6;</span> <?php echo $prop['expected_rent'] / 1000000; ?>M</span></div>
										
										<?php if(@$prop['floor_level']){ ?>
    										<div class="property-stat"><span>Floor Level</span><span> <?php echo $prop['floor_level']; ?></span></div>
										<?php } ?>

										<?php if($prop['pool_buy'] == 'yes'){ ?>
										
										    <div class="property-stat"><span>Your Rent Share</span><span><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format(round((@$prop['expected_rent'] / @$prop['pool_units']), 0)); ?></span></div>
										    
										<?php }else{ ?>
                                                <?php $price = $prop['price']; if($prop['promo_price'] > 0 && $prop['promo_price'] != ""){ $price = $prop['promo_price']; } ?>
										    <div class="property-stat"><span>Gross Rental Yeild</span><span><?php echo round((@$prop['expected_rent'] / @$price) * 100, 2); ?>%</span></div> 
                                        
                                        <?php } ?>

										<!--<div class="property-stat"><span>HPI Growth</span><span>20%</span></div>-->

									</div>
                                    <div class="share-content-outside">
        								<a class="js-share-twitter-link" href='https://twitter.com/intent/tweet?url=<?php echo base_url().'property/'.$prop['propertyID']; ?>'><i class="fa fa-twitter"></i></a>
        								<a href="javascript:fbShare('<?php echo base_url().'property/'.$prop['propertyID']; ?>', '<?php echo @$prop['property_name']; ?>', 'Buy2Let Properties For Sale', '<?php echo base_url().'uploads/buytolet/'.$prop['image_folder'].'/'.$prop['featured_image']; ?>', 520, 350)"><i class="fa fa-facebook"></i></a>
        								<a class="whatsapp-link" href="whatsapp://send?text=<?php echo base_url().'property/'.$prop['propertyID']; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
        							</div>
								</div>
							</li>

					<?php } ?>

				

				<?php } ?>

				

			</ul>

			<div class="large-button"><a href="<?php echo base_url('properties'); ?>">View all properties</a></div>

		</div>

	</div>

	<div class="section light-grey">

		<div class="section-inner">

			<div class="section-title">Meet our partners</div>

			<ul class="logo-container">

				<li class="logo-item">

					<div class="the_logo">

						<img src="<?php echo base_url(); ?>assets/images/partners/homework.jpg" />

					</div>

				</li>

				<li class="logo-item">

					<div class="the_logo">

						<img src="<?php echo base_url(); ?>assets/images/partners/homebase.jpg" />

					</div>

				</li>

				<li class="logo-item">

					<div class="the_logo">

						<img src="<?php echo base_url(); ?>assets/images/partners/chateau-royal.jpg" />

					</div>

				</li>

				<li class="logo-item">

					<div class="the_logo">

						<img src="<?php echo base_url(); ?>assets/images/partners/rss.png" />

					</div>

				</li>

			</ul>

		</div>

	</div>

	<div class="get-started">

		<div class="get-started-container">

			<div class="section-title">How to get started</div>

			<div class="starter-left">

				<div class="starter-pockets">

					<div class="starter-pockets-heading">

						Create an investor profile

					</div>

					<div class="starter-pockets-note">

						Answer a few short questions to activate an advanced search with customized dashboard and property recommendations based on your profile. 

					</div>

				</div>

				<div class="starter-pockets">

					<div class="starter-pockets-heading">

						Speak with an expert

					</div>

					<div class="starter-pockets-note">

						Have a complimentary advisory session with our expert team. They will answer any questions you may have. 

					</div>

				</div>

				<div class="starter-pockets">

					<div class="starter-pockets-heading">

						Request for more info

					</div>

					<div class="starter-pockets-note">

						Complete our enquiry form and a member of our team will respond to you within 24hrs. 

					</div>

				</div>

			</div>

			<div class="starter-right">

				<div class="starter-button"><a href="<?php echo base_url('signup'); ?>">Get started now</a></div>

			</div>

		</div>

	</div>

	<div class="section dark-blue">

		<div class="section-inner">

			<div class="newsletter-title">Sign up for our newsletter</div>

			<div class="newsletter-note">Get latest investment opportunities on our properties, special offers straight to your inbox,weekly.</div>

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