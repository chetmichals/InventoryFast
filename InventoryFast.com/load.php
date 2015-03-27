<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=spreadsheet.xls" );
	
	// print your data here. note the following:
	// - cells/columns are separated by tabs ("\t")
	// - rows are separated by newlines ("\n")
	
	// for example:
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
		<td>$value[3]</td><td>$value[4]<td>$value[5]</td><td><a href=\"edit.php?UIN=$value[0]\">Edit</a></td>";
		$i++;
	}
}
?>