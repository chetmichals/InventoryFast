<?php 
$Username = $_COOKIE["user_id"];
require_once("./include/membersite_config.php");
require_once("src/facebook.php");
include ('navbar.php');

if($user_id)
{


if(!$fgmembersite->CheckLogin())
{
 
	$fgmembersite->RedirectToURL("login.php");
    exit;
}
}
?>

<html>
<head>

<style type="text/css">
.myButton {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:37px;
	-webkit-border-radius:37px;
	border-radius:37px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	padding:1px 3px;
	text-decoration:none;
	display:inline;

}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}
.myButton:active {
	position:fixed;
	top:1px;
	display:inline;
}

form{ display:compact;
 }

body {background:url(logoutpic.jpg);
    background-attachment:fixed;
    background-position:top;
	background-repeat:no-repeat;
    background-size:cover;
}
.txt {
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
}

.info  {font-style: italic;}

.send {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background-color:#79bbff;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:16px;
	font-weight:bold;
	padding:0px 3px;
	text-decoration:none;
	text-shadow:0px 0px 0px #528ecc;
	style="display:inline;
}
.myButton:hover {
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
	display:inline;
}

.removeButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fc8d83), color-stop(1, #e4685d));
	background:-moz-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-webkit-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-o-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-ms-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:linear-gradient(to bottom, #fc8d83 5%, #e4685d 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc8d83', endColorstr='#e4685d',GradientType=0);
	background-color:#fc8d83;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:14px;
	padding:1px 2px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.removeButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e4685d), color-stop(1, #fc8d83));
	background:-moz-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-webkit-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-o-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-ms-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:linear-gradient(to bottom, #e4685d 5%, #fc8d83 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#fc8d83',GradientType=0);
	background-color:#e4685d;
}
.removeButton:active {
	position:relative;
	top:1px;
}

td{font-size:55px;}


</style>
</head>

<?php
if(!isset($_POST['send']))
{
?>
<body>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	
		</noscript>
		
	</head>
	<link rel="stylesheet" href="css/style.css" />
    	<link rel="stylesheet" href="css/skel-noscript.css" />
			
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
							<?php printNavBar(1); ?>
                            </nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
        </body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Input Inventory Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>    
  
    
<div id='fg_membersite_content'>
<h2>Welcome <?= $fgmembersite->UserFullName(); ?>!
</h2>
</div>
<hr></hr>

<p class="info">Click the button to add a new row at the end of table and then add cells and content.</p>

<p></p>


<p>&nbsp;</p>

<table id="myTable">
<tr>
<td>UPC</td>
<td>Name</td>
<td>Count</td>
<td>Price</td>
<td>Cost</td>
</tr>
<tr>
<td><input type="text" class="inputtable" placeholder="UPC Number xxxxxxx" name="UPC[]"></td>
<td><input type="text" class="inputtable" placeholder="Item name" name="Name[]"></td>
<td><input type="text" class="inputtable" placeholder="Quantity" name="Count[]"></td>
<td><input type="text" class="inputtable" placeholder="Price to Seller" name="Price[]"></td>
<td><input type="text" class="inputtable" placeholder="Price to Buyer" name="Cost[]"></td>
</tr><tr>
<td><input type="text" class="inputtable" name="UPC[]"></td>
<td><input type="text" class="inputtable" name="Name[]"></td>
<td><input type="text" class="inputtable" name="Count[]"></td>
<td><input type="text" class="inputtable" name="Price[]"></td>
<td><input type="text" class="inputtable" name="Cost[]"></td>
</tr>
</table>
              
            
<p><br>

  <input type = "submit" name = "send" class ="send" value = "Submit">
  <input type = "submit" name = "clearall" class ="send" action = "inputData.php" value = "Clear all input">
  </form>
  
</p>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  

<button onClick="myFunction()" class="myButton">+ Add additional row
</button>
<button onClick="removeFunction()" class="removeButton">- Remove row
</button>
</div>

<script>
function myFunction()
{

var table = document.getElementById("myTable");
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
cell1.innerHTML = '<input type="text" class="inputtable" name="UPC[]">';
cell2.innerHTML = '<input type="text" class="inputtable" name="Name[]">';
cell3.innerHTML = '<input type="text" class="inputtable" name="Count[]">';
cell4.innerHTML = '<input type="text" class="inputtable" name="Price[]">';
cell5.innerHTML = '<input type="text" class="inputtable" name="Cost[]">';
}
</script>

<script>
function removeFunction()
{
var table = document.getElementById("myTable");
var row = table.deleteRow(-1);
var cell1 = row.deleteCell(0);
var cell2 = row.deleteCell(1);
var cell3 = row.deleteCell(2);
var cell4 = row.deleteCell(3);
var cell5 = row.deleteCell(4);
}
</script>

</body>

<?php
}
else
{
include('./include/DatabaseAbstractionLayer.php');
print "<html><body>Adding items to Database, please wait. You will be automatically redirected upon completion.";
$i = 0;
$UPCInput = $_POST["UPC"];
$NameInput = $_POST["Name"];
$CountInput = $_POST["Count"];
$PriceInput = $_POST["Price"];
$CostInput = $_POST["Cost"];
foreach ($UPCInput as $eachInput) {
	if ($NameInput[$i] != '')
	{
		$eachInput = preg_replace("/[^0-9]/","",$eachInput);
		$CountNumber =  preg_replace("/[^0-9]/","",$CountInput[$i]);
		$PriceNumber = preg_replace("/[^0-9.]/","",$PriceInput[$i]);
		$CostNumber = preg_replace("/[^0-9.]/","",$CostInput[$i]);
		//echo $eachInput . " ".$NameInput[$i]." ".$CountNumber." ".$PriceNumber." ".$CostNumber."<br>";
		AddToDataBase($eachInput,$NameInput[$i],$CountNumber,$PriceNumber,$CostNumber,'0',$Username);
	}
	$i++;
}
print '<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
	$( window ).load(function() {
        window.location = "http://inventoryfast.com/viewData.php";
    });
    </script>';
}
?>

</body>
</html>