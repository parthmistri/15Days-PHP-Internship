<!DOCTYPE html>
<html>
<head>
	<title>
		Task-2 : LeapYear
	</title>
</head>
<body>
	<h2>Leap year Program in PHP.</h2><br>	
	<?php
	$p = 2060;
	if ($p % 400 == 0) {
		echo "$p is a Leap Year";
	}
	elseif ($p % 100 == 0) {
		echo "$p is not a Leap Year";
	}
	elseif ($p % 4 == 0) {
		echo "$p is a Leap Year";
	}
	else{
		echo "$p is not a Leap Year";
	}

?>
</body>
</html>
