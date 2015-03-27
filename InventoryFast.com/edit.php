<?php
include('./include/DatabaseAbstractionLayer.php');
include ('navbar.php');
$User = $_COOKIE["user_id"];
$UIN = $_GET['UIN'];
if ((!isset($_GET['UIN']))||(!isset($_COOKIE["user_id"])))
{
	print "Something has gone wrong in accessing the edit page. Please do no manually navigate to this page. Ensure you have logged in, and cookies are enabled.";
}
if(isset($_POST['send']))
{
$UPCInput = $_POST["UPC"];
$NameInput = $_POST["Name"];
$CountInput = $_POST["Count"];
$PriceInput = $_POST["Price"];
$CostInput = $_POST["Cost"];
UpdateEntry($UIN, $UPCInput, $NameInput, $CountInput, $PriceInput, $CostInput,0);

}
?>
<head>

<link rel="stylesheet" href="css/skel-noscript.css" />
<link rel="stylesheet" href="css/style-desktop.css" />

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
	
</style>
</head>
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

<?php

$data = ItemSearchUIN($UIN, $User);
$value = $data[0];
print '<form method="POST" action="'.$_SERVER["PHP_SELF"].'?UIN='.$UIN.'">';
print '<table id="myTable">
<tr>
<td>UIN</td>
<td>UPC</td>
<td>Name</td>
<td>Count</td>
<td>Price</td>
<td>Cost</td>
</tr>
<tr>
<td>'.$value[0].'</td>
<td><input type="text" name="UPC" value="'.$value[1].'"></td>
<td><input type="text" name="Name" value="'.$value[2].'"></td>
<td><input type="text" name="Count" value="'.$value[3].'"></td>
<td><input type="text" name="Price" value="'.$value[4].'"></td>
<td><input type="text" name="Cost" value="'.$value[5].'"></td>
</tr></table>
<input type = "submit" name = "send" value = "Submit">
</form>';
?>
<a href="/viewData.php">
   <button>Back</button>
</a>

