<?php

	include 'DatabaseAbstractionLayer.php';
	include 'UserAccountAbstractionLayer.php';
	
	AddUser("TEST", "password", "Test Account", "email@gmail.com");
	echo "added user TEST <BR>";
	
	$validate = ValidateLogIn("TEST", "password");
	echo "Trying to log in as TEST. Log In Status: ".$validate."<br>";
	
	$validate = ValidateLogIn("TEST2", "password");
	echo "Trying to log in as TEST2. Log In Status: ".$validate."<br>";
	
	AddToDataBase(10, "Mario Game", 3, 2.3, 1.999, 0, "TEST");
	AddToDataBase(11, "Mario Game2", 3, 2.3, 1.999, 0, "TEST");
	AddToDataBase(12, "Kirby Game", 3, 2.3, 1.999, 0, "TEST");
	
	echo "Added several items to database<br>";
	echo "Trying to print items from database<br>";
	$results = GetResultsBasic("TEST",0,25);
	
	foreach ($results as $value) 
	{
		echo $value[0]." ".$value[1]." ".$value[2]."<br>";
	}
	echo "Now doing Text Search<br>";
	$results = ItemSearchName("Mario","TEST");
	
	foreach ($results as $value) 
	{
		echo $value[0]." ".$value[1]." ".$value[2]."<br>";
	}
	
	echo "Now doing UIN Search<br>";
	$results = ItemSearchUIN(8,"TEST");
	
	foreach ($results as $value) 
	{
		echo $value[0]." ".$value[1]." ".$value[2]."<br>";
	}
	
	echo "Now doing UPC Search<BR>";
	$results = ItemSearchUPC(12,"TEST");
	
	foreach ($results as $value) 
	{
		echo $value[0]." ".$value[1]." ".$value[2]."<br>";
		$NewUIN = $value[0] - 1;
	}
	
	echo "Now testing update function <br>";
	
	UpdateEntry($NewUIN, 32, "Mario Game 2: In Space", 0, 40, 30, 3);
	
	echo "Checking if update worked<br>";
	$results = ItemSearchUIN($NewUIN,"TEST");
	echo "<table>";
	foreach ($results as $value) 
	{
		echo "<tr>".$value[0]." ".$value[1]." ".$value[2]."</tr>";
	}
	echo "</table>";
	
	echo "Testing in an account with name TEST exsists<BR>";
	if (CheckUserNameExist("TEST") == TRUE)
	{
	echo "Yes<BR>";
	}	
	else
	{
	echo "NO<BR>";
	}
	
	echo "Testing in an account with name NOONE exsists<BR>";
	if (CheckUserNameExist("NOONE") == TRUE)
	{
	echo "Yes<BR>";
	}	
	else
	{
	echo "NO<BR>";
	}
	echo "Changeing Name<br>";
	ChangeName("TEST","Changed");
	echo "Changing Email<br>";
	ChangeEmail("TEST","new@gmail.com");
	echo "Changing Password<br>";
	ChangePassword("TEST","password");
	$results = GetAccountInfo("TEST");
	foreach ($results as $value) 
	{
	echo $value[0]." ".$value[1]." ".$value[2]." ".$value[3]."<br>";
	}
	
?>