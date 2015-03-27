<?php 
$Username = $_COOKIE["user_id"];
require_once("./include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
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

body {
    background-color: #EDF3FF;
} 
.txt {
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
}
.welcome{
font-family: Courier, monospace;
line-height: 1em;
color: #c4e5f5;
font-style:italic;
font-size: 32px;
text-shadow:0px 0px 0 rgb(144,177,193),1px 1px 0 rgb(101,134,150),2px 2px 0 rgb(59,92,108),3px 3px 0 rgb(17,50,66),4px 4px 0 rgb(-26,7,23),5px 5px 0 rgb(-68,-35,-19), 6px 6px 0 rgb(-110,-77,-61),7px 7px 6px rgba(0,0,0,0),7px 7px 1px rgba(0,0,0,0.5),0px 0px 6px rgba(0,0,0,.2);}

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
<a href="index.html" class="current-page-item">Homepage</a>
								
<a href="Logout.php">Privacy Policy</a>

<a href="contactus.html">Contact Us</a>

<a href="logout.php">Logout</a>
							
                            </nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
        </body>
    
  
    
<div id='fg_membersite_content'>	
<dic class=welcome>Welcome <?= $fgmembersite->UserFullName(); ?>!
</div>

<hr></hr>

<p class="info">Click the button to add a new row at the end of table and then add cells and content.</p>

<p></p>


<form>
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
<td><input type="text" class="inputtable" name="UPC[]"></td>
<td><input type="text" class="inputtable" name="Name[]"></td>
<td><input type="text" class="inputtable" name="Count[]"></td>
<td><input type="text" class="inputtable" name="Price[]"></td>
<td><input type="text" class="inputtable" name="Cost[]"></td>
</tr><tr>
<td><input type="text" class="inputtable" name="UPC[]"></td>
<td><input type="text" class="inputtable" name="Name[]"></td>
<td><input type="text" class="inputtable" name="Count[]"></td>
<td><input type="text" class="inputtable" name="Price[]"></td>
<td><input type="text" class="inputtable" name="Cost[]"></td>
</tr>
</table>
              
            
<p><br>

  <input type = "submit" name = "send" class ="send" value = "View & Send/Save">
  <input type = "submit" name = "clearall" class ="send" action = "test2.php" value = "Clear ALL">
</p>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
</form>
<button onclick="myFunction()" class="myButton">+ Add additonal Item
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
cell1.innerHTML = '<input type="text" name="UPC[]">';
cell2.innerHTML = '<input type="text" name="Name[]">';
cell3.innerHTML = '<input type="text" name="Count[]">';
cell4.innerHTML = '<input type="text" name="Price[]">';
cell5.innerHTML = '<input type="text" name="Cost[]">';
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
        window.location = "http://inventoryfast.com/test5.php";
    });
    </script>';
}
?>

</body>
</html>