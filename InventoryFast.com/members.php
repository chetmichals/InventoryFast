<?php

session_start();
if($_SESSION['username'] || $_SESSION['password'])
{
	$username = $_SESSION['username'];
	echo "You are logged in as ".$_SESSION['username'];
	echo "<br><br><a href='logout.php'>LogOut</a>";
	echo "<title>$username | Tutorial Guy</title>";
}
else
{
	header("header:index.php?notify=Oops! Something went wrong.");
}

?>