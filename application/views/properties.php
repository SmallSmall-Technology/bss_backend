    <div class="grid-box">
        <div class="prop-option-head">
			<div class="prop-option-top">
				<span class="prop-class">
				    <?php if($slug != 'co-ownership'){ ?>
				        Sole Ownership
				    <?php }else{ ?>
				        Co Ownership
				    <?php } ?>
				</span>
			</div>
			<?php if($slug != 'co-ownership'){ ?>
		        <div class="prop-option-below">Get a 6 years payback period and enjoy 10 years guaranteed rent.</div>
		    <?php }else{ ?>
		        <div class="prop-option-below">Start your home ownership journey today with as little as <span style="font-family:helvetica;">&#x20A6;</span>4,000</div>
		    <?php } ?>
			
		</div>
        <?php //echo $slug; ?>
		<?php if(isset($properties) && !empty($properties)){ ?>	
		
		    <?php if($slug != 'co-ownership'){ ?>

    			<?php foreach($properties as $property => $each_prop){ ?>		
    
    				<a href="<?php echo base_url()."property/".$each_prop['propertyID']; ?>" class="card">
    					<div style='background-image:url("<?php echo base_url(); ?>uploads/buytolet/<?php echo $each_prop['image_folder'].'/'.$each_prop['featured_image']; ?>")' class="top-section">
    						<div class="badge"><?php echo $each_prop['construction_lvl']; ?></div>
    						<div class="badge-bottom"><?php echo $each_prop['type']; ?></div>
    					</div>
    					<div class="bottom-section">
    					    <div class="sale-status <?php echo strtolower($each_prop['availability']); ?>"><?php echo $each_prop['availability']; ?></div>
    						<span class="price-type down-payment">Down payment</span>
    						<h3 class="down-payment"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['price'] * ($each_prop['minimum_payment_plan']/100)); ?></h3>
    						<span class="price-type actual-price">Property price</span>
    						<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['price']); ?></h3>
    						<p><?php echo $each_prop['property_name']; ?>, <?php echo $each_prop['city'].' '.$each_prop['propState'].'.'; ?></p>
    						<ul>
    							<li style='list-style:none'>&bullet; <?php echo $each_prop['bed']; ?> bed</li>
    							<li>&bullet; <?php echo $each_prop['bath']; ?> bathroom</li>
    							<li>&bullet; <?php if(@$each_prop['property_size']){ echo number_format($each_prop['property_size']); } else { echo 0; } ?> sqm</li>
    						</ul>
    						<div class="key-values">
    							<div>
    								<span>Rent P.A <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Rent per annum.</span></div></span>
    								<h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo @$each_prop['expected_rent'] / 1000000; ?>M</h3>
    							</div>
    							<div>
    								<span>Ann. return <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Annualized return.</span></div></span>
    								<h3><?php echo number_format((pow((($asset_1 + $each_prop['expected_rent']) / $each_prop['marketValue']), 1) - 1) * 100); ?>%
    								</h3>
    							</div>
    							<div>
    								<span>Appreciation</span>
    								<h3><?php $asset_1 = ((($each_prop['asset_appreciation_1'] / 100) * $each_prop['marketValue']) + $each_prop['marketValue']); echo $each_prop['asset_appreciation_1']; ?>%
    							</div>
    						</div>
    					</div>
    				</a>
    
    			<?php } ?>
    			
    		<?php }else{ ?>
    		        
    		        <?php foreach($properties as $property => $each_prop){ ?>
    		        
    		            <a href="<?php echo base_url()."co-own/".$each_prop['propertyID']; ?>" class="card">
    					<div style='background-image:url("<?php echo base_url(); ?>uploads/buytolet/<?php echo $each_prop['image_folder'].'/'.$each_prop['featured_image']; ?>")' class="top-section">
    					    <?php if(@$each_prop['construction_lvl']){ ?>
    						    <div class="badge"><?php echo $each_prop['construction_lvl']; ?></div>
    						<?php } ?>
    						<div class="badge-bottom"><?php echo $each_prop['type']; ?></div>
    					</div>
    					<div class="bottom-section">
						    <div class="sale-status <?php echo strtolower($each_prop['availability']); ?>"><?php echo ($each_prop['availability'] == 'Available')? 'Buy now' : 'Sold out'; ?></div>
							
							<span class="price-type down-payment">Starting price</span>
							<h3 class="down-payment"><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['price']); ?><span style="display:inline-block;font-size:16px;line-height:27px"> / Share</span></h3>
							<p><?php echo $each_prop['property_name']; ?>. <?php echo $each_prop['propState']; ?></p>
							<ul class="pool-price-box">
							    <li class="pool-price-box-item">
							        <span class="price-type actual-price">Shares listed</span>
							        <h3><?php echo number_format($each_prop['pool_units']); ?></h3>
							    </li>
							    <li class="pool-price-box-item">
							        <span class="price-type actual-price">Shares remaining</span>
							        <h3><?php echo number_format($each_prop['available_units']); ?></h3>
							    </li>
							</ul>
							<ul class="pool-price-box">
							    <li class="pool-price-box-item">
							        <span class="price-type actual-price">Property price</span>
							        <h3><span style="font-family:helvetica;">&#x20A6;</span><?php echo number_format($each_prop['marketValue']); ?></h3>
							    </li>
							    <li class="pool-price-box-item">&nbsp;</li>
							</ul>
							
							<ul>
								<li style='list-style:none'>&bullet; <?php echo $each_prop['bed']; ?> bed</li>
								<li>&bullet; <?php echo $each_prop['bath']; ?> bathroom</li>
								<li>&bullet; <?php if(@$each_prop['property_size']){ echo number_format($each_prop['property_size']); } else { echo 0; } ?> sqm</li>
							</ul>
							<div class="key-values">
								<div>
									<span>Hold period</span>
									<h3>
									    <?php
    									   $returns = $each_prop['co_appr_1'] + $each_prop['co_appr_2'] + $each_prop['co_appr_3'] + $each_prop['co_appr_4'] + $each_prop['co_appr_5'] + $each_prop['co_appr_6'] + $each_prop['co_rent_1'] + $each_prop['co_rent_2'] + $each_prop['co_rent_3'] + $each_prop['co_rent_4'] + $each_prop['co_rent_5'] + $each_prop['co_rent_6'];
									        if(@$each_prop['hold_period'] == 'One year'){
									            echo "1 year";
									        }elseif(@$each_prop['hold_period'] == 'Two years'){
									            echo "2 years";
									        }elseif(@$each_prop['hold_period'] == 'Three years'){
									            echo "3 years";
									        }elseif(@$each_prop['hold_period'] == 'Four years'){
									            echo "4 years";
									        }elseif(@$each_prop['hold_period'] == 'Five years'){
									            echo "5 years";
									        }elseif(@$each_prop['hold_period'] == 'Six years'){
									            echo "6 years";
									        }else{
									            echo @$each_prop['hold_period'];
									        }
									    ?>
									    </h3>
								</div>
								<!---<div>
									<span>Shares remaining</span>
									<h3><?php //echo number_format($each_prop['available_units']); ?></h3>
								</div>--->
								
								<div>
									<span>Returns <div class="tooltip"><i class="fa fa-info"></i><span class="propstooltiptext">Rent Return plus Capital Appreciation Return for the entire hold period.</span></div></span>
									<h3><?php echo $returns; ?>%</h3>
								</div>
							</div>
						</div>
    				</a>
    		        
    		        
    		        <?php } ?>
    		
    		<?php } ?>

		<?php } ?>
		<div class="pagination">
			<?php echo $page_links; ?>
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