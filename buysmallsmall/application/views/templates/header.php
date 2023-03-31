<!doctype html>

<html>

<head> 

<meta charset="utf-8">

<meta name="viewport" content="width=device-width">

<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">

<link href="<?php echo base_url(); ?>assets/css/style.css?version=<?php echo rand(1, 20); ?>.<?php echo rand(1, 20); ?>.<?php echo rand(1, 20); ?>" rel="stylesheet" /> 

<link href="<?php echo base_url(); ?>assets/css/font.awesome.min.css" rel="stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/custom-slider.css"?version=<?php echo rand(1, 20); ?>.<?php echo rand(1, 20); ?>.<?php echo rand(1, 20); ?>" rel="stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/custom-drop-down.css" rel="stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/radio-button.css" rel="stylesheet" />

<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/header-animate.js"></script>

<title><?php echo $title; ?></title>

</head>



<body>

	<div class="header header-regular">

		<div class="header-inner">

			<div class="logo">

				<a href="<?php echo base_url(); ?>">

					<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Buytolet logo" />

				</a>

			</div>

			<div class="navigation">

				<ul class="menu">

					<li class="menu-item"><a href="<?php echo base_url('buy'); ?>">Buy</a></li>

					<li class="menu-item"><a href="<?php echo base_url('pool-buy'); ?>">Pool Buy</a></li>

					<li class="menu-item"><a href="<?php echo base_url('how-it-works'); ?>">How it works</a></li>

					<li class="menu-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>

				</ul>

			</div>

			<ul class="user-bar">
				<?php //print_r($this->session->userdata())."<----"; ?>  
				<?php if(!@$userID){ ?>

						<li class="bar-item"><a href="<?php echo base_url('login'); ?>">Log In</a></li>

						<li class="bar-item"><a href="<?php echo base_url('signup'); ?>">Get Started</a></li>

				<?php }else if(@$user_type == 'tenant'){ ?>

						<li class="bar-item">&nbsp;</li>

						<li class="bar-item user-item"><a href="https://rent.smallsmall.com/user/dashboard"><?php echo @$fname; ?> <i class="fa fa-angle-down"></i></a>

							<ul class="sub-menu">

								<!--<li class="sub-menu-item"><a href="<?php //echo base_url('user/dashboard'); ?>">Dashboard</a></li>

								<li class="sub-menu-item"><a href="">Account Settings</a></li>

								<li class="sub-menu-item"><a href="">Investor Profile</a></li>-->

								<li class="sub-menu-item"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Signout</a></li>

							</ul>

						</li>

				<?php }else if(@$user_type == 'landlord'){ ?>

						<li class="bar-item">&nbsp;</li>

						<li class="bar-item user-item"><a href="https://rent.smallsmall.com/landlord/dashboard"><?php echo @$fname; ?> <i class="fa fa-angle-down"></i></a>

							<ul class="sub-menu">

								<!--<li class="sub-menu-item"><a href="<?php //echo base_url('user/dashboard'); ?>">Dashboard</a></li>

								<li class="sub-menu-item"><a href="">Account Settings</a></li>

								<li class="sub-menu-item"><a href="">Investor Profile</a></li>-->

								<li class="sub-menu-item"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Signout</a></li>

							</ul>

						</li>

				<?php } ?>

			</ul>

		</div>
	</div>

	<div class="header-mobile">

		<div class="header-inner">

			<div style="width:100%;min-height:30px;overflow:auto;padding:5px 0;">

				<div class="logo">

					<a href="<?php echo base_url(); ?>">

						<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Buytolet logo" />

					</a>

				</div>

				<div class="mobile-menu"><i class="fa fa-bars"></i></div>

			</div>

			<div class="navigation">

				<ul class="menu">

					<li class="menu-item"><a href="<?php echo base_url('buy'); ?>">Buy</a></li>

					<li class="menu-item"><a href="<?php echo base_url('pool-buy'); ?>">Pool Buy</a></li>

					<li class="menu-item"><a href="<?php echo base_url('how-it-works'); ?>">Learn</a></li>

					<li class="menu-item"><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>

					<?php if(!@$userID){ ?>

							<li class="menu-item"><a href="<?php echo base_url('login'); ?>">Log In</a></li>

							<li class="menu-item"><a href="<?php echo base_url('signup'); ?>">Get Started</a></li>

					<?php }else{ ?>

							<li class="menu-item sub-menu-item"><a href="https://rent.smallsmall.com/user/dashboard"><?php echo @$fname; ?> <i class="fa fa-angle-down"></i></a></i>

								<ul class="sub-menu">

									<!---<li class="menu-item"><a href="<?php //echo base_url('user/dashboard'); ?>">Dashboard</a></li>

									<li class="menu-item"><a href="">Account Settings</a></li>

									<li class="menu-item"><a href="">Investor Profile</a></li>--->

									<li class="menu-item"><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out"></i> Signout</a></li>

								</ul>

							</li>

				<?php } ?>

				</ul>
                
			</div>

		</div>

	</div>
	<?php
    	$CI =& get_instance();
    
    	$property = $CI->insert_stats(); 	
    ?>