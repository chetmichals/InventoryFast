<?php



	function connectToDotabase()
	{

		//Credentials to MySQL server

		$server = 'inventoryfast.ccqgekpags8x.us-west-2.rds.amazonaws.com';

		$user = 'InventoryFast';

		$pass = 'InventoryFast';

		$db = 'InventoryFast';

		

		//Connects to MySQL Server

		$sqlServer = mysqli_connect($server, $user, $pass, $db) or die('Error: Could not connect to Database' . mysql_error());
		return $sqlServer;
	
	}

?>