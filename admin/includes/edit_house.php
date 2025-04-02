<?php
if(isset($_GET['h_id'])){
	$h_id=$_GET['h_id'];


	 $query = "SELECT * FROM houses WHERE house_id = $h_id " ;
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

                        }
}


if(isset($_POST['edit'])){
    $house_number=$_POST['house_number'];
    $house_image=$_FILES['house_image']['name'];
    $house_image_temp=$_FILES['house_image']['tmp_name'];

       $house_image1=$_FILES['house_image1']['name'];
    $house_image_temp1=$_FILES['house_image1']['tmp_name'];

    $house_image2=$_FILES['house_image2']['name'];
    $house_image_temp2=$_FILES['house_image2']['tmp_name'];

    $house_image3=$_FILES['house_image3']['name'];
    $house_image_temp3=$_FILES['house_image3']['tmp_name'];


    $house_size=$_POST['house_size'];
      $house_rooms=$_POST['house_rooms'];
    $house_rent=$_POST['house_rent'];
    $house_units=$_POST['units'];
    $house_category=$_POST['house_category'];
    $house_status=$_POST['house_status'];
    $house_location=strtoupper($_POST['house_location']);
    $house_description=$_POST['house_description'];

    move_uploaded_file($house_image_temp, "images/$house_image");
     move_uploaded_file($house_image_temp1, "images/$house_image1");
    move_uploaded_file($house_image_temp2, "images/$house_image2");
    move_uploaded_file($house_image_temp3, "images/$house_image3");

    if(empty($house_image)){

	$query = "SELECT * FROM houses WHERE house_id = $h_id";
	$select_image = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($select_image)){

		$house_image = $row['house_image'];
	}
}
if (empty($house_image1)) {
    $query = "SELECT * FROM houses WHERE house_id = $h_id";
    $select_image = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($select_image)){

        $house_image1 = $row['house_image1'];
}
}
if (empty($house_image2)) {
    $query = "SELECT * FROM houses WHERE house_id = $h_id";
    $select_image = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($select_image)){

        $house_image2 = $row['house_image2'];
}
}
if (empty($house_image3)) {
    $query = "SELECT * FROM houses WHERE house_id = $h_id";
    $select_image = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($select_image)){

        $house_image3 = $row['house_image3'];
}
}


                        $query = "UPDATE houses SET ";
						$query .= "house_number = '{$house_number}', ";
						$query .= "house_image = '{$house_image}', ";
                        $query .= "house_image1 = '{$house_image1}', ";
                        $query .= "house_image2 = '{$house_image2}', ";
                        $query .= "house_image3 = '{$house_image3}', ";
						$query .= "house_size = '{$house_size}', ";
                        $query .= "house_rooms = '{$house_rooms}', ";
						$query .= "house_rent = '{$house_rent}', ";
                        $query .= "units = '{$house_units}', ";
						$query .= "house_category = '{$house_category}', ";
                        $query .= "house_location = '{$house_location}', ";
                        $query .= "house_description = '{$house_description}', ";
                        $query .= "house_status = '{$house_status}' ";
						
						$query .= "WHERE house_id = {$h_id} ";



    $update_query=mysqli_query($connection,$query);
	if($update_query){
		
		 echo "<p class='alert alert-success' style='margin-top:30px'>house successfully update<p>".""."<a href='houses.php'>View All Houses</a>";
	}else{
		die("failed".mysqli_error($connection));
		//echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occurred while updating<p>";
	}


}


?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                           

                                   <div class="card-body">
                                      <h4 class="card-title">Update House </h4>
                                   
                                    <div class="form-group row">
                                        
                                      
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image1 <img width='100' height="50" src='images/<?php echo $house_image?>' alt = 'image'></label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image" >

                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image2 <img width='100' height="50" src='images/<?php echo $house_image1?>' alt = 'image'></label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image1">

                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image3 <img width='100' height="50" src='images/<?php echo $house_image2?>' alt = 'image'></label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image2">

                                        </div>
                                             <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image4 <img width='100' height="50" src='images/<?php echo $house_image3?>' alt = 'image'></label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image3">

                                        </div>
                                        
                                     
                                       
                                    </div>
                                    <div class="form-group row">
                                          <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">House Number</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="" name="house_number" value="<?php echo $house_number?>">
                                        </div>
                                         <div class="col-sm-2">
                                            <label for="lname" class="text-end control-label col-form-label">Bedrooms</label>
                                            <input type="number" class="form-control" id="fname"
                                                placeholder="4" name="house_rooms" value="<?php echo $house_rooms?>">
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                            <label for="lname" class="text-end control-label col-form-label">Plot Size</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="500 x 400" name="house_size" value="<?php echo $house_size?>">
                                        </div>
                                           <div class="col-sm-3">
                                            <label for="lname" class="text-end control-label col-form-label">House location</label>
                                            <input type="text" style="text-transform: uppercase;" class="form-control" id="fname"
                                                placeholder="NAIROBI,KISUMU" name="house_location" value="<?php echo $house_location?>">
                                        </div>                                   
                                    
                                       
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">Rent(KES)</label>
                                            <input type="text" step="any" class="form-control" id="fname"
                                                placeholder="5000" name="house_rent" value="<?php echo $house_rent?>">
                                        </div>
                                         <div class="col-sm-2">
                                            <label for="lname" class="text-end control-label col-form-label">Units(M for million)</label>
                                            <input type="text" style="text-transform: uppercase;"class="form-control" id="fname"
                                                placeholder="M,B..." name="units" value="<?php echo $house_units?>">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">Category</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="house_category">
                                            <option value="<?php echo $house_category?>">~~UPDATE OPTION~~</option>
                                            
                                                <option value="rent">rent</option>
                                                <option value="sale">sale</option>
                                           
                                           
                                            </select>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">Status</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="house_status">
                                            <option value="<?php echo $house_status?>">~~UPDATE OPTION~~</option>
                                            
                                                <option value="available">available</option>
                                                <option value="unavailable">unavailable</option>
                                           
                                           
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <hr>
                                     <label for="lname" class=" text-end control-label col-form-label" style="margin-right: 100px;">House Description</label>
                                    <div class="form-group row">
                                        
                                        <textarea id="w3review" class="form-control" name="house_description" rows="4" cols="50" placeholder="please further describe your house..."><?php echo $house_description ?>
                                        </textarea>

                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                </div>
                            </form>