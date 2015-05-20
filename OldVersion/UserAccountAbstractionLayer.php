<?php
	
	require_once('DataBaseLogIn.php');
	
function AddUser($UserName, $Password, $Name, $Email)
{
	$sqlServer = connectToDotabase();	
	$query = "INSERT INTO UserAccounts (`UserName`, `Password`, `Name`, `Email`, `Account`) VALUES ('$UserName', MD5('$Password'), '$Name', '$Email', '$UserName')";
	mysqli_query($sqlServer,$query);
	mysqli_close($sqlServer);
	//Return if good or not
	
}

//Returns false if UserName is free, and true if UserName exists
function CheckUserNameExist($UserName)
{
	$sqlServer = connectToDotabase();
	$query = "SELECT * FROM UserAccounts WHERE `UserName` = '$UserName'";
	$data = mysqli_query($sqlServer,$query);
	$rowNumber = mysqli_num_rows($data);
	mysqli_close($sqlServer);
	if ($rowNumber == 0)
	{
		return false;
	}
	else
	{
		return true;
	}
	
}
//Returns true if Log In Information is correct, false if not.
function ValidateLogIn($UserName, $Password)
{
	$sqlServer = connectToDotabase();
	$query = "SELECT * FROM UserAccounts WHERE `UserName` = '$UserName' AND Password = MD5('$Password')";
	//echo $query."<BR>";
	$data = mysqli_query($sqlServer,$query);
	$rowNumber = mysqli_num_rows($data);
	mysqli_close($sqlServer);
	if ($rowNumber == 0)
	{
		return false;
	}
	else
	{
		return true;
	}
	
}

//Make sure to email user if 
function ChangeName($UserName, $Name)
{
	$sqlServer = connectToDotabase();
	$query = "UPDATE UserAccounts SET Name = '$Name' where UserName = '$UserName'";
	mysqli_query($sqlServer,$query);
	mysqli_close($sqlServer);
	//Return if completed right
}
//Pass in the new password you want to store
function ChangePassword($UserName, $Password)
{
	$sqlServer = connectToDotabase();
	$query = "UPDATE UserAccounts SET Password = MD5('$Password') where UserName = '$UserName'";
	mysqli_query($sqlServer,$query);
	mysqli_close($sqlServer);
	//Return if completed right
}

function ChangeEmail($Username, $Email)
{
	$sqlServer = connectToDotabase();
	$query = "UPDATE UserAccounts SET Email = '$Email' where UserName = '$UserName'";
	mysqli_query($sqlServer,$query);
	mysqli_close($sqlServer);
	//Return if completed right
}

function GetAccountInfo($Username)
{
	$sqlServer = connectToDotabase();
	$query = "SELECT * FROM UserAccounts where UserName = '$Username'";
	//echo $query;
	$data = mysqli_query($sqlServer,$query);
    	while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
    	{
        	$returnData [] = $row;
    	}
    
	mysqli_close($sqlServer);
	return $returnData;
}

?>