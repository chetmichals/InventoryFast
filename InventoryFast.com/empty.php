<?php
 if( isset($_COOKIE["item"]))	
	   {
	setcookie("item", $knival, time()-99999999);
	header('Location: print.php');
	   }
	 	
 if( isset($_COOKIE["count"]))	
	   {
	setcookie("count", $countval, time()-99999999); 
	  header('Location: print.php');
	   }
    
	if( isset($_COOKIE["cost"]))	
	   {
	setcookie("cost", $pasval, time()-99999999);
	  header('Location: print.php');
	   }
	 
	 
?>