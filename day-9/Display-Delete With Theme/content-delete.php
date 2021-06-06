<?php    $connection = mysqli_connect("localhost","root","","db_internship");
    //Query
 $q = mysqli_query($connection,"select * from tbl_student") or die(mysqli_error($connection)); 
   
?>
 
    <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Delete Data
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="delete-data.php">Delete-Data</a></li>
					  <br>
                      <a href="index.php" style="text-decoration: none;">Display Recoord</a>
					</ol> 
									
		</div>
		
            
 
 

<div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Advanced Tables
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><?php echo " ID "; ?></th>
                                            <th><?php echo " Name "; ?></th>
                                            <th><?php echo " Gender "; ?></th>
                                            <th><?php echo " Date of Birth "; ?></th>
                                            <th><?php echo " Mobile "; ?></th>
                                            <th><?php echo " Address "; ?></th>
                                            <th><?php echo " Password "; ?></th>
                                            <th><?php echo " Area "; ?></th>
                                            <th><?php echo " Pincode "; ?></th>
                                            <th><?php echo " BloodGroup "; ?></th>
                                            <th><?php echo " Action "; ?></th>                                            
                                        </tr>
                                    </thead>
                                     <?php
                                    while ($row =mysqli_fetch_array($q)) {
                                        ?>
                                    <tbody>

                                        <tr class="odd gradeX">
                                            <?php echo "<tr>" ?>
                                                <td><?php echo "{$row['st_id']} ";; ?> </td>
                                            <td><?php echo "{$row['st_name']} "; ?></td>
                                            <td><?php echo "{$row['st_gender']} "; ?></td>
                                            <td><?php echo "{$row['st_dob']} "; ?></td>
                                            <td><?php echo " {$row['st_mobile']} "; ?></td>
                                            <td><?php echo " {$row['st_address']} "; ?></td>
                                            <td><?php echo " {$row['st_password']} "; ?></td>
                                            <td><?php echo " {$row['st_area']} "; ?></td>
                                            <td><?php echo " {$row['st_pincode']} "; ?></td>
                                            <td><?php echo " {$row['st_bloodgroup']} "; ?></td>
                                            <td> <?php echo " <a href='delete.php?deleteid={$row['st_id']}'>Delete</a> "; ?></td>
                                        <?php } ?>
                                        </tr>
                                    </tbody>
                                 </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->