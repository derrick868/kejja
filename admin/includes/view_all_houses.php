                                <h5 class="card-title">All Houses</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead style="background-color: burlywood;">
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Rooms</th>
                                                
                                                <th>Rent</th>
                                                 <th>Units</th>
                                                 <th>Location</th>
                                                 <th>Plot</th>

                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                           
                                            	<?php
                                             

                        $query = "SELECT * FROM houses" ;
                        $select_houses = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_houses)) {
                           $house_id = $row['house_id'];
                            $house_number = $row['house_number'];
                            $house_image = $row['house_image'];
                            $house_image1 = $row['house_image1'];
                            $house_image2 = $row['house_image2'];
                            $house_image3 = $row['house_image3'];

                            $house_size = $row['house_size'];
                            $house_rooms=$row['house_rooms'];
                            $house_rent=$row['house_rent'];
                            $house_units=$row['units'];
                            $house_category = $row['house_category'];
                            $house_status = $row['house_status'];
                            $house_location=$row['house_location'];
                            $house_description=$row['house_description'];
                          
                          
           

                                            	?>

                                            	 <tr>
                                           
                                           
                                            <td><?php echo "$house_number"; ?></td>
                                            <td><a href="../property_details.php?h_id=<?php echo $house_id?>"><?php echo "<img width='70' height='50' src='images/{$house_image}' alt = 'image'> "; ?></a></td>
                                            <td><?php echo "$house_rooms"; ?></td>
                                          
                                            <td>KES: <?php echo "$house_rent"; ?></td>
                                             <td style="text-transform: uppercase;"><?php echo "$house_units"; ?></td>
                                               <td style="text-transform: uppercase;"><?php echo "$house_location"; ?></td>
                                                 <td ><?php echo "$house_size"; ?></td>
                                            <td><?php echo "$house_category"; ?></td>
                                            <td>

<?php 
                                                if($house_status=="available"){
                                                     echo"<label class='label label-success'>available";
                                                }else{
                                                     echo"<label class='label label-danger'>unavailable";
                                                }


                                                ?>
                                               
                                            <td>
                             <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Options</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="houses.php?source=edit_house&h_id=<?php echo $row['house_id'];?> ">Update</a>
                                            <a class="dropdown-item" href="houses.php?delete=<?php echo $row['house_id'];?>">Delete</a>
                                            
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


    $del="DELETE FROM houses WHERE house_id = $delete ";
$deleting=mysqli_query($connection,$del);
header("location:houses.php");
}