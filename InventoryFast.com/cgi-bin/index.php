<?php 
		if( isset($_COOKIE["item"]))	
	   {
	     $itemval = $_COOKIE["item"];
	   }
	   
	   if( isset($_COOKIE["items"]))	
	   {
	     $x = $_COOKIE["items"];
	   }
	   
	   
   	if( isset($_COOKIE["count"]))	
	   {
	     $countval = $_COOKIE["count"];
	   }
	else	
	   {
	      $countval=0;
	   }   
	
	if( isset($_COOKIE["cost"]))	
	   {
	     $cost = $_COOKIE["cost"];
	   }
	else	
	   {
	      $costval="$0.00";
	   }   
	if ( ! empty($_POST["item"]) )
	   {
	    $itemval=$_POST["item"];
	   }
	if ( ! empty($_POST["count"]) )
	   {
	    $countval=$_POST["count"];
	   }
	if ( ! empty($_POST["cost"]) )
	   {
	    $costval=$_POST["cost"];
	   }
	 if ( ! empty($_POST["items"]) )
	   {
	    $x=$_POST["items"];
		}
	
	setcookie("item", $itemval, time()+30000); 
	setcookie("count", $countval, time()+30000);
	setcookie("cost", $costval, time()+30000);
	
	?>


<!DOCTYPE html>

<html>
<head>

<meta charset=utf-8 />
<title>Inventory</title>

<style type="text/css">
.additem {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #a8e314), color-stop(1, #90b839) );
	background:-moz-linear-gradient( center top, #a8e314 5%, #90b839 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a8e314', endColorstr='#90b839');
	background-color:#a8e314;
	-webkit-border-top-left-radius:42px;
	-moz-border-radius-topleft:42px;
	border-top-left-radius:42px;
	-webkit-border-top-right-radius:42px;
	-moz-border-radius-topright:42px;
	border-top-right-radius:42px;
	-webkit-border-bottom-right-radius:42px;
	-moz-border-radius-bottomright:42px;
	border-bottom-right-radius:42px;
	-webkit-border-bottom-left-radius:42px;
	-moz-border-radius-bottomleft:42px;
	border-bottom-left-radius:42px;
	text-indent:-1.5px;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:normal;
	font-style:normal;
	height:20px;
	line-height:20px;
	width:20px;
	text-decoration:none;
	text-align:center;
	text-shadow:3px 1px 0px #7f9655;
}
.additem:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #90b839), color-stop(1, #a8e314) );
	background:-moz-linear-gradient( center top, #90b839 5%, #a8e314 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#90b839', endColorstr='#a8e314');
	background-color:#90b839;
}.additem:active {
	position:relative;
	top:1px;
}
.myButton {
	-moz-box-shadow:inset 0px 0px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 0px 0px 0px #bbdaf7;
	box-shadow:inset 0px 0px 0px 0px #bbdaf7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:2px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:0px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}

form{ display: inline-block;
 }
 

content {
  width: 600px;
	height: 120px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
}
</style>



<script>
function add_fields() {
   var d = document.getElementById("content");
  
  d.innerHTML += "<br /><form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'><span>Item Name: <input type='text'style='width:300px;'value='<?php echo $itemval;?>' />  Count: <input type='number' style='width:48px'  value='<?php echo $countval;?>' /><span>  Cost: <input type='text'style='width:48px;'value='<?php echo $costval;?>' /><small>(USD)</small</span>";
  
}

</script>
</head>
<body>


      
<div id="room_fileds">
<img src="header.jpg" width="728" height="90" alt=""/>
<div class='label'></div><hr></hr>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<a href="#" onclick="add_fields();" class="additem">+</a>

<div id="content">
            
<span>Item Name: <input type="text" style="width:300px;" name="item" value="<?php echo $itemval;?>" />                

<span> Count: <input type="number" style="width:48px;" name="count" value="<?php echo $countval;?>" /></span>

<span> Cost: <input type="text" style="width:48px;" name="cost" value="<?php echo $costval;?>"/><small>(USD)</small>
</span>
</div>
</div>
<br>
<form name="update" action="" method="post">
<input type="hidden" name="update" value="1" />
<input type="submit" name="Update" class="myButton" value="Save" />
</form>

<form action="divide.php">
<input type="submit" class="myButton" value="View/Print">
</form>


<form action="emptymain.php">
<input type="submit" class="myButton" value="Clear All">
</form>

<form action="print.php" target="_top">
<input type="submit" class="myButton" value="Close Window">
</form>



</body>
</html>