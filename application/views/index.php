
	<!-- middle/main section starts here -->
	<section>
    	<header class="header-wrapper">
			<div class="left-section">
			    <div class="text-slider">
			        <ul class="rslides" id="slider1">
			            <li>
			                <h1>Home ownership</h1>
            				<h1>is not a birthright</h1> 
            				<h1>of a few.</h1>
            				<p>Get 80% financing from us today.</p>
			            </li>
			            <li>
			                <h1>Buy a home</h1>
            				<h1>in Lagos</h1>
            				<h1>and pay in 6 years?</h1>
            				<p>We have a deal for you.</p>
			            </li>
    				</ul>
			    </div>
				<div class="form-section">
					<form action="<?php echo base_url('search-properties'); ?>" method="POST">
						<div class="custom-select">
							<select name="investment-type" class="investment-type">
    							<option value="">How do you want to start?</option>
    							<option value="2">Buy2let</option>
    							<option value="1">Buy2live</option>
    							<option value="5">Co-ownership</option>
							</select>
						</div>
					
						<div class="custom-select">
							<select>
								<option value="0">Location</option>
								<?php if(isset($locations) && !empty($locations)){ ?>
									<?php foreach($locations as $location => $value){ ?>
										<option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<input type="hidden" id="search-location" name="location" />
						<!---<div class=""></div>--->
						<input type="submit" class="search-button" value="Search" />
					</form>
				</div>

			</div>
			<div style='background-image:url("<?php echo base_url(); ?>asset/img/home-banner-img.png");' class="right-section"></div>
		</header>

		<div class="section-word">
			<h1 style='text-align:center; padding-top:30px;'>There's a better way of financing a home.</h1>
			<div style='margin:auto; text-align:center; max-width: 90%; padding:20px 0'>On BuySmallsmall we want people to own a home whether as investment to earn rental income, or own to live.</div>
		</div>
		<section class="product-card-container">

			<div class="product-card">
				<div style='background-image:url("<?php echo base_url(); ?>asset/img/btl-img.png")' class="top-section">
				</div>
				<div class="bottom-section">
					<h1>Buy2Let</h1>

					<div class="text-section">
						Own prime rental property of any type with 80% financing at zero percent interest.
					</div>

					<a class="learn-more-btn" href="<?php echo base_url('faq'); ?>"><span>Learn more</span> <i class="fa fa-arrow-right"></i> </a>
				</div>
			</div>

			<div class="product-card">
				<div style='background-image:url("<?php echo base_url(); ?>asset/img/cardImg2.png")' class="top-section">
				</div>
				<div class="bottom-section">
					<h1>Buy2Live</h1>
					<div class="text-section">
						Acquire your dream home today and pay for it conviniently in 6 years.
					</div>
					<a class="learn-more-btn" href="<?php echo base_url('faq'); ?>"><span>Learn more</span> <i class="fa fa-arrow-right"></i> </a>
				</div>
			</div>
			<!---<div class="product-card">
				<div style='background-image:url("<?php //echo base_url(); ?>asset/img/cardImg1.png")' class="top-section"></div>
				<div class="bottom-section">
					<h1>Buy2Sell</h1>
					<div class="text-section">
						Find real estate deals that give minimum of 25% return in 24months or less
					</div>
					<a class="learn-more-btn" href="#"><span>Learn more</span> <i class="fa fa-arrow-right"></i> </a>
				</div>
			</div>--->
		</section>

    	
        <div style="width:100%;">
    		<div class="stats-wrapper">
    			<h1 class="stats-pool-buy">Making Real Estate investment accessible to all</h1>
    			<p class="stats-text">How it works</p>
    			<div class="stats-paper-wrapper">
    				<div class="stats-paper">
    					<p class="stats-count-statement">Sole Ownership</p>
    					<table class="stat-table" width="100%">
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Choose a property</span>
    								<span class="stat-note">Browse and select any of our pre-vetted properties that match your investment appetite.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Get financing approval</span>
    								<span class="stat-note">Apply for financing in 5mins and get approval in 24hrs. 5% of the downpayment is required as origination fee, and it's fully refundable if you're not approved.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Complete documentation</span>
    								<span class="stat-note">Review all documents once approved, pay all required balance, and sign all documents.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Take ownership</span>
    								<span class="stat-note">Property title will be transferred to you once payback is completed. You can buyout/sell anytime.</span>
    							</td>
    						</tr>
    					</table>
    				</div>
    				<div class="stats-paper">
    					<p class="stats-count-statement">Co-ownership</p>
    					<table class="stat-table" width="100%">
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Choose a property</span>
    								<span class="stat-note">Browse and select any of our pre-vetted properties that match your investment appetite.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Buy shares</span>
    								<span class="stat-note">Review all terms, sign documents and pay for your shares.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Get ownership certificate</span>
    								<span class="stat-note">Your shares certificate is your right of ownership to the shares you bought.</span>
    							</td>
    						</tr>
    						<tr class="stat-tr">
    							<td class="stat-td" valign="top">&bull;</td>
    							<td class="stat-td" valign="top">
    								<span class="stat-sub-head">Earn income & appreciation</span>
    								<span class="stat-note">Earn your share of rent and watch your shares appreciate while we manage the property.</span>
    							</td>
    						</tr>
    					</table>
    				</div>
    			</div>
    		</div>
    		<div class="home-faq-btn"><a href="<?php echo base_url('faq'); ?>">See FAQs</a></div>
		</div>

		<div class="home-prop-wrapper">
			<h1 class="stats-pool-buy">Featured properties</h1>
			<!----Co own properties ---->
			<div class="feat-prop-wrapper">
				<div class="prop-option-head">
					<div class="prop-option-top">
						<span class="prop-class">Co-own</span>
						<span class="all-prop-btn"><a href="<?php echo base_url('properties/co-ownership'); ?>">Explore all</a></span>
					</div>
					<div class="prop-option-below">Start with what you have. Get 14% annualized appreciation in 5 years.</div>
				</div>
				<div class="home-properties-container">
					
					<?php if(isset($pool_properties) && !empty($pool_properties)){ ?>
						<?php foreach($pool_properties as $pool_property => $pool_value){ ?>
							<a href="<?php echo base_url()."co-own/".$pool_value['propertyID']; ?>" class="home-card">
								<div style='background-image:url("<?php echo base_url(); ?>uploads/buytolet/<?php echo $pool_value['image_folder'].'/'.$pool_value['featured_image']; ?>")' class="top-section">
									<div class="badge"><?php echo $pool_value['type']; ?></div>
									<?php if(@$pool_value['construction_lvl']){ ?>
						            <div class="badge-bottom"><?php echo $pool_value['construction_lvl']; ?></div>
						            <?php } ?>
								</div>
								<div class="bottom-section">
								    <div class="sale-status <?php echo strtolower($pool_value['availability']); ?>"><?php echo ($pool_value['availability'] == 'Available')? 'Buy now' : 'Sold out'; ?></div>
									
									<span class="price-type down-payment">Starting price</span>
									<h3 class="down-payment"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($pool_value['price']); ?><span style="display:inline-block;font-size:16px;line-height:27px"> / Share</span></h3>
									<p><?php echo $pool_value['property_name']; ?>. <?php echo $pool_value['propState']; ?></p>
									<ul class="pool-price-box">
									    <li class="pool-price-box-item">
									        <span class="price-type actual-price">Shares available</span>
									        <h3><?php echo number_format($pool_value['pool_units']); ?></h3>
									    </li>
									    <li class="pool-price-box-item">
									        <span class="price-type actual-price">Shares remaining</span>
									        <h3><?php echo number_format($pool_value['available_units']); ?></h3>
									    </li>
									</ul>
									<ul class="pool-price-box">
									    <li class="pool-price-box-item">
									        <span class="price-type actual-price">Property price</span>
									        <h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($pool_value['marketValue']); ?></h3>
									    </li>
									    <li class="pool-price-box-item">
									        &nbsp;
									    </li>
									</ul>
									
									<ul>
										<li style='list-style:none'>&bullet; <?php echo $pool_value['bed']; ?> bed</li>
										<li>&bullet; <?php echo $pool_value['bath']; ?> bathroom</li>
										<li>&bullet; <?php if(@$pool_value['property_size']){ echo number_format($pool_value['property_size']); } else { echo 0; } ?> sqm</li>
									</ul>
									<div class="key-values">
										<div>
											<span>Hold period</span>
											<h3><?php
											$returns = $pool_value['co_appr_1'] + $pool_value['co_appr_2'] + $pool_value['co_appr_3'] + $pool_value['co_appr_4'] + $pool_value['co_appr_5'] + $pool_value['co_appr_6'] +  $pool_value['co_rent_1'] + $pool_value['co_rent_2'] + $pool_value['co_rent_3'] + $pool_value['co_rent_4'] + $pool_value['co_rent_5'] + $pool_value['co_rent_6'];
											        if(@$pool_value['hold_period'] == 'One year'){
											            echo "1 year";
											            
											        }elseif(@$pool_value['hold_period'] == 'Two years'){
											            echo "2 years";
											            
											        }elseif(@$pool_value['hold_period'] == 'Three years'){
											            echo "3 years";
											            
											        }elseif(@$pool_value['hold_period'] == 'Four years'){
											            echo "4 years";
											            
											        }elseif(@$pool_value['hold_period'] == 'Five years'){
											            echo "5 years";
											            
											        }elseif(@$pool_value['hold_period'] == 'Six years'){
											            echo "6 years";
											            
											        }else{
											            echo @$pool_value['hold_period'];
											            
											        }
											    ?>
											    </h3>
										</div>
										<!---<div>
											<span>Shares remaining</span>
											<h3><?php //echo number_format($pool_value['available_units']); ?></h3>
										</div>--->
										<?php //$asset_1 = ((($pool_value['asset_appreciation_1'] / 100) * $pool_value['marketValue']) + $pool_value['marketValue']); ?>
										<div>
											<span>Returns <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Rent Return plus Capital Appreciation Return for the entire hold period.</span></div></span>
											<h3><?php echo $returns; ?>%</h3>
										</div>
									</div>
								</div>
							</a>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			
			<!---Co own properties ---->
			
			<!-----Buy to let properties ----->
			<div class="feat-prop-wrapper">
				<div class="prop-option-head">
					<div class="prop-option-top">
						<span class="prop-class">Buy2let</span>
						<span class="all-prop-btn"><a href="<?php echo base_url('properties/buy-to-let'); ?>">Explore all</a></span>
					</div>
					<div class="prop-option-below">Get a 6 years payback period and enjoy 10 years guaranteed rent.</div>
				</div>
				<div class="home-properties-container">
					
				<?php if(isset($buy_to_let_properties) && !empty($buy_to_let_properties)){ ?>
						<?php foreach($buy_to_let_properties as $property => $value){ ?>
							<a href="<?php echo base_url()."sole-own/".$value['propertyID']; ?>" class="home-card">
								<div style='background-image:url("<?php echo base_url(); ?>uploads/buytolet/<?php echo $value['image_folder'].'/'.$value['featured_image']; ?>")' class="top-section">
									<div class="badge"><?php echo $value['construction_lvl']; ?></div>
						            <div class="badge-bottom"><?php echo $value['type']; ?></div>
								</div>
								<div class="bottom-section">
								
									<div class="sale-status <?php echo strtolower($value['availability']); ?>"><?php echo $value['availability']; ?></div>
									<span class="price-type down-payment">Down payment</span>
									<h3 class="down-payment"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($value['price'] * 0.40); ?></h3>
									<span class="price-type actual-price">Property price</span>
									<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($value['price']); ?></h3>
									<p><?php echo $value['property_name']; ?>. <?php echo $value['propState']; ?></p>
									<ul>
										<li style='list-style:none'>&bullet; <?php echo $value['bed']; ?> bed</li>
										<li>&bullet; <?php echo $value['bath']; ?> bathroom</li>
										<li>&bullet; <?php if(@$value['property_size']){ echo number_format($value['property_size']); } else { echo 0; } ?> sqm</li>
									</ul>
									<div class="key-values">
										<div>
											<span>Rent P.A <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Rent per annum.</span></div></span>
											<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo @$value['expected_rent'] / 1000000; ?>M</h3>
										</div>
										
										<div>
											<span>Ann. return <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Annualized return.</span></div></span>
											<h3><?php //echo number_format((pow((($asset_1 + $value['expected_rent']) / $value['marketValue']), 1) - 1) * 100); ?>%</h3>
										</div>
										<div>
											<span>Appreciation</span>
											<h3><?php //$asset_1 = ((($value['asset_appreciation_1'] / 100) * $value['marketValue']) + $value['marketValue']); echo $value['asset_appreciation_1']; ?>%</h3>
										</div>
									</div>
								</div>
							</a>
						<?php } ?>
					<?php } ?>
    			</div>
			</div>
            <!----Buy to let properties ---->
            
            <!-----Buy to live properties ----->
			<div class="feat-prop-wrapper">
				<div class="prop-option-head">
					<div class="prop-option-top">
						<span class="prop-class">Buy2live</span>
						<span class="all-prop-btn"><a href="<?php echo base_url('properties/buy-to-live'); ?>">Explore all</a></span>
					</div>
					<div class="prop-option-below">Get a 6 years payback period and enjoy 10 years guaranteed rent.</div>
				</div>
				<div class="home-properties-container">
        					
				<?php if(isset($buy_to_live_properties) && !empty($buy_to_live_properties)){ ?>
						<?php foreach($buy_to_live_properties as $property => $value){ ?>
							<a href="<?php echo base_url()."sole-own/".$value['propertyID']; ?>" class="home-card">
								<div style='background-image:url("<?php echo base_url(); ?>uploads/buytolet/<?php echo $value['image_folder'].'/'.$value['featured_image']; ?>")' class="top-section">
									<div class="badge"><?php echo $value['construction_lvl']; ?></div>
						            <div class="badge-bottom"><?php echo $value['type']; ?></div>
								</div>
								<div class="bottom-section">
								
									<div class="sale-status <?php echo strtolower($value['availability']); ?>"><?php echo $value['availability']; ?></div>
									<span class="price-type down-payment">Down payment</span>
									<h3 class="down-payment"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($value['price'] * 0.40); ?></h3>
									<span class="price-type actual-price">Property price</span>
									<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($value['price']); ?></h3>
									<p><?php echo $value['property_name']; ?>. <?php echo @$value['propState']; ?></p>
									<ul>
										<li style='list-style:none'>&bullet; <?php echo $value['bed']; ?> bed</li>
										<li>&bullet; <?php echo $value['bath']; ?> bathroom</li>
										<li>&bullet; <?php if(@$value['property_size']){ echo number_format($value['property_size']); } else { echo 0; } ?> sqm</li>
									</ul>
									<div class="key-values">
										<div>
											<span>Rent P.A <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Rent per annum.</span></div></span>
											<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo @$value['expected_rent'] / 1000000; ?>M</h3>
										</div>
										
										<div>
											<?php //$asset_1 = ((($value['asset_appreciation_1'] / 100) * $value['marketValue']) + $value['marketValue']); echo $value['asset_appreciation_1'] ?>
											<span>Ann. return <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Annualized return.</span></div></span>
											<h3><?php //echo number_format((pow((($asset_1 + $value['expected_rent']) / $value['marketValue']), 1) - 1) * 100); ?>%</h3>
										</div>
										<div>
											<span>Appreciation</span>
											<h3><?php //$asset_1 = ((($value['asset_appreciation_1'] / 100) * $value['marketValue']) + $value['marketValue']); echo $value['asset_appreciation_1']; ?>%</h3>
										</div>
									</div>
								</div>
							</a>
						<?php } ?>
					<?php } ?>

				</div>
			</div>
            <!----Buy to live properties ---->
			
		</div>

		<div class="stats-wrapper">
			<div class="main-numbers-container">
				<div class="numbers-head">It's your turn; don't miss out!</div>
				<div class="numbers-container">
					<div class="number-item">
						<div class="number">N15m<span>+</span></div>
						<div class="number-reason">Average amount saved on market value of properties</div>
					</div>
					<div class="number-item">
						<div class="number">98<span>+</span></div>
						<div class="number-reason">Properties Funded</div>
					</div>
					<div class="number-item">
						<div class="number">N3.2Bn<span>+</span></div>
						<div class="number-reason">Property value funded</div>
					</div>
					<div class="number-item">
						<div class="number">20,000<span>+</span></div>
						<div class="number-reason">Co-ownership shares</div>
					</div>
				</div>
			</div>
		</div>
        
        <div class="partner-wrapper">
			<h1 class="stats-pool-buy">Supported by leading global investors & partners</h1>
			<div class="partner-logo-container">
			    <div class="partner-logo-item"><img src="<?php echo base_url('assets/img/techstars-logo.png'); ?>" alt="Techstars logo" /></div>
			    <div class="partner-logo-item"><img src="<?php echo base_url('assets/img/lenco-logo.png'); ?>" alt="Lenco logo" /></div>
			    <div class="partner-logo-item"><img src="<?php echo base_url('assets/img/oyester-ventures-logo.png'); ?>" alt="Oyster ventures logo" /></div>
			    <!---<div class="partner-logo-item"><img src="<?php //echo base_url('assets/img/asymmetry-ventures-logo.png'); ?>" alt="Asymmetry ventures logo" /></div>
			    <div class="partner-logo-item"></div>--->
			</div>
        </div>
  	</section>
  	<!-- main/middle section ends here -->
  	<script src="<?php echo base_url(); ?>asset/js/responsiveslides.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
    
    		// Slideshow 1
    		$("#slider1").responsiveSlides({
    			maxwidth: 1500,
    			speed: 800,
    			pager : false
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
  