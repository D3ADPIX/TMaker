<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>T.Maker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">		
							<li><?php include("welcomeUsers.php")?></li>
							<li><a href="#">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>					
							<li><a href="register.php">Login</a></li>	
							<li><a href="./logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
	<section class="navbar main-menu"> <a href="index.php" class="logo pull-left"><img src="tmaker.png" alt="" width="120" height="42" class="site_logo"></a>
		<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php">Man</a>					
								<ul>
								  
								</ul>
							</li>
							
							<li><a href="./Femproducts.php">Woman</a>					
								<ul>
								  
								  
								</ul>
							</li>
							
							<li><a href="./products.php">Make It</a>
							  <ul>									
									<li><a href="./products.php">Make it yourself</a></li>
									<li><a href="./products.php">Premades</a></li>
									
								</ul>
							</li>							
							<li></li>
							<li><a href="./products.php">Best Seller</a></li>
							<li></li>
						</ul>
					</nav>
				</div>
			</section>							
			<section class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.894558553361!2d31.327333915471037!3d29.982460128452324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145839135dfda1a7%3A0x4ad399ead5bc0978!2sModern%20Academy%20for%20Computer%20Science%20%26%20Management%20Technology!5e0!3m2!1sen!2seg!4v1592682470234!5m2!1sen!2seg"></iframe>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/banner-3.jpg" alt="New products" >
				<h4><span>Contact Us</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>ADDITIONAL INFORMATION</h5>
							<p><strong>Phone:</strong> (123) 456-7890<br>
							  <strong>Fax:</strong> +04 (123) 456-7890<br>
							  <strong>Email:</strong> contact@tmaker.com</p>
							<br/>
							<h5>SECONDARY OFFICE IN CAIRO</h5>
							<p><strong>Phone:</strong> (113) 023-1125<br>
							  <strong>Fax:</strong> +04 (113) 023-1145<br>
						  <strong>Email:</strong>&nbsp;<a href="#">contact@tmaker.com</a> </p>
						</div>
					</div>
					<div class="span7">
					  <p>Please fill in below form to get in touch with us</p>
					  <form method="post" action="#">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/tmaker2.png" class="site_logo" alt=""></p>
						<p>We give fahion a taste , join us today in a journey full of style , we are on fire.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>