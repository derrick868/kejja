                                <h5 class="card-title">All Contacts</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                         <thead style="background-color: burlywood;">
                                            <tr>
                                             <!--    <th>Id</th>
 -->                                                <th>Name</th>
                                                <th>Message</th>
                                                <th>Email</th>
                                                
                                                <th>Date</th>
                                                <th>options</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                             

                        $query = "SELECT * FROM contact" ;
                        $select_contact = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_contact)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $message = $row['message'];
                            
                            $email = $row['email'];
                            $date = $row['date'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           
                                          <!--   <td><?php echo "$id"; ?></td -->
                                            <td><?php echo "$name"; ?></td>
                                            <td><?php echo "$message"; ?></td>
                                            <td><?php echo "$email"; ?></td>
                                            <td><?php echo "$date"; ?></td>

                                           
                                            <td>
                             <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Options</button>
                                        <div class="dropdown-menu">
                                           
                                            <a class="dropdown-item" href="contact.php?delete=<?php echo $id;?>">Delete</a>
                                            
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


    $del="DELETE FROM contact WHERE id = $delete ";
$deleting=mysqli_query($connection,$del);
header("location:contact.php");
}