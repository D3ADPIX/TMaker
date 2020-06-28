

<?php require('Headers/generalHeader.php')?>


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
		<div id="wrapper" class="container">
	<section class="navbar main-menu"> <a href="index.php" class="logo pull-left"><img src="themes/images/tmaker.png" alt="" width="120" height="42" class="site_logo"></a>
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
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/banner-1.jpg" alt="New products" >
			<h4><span>PREFERENCES </span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">
<form action="authenicate.php" method="post">
			<input type="hidden" name="next" value="/">
</form>				
					</div>
					<div class="span7">
					  <blockquote>
					    <blockquote>
					      <h4 class="title"><font color="#eb4800">Preferences </font>&nbsp;</h4>
					    </blockquote>
					  </blockquote>
					  <form action="processPref.php" method="post" class="form-stacked">
						<fieldset>
								<div class="control-group">
									<label class="control-label">Categories:</label>
									<div class="controls">
<!--										<input type="text" placeholder="Enter your username" id = "username"  name = "username" class="input-xlarge">-->
											<select id="categories" name = "categories">
												<option value="TShirts">TShirt</option>
												<option value="Pants">Pants!</option>
											</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Favourite Colour:</label>
									<div class="controls">
										<select id="colour" name = "colour">
												<option value="Blue">Blue</option>
												<option value="Green">Green</option>
											</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Size:</label>
									<div class="controls">
										<select id="size" name = "size">
												<option value="Large">Large</option>
												<option value="Medium">Medium</option>
												<option value="Small">Small</option>
											</select>
									</div>
									</div>
								</div>							                            
							  <div class="control-group">
									<p></p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Save"></div>
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
				<span>Copyright 2020 TMaker.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>		
    </body>
</html>