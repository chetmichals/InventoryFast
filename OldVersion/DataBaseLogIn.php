<?php

	function connectToDotabase()
	{
		//Credentials to MySQL server
		$user = 'username';
		$pass = 'password';
		$db = 'ProgConceptTest';
		
		//Connects to MySQL Server
		$sqlServer = mysqli_connect('localhost', $user, $pass, $db) or die('Error: Could not connect to Database' . mysql_error());
		return $sqlServer;
	}
?>