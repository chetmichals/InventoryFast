<?php 
$Username = $_COOKIE["user_id"];
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
	.larger{font-size:28px; text-align: center;}	
	.smaller{font-size:12px}	
	
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
<?php
$CostInput = $_POST["Cost"];

include('./include/DatabaseAbstractionLayer.php');

$User = $_COOKIE["user_id"];

if (isset($_GET['Delete']) == true)
{
	DeleteEntry($_GET['Delete'],$User);
}

if ((isset($_GET['PageNumber']) == false) || (isset($_GET['PerPage']) == false))
{
	$PageNumber = 0;
	$PerPage = 25;
}
else
{
	$PageNumber = $_GET['PageNumber'];
	$PerPage = $_GET['PerPage'];
}

$rowCount = GetRowCount($User);
$startNumber = 1 + ($PageNumber * $PerPage);
$endNumber = (1 + $PageNumber) * $PerPage;
if (($rowCount - $startNumber) < $PerPage)
{
$endNumber = $rowCount;
}

$Data = GetResultsBasic($User,$PageNumber,$PerPage);
print "<h2 class='larger' >Showing $startNumber though $endNumber out of $rowCount<br></h2>";
print '<p>&nbsp;</p>';
print "<div class='smaller'>Items per page: <a href=\"viewData.php?PageNumber=0&PerPage=25\">25</a>  <a href=\"viewData.php?PageNumber=0&PerPage=100\">100</a>  <a href=\"viewData.php?PageNumber=0&PerPage=$rowCount\">All </a></div>";
print '<table class="table 1">
<tr>
<th>UIN</th>
<th>UPC</th>
<th>Name</th>
<th>Count</th>
<th>Price</th>
<th>Cost</th>
</tr>';
$i = 0;
if (!empty($Data))
{
	$totalCount = 0;
	$totalCost = 0;
	foreach ($Data as $value) 
	{
		$padUPC = str_pad($value[1], 12, '0', STR_PAD_LEFT);
		print "
	
		<tr>
		<td>$value[0]</td>
		<td>$padUPC</td>
		<td>$value[2]</td>
		<td>$value[3]</td>
		<td>$$value[4]</td>
		<td>$$value[5]</td>
		<th>
		<a href=\"edit.php?UIN=$value[0]\">Edit</a>
		
		
		<a href=\"viewData.php?Delete=$value[0]&PageNumber=$PageNumber&PerPage=$PerPage\">Delete</a>
		</th>
		</tr>";
		
		$i++;
		
		
		$totalCount += (double)$value[3];
		$totalCost += ((double)$value[3] * (double)$value[5]);
		$totalPrice += ((double)$value[3] * (double)$value[4]);
		$totalProfit += ((double)$value[5] - (double)$value[4]);
	}
	$totalProfit = $totalPrice-$totalCost;
}


print "<hr>";
print "<table>";
print "<tr><td class='me'>Count of items on page: ".$totalCount."<BR>";

print "<td class='me'>Price of items: $".$totalPrice."<BR>";

print "<td class='me'>Cost of items: $".$totalCost."<BR>";

print "<td class='me'>Profit: $".$totalProfit."<BR>";
print "</td>";
print "</tr>";
print "</table>";
//----------------------------------------------------->
/* If Page Number is greater then 0 Print previous page button */
print '<div style = "margin-left: 10%;">';
if ($PageNumber > 0)
{
	print "<a style=\"text-decoration: none;\" href=\"viewData.php?PageNumber=".($PageNumber-1)."&PerPage=".$PerPage."\"><button class=\"send\" style = \"background-color:#3366CC;\">Previous Page</button></a>";
}
print " ";
if (!empty($Data) && $i == $PerPage && $PerPage != $rowCount)
{
	print "<a style=\"text-decoration: none;\" href=\"viewData.php?PageNumber=".($PageNumber+1)."&PerPage=".$PerPage."\"><button class=\"send\" style = \"background-color:#3366CC;\">Next Page</button></a>";
}
print "</div>";
//-------------------------------------------------------->
	
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<br>
<div style = "margin-left: 10%;">
<a href="saveExcel.php?<?php print"PageNumber=$PageNumber&PerPage=$PerPage";?>" style="text-decoration: none;">
  
  <button type="submit" class="myButton">Download as Excel Spreedsheet</button></a>
<form method="post"  action="inputData.php">
  <button type="submit" class="myButton">Go Back to Input Menu</button></form>
  <form method="post"  action="navPage.php">
  <button type="submit" class="myButton">Go Back to Main Menu</button>
</form>
</div>

</body>	