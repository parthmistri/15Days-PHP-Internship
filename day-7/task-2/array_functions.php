<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body style="color: green; background-color: lightblue;">
	<?php
//array function
$array_functions=array(60,7,65,45,11.03,5.6,'PHP','C++','java');
$cnt=array(21,82,43,'php','c','android','python','perl','java');
//counting array elements using count functions
echo "Total array elements are: ".count($array_functions)."<br>";
//array_count_values()
echo "<br>Using Count_values:<br>";
foreach (array_count_values($cnt) as $key => $value) {
    echo "Key $key and value is $value <br>";
}
//sum of array elements using array_sum()
echo "<br>Sum of array elements is: ".array_sum($array_functions)."<br>";
//array product using array_product()
echo "<br>Product of array is: ".array_product($array_functions)."<br>";
//reversing array using array_reverse()
echo "<br> reversed array is: ";
print_r(array_reverse($array_functions))."<br>";

//in_array() for element searching
echo "<br><br>in_array function for element searching in array: ";
$temp=in_array('PHP',$array_functions);
if ($temp==1) {
    echo "element is in array";
    
}
else {
    echo "element is not in array";
}

//array_rand()
echo "<br><br>Array Random function index: ".array_rand($array_functions);

//array_unique()
echo "<br><br>array_unique function: ";
print_r(array_unique($array_functions));

//array_merge()
echo "<br><br>Two Merged array is: ";
print_r(array_merge($cnt,$array_functions));

//array_search()
$c=array('c','c++','php');
$temp1=array_search('php',$c);
echo "<br><br>Array_search() function: ".$temp1;

//range()
echo "<br><br>Creating new array using range() function:  ";
print_r(range('a','f'));

//sort
$a=array(80,10,20,40,50);
echo "<br><br>Sorted array using sort() function:  ";
sort($a);
print_r($a);


//rssort()
echo "<br><br>Reverse Sorted array using rsort() function:  ";
rsort($a);
print_r($a);

//asort()
echo "<br><br>Sorted array using asort() function:  ";
asort($a);
print_r($a);

//shuffle()
echo "<br><br>shuffle array using shuffle() function:  ";
shuffle($array_functions);
foreach ($array_functions as $key => $value) {
    echo " ".$value;
}

//array_key_exists()

$arr=array('PHP'=>'web Development','C'=>'Programming','C++'=>'CPP');
echo "<br><br>Key searching using array_key_exists: ".array_key_exists('PHP',$arr);

//array_change_key_case()
echo "<br><br>changing case of keys using array_change_key_case(): ";
print_r(array_change_key_case($arr,CASE_UPPER));

//array_combine()
echo "<br><br>combining array using array_combine function: ";
print_r(array_combine($array_functions,$cnt));


//end()
echo "<br><br>Element At end of Array is: ".end($array_functions);

//compact()
echo "<br><br>creating array using variable and values: ";
$name="ParthMistri";
$sub="PHP";
print_r(compact("name","sub"));

//array_flip()
echo "<br><br>Flipping all key-values using array_flip() function: ";
print_r(array_flip($arr));

//array_diff()
$arr1=array('PHP'=>'web Development','C++'=>'CPP');
echo "<br><br>Difference Between Two Associative Array is: ";
print_r(array_diff($arr,$arr1));

//array_intersect
echo "<br><br>Common elements Between Two Associative Array is: ";
print_r(array_intersect($arr,$arr1));

//array_push()
echo "<br><br>Pushing New Element at end of numerical array using array_push(): ";
array_push($cnt,"Hi","Android");
print_r($cnt);

//array_pop()
echo "<br><br>Poping Element from end of numerical array using array_push(): ";
array_pop($array_functions);
print_r($array_functions);

//explode()
echo "<br><br>String to array using explode()";
$p="Parth Mistri";
print_r(explode(" ",$p));

//implode
echo "<br><br>Array to String using implode(): ";
$abc=array("Parth","Mistri");
$pqr=implode(" ",$abc);
echo "Using Implode(): $pqr";
?>
</body>
</html>