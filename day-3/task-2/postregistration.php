<html>
<body>
<h1>
Your Name is <?php echo $_POST["uname"]; ?>.<br>
Your Email address is <?php echo $_POST["email"];?>.<br>
Your Mobile Number is <?php echo $_POST['phone'];?>.
<br>
<?php
$gdr = $_POST["gender"];

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
Your Password is <?php echo $_POST["pwd"];
?>.
</h1>
</body>
</html>