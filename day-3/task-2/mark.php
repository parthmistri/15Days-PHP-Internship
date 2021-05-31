<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Student's Marksheet</title>    
</head>
<body>
<?php 
extract($_POST);  
if (isset($submit)){

$total= ($maths+$science+$gujarati+$social_science+$english);
$percentage=($total)/5;
echo "
<div class='container'>
    <h2 align='center'>$name Marksheet</h2> <br>
<table border='1' align='center'>
    <tr align='center'>
        <th>
            Name of Student
        </th>
        <td >$name</td>
    </tr>
    <tr align='center'>
       
    </tr>
    <tr align='center'>
        <th>
           Roll Number
        </th>
        <td>$roll</td>
    </tr>
    
    <tr>
        <td></td>
    </tr>
    <tr align='center'>
        <th>
            Name Of Subject
        </th>
        <th>
            Marks Out Of 100
        </th>
    </tr>
   
    <tr align='center'>
        <td>
            Science
        </td>
        <td>
            $science
        </td>
    </tr>
    <tr align='center'>
        <td>
            English
        </td>
        <td>
            $english
        </td>
    </tr>
     <tr align='center'>
        <td>
            Social Science
        </td>
        <td>
            $social_science
        </td>
    </tr>
    
     <tr align='center'>
        <td>
            Maths
        </td>
        <td>
            $maths
        </td>
    </tr>
    <tr align='center'>
        <td>
            Gujarati
        </td>
        <td>
            $gujarati
        </td>
    </tr>
    <tr><td></td></tr>   
    <tr align='center'>
        <th>
            Grand Total of Marks Obtained
        </th>
        <td>
            $total
        </td>
    </tr>
    <tr align='center'>
        <th colspan='2'>
            Percentage
        </th>
    </tr>
    <tr align='center'>
        <td colspan='2'>
            $percentage
        </td>
    </tr>
    <tr align='center'>
        <th colspan='2'>
            Grade
        </th>
    </tr>
    "; ?>
    <tr align='center'>
        <td colspan='2'>
            <?php
				     if ($percentage <= 100 && $percentage >= 90)  
				     {
				       $grade= "A";
				     }
				      elseif ($percentage <= 89 && $percentage >= 80 ) 
				     {
                        $grade="B";
				     }
				      elseif ($percentage <=79 && $percentage >= 50 ) 
				     {
                        $grade="C";
				     }
				     elseif ($percentage <= 49 && $percentage >= 35)
				     {
                        $grade="D";
				     }
				     elseif($percentage <= 34 && $percentage >= 00 ) 
				     {
                        $grade="FAIL";
                     } 
                     echo $grade;
                ?>
        </td>
    </tr>
<tr align='center'>
        <td colspan='2'>
           <?php
            if ($grade=="A") {
                echo "<p style='color:green;'>Distinction with Grade $grade</p>";
            }
            elseif ($grade=="B") {
                echo "<p style='color:violet;'>First class with Grade $grade</p>";
            }
            elseif ($grade=="C") {
                echo "<p style='color:orange;'>Second class with Grade $grade</p>";
            }
            elseif ($grade=="D") {
                echo "<p style='color:grey;'>Third class with Grade $grade</p>";
            }
            elseif ($grade=="FAIL") {
                echo "<p style='color:red;'>Sorry!! You are Fail the exam.</p>";
            }
           ?>
        </td>
    </tr>  
</table>
</div>
</body>
<?php
}
?>