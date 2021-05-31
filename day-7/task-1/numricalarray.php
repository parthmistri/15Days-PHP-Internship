<!DOCTYPE html>
<html>
<head>
	<title>Numerical Array</title>
</head>
<body>
	<?php
echo "<h3>Demonstrate Numerical Array<br/></h3>";
//numerical array 
$pq=array("PHP","JAVA",5,16,45.70,112.54,"ANDROID");
//printing array
echo "Printing specific value using echo :<br/>";
echo $pq[6];
//Printing whole array using for loop
echo "<br/>Printing Whole Array using for loop :";
echo "<ul>";
for ($i=0; $i <count($pq) ; $i++) { 
    echo "<li>";
    echo $pq[$i];
    echo "</li>";
}
echo "</ul>";
//printing whole array using for each loop
echo "Printing whole array using for each loop :<br/>";
echo "<ol>";
foreach ($pq as $val) {
    echo "<li>";
    echo $val;
    echo "</li>";
}
echo "</ol>";
echo "Using Print_r:-";
echo "<pre>";
print_r($pq);
echo"</pre>";

?>
</body>
</html>
