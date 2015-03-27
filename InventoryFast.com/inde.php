<?php

if(isset($_GET['notify']))

{

	echo $_GET['notify'];

}
?>

<?php


session_start();

if(isset($_SESSION['username']) || isset($_SESSION['password']))

{

	header("location:members.php");

}

else
{
echo "<form action='login.php' method='POST'>

<p><input type='text' name='username' placeholder='Username'>

<p><input type='password' name='password' placeholder='Password'>

<p><input type='submit' name='login' value='Log In'>
</form>";

}

?>

<br/>
<a href="register.php">Register</a>

<p><a href="forgot.php">Forgor Password or Username?</a>