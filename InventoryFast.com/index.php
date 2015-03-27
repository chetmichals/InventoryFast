<?PHP 
require_once("./include/membersite_config.php");
include ('navbar.php');
if(!$fgmembersite->CheckLogin())
{
$LoggedIn = 0;
}
else
{
$LoggedIn = 1;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>InventoryFast Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		
	</head>
	<body>
	
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1>inventoryFast</h1>
							<nav id="nav">
							<?php printNavBar($LoggedIn); ?>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="banner-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
					
						<div id="banner">
						  <h2>your inventory in a rush</h2>
							<span>access anywhere, and keep you merchandise inventory up-to-date...</span>
						</div>
				
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="4u">
						
						<section>
							<h2>Welcome to inventoryFast!</h2>
							<p>This is <strong>inventoryFast</strong>, store your inventory securly and for free. We provide and ease of use service to eleminate paper work. Seamlessly integrate your offline inventorey online. So fast we put paid inventory service to shame.<strong>Why not try us out it's Free!</strong></p>
							<footer class="controls">
								<p><a href="register.php" class="button">Register for free ...</a>
							  </p>
								<p>&nbsp;</p>
							</footer>
                            
                          <footer>
								<a href="https://www.facebook.com/dialog/oauth?client_id=1572102123017379&redirect_uri=http%3A%2F%2Finventoryfast.com%2Fwdd-sample.php&state=ffb4a531179c900144f9c66e8b8c43f8&sdk=php-sdk-3.2.3" class="fb">... or login in with facebook</a>
							</footer>
                            
						</section>
					
					</div>
					<div class="4u">
						
						<section>
							<h2>Who are you guys?</h2>
							<ul class="small-image-list">
								<li>
									<img src="images/pic2.jpg" alt="" class="left" />
									<h4>Jose Pierre-Louis</h4>
									<p>Product Owner.</p>
								</li>
								<li>
									<img src="images/chet.jpg" height="72" width="72" alt="" class="left" />
									<h4>Chet Michals</h4>
									<p>Server-side Development</p>
								</li>
                                <li>
									<img src="images/pic1.jpg" alt="" class="left" />
									<h4>Dipu Girsh</h4>
									<p>SCRUM Master</p>
								</li>
                                 <li>
									<img src="images/ali.jpg" alt="" class="left" />
									<h4>Ali Saad</h4>
									<p>Html development</p>
								</li>
							</ul>
						</section>
					
					</div>
					<div class="4u">
					
						<section>
							<h2>what are our features?</h2>
							<div>
								<div class="row">
									<div class="6u">
										<ul class="link-list">
											<li>Free inventory space with registration</li>
											<li>Unlimited Bandwidth</li>
											<li>Save inventory on our servers or send to your email </li>
											<li>99.9% Uptime service</li>
											<li>Excel document support</li>
										</ul>
									</div>
									<div class="6u">
										<ul class="link-list">
											<li>Access our site from mobile device</li>
											<li>Secure Login</li>
											<li>Change existing inventory</li>
											<li>Support Ticketing</li>
											<li>New updates</li>
										</ul>
									</div>
								</div>
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
						<section>
							<h2>Convience made Fast and Easy</h2>
							<p>Organinzation and efficeny are main keys for a successful business. Time is money, and money is time. Access your needed information with ease and feel relaxed without the paper cluter. </p>
							<ul class="big-image-list">
								<li>
									<a href="#"><img src="images/tag.jpg" alt="" width="150" height="74" class="left" /></a>
								  <h3>Total Price to Seller (You)</h3>
									<p>Calculate the total selling price of your inventory in stock.</p>
								</li>
                                <li>
									<a href="#"><img src="images/pic3.jpg" alt="" width="151" height="65" class="left" /></a>
								  <h3>Total Cost to Buyer</h3>
									<p>Know to cost of your inventory to your prospective buyer.</p>
								</li>
								<li>
									<a href="#"><img src="images/pic4.jpg" alt="" width="30" height="68" class="left" /></a>
								  <h3>Total Count of Inventory</h3>
									<p>Know how much of what each and total items you have.</p>
								</li>
                                <li>
									<a href="#"><img src="images/profit.jpg" alt="" width="30" height="68" class="left" /></a>
								  <h3>Potential Total Profit</h3>
									<p>And we will automatically calculate your potential profit for you.
                                    </p>
								</li>
								</ul>
						</section>

					</div>
					<div class="6u">
					
						
							<a href="#"><img src="images/pic6.jpeg" alt="" width="625" class="top blog-post-image" /></a>
					  <h3>Mission Statement</h3>
							<p>Our mission is to provide the upmost service to our registered users. To make life more efficent to not just large busniess owners but to small business owners as well. We will always stay a free service with quick contact support. We strive for the best user experience possible, with reliablity without a second thought.</p>
							
							</footer>
						</article>

					</div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<div class="container">
				<div class="row">
				  <div class="4u">

					  <section>
							<h2>
							  <footer class="controls"></footer>
						    </h2>
					  </section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; inventoryFast. All rights reserved.
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>