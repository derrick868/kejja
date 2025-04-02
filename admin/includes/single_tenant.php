                                <h5 class="card-title">All Tenants</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                         <thead style="background-color: burlywood;">
                                            <tr>
                                                <th>Id</th>
                                               
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>House</th>
                                                <th>Date admitted</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                                if(isset($_GET['t_id'])){
                                                    $t_id=$_GET['t_id'];
                                                }
                                             

                        $query = "SELECT * FROM users WHERE id = $t_id" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                           $phone = $row['mobile'];
                            $house = $row['house'];
                            $date_admitted = $row['date'];
                            //$status = $row['status'];
                            $role = $row['role'];
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           
<?php
    $query = "SELECT * FROM bookings where tenant_id = $t_id" ;
                        $select_rent = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_rent)) {
                            $b_id=$row['id'];
                            $tenant_id = $row['tenant_id'];
                            $house_no = $row['house_id'];
                             $status = $row['status'];
                            $date = $row['date'];
                            $date_approved = $row['date_approved'];
                        }


?>

                                            <td><?php echo "$id"; ?></td>
                                           
                                            <td><?php echo "$firstname"; ?></td>
                                            <td><?php echo "$lastname"; ?></td>
                                            <td><?php echo "$email"?></td>
                                            <td><?php echo "$phone"; ?></td>
           <?php
				$query_sel="SELECT * FROM houses WHERE house_id = $house";
				$select=mysqli_query($connection,$query_sel);
				while($row=mysqli_fetch_assoc($select)){
					$id=$row['house_id'];
					$house_number=$row['house_number'];

					
				
                if($id==$house){
    $update_house="UPDATE houses SET house_status='unavailable' WHERE house_id = $house ";
    $upd_query=mysqli_query($connection,$update_house);
    

}else {
     $update_house1="UPDATE houses SET house_status='available' WHERE house_id=$house ";
    $upda_query=mysqli_query($connection,$update_house1);
    
}

}
				?> 
                                    <td><?php echo "$house_number"; ?></td> 
                                            <td><?php echo "$date_approved"; ?></td>
                                           <td><?php echo "$status"; ?></td>
                          <!--                   <td>
                             <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Options</button>
                                        <div class="dropdown-menu">
                                           
                                            <a class="dropdown-item" href="tenants.php?source=edit_tenant&t_id=<?php echo $id;?>">Update</a>
                                            <a class="dropdown-item" href="tenants.php?delete=<?php echo $id;?>">Delete</a>
                                            
                                            </div>
                                    </div> -->
                        </td>

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>


<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM reg WHERE id = $delete ";
$deleting=mysqli_query($connection,$del);
header("location:tenants.php");
}