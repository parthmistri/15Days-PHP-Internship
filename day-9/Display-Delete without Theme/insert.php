<?php
$connection	= mysqli_connect('localhost','root','','db_internship'); 

if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$date = $_POST['txt3'];
	$email = $_POST['txt4'];
	$mobile = $_POST['txt5'];
	$address = $_POST['txt6'];
	$password = $_POST['txt7'];
	$area = $_POST['txt8'];
	$pincode = $_POST['txt9'];
	$bloodgroup = $_POST['txt10'];
	


	 $qry = mysqli_query($connection,"insert into tbl_student(st_name, st_gender, st_dob, st_email, st_mobile, st_address, st_password, st_area,	st_pincode,	st_bloodgroup) values('{$name}','{$gender}','{$date}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$pincode}','{$bloodgroup}')") or die("Error".mysqli_error($connection));
	 if ($qry) {
	 	echo "<script>alert{'Record Added'}</script>";
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Insert Operation
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form class="formgroup" method="post">
		<table align="center">
			<tr>
				<td>Name :</td>
				<td><input class="form-control" type="text" name="txt1"/></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td><select name="txt2" class="form-control">
			<option>Select Gender</option>
			<option>Male</option>
			<option>Female</option>
		</select></td>
			</tr>
			<tr>
				<td>Date of Birth :</td>
				<td><input class="form-control" type="date" name="txt3"></td>
			</tr>
			<tr>
				<td>EMail :</td>
				<td><input class="form-control" type="email" name="txt4"></td>
			</tr>
		
	 	<tr>
	 		<td>Mobile No :</td>
	 		<td><input class="form-control" type="number" name="txt5"/></td>
	 	</tr>
	 	<tr>
	 		<td>Address :</td>
	 		<td><textarea class="form-control " rows= "2" cols="5" name="txt6" ></textarea></td>
	 	</tr>
	 	<tr>
	 		<td>Password :</td>
	 		<td><input class="form-control" type="password" name="txt7"></td>
	 	</tr>
		<tr>
			<td>Area :</td>
		    <td><select class="form-control" name="txt8">
			<option>Select Area</option>
			<option>Thaltej</option>
			<option>Memnagar</option>
			<option>Ghatlodia</option>
			<option>Sola</option>
			<option>Maninagar</option>
			</select></td>
	 	</tr>
	 	<tr>
	 		<td>Pincode :</td>
	 		<td><input class="form-control" type="num" name="txt9"></td>
	 	</tr>
	 	<tr>
	 		<td>Blood Group</td>
	 		<td><select  class="form-control"name="txt10">
			<option>Select BloodGroup</option>
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>o+</option>
			<option>o-</option>
			<option>AB+</option>
			<option>AB-</option>
			</select></td>
	 	</tr>
	 	<tr><td><input class="form-control"  type="submit" name="Submit"></td>
	 	<td><a href="display.php">Display Record</a></td></tr>
		
		</table>
	</form>
</body>
</html>
