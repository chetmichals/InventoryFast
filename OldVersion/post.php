<html>
<script>
function add_fields() {
   var d = document.getElementById("content");
  
  d.innerHTML += "<br /><form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'><span class='txt'>Item Name: <input type='text'style='width:300px;'value='' /> <span class='txt'> Count: <input type='number' style='width:48px'  value='0' /><span class='txt'> Cost: <input type='text'style='width:48px;'value='$0.00' /><small>(USD)</small</span>";
  
}
</script>
<?php
if(!isset($_POST['send']))
{
?>
<body>


      
<div id="room_fileds">
<img src="header.jpg" width="728" height="90" alt=""/>
<div class='label'></div><hr></hr>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<a href="#" onclick="add_fields();" class="additem">+</a>

<div id="content">
            
<span class="txt">Item Name:</span>
<input type="text" style="width:300px;" name="item" value="<?php echo $itemval;?>" />                

<span class="txt"> Count:</span> <input type="number" style="width:48px;" name="count" value="<?php echo $countval;?>" />

<span class="txt"> Cost:</span> <input type="text" style="width:48px;" name="cost" value="<?php echo $costval;?>"/><small>(USD)</small>

</div>
</div>
<br>
<form name="update" action="" method="post">
<input type="hidden" name="update" value="1" />
<input type = "submit" name = "send" value = "SEND">
</form>

<form action="divide.php">
<input type="submit" class="myButton" value="View/Print">
</form>


<form action="emptymain.php">
<input type="submit" class="myButton" value="Clear All">
</form>


</body>
	
<?php
}
else
{
$myInputs = $_POST["UPC"];
foreach ($myInputs as $eachInput) {
     echo $eachInput . "<br>";
}
}
?>
</html>