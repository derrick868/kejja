                                <h5 class="card-title">All Bookings</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                         <thead style="background-color: burlywood;">
                                            <tr>
                                              
                                                <th>client</th>
                                                <th>house</th>
                                                <th>phone</th>
                                                <th>email</th>
                                                <th>message</th>
                                                <th>status</th>
                                                <th>date</th>
                                                <th>time</th>
                                                <th>options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                             

                        $query = "SELECT * FROM bookings order by id desc" ;
                        $select_rent = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_rent)) {
                            $b_id=$row['id'];
                            $name = $row['name'];
                            $house_no = $row['house_id'];
                             $phone = $row['phone'];
                              $email = $row['email'];
                               $message = $row['message'];
                             $status = $row['status'];
                            $date = $row['date'];
                            $time = $row['time'];
                                                      
                                     	?>

                                            	 <tr>
                                           
<!-- 
                                                                    <?php
                                             

                        $query = "SELECT * FROM users WHERE id = $tenant_id" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                             $tenants_id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['mobile'];
                           
                            $date_admitted = $row['date'];
                           
                           
                            $email = $row['email'];
                            $password = $row['password'];
                          
                          }
           

                                                ?> -->



                                               

                                            
                                            
                 <?php
				$query_sel="SELECT * FROM houses WHERE house_id = $house_no";
				$select=mysqli_query($connection,$query_sel);
				while($row=mysqli_fetch_assoc($select)){
					$id=$row['house_id'];
					$house_number=$row['house_number'];
                    $house_image = $row['house_image'];
                            $house_size = $row['house_size'];
                            $house_rooms=$row['house_rooms'];
                            $house_rent=$row['house_rent'];
                            $house_units=$row['units'];
                            $house_category = $row['house_category'];
                            $house_status = $row['house_status'];
                            $house_location=$row['house_location'];
                            $house_description=$row['house_description'];
                          
					
				} 

				?>
                                           
                                            <td><?php echo "$name"; ?></td>

                                            <td><a href="../property_details.php?h_id=<?php echo $id?>"><?php error_reporting(0); echo  "$house_number"; ?></a>
                                                
                                            </td>
                                           <td><?php echo "$name"; ?></td>
                                          <td><?php echo "$phone"; ?></td>
                                            <td><?php echo "$message"; ?></td>
                                          <td>
                                              

                                              <?php

                            if($status == 'rejected'){
                           
                            echo "<label class='label label-info'> ".$status."";
                           

                        }elseif ($status == 'In progress') {
                            echo "<label class='label label-warning'>".$status."";
                        }
                        elseif ($status == 'pending') {
                            echo "<label class='label label-danger'>".$status."";
                        }

                        else{
                           
                            echo "<label class='label label-success'>completed ";
                            
                        }
                    
                             ?>             
                                          </td>
                                            <td><?php echo "$date"; ?></td>
                                            <td><?php echo "$time"; ?></td>
                                            
                                            <td>
                             <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Options</button>
                                        <div class="dropdown-menu">
                                            
      <a class="dropdown-item" href="bookings.php?approve=<?php echo $b_id;?>">complete</a>
      <a class="dropdown-item" href="bookings.php?rejected=<?php echo $b_id;?>">reject</a>
       <a class="dropdown-item" href="bookings.php?pending=<?php echo $b_id;?>">In progress</a>

                                                                                  
                                            
                                            <a class="dropdown-item" href="bookings.php?delete=<?php echo $b_id;?>">Delete</a>
                                            
                                            </div>
                                    </div>
                        </td>

                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
<?PHP
if(isset($_GET['approve'])){
    $approve=$_GET['approve'];


    $del="UPDATE bookings SET status ='completed' WHERE id = $approve";
$deleting=mysqli_query($connection,$del);
header("location:bookings.php");
}
?>
<?PHP
if(isset($_GET['pending'])){
    $pending=$_GET['pending'];


    $del="UPDATE bookings SET status ='In progress' WHERE id = $pending";
$deleting=mysqli_query($connection,$del);
header("location:bookings.php");
}
?>
<?PHP
if(isset($_GET['rejected'])){
    $rejected=$_GET['rejected'];


    $del="UPDATE bookings SET status ='rejected' WHERE id = $rejected";
$deleting=mysqli_query($connection,$del);
header("location:bookings.php");
}
?>
<?PHP
if(isset($_GET['delete'])){
    $delete=$_GET['delete'];


    $del="DELETE FROM bookings WHERE id = $delete";
$deleting=mysqli_query($connection,$del);
header("location:bookings.php");
}