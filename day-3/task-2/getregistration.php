<html>
<body>
<h1>
Your Name is <?php echo $_GET["uname"]; ?>.<br>
Your Email address is <?php echo $_GET["email"];?>.<br>
Your Mobile Number is <?php echo $_GET['phone'];?>.
<br>
<?php
$gdr = $_GET["gender"];

if($gdr == "Male")
{
    echo("Your Gender is Male.");
}
else if ($gdr == "Female")
{
    echo("Your Gender is Female.");
}
else{
	echo("Select One Option.");
}
?>
<br>
Your Password is <?php echo $_GET["pwd"];
?>.
</h1>
</body>
</html>