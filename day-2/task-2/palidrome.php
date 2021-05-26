 <!DOCTYPE html>
<html>
<head>
	<title>
		Task-2 : Palidrome
	</title>
</head>
<body>
	<h2>Palidrome Program in PHP.</h2><br>	
	<?php 
	$a = 'Radar';
	$na = strtolower($a);
	$rev = strrev($na);
	if ($na == $rev){
		echo "$a is Palidrome";
	}
	else{
		echo "$a is not Palidrome";
	}
 ?>
</body>
</html>
