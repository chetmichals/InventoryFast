<?php



	function connectToDotabase()
	{

		//Credentials to MySQL server

		$server = 'localhost';

		$user = 'nws990_InvFast';

		$pass = 'InventoryFast';

		$db = 'nws990_InventoryFast';

		

		//Connects to MySQL Server

		$sqlServer = mysqli_connect($server, $user, $pass, $db) or die('Error: Could not connect to Database' . mysql_error());
		return $sqlServer;
	
	}

?>