<?php

function printNavBar($LoggedIn)
{
	if ($LoggedIn == 0)
	{
		print '<a href="index.php">Homepage</a>
								<a href="login.php">Login</a>
								<a href="register.php">Register</a>
								
								
								<a href="privacypolicy.php">Privacy Policy</a>
								<a href="contactus.php">Contact Us</a>';
	}
	else
	{
		print '<a href="navPage.php">Main Menu</a>
		<a href="privacypolicy.php">Privacy Policy</a>
		<a href="contactus.php">Contact Us</a>
		<a href="logout.php">Logout</a>';
	}
	
	
}

?>
