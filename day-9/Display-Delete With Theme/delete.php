<?php  
	$connection	= mysqli_connect('localhost','root','','db_internship'); 

	$id	= $_GET['deleteid'];


	$q= mysqli_query($connection, "delete from tbl_student where st_id='{$id}'") or die(mysqli_error($connection));


	if ($q) {
		echo "<script>alert('Record Deleted');window.location='display.php</script>";
	}

	header("Location: delete-data.php");
exit();
?>