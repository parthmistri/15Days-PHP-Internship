<?php
$connection	= mysqli_connect('localhost','root','','db_internship'); 

if ($_POST) {
	$name = $_POST['text1'];
	$gender = $_POST['text2'];
	$mobile = $_POST['text3'];


	 $q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die("Error".mysqli_error($connection));
	 if ($q) {
	 	echo "<script>alert{'Record Add'}</script>";
	 }
}
?>
<!DOCTYPE html>
<html>

<body>
	<form method="post">
		Name : <input type="text" name="text1"/>
		Gender : <select name="text2">
			<option>Male</option>
			<option>Female</option>
		</select>
		Mobile No :<input type="number" name="text3"/>
		<input type="submit" name="submit">
	</form>
</body>
</html>