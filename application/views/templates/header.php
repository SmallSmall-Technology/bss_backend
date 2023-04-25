<!DOCTYPE HTML>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buy Small Small<?php echo @$title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/navbar.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style1.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/by-a-home.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/get-started.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/stats.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/main.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/header-select.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-extra.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/global.css?version=<?php echo rand(99, 999999999); ?>">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/login.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-step.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form-register.css?version=<?php echo rand(99, 999999999); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/productsList.css?version=<?php echo rand(99, 999999999); ?>">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/propertyPage.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/responsiveslides.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slider.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/info.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/form.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/tooltip.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/toggle-switch.css?version=<?php echo rand(99, 99999999); ?>" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/number-field.css?version=<?php echo rand(99, 999999999); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/properties.css?version=<?php echo rand(99, 999999999); ?>">
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js" crossorigin="anonymous"></script>
	
</head>

<body>


  	<!-- Nav bar starts here -->
  	<nav class="NavBarWrapper">
		<div class="container">
			<a class="NavLogoLink" href="<?php echo base_url(); ?>" onclick='closeMobileMenu()'>
				<img src="<?php echo base_url(); ?>asset/img/buysmallsmall-logo.png" alt="buysmallsmall logo" />
			</a>
			<a class="CreateAccountLink" href="<?php echo base_url('signup'); ?>">Create Account</a>
			<div class="MenuIconBar" onclick="doSomething()">
				<i class="fa fa-bars" style=' color:black; font-size:25px'></i>
			</div>
			<ul id="NavItemList" class="NavItemList nav-menu">
				<div class="menu-wrapper">
					<div class="buy-section">
						<div class="icon-logo">
							<img src="<?php echo base_url(); ?>asset/img/buysmallsmall-logo.png" alt="buysmallsmall logo" />
							<span style='display:flex; align-items:center'>
								<span style='margin-right:30px;margin-bottom:""; color:#64318A; font-size:13px'>close</span>
								<div class="MenuIconBar" onclick="closeMobileMenu()" style="position:static">
								<i class="fa fa-times" style='color:#64318A; bottom:12px; font-size:22px; margin-bottom:40px;'></i>
								</div>
							</span>

						</div>

						<div class="nav-menu-links">
							<a class="NavLinkHome" href="/#" onclick='closeMobileMenu()'>
								Home
							</a>
							<a class="NavLink" href="<?php echo base_url('properties/buy-to-let'); ?>" onclick='closeMobileMenu()'>
							    <span style='font-size:9px;'>&nbsp;</span>
								Buy2let
							</a>
							<a class="NavLink" href="<?php echo base_url('properties/buy-to-live'); ?>" onclick='closeMobileMenu()'>
							    <span style='font-size:9px;'>&nbsp;</span>
								Buy2live
							</a>
							<a class="NavLink" href="<?php echo base_url('properties/co-ownership'); ?>" onclick='closeMobileMenu()'>
							    <span style='font-size:9px;'>&nbsp;</span>
								Co-Own
							</a>
						</div>

						<div class="small-small-section">
							<a class="NavLink" href="https://rent.smallsmall.com" onclick='closeMobileMenu()'>
								<span style='font-size:9px'>Rent monthly</span>
								<span>RentSmallsmall</span>
							</a>
							<a class="NavLink" href="https://stay.smallsmall.com" onclick='closeMobileMenu()'>
								<span style='font-size:9px;'>Nightly stay</span>
								<span>StaySmallsmall</span>
							</a>
						</div>
					</div>
					<div class="navBtn NavBtn">
						
						<?php if(@$userID && !@$ongod && @$user_type == 'tenant' && $interest != 'Buy'){ ?>
                            <!--- Tenant button ---->
                            <a class="login BtnLink" onclick='closeMobileMenu()' href="<?php echo base_url('logout'); ?>">Logout</a>
                            <a class="signup BtnLink" onclick='closeMobileMenu()' href="https://rent.smallsmall.com/user/dashboard">Dashboard</a>
                    
                        <?php }else if(@$userID && !@$ongod && @$user_type == 'landlord' && $interest != 'Buy'){ ?>
                                <!--- Landlord button ---->
                                <a class="login BtnLink" onclick='closeMobileMenu()' href="<?php echo base_url('logout'); ?>">Logout</a>
                                <a class="signup BtnLink" onclick='closeMobileMenu()' href="https://rent.smallsmall.com/landlord/dashboard">Dashboard</a>
                        
                        <?php }else if(@$userID && !@$ongod && $interest == 'Buy'){ ?>
                                <!--- Landlord button ---->
                                <a class="login BtnLink" onclick='closeMobileMenu()' href="<?php echo base_url('logout'); ?>">Logout</a>
                                <a class="signup BtnLink" onclick='closeMobileMenu()' href="https://buy.smallsmall.com/user/dashboard">Dashboard</a>
                        
                        <?php }else{ ?>
                                <a class="login BtnLink" onclick='closeMobileMenu()' href="<?php echo base_url('login'); ?>">Login</a>
						        <a class="signup BtnLink" onclick='closeMobileMenu()' href="<?php echo base_url('signup'); ?>">Signup</a>
                                
                        <?php } ?>
					</div>
				</div>
			</ul>
		</div>
  	</nav>
  	<!-- Nav bar ends here -->
	