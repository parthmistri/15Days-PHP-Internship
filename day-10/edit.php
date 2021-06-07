<?php	
$connection	= mysqli_connect("localhost","root","","db_internship");
if (!isset($_GET['id']) || empty($_GET['id'])){
		header("location:display.php");	
	}

$editid =$_GET['id'];
//select database from table
$editq = mysqli_query($connection, "select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
// print_r($editdata);


if($_POST){
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];

	$uq = mysqli_query($connection, "update tbl_user set user_name='{$text1}', user_gender='{$text2}', user_mobile='{$text3}' where user_id='{$editid}'") or die(mysqli_error($connection));

		if ($uq) {
			echo "<script>alert('Record Updated'); window.location='display.php';</script>";
		}

}
?>


<html>

<body>
	<form method="post">
		Name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="text1"/>
		<br>


		Gender : 
		<input type="radio" <?php if($editdata['user_gender']=="Male") echo "checked"; ?> value="Male" name="text2"/>Male
		
		<input type="radio" <?php if($editdata['user_gender']=="Female") echo "checked"; ?> value="Female" name="text2"/>Female
		
		<br>
		
		Mobile : 
		
		<input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="text3"/>
		<br>
		
		<input type="submit" />
		
	</form>
</body>
</html>