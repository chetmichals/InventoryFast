<?php
 if( isset($_COOKIE["item"]))	
	   {
	setcookie("item", $itemval, time()-99999999);
	$itemval=0;
	header('Location: index.php');
	   }
	 	
 if( isset($_COOKIE["count"]))	
	   {
	setcookie("count", $countval, time()-99999999); 
	$countval=0;
	header('Location: index.php');
	   }
    
	if( isset($_COOKIE["cost"]))	
	   {
	setcookie("cost", $costval, time()-99999999);
	$costval=0;	
	header('Location: index.php');
	   }
	 
	 
?>