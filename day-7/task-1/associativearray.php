<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>
</head>
<body>
    <?php
echo "<h2>Demonstrate Associative Array<br/></h2>";
//associative array 
$pq=array(
    "Php"=> "Web Development",
    "c"=> "Programming",
    "java"=>"Oracle",
    20=>40,
    "Pen"=>"Pencil"
);
//printing array
echo "Printing specific value using echo:-<br/>";
echo "Php is used for ".$pq["Php"];
echo "<br/><b>".$pq["Pen"]."</b> is used to write on <b>Paper</b>.";
echo "<br/>";
//printing whole array using for each loop
echo "<br/>printing whole array using for each loop :<br/>";
echo "<table border='1'>";
foreach ($pq as $key=>$value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br/>";
echo "Using Print_r:-";
echo "<pre>";
print_r($pq);
echo"</pre>";

?>
</body>
</html>