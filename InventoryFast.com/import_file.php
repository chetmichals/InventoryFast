<?php
include('./include/DatabaseAbstractionLayer.php');
$Owner = $_COOKIE["user_id"];
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		//echo "Type: " . $_FILES["file"]["type"] . "<br>";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
		//echo "Stored in: " . $_FILES["file"]["tmp_name"];
	echo "Your file is now being processed, you will be redirected shortly ";
	$uploadedFile=$_FILES["file"]["tmp_name"];
	//echo $uploadedFile;
	$sqlServer = connectToDotabase();
	 
	// path where your CSV file is located
	//define('CSV_PATH','C:/xampp/htdocs/');
	//<!-- C:\xampp\htdocs -->
	// Name of your CSV file
	$csv_file = $uploadedFile; 
	$entryCount = 0;
	if ($_POST[uploadType] == "new"){
		if (($getfile = fopen($csv_file, "r")) !== FALSE) {
				 $data = fgetcsv($getfile, 1000, ","); //This will toss out first line
		   while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
			 //$num = count($data);
			   //echo $num;
					$result = $data;
					$str = implode(",", $result);
					$slice = explode(",", $str);
		 
					$UPC = $slice[0];
					$Name = $slice[1];
					$Count = $slice[2];
					$Price = $slice[3];
					$Cost = $slice[4];
			 
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
						VALUES ('$UIN', '$UPC', '$Name', '$Count', '$Price', '$Cost', '0', '$Owner')";
					//echo $query."<BR>";
					mysqli_query($sqlServer,$query);
					$entryCount++;
		}
		echo "<script>alert('Record successfully uploaded.');window.location.href='viewData.php';</script>";
		//echo "$entryCount entries successfully imported to database.";
		mysqli_close($connect);
		}
	}
	else if ($_POST[uploadType] == "update"){
		if (($getfile = fopen($csv_file, "r")) !== FALSE) {
				 $data = fgetcsv($getfile, 1000, ","); //This will toss out first line
		   while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
			 //$num = count($data);
			   //echo $num;
					$result = $data;
					$str = implode(",", $result);
					$slice = explode(",", $str);
		 
					$UIN = $slice[0];
					$UPC = $slice[1];
					$Name = $slice[2];
					$Count = $slice[3];
					$Price = $slice[4];
					$Cost = $slice[5];
					
					//Remove invalid characters from input
					$UIN = preg_replace("/[^0-9]/","",$UIN);
					$UPC = preg_replace("/[^0-9]/","",$UPC);
					$Count =  preg_replace("/[^0-9]/","",$Count);
					$Price = preg_replace("/[^0-9.]/","",$Price);
					$Cost = preg_replace("/[^0-9.]/","",$Cost);
					//Add items to main database
					$query = "UPDATE Inventory SET UPC = '$UPC', Name = '$Name', Count = '$CountChange', Price = '$Price', Cost = '$Cost', Category = '$Category' where UIN = '$UIN'";
					//echo $query."<BR>";
					mysqli_query($sqlServer,$query);
					$entryCount++;
		}
		echo "<script>alert('Record successfully uploaded.');window.location.href='viewData.php';</script>";
		//echo "$entryCount entries successfully updated.";
		mysqli_close($connect);
		}
	}
	else if ($_POST[uploadType] == "count"){
		if (($getfile = fopen($csv_file, "r")) !== FALSE) {
				 $data = fgetcsv($getfile, 1000, ","); //This will toss out first line
		   while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
			 //$num = count($data);
			   //echo $num;
					$result = $data;
					$str = implode(",", $result);
					$slice = explode(",", $str);
		 
					$UIN = $slice[0];
					$CountChange = $slice[1];
					
					
					//Remove invalid characters from input
					$UIN = preg_replace("/[^0-9]/","",$UIN);
					$CountChange = preg_replace("/[^0-9.]/","",$CountChange);
					
					$Data = ItemSearchUIN($UIN, $Owner);
					$Count = (int)$Data[0][3] + (int)$CountChange;
					
					$UPC = $Data[0][1];
					$Name = $Data[0][2];
					$Price = $Data[0][4];
					$Cost = $Data[0][5];
					
					
					
					$query = "UPDATE Inventory SET UPC = '$UPC', Name = '$Name', Count = '$CountChange', Price = '$Price', Cost = '$Cost', Category = '0' where UIN = '$UIN'";
					//echo $query."<BR>";
					mysqli_query($sqlServer,$query);
					$entryCount++;
		}
		echo "<script>alert('Record successfully uploaded.');window.location.href='viewData.php';</script>";
		//echo "$entryCount entries successfully imported to database.";
		mysqli_close($connect);
		}
	}
}
?>