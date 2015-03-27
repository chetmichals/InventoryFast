<?php
	
	
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=Inventory.csv" );
	

	
	// print your data here. note the following:
	// - cells/columns are separated by tabs ("\t")
	// - rows are separated by newlines ("\n")
	
	// for example:
	include('./include/DatabaseAbstractionLayer.php');
$User = $_COOKIE["user_id"];
$Username = $_COOKIE["user_id"];
//Main View
if (isset($_GET['searchType']))
{
		$input = $_GET[SearchInfo];
		if ($_GET[searchType] == "UPC")
		{
			$Data = ItemSearchUPC($input, $Username);
		}
		if ($_GET[searchType] == "UIN")
		{
			$Data = ItemSearchUIN($input, $Username);
		}
		if ($_GET[searchType] == "Name")
		{
			$Data = ItemSearchName($input, $Username);
		}
		$rowNumber = count($Data);
}
else
{
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
}
	print 'UIN,UPC,Name,Count,Price,Cost'.PHP_EOL;
	$i = 0;
	if (!empty($Data))
	{
		foreach ($Data as $value) 
		{
			print "$value[0],$value[1],$value[2],$value[3],$$value[4],$$value[5]".PHP_EOL;
			$i++;
		$totalCount += (double)$value[3];
			$totalCost += ((double)$value[3] * (double)$value[5]);
			$totalPrice += ((double)$value[3] * (double)$value[4]);
			$totalProfit += ((double)$value[5] - (double)$value[4]);
		}
	}


/* 	print "<hr>";
	print "<table>";
	print "<hr>";
	print "<tr><td class='me'>Total Count of items:";
	print "<BR>$".$totalCount."<BR>";

	print "<td class='me'>Total Price of items:";
	print "<BR>$".$totalPrice."<BR>";

	print "<td class='me'>Total Cost of items:";
	print "<BR>$".$totalCost."<BR>";

	print "<td class='me'>Total Profit:";
	print "<BR>$".$totalProfit."<BR>";
	print "</td>";
	print "</tr>";
	print "</table>"; */
//Search view
?>