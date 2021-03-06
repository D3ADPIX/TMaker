<?php 
session_start();
require("DBHandler/DBController.php");
$db = new DBController();
$results = array();
$results =$db->getAllMaleProducts();
$loop = 0;
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
							<?php include("welcomeUsers.php");?>
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
	<section class="navbar main-menu"> <a href="index.php" class="logo pull-left"><img src="themes/images/tmaker.png" alt="" width="120" height="92" class="site_logo"></a>
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
				<h4><span>For Kings</span></h4>
		  </section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
<!--								HERE-->
							<?php while($loop < count($results)) : ;?>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<?php echo "<a href=\"product_detail.php?id=" . $results[$loop]["id__"] . "\">"; echo "<img src=" . $results[$loop]["imagePath"] .  "></a>";?><br/>
<!--										<p><?php echo "". $results[$loop]["imagePath"];?></br>-->
									<?php echo "<a href=\"product_detail.php?id=" . $results[$loop]["id__"] . "\">"; echo $results[$loop]['name']; ?></a><br/>
									<a href="#" class="category"><?php echo "".$results[$loop]['category']; ?></a>
									<p class="price"><?php echo $results[$loop]['price'] . "EGP"; ?></p>
								</div>
							</li>       
								<?php $loop++; endwhile;?>
<!--						REMEMBER THE UNIQUE RESULT SHIT TO FIX DUPLICATION SIMPLE ALT TO GETALL PRODS FUNCTION		HERE-->
<!--
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
									<a href="product_detail.php" class="title">Praesent tempor sem</a><br/>
									<a href="#" class="category">Erat gravida</a>
									<p class="price">$28</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
									<a href="product_detail.php" class="title">Wuam ultrices rutrum</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$341</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
									<a href="product_detail.php" class="title">Praesent tempor sem sodales</a><br/>
									<a href="#" class="category">Nam imperdiet</a>
									<p class="price">$49</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
									<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
									<a href="#" class="category">Congue diam congue</a>
									<p class="price">$35</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
									<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Gravida placerat</a>
									<p class="price">$61</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
									<a href="product_detail.php" class="title">Quam ultrices rutrum</a><br/>
									<a href="#" class="category">Orci et nisl iaculis</a>
									<p class="price">$233</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
									<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Urna nec lectus mollis</a>
									<p class="price">$134</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
									<a href="product_detail.php" class="title">Luctus quam ultrices</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$261</p>
								</div>
							</li>
-->
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
<div class="block">
			<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
		  </h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/1.jpg"><br/>
													<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="themes/images/ladies/2.jpg"><br/>
													<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
					  </div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
						</div>
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