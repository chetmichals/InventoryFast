<html>
<head>
<style>
table,td
{
border:1px solid black;
}
</style>
</head>
<?php
if(!isset($_POST['send']))
{
?>
<body>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<p>Click the button to add a new row at the end of table and then add cells and content.</p>

<table id="myTable">
<tr>
<td>UPC</td>
<td>Name</td>
<td>Count</td>
<td>Price</td>
<td>Cost</td>
</tr>
<tr>
<td><input type="text" name="UPC[]"></td>
<td><input type="text" name="Name[]"></td>
<td><input type="text" name="Count[]"></td>
<td><input type="text" name="Price[]"></td>
<td><input type="text" name="Cost[]"></td>
</tr><tr>
<td><input type="text" name="UPC[]"></td>
<td><input type="text" name="Name[]"></td>
<td><input type="text" name="Count[]"></td>
<td><input type="text" name="Price[]"></td>
<td><input type="text" name="Cost[]"></td>
</tr>
</table><br>
<input type = "submit" name = "send" value = "SEND">
</form>
<button onclick="myFunction()">Add additional row</button>


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
$i = 0;
$UPCInput = $_POST["UPC"];
$NameInput = $_POST["Name"];
$CountInput = $_POST["Count"];
$PriceInput = $_POST["Price"];
$CostInput = $_POST["Cost"];
foreach ($UPCInput as $eachInput) {
	$eachInput = preg_replace("/[^0-9]/","",$eachInput);
	$CountNumber =  preg_replace("/[^0-9]/","",$CountInput[$i]);
	$PriceNumber = preg_replace("/[^0-9]/","",$PriceInput[$i]);
	$CostNumber = preg_replace("/[^0-9]/","",$CostInput[$i]);
    echo $eachInput . " ".$NameInput[$i]." ".$CountNumber." ".$PriceNumber." ".$CostNumber."<br>";
	$i++;
}
}
?>
</html>