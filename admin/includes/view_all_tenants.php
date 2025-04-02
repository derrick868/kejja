                                <h5 class="card-title">All users</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                         <thead style="background-color: burlywood;">
                                            <tr>
                                                <th>Id</th>
                                                
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                
                                                <th>Role</th>
                                               <th>Registered on </th>
                                                <th>options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                             

                        $query = "SELECT * FROM users" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                            $t_id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $mobile = $row['mobile'];
                            
                            $date_admitted = $row['date'];
                            $role = $row['role'];
                          $house = $row['house'];
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           

                                            <td><?php echo "$t_id"; ?></td>
                                         
                                            <td><?php echo "$firstname"; ?></td>
                                            <td><?php echo "$lastname"; ?></td>
                                            <td><?php echo "$email"?></td>
                                            <td><?php echo "$mobile"; ?></td>
              
                                            <td><?php echo "$role"; ?></td>
                                            <td><?php echo "$date_admitted"; ?></td>
                                           
                                            <td>
                             <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Options</button>
                                        <div class="dropdown-menu">
                                           
                                            <a class="dropdown-item" href="tenants.php?source=edit_tenant&t_id=<?php echo $t_id;?>">Update</a>
                                            <a class="dropdown-item" href="tenants.php?delete=<?php echo $id;?>">Delete</a>
                                            
                                            </div>
                                    </div>
                        </td>

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>


<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM users WHERE id = $delete ";
$deleting=mysqli_query($connection,$del);
header("location:tenants.php");
}
?>