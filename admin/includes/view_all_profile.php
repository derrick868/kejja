                                <h5 class="card-title">My Profile</h5>
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
                                                
                                               
                                             </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                                if(isset($_SESSION['id'])){
                                                   $t_id=$_SESSION['id'];

                                                }else{
                                                	header("location:login.php");
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
                            $role = $row['role'];
                           
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           

                                            <td><?php echo "$id"; ?></td>
                                   
                                            <td><?php echo "$firstname"; ?></td>
                                            <td><?php echo "$lastname"; ?></td>
                                            <td><?php echo "$email"?></td>
                                            <td><?php echo "$phone"; ?></td>
                           <td><?php echo "$role"; ?></td>
                                            
                                          
                                              <!-- <td><a href="profile.php?delete=<?php echo $bid?>">delete</a></td> -->

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>


<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM bookings WHERE id = $delete";
$deleting=mysqli_query($connection,$del);
header("location:bookings.php");
}