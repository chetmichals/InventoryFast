<?PHP
require_once("./include/membersite_config.php");
include ('navbar.php');
$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Logout</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
	  	<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	  <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
<style>
body {background:url(logoutpic.jpg);
   background-attachment:fixed;
    background-position:left;
	background-repeat:no-repeat;

   background-size:cover;
}
</style>

</head>
<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1>inventoryFast</h1>
							<nav id="nav">
							<?php printNavBar(0); ?>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
<h2 align="center">You have Successfully Logged Out</h2>
<p align="center">Y'all come back now!</p>
<p>
</p>

</body>
</html>