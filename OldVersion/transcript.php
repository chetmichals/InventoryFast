<html>
<head>
<title>Transcript</title>
</head>
<body>
<?php
	
	$user = 'cmichals';
	$pass = 'SQLPassword';
	$server = 'dboracle.eng.fau.edu/r11g';
	
	$sqlServer = oci_connect($user, $pass, $server) or die('Could not connect to SQL server');
	
	if (isset($_GET['IDNum']) == false)
	{
		print '<input type="text" class="inputtable" placeholder="Input Student ID" name="IDNum">';
		exit;
	}
	else
	{
		$StudentID = $_GET['IDNum'];
	}
	
	
	$qury = 'select COURSE.COURSE_ID, COURSE.COURSE_NAME, transcript.GRADE, COURSE.CREDIT_HOURS, GPAPointsCalc(transcript.GRADE) * COURSE.CREDIT_HOURS as "Quality_Points"  
				from transcript
				inner join SCHEDULE
				on SCHEDULE.SCHEDULE_ID = transcript.SCHEDULE_ID
				inner join COURSE
				on SCHEDULE.COURSE_ID = COURSE.COURSE_ID
				where transcript.STUDENT_ID = "'.$StudentID.'" 
				order by transcript.SCHEDULE_ID;';
	$parse = oci_parse($sqlServer, $qury);
	oci_execute($parse);
	
	print "<h1>$StudentID</h1><br>";
	
	print '<table border="1"><tr><th>COURSE ID</th><th>COURSE NAME</th><th>GRADE</th><th>CREDIT HOURS</th><th>QUALITY POINTS</th></tr>';
	while (($data = oci_fetch_array($parse, OCI_BOTH)) != FALSE); 
	{
		//Make Table
		print "";
		
		print "<tr><td>";
		echo  var_dump($data['COURSE_ID']);
		print "</td><td>";
		echo $data['COURSE_NAME'];
		print "</td><td>";
		echo $data['GRADE'];
		print "</td><td>";
		echo $data['CREDIT_HOURS'];
		print "</td><td>";
		echo $data['Quality_Points'];
		print "</td></tr>";
		
	}
	print "</table>";
	
?>
</body>
</html>