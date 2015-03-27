<?php 
require_once("./include/fg_membersite.php");
require_once("src/facebook.php");
include ('navbar.php');
if($user_id)
{

require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<link rel="stylesheet" href="css/skel-noscript.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel='stylesheet' href='navPage.css' type='text/css' charset='utf-8'>

<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">

<style type ="text/css">
	body {background:url(logoutpic.jpg);
    background-attachment:fixed;
    background-position:top;
	background-repeat:no-repeat;
    background-size:cover;
	}
	
	button{background-color:#cdecda;}
	
	th{background-color:#cdecda;
	font-weight:bold;}
	
	.me{font-size:9px}	
	
	h2 {
		color: #007897;
		font-weight: normal;
		text-transform: lowercase;
		font-size: 1.6em;
		letter-spacing: -1px;
		margin-bottom: 1em;
		top: 220px;
	}
	
</style>

<title>Main Menu</title>
</head>
<body>
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1>inventoryFast</h1>
							<nav id="nav">
							<?php printNavBar(1); ?>
                            </nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>

	<h2 align="center">Welcome Please Select an Option</h2>
   	
<div id='wrapper'>
<div id='rule6'>
<a href='inputData.php'><button  class='btn6'>Add To Inventory</button></a>
</div>
<div id='rule7'>
<a href='viewData.php'><button  class='btn7'>View<br>Inventory</button></a>
</div>
<div id='rule8'>
<a href='upload.php'><button  class='btn8'>Upload Files</button></a>
</div>
<div id='rule12'>
<a href='itemSearch.php'><button class='btn12'>Search Inventory</button>
</div>
<div id='rule9'>
<a href='apiInfo.php'><button  class='btn9'>API Information</button></a>
</div>

<div id='rule11'>
<a href='se.php'><button  class='btn9'>Barcode Label Maker</button></a>
</div>

</div>
</body>
</html>
