<?php
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
		<title>Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo">inventoryFast</a></h1>
							<nav id="nav">
							<?php printNavBar($LoggedIn); ?>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="3u">

<h2>Give us a shout</h2>						
<form name="htmlform" method="post" action="html_form_send.php">
<table width="450px">
</tr>
<tr>
 <th align="left">
  <label for="first_name">First Name*</label>
 </th>
 <th align="left">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </th>
</tr>
 
<tr>
 <td valign="top">
  <label for="last_name">Last Name*</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments*</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   ( <a href="http://www.freecontactform.com/html_form.php">HTML Form</a> )
 </td>
</tr>
</table>
</form>
						
					
					</div>
					<div class="6u skel-cell-important">
						
						<section class="middle-content">
							<h2>&nbsp;</h2>
						</section>
					
					</div>
					<div class="3u">
						
						<section>
							<h2>need help?</h2>
							<ul class="small-image-list">
								<li>
									<a href="#"><img src="images/pic2.jpg" alt="" class="left" /></a>
									<h4>Jose Pierre-Louis</h4>
									<p>Product Owner.</p>
								</li>
								<li>
									<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
									<h4>Chet Michals</h4>
									<p>Server-side Development</p>
								</li>
                                <li>
									<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
									<h4>Dipu Girsh</h4>
									<p>SCRUM Master</p>
								</li>
                                 <li>
									<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
									<h4>Ali Saad</h4>
									<p>Html development</p>
								</li>
							</ul>
						</section>
					
					</div>
						</section>

					</div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<div class="container">
				<div class="row">
					<div class="8u"></div>
					<div class="4u"></div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; inventoryFast. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | Images: <a href="http://fotogrph.com">fotogrph</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>