<?php
// This is the API, 2 possibilities: show the app list or show a specific app by id.
// This would normally be pulled from a database but for demo purposes, I will be hardcoding the return values.

include('../include/DatabaseAbstractionLayer.php');

function get_app_by_id($id)
{
  $app_info = array();

  // normally this info would be pulled from a database.
  // build JSON array.
  switch ($id){
    case 1:
      $app_info = array("app_name" => "Web Demo", "app_price" => "Free", "app_version" => "2.0"); 
      break;
    case 2:
      $app_info = array("app_name" => "Audio Countdown", "app_price" => "Free", "app_version" => "1.1");
      break;
    case 3:
      $app_info = array("app_name" => "The Tab Key", "app_price" => "Free", "app_version" => "1.2");
      break;
    case 4:
      $app_info = array("app_name" => "Music Sleep Timer", "app_price" => "Free", "app_version" => "1.9");
      break;
  }

  return $app_info;
}

function get_app_list()
{
  //normally this info would be pulled from a database.
  //build JSON array
  $app_list = array(array("id" => 1, "name" => "Web Demo"), array("id" => 2, "name" => "Audio Countdown"), array("id" => 3, "name" => "The Tab Key"), array("id" => 4, "name" => "Music Sleep Timer")); 

  return $app_list;
}

//function get item info
function get_item_info($Owner)
{
$Owner = 6; //Change to a lookup once table is set up
$UIN = $_GET["UIN"];
$Data = ItemSearchUIN($UIN, $Owner);
$returnData = array("uin" => $Data[0][0], "upc" => $Data[0][1], "name" => $Data[0][2], "count" => $Data[0][3], "price" => $Data[0][4], "cost" => $Data[0][5]);
return $returnData;
}

//function update item
function update_item($Owner)
{
$Owner = 6; //Change to a lookup once table is set up
$UIN = $_GET["UIN"];
$Data = ItemSearchUIN($UIN, $Owner);
$UPC = $Data[0][1];
$Name = $Data[0][2];
$Count = $Data[0][3];
$Price = $Data[0][4];
$Cost = $Data[0][5];

if (isset($_GET["UPC"]))
{
$UPC = $_GET["UPC"];
}
if (isset($_GET["Name"]))
{
$Name = $_GET["Name"];
}
if (isset($_GET["Count"]))
{
$Count = $_GET["Count"];
}
if (isset($_GET["Price"]))
{
$Price = $_GET["Price"];
}
if (isset($_GET["Cost"]))
{
$Cost = $_GET["Cost"];
}
UpdateEntry($UIN, $UPC, $Name, $Count, $Price, $Cost,0);

$Data = ItemSearchUIN($UIN, $Owner);
$returnData = array("uin" => $Data[0][0], "upc" => $Data[0][1], "name" => $Data[0][2], "count" => $Data[0][3], "price" => $Data[0][4], "cost" => $Data[0][5]);
return $returnData;
}

//function change count
function change_count($Owner)
{
$Owner = 6; //Change to a lookup once table is set up
$UIN = $_GET["UIN"];
$Data = ItemSearchUIN($UIN, $Owner);
$count = (int)$Data[0][3] + (int)$_GET["CountChange"];
UpdateEntry($UIN, $Data[0][1], $Data[0][2], $count, $Data[0][4], $Data[0][5],0);
$returnData = array("newcount" => $count);
return $returnData;
}

$possible_url = array("get_item_info", "update_item", "change_count");

$value = "An invalid argument has been given";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url) && isset($_GET["APIKey"]) && isset($_GET["UIN"]))
{
//Check if API Key is in database, if so continue
$owner = checkAPIKey($_GET["APIKey"]);
if ($owner == -1){exit(json_encode($value));}
  switch ($_GET["action"])
    {
      case "get_item_info":
        $value = get_item_info($owner);
        break;
      case "update_item":
        $value = update_item($owner);
        break;
      case "change_count":
        if (isset($_GET["CountChange"]))
          $value = change_count($owner);
        else
          $value = "Missing 'CountChange' argument";

    }
}

//return JSON array
exit(json_encode($value));
?>