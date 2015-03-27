<?php
require_once('DataBaseLogIn.php');

function TESTIT()
{
echo "test";
}

function AddToDataBase($UPC, $Name, $Count, $Price, $Cost, $Category, $Owner)
{
   
    $sqlServer = connectToDotabase();
     
    //Find highest UIN, and increment by 1
    $UIN = 0;
    $query = "SELECT UIN FROM Inventory ORDER BY UIN DESC LIMIT 1";
    $data = mysqli_query($sqlServer,$query);
    $number = mysqli_fetch_array($data);
    $UIN = intval($number["UIN"]) + 1;
    //echo "UIN IS $UIN <BR>";
    
	//Remove invalid characters from input
	$UPC = preg_replace("/[^0-9]/","",$UPC);
	$Count =  preg_replace("/[^0-9]/","",$Count);
	$Price = preg_replace("/[^0-9.]/","",$Price);
	$Cost = preg_replace("/[^0-9.]/","",$Cost);
	//Add items to main database
    $query = "INSERT into Inventory (UIN, UPC, Name, Count, Price, Cost, Category, Owner)
        VALUES ('$UIN', '$UPC', '$Name', '$Count', '$Price', '$Cost', '$Category', '$Owner')";
    mysqli_query($sqlServer,$query);
	
	//Log item movement
	$query = "INSERT into ItemMovement (UIN, Count) VALUES ('$UIN', '$Count')";
    mysqli_query($sqlServer,$query);
}

function GetResultsBasic($Owner, $Page, $PerPage)
{
    $sqlServer = connectToDotabase();
    $start = $Page * $PerPage;
	$query = "SELECT * FROM Inventory WHERE `Owner` = '$Owner' LIMIT $start,$PerPage";
	$i = 0;
    $data = mysqli_query($sqlServer,$query);
	    while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
    {
        $returnData [] = $row;
    }
	return $returnData;
}
 
//Search Functions will return results in an array 
function ItemSearchName($Name, $Owner)
{
   
    $sqlServer = connectToDotabase();
    $query = "SELECT * FROM `Inventory` WHERE `Name` LIKE '%$Name%' AND Owner = '$Owner' ORDER BY `UIN` ASC";
    $i=0;
    $data = mysqli_query($sqlServer,$query);
    while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
    {
        $returnData [$i] = $row;
        $i++;
    }
    return $returnData;
}
 
function ItemSearchUPC($UPC, $Owner)
{
   
    $sqlServer = connectToDotabase();
    $query = "SELECT * FROM `Inventory` WHERE `UPC` LIKE '%$UPC%' AND Owner = '$Owner' ORDER BY `UIN` ASC";
    $data = mysqli_query($sqlServer,$query);
    while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
    {
        $returnData [] = $row;
    }
    return $returnData;
}
 
function ItemSearchUIN($UIN, $Owner)
{
   
    $sqlServer = connectToDotabase();
    $query = "SELECT * FROM `Inventory` WHERE `UIN` = $UIN AND Owner = '$Owner'";
    $data = mysqli_query($sqlServer,$query);
    while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
    {
        $returnData [] = $row;
    }
    return $returnData;
}
 
//You can change the UIN or owner of an item, but the UIN is needed to know which item to update
function UpdateEntry($UIN, $UPC, $Name, $CountChange, $Price, $Cost, $Category)
{
   
    $sqlServer = connectToDotabase();
    $query = "UPDATE Inventory SET UPC = '$UPC', Name = '$Name', Count = Count + '$CountChange', Price = '$Price', Cost = '$Cost', Category = '$Category' where UIN = '$UIN'";
    //echo $query;
    mysqli_query($sqlServer,$query);
	
	//Log Item Movement
	$query = "INSERT into ItemMovement (UIN, Count) VALUES ('$UIN', '$CountChange')";
    mysqli_query($sqlServer,$query);
    //Maybe add some error codes here if issues arries
}
?>
