<?php
$Username = $_COOKIE["user_id"];
include ('navbar.php');
if(isset($_POST[searchType]))
{
	$searchType = $_POST[searchType];
	$input = $_POST[SearchInfo];
	include('./include/DatabaseAbstractionLayer.php');
		if ($_POST[searchType] == "UPC")
		{
			$data = ItemSearchUPC($input, $Username);
		}
		if ($_POST[searchType] == "UIN")
		{
			$data = ItemSearchUIN($input, $Username);
		}
		if ($_POST[searchType] == "Name")
		{
			$data = ItemSearchName($input, $Username);
		}
		$rowNumber = count($data);
?>
<html>
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
		<div style = "font-size:28px; text-align: center;">Showing 
		<?php 
		print $rowNumber; 
		if ($rowNumber == 1) print " result."; else print " results.";
		?> 
		</div>
<?php
	print '<p>&nbsp;</p><table class="table 1"><tr><th>UIN</th><th>UPC</th><th>Name</th><th>Count</th><th>Price</th><th>Cost</th><th></th></tr>';
	$i = 0;
	
	if (!empty($data))
	{
		foreach ($data as $value) 
		{
			$padUPC = str_pad($value[1], 12, '0', STR_PAD_LEFT);
			print "<tr><td>$value[0]</td><td>$padUPC<td>$value[2]</td>
			<td>$value[3]</td><td>$value[4]<td>$value[5]</td><td>
					
			<a href=\"edit.php?UIN=$value[0]\">Edit</a>  <a href=\"viewData.php?Delete=$value[0]\">Delete</a></td>";
		}
	}
	print "</table>";
	print '<br><div style="margin-left: 10%;"><a style="text-decoration: none;" href="itemSearch.php"><button type="button" class="myButton">Go back</button></a>';
	print '<a href="saveExcel.php?searchType='.$searchType.'&SearchInfo='.$input.'" style="text-decoration: none;"> 
	<button type="submit" class="myButton">Download as Excel Spreedsheet</button></a></div>';
}


else
{

?>
<html>
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
<div style="margin-left:40%; font-size:200%;">
<FORM name ="form1" method ="post" action ="itemSearch.php">
Search Term: <input type="text" name="SearchInfo"><br><br>
Search Type: <br>
<Input type = 'Radio' Name ='searchType' value= 'Name' checked="checked">Item Name<br>
<Input type = 'Radio' Name ='searchType' value= 'UPC'>UPC<br>
<Input type = 'Radio' Name ='searchType' value= 'UIN'>UIN<br>
<Input type = "Submit" Name = "Submit1" VALUE = "Search">
</FORM>
</div>


<?php } ?>