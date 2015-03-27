<?php
$CostInput = $_POST["Cost"];

include('./include/DatabaseAbstractionLayer.php');

$User = $_COOKIE["user_id"];
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
$Data = GetResultsBasic($User,$PageNumber,$PerPage);

print '<table><tr><th>UIN</th><th>UPC</th><th>Name</th><th>Count</th><th>Price</th><th>Cost</th><th></th></tr>';
$i = 0;
if (!empty($Data))
{
	foreach ($Data as $value) 
	{
		print "<tr><td>$value[0]</td><td>$value[1]<td>$value[2]</td>
		<td>$value[3]</td><td>$value[4]<td>$value[5]</td><td>
				
		<a href=\"edit.php?UIN=$value[0]\">Edit</a></td>";
		  
 

	}
}
print "</table>";

//----------------------------------------------------->
/* If Page Number is greater then 0 Print previous page button */
if ($PageNumber > 0)
{
	print "<a href=\"test5.php?PageNumber=".($PageNumber-1)."&PerPage=".$PerPage."\">Previous Page</a>";
}
print " ";
if (!empty($Data) && $i == $PerPage)
{
	print "<a href=\"test5.php?PageNumber=".($PageNumber+1)."&PerPage=".$PerPage."\">Next Page</a>";
}
//-------------------------------------------------------->
	
?><head>
<link rel="stylesheet" href="css/skel-noscript.css" />
			
			<link rel="stylesheet" href="css/style-desktop.css" />
</head>



<form method="get"  action="saveExcel.php">
  <span style="display: inline;">
  <button type="submit" class="myButton">Download as Excel Spreedsheet</button>
  </span>
</form>
<form method="get"  action="test2.php">
  <span style="display: inline;">
  <button type="submit" class="myButton">Go Back</button>
</span>
</form>

</body>	