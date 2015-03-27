<?php 
include ('navbar.php');
$Username = $_COOKIE["user_id"];
include('./include/DatabaseAbstractionLayer.php');
if (isset($_POST[submit]))
{
SetAPIKey($Username);
}
$APIKey = checkAPIKeySet($Username);
if ($APIKey == -1)
{
$APIKey = SetAPIKey($Username);
}
?>
<html>
<head>

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
	
	/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-o-box-sizing: border-box;
		-ms-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Container */

	body {
		min-width: 1200px;

	}

	.container {
		width: 1200px;
		margin-left: auto;
		margin-right: auto;
	}

	/* Modifiers */
	
		.container.small {
			width: 900px;
		}

		.container.big {
			width: 100%;
			max-width: 1500px;
			min-width: 1200px;
		}

/* Grid */

	/* Cells */

		.\31 2u { width: 100% }
		.\31 1u { width: 91.6666666667% }
		.\31 0u { width: 83.3333333333% }
		.\39 u { width: 75% }
		.\38 u { width: 66.6666666667% }
		.\37 u { width: 58.3333333333% }
		.\36 u { width: 50% }
		.\35 u { width: 41.6666666667% }
		.\34 u { width: 33.3333333333% }
		.\33 u { width: 25% }
		.\32 u { width: 16.6666666667% }
		.\31 u { width: 8.3333333333% }
		.\-11u { margin-left: 91.6666666667% }
		.\-10u { margin-left: 83.3333333333% }
		.\-9u { margin-left: 75% }
		.\-8u { margin-left: 66.6666666667% }
		.\-7u { margin-left: 58.3333333333% }
		.\-6u { margin-left: 50% }
		.\-5u { margin-left: 41.6666666667% }
		.\-4u { margin-left: 33.3333333333% }
		.\-3u { margin-left: 25% }
		.\-2u { margin-left: 16.6666666667% }
		.\-1u { margin-left: 8.3333333333% }

		.row > * {
			padding: 40px 0 0 40px;
			float: left;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-o-box-sizing: border-box;
			-ms-box-sizing: border-box;
			box-sizing: border-box;
			
		}

		.row + .row > * {
			padding-top: 40px;
		}

		.row {
			margin-left: -40px;
		}

	/* Rows */

		.row:after {
			content: '';
			display: block;
			clear: both;
			height: 0;
			
		}

		.row:first-child > * {
			padding-top: 0;
		}

		.row > * {
			padding-top: 0;
		}

		/* Modifiers */

			/* Flush */

				.row.flush {
					margin-left: 0;
				}

				.row.flush > * {
					padding: 0 !important;
				}

			/* Quarter */

				.row.quarter > * {
					padding: 10px 0 0 10px;
				}

				.row.quarter + .row.quarter > * {
					padding-top: 10px;
				}

				.row.quarter {
					margin-left: -10px;
				}

			/* Half */

				.row.half > * {
					padding: 20px 0 0 20px;
				}

				.row.half + .row.half > * {
					padding-top: 20px;
				}

				.row.half {
					margin-left: -20px;
				}

			/* One and (a) Half */

				.row.oneandhalf > * {
					padding: 60px 0 0 60px;
				}

				.row.oneandhalf + .row.oneandhalf > * {
					padding-top: 60px;
				}

				.row.oneandhalf {
					margin-left: -60px;
				}

			/* Double */

				.row.double > * {
					padding: 80px 0 0 80px;
				}

				.row.double + .row.double > * {
					padding-top: 80px;
				}

				.row.double {
					margin-left: -80px;
				}
	
</style>
</head>
<body>
<div id="header-wrapper" style = "margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1 style = "margin: 0; padding: 0; border: 0;">inventoryFast</h1>
							<nav id="nav">
							<?php printNavBar(1); ?>
                            </nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
The API for Inventory Fast allows for basic access to the information hosted on our servesr. The interface for the API is found at http://inventoryfast.com/API/api.php, and is supplied in the JSON format. 
<br><br>
In order to use the API, you will need to provide an action, APIKey, and UIN arguments, in addition to any required arguments for each Action type. For example, to get access to the item info for the item with the UIN of 200, you would use the following API call:
<br> <i>http://inventoryfast.com/API/api.php?action=get_item_info&UIN=200&APIKey=&ltYour API Key goes here&gt</i>
<br><br>
<b>Actions supported:</b>
<ul><li><b>get_item_info</b>: Returns the UPC, Item Name, Item Count, Price, and Cost of the specified UIN</li>
<li><b>update_item</b>: Allows you to update any of the fields of an item</li>
<li><b>change_count</b>: Allows for net adjustments of an item's count.</li>
<br>
<b>get_item_info arguments:</b>
<ul><li>UIN (Required): The UIN Identification Number to the item you want the details for</li></ul>
<br>
<b>update_item arguments:</b>
<ul>
<li>UIN (Required): The UIN Identification Number to the item you want to modify.</li>
<li>UPC (Optional): The new UPC you want to change the item to.</li>
<li>Name (Optional): The new Name you want to change the item to. </li>
<li>Count (Optional): The new Count you want to change the item to.</li>
<li>Price (Optional): The new Price you want to change the item to.</li>
<li>Cost (Optional): The new Cost you want to change the item to.</li>
</ul>
<b>change_count arguments:</b>
<ul>
<li>UIN (Required): The UIN Identification Number to the item you want to modify.</li>
<li>CountChange (Required): How much you wish to adjust the count. Positive numbers will increase count, negative will decrease count. </li>
</ul>
</ul>

<?php
print "Your current API Key is: ".$APIKey;
?>
<br>
<form method="post"  action="apiInfo.php">
  <button type="submit" name = "submit" class="myButton" value = "submit">Get New Key</button>
</form>
