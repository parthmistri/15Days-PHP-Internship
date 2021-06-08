<?php  
	$connection	= mysqli_connect('localhost','root','','db_internship'); 

	$updateid =$_GET['id'];

	$editq = mysqli_query($connection, "select * from tbl_student where st_id='{$updateid}'") or die(mysqli_error($connection));
	$editdata = mysqli_fetch_array($editq);


	/*$q= mysqli_query($connection, "delete from tbl_student where st_id='{$id}'") or die(mysqli_error($connection));*/


	if($_POST){
	$text1 = $_POST['text1'];
	$text2 = $_POST['text2'];
	$text3 = $_POST['text3'];
	$text4 = $_POST['text4'];
	$text5 = $_POST['text5'];
	$text6 = $_POST['text6'];
	$text7 = $_POST['text7'];
	$text8 = $_POST['text8'];
	$text9 = $_POST['text9'];
	$text10 = $_POST['text10'];
	


	$uq = mysqli_query($connection, "update tbl_student set st_name='{$text1}', st_gender='{$text2}', 	st_dob='{$text3}', 	st_email='{$text4}', st_mobile='{$text5}', st_address='$text6', st_password='{$text7}', st_area='{$text8}', st_pincode='{$text9}', st_bloodgroup='{$text10}'   where st_id='{$updateid}'") or die(mysqli_error($connection));

		if ($uq) {
			echo "<script>alert('Record Updated'); window.location='update-data.php';</script>";
		}

}

?>




 <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                            Update Data
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="edit-data.php">Update-Data</a></li><br>
                      <a href="index.php" style="text-decoration: none;">Display Record</a>
                      
                    </ol> 
                                    
        </div>
<div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Update Record
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">


	<h1 align="center">Edit Form</h1>
	<form class="formgroup" method="POST">
		<table align="center">
			<tr>
				<td>Name :</td>
				<td><input class="form-control" type="text" value="<?php echo $editdata['st_name']; ?>"  name="text1"/></td>
			</tr>
			<tr>
				<td>Gender :</td>
				
		    <td><select class="form-control" name="text2">
			
			<option <?php  if ($editdata["st_gender"]=='Male') {
				echo "selected";				
			}?>>Male</option>
			<option <?php  if ($editdata["st_gender"]=='Female') {
				echo "selected";
			}?>>Female</option>
				</td>

			</tr>
			<tr>
				<td>Date of Birth :</td>
				<td><input class="form-control" type="date" value="<?php echo $editdata['st_dob']; ?>" name="text3"></td>
			</tr>
			<tr>
				<td>EMail :</td>
				<td><input class="form-control" type="email" value="<?php echo $editdata['st_email']; ?>" name="text4"></td>
			</tr>
		
	 	<tr>
	 		<td>Mobile No :</td>
	 		<td><input class="form-control" type="number" value="<?php echo $editdata['st_mobile']; ?>" name="text5"/></td>
	 	</tr>
	 	<tr>
	 		<td>Address :</td>
	 		<td><input class="form-control"  value="<?php echo $editdata['st_address']; ?>" name="text6" ></input> </td>
	 	</tr>
	 	<tr>
	 		<td>Password :</td>
	 		<td><input class="form-control" type="text" value="<?php echo $editdata['st_password']; ?>" name="text7"></td>
	 	</tr>
		<tr>
			<td>Area :</td>
		    <td><select class="form-control" name="text8">
			
			<option <?php  if ($editdata["st_area"]=='Thaltej') {
				echo "selected";				
			}?>>Thaltej</option>
			<option <?php  if ($editdata["st_area"]=='Memnagar') {
				echo "selected";
			}?>>Memnagar</option>
			<option <?php  if ($editdata["st_area"]=='Ghatlodia') {
				echo "selected";
			}?>>Ghatlodia</option>
			<option <?php  if ($editdata["st_area"]=='Sola') {
				echo "selected";
			}?>>Sola</option>
			<option <?php  if ($editdata["st_area"]=='Maninagar') {
				echo "selected";
			}?>>Maninagar</option>
			</select></td>
	 	</tr>
	 	<tr>
	 		<td>Pincode :</td>
	 		<td><input class="form-control" type="num" value="<?php echo $editdata['st_pincode']; ?>" name="text9"></td>
	 	</tr>
	 	<tr>
	 		<td>Blood Group</td>
	 		<td><select  class="form-control"name="text10">
			
			<option <?php  if ($editdata["st_bloodgroup"]=='A+') {
				echo "selected";
			}?> >A+</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='A-') {
				echo "selected";
			}?> >A-</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='B+') {
				echo "selected";
			}?>>B+</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='B-') {
				echo "selected";
			}?>>B-</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='o+') {
				echo "selected";
			}?>>o+</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='o-') {
				echo "selected";
			}?>>o-</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='AB+') {
				echo "selected";
			}?>>AB+</option>
			<option <?php  if ($editdata["st_bloodgroup"]=='AB-') {
				echo "selected";
			}?>>AB-</option>
			</select></td>
	 	</tr>
	 	<tr><td><input class="form-control"  type="submit" name="Submit"></td>
	 	<td><a href="index.php">Display Record</a></td></tr>
		</table>
	</form>


</div>                            
</div>
</div>
