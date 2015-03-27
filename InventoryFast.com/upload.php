<?php
include ('navbar.php');
?>
<html>
<head>

<link rel="stylesheet" href="css/skel-noscript.css" />
<link rel="stylesheet" href="css/style-desktop.css" />

<style type ="text/css">
	body {background:url(logoutpic.jpg);
    background-attachment:fixed;
    background-position:top;
	background-repeat:no-repeat;
    background-size:cover;
	}
	
	button{background-color:#cdecda;}
	
	th{background-color:#cdecda;
	font-weight:bold;}
	
	.me{font-size:9px}	
	
</style>
</head>
<body>
<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1>inventoryFast</h1>
							<nav id="nav">
							<?php printNavBar(1); ?>
                            </nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
 <div style="margin-left:40%; font-size:200%;">
<form action="import_file.php" method="post"
        enctype="multipart/form-data">

<input type="file" name="file" id="file" accept=".csv"><br><br>
Import Type<br>
<input type = 'Radio' Name ='uploadType' value= 'new' checked="checked">New Items<br>
<input type = 'Radio' Name ='uploadType' value= 'update'>Update Items<br>
<input type = 'Radio' Name ='uploadType' value= 'count'>Change Count<br>
<input type="submit" name="submit" value="Submit">
</form>
 </div>
<div style = "margin; padding: 10px;"> How to use: We can process 3 types of item lists. A list of items to be added, a list of items you want to edit, and a list of items you wish to adjust the counts of. The files must be in the CSV format, and templates for each are provided below. Please leave the first line of the templates alone and edit the lines after.<br>
<br><br>
<ul style = "list-style-type:square;padding: 20px;">
<li><a href="./UploadTemplates/NewItemTemplate.csv">New Item Template</a></li>
<li><a href="./UploadTemplates/UpdateItemTemplate.csv">Update Item Template</a></li>
<li><a href="./UploadTemplates/ChangeCountTemplate.csv">Change Count Template</a></li></ul></div>
</body>
</html>