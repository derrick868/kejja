<?php
if(isset($_POST['add'])){
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
    $query="INSERT INTO houses(house_number,house_image,house_image1,house_image2,house_image3,house_size,house_rooms,house_rent,units,house_category,house_status,house_location,house_description)";
    $query.="VALUES('{$house_number}','{$house_image}','{$house_image1}','{$house_image2}','{$house_image3}','{$house_size}','{$house_rooms}','{$house_rent}','{$house_units}','{$house_category}','{$house_status}','{$house_location}','{$house_description}')";
    $insert=mysqli_query($connection,$query);
    if($insert){
        echo "<p class='alert alert-success' style='margin-top:30px'>house successfully added<p>".""."<a href='houses.php'>View All Houses</a>";
    }else{
       die("failed".mysqli_error($connection));
    // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
}


}


?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Add House</h4>
                                    <div class="form-group row">
                                        
                                      
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image1</label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image">

                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image2</label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image1">

                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image3</label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image2">

                                        </div>
                                             <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">House image4</label>
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                 name="house_image3">

                                        </div>
                                        
                                     
                                       
                                    </div>
                                    <div class="form-group row">
                                          <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">House Name</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="" name="house_number">
                                        </div>
                                         <div class="col-sm-2">
                                            <label for="lname" class="text-end control-label col-form-label">Bedrooms</label>
                                            <input type="number" class="form-control" id="fname"
                                                placeholder="4" name="house_rooms">
                                        </div> 
                                        
                                        <div class="col-sm-3">
                                            <label for="lname" class="text-end control-label col-form-label">Plot Size</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="500 x 400" name="house_size">
                                        </div>
                                           <div class="col-sm-3">
                                            <label for="lname" class="text-end control-label col-form-label">House location</label>
                                            <input type="text" style="text-transform: uppercase;" class="form-control" id="fname"
                                                placeholder="NAIROBI,KISUMU" name="house_location">
                                        </div>                                   
                                    
                                       
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">Rent(KES)</label>
                                            <input type="number" class="form-control" id="fname"
                                                placeholder="5000" name="house_rent" step="any">
                                        </div>
                                         <div class="col-sm-2">
                                            <label for="lname" class="text-end control-label col-form-label">Units(M for million)</label>
                                            <input type="text" style="text-transform: uppercase;"class="form-control" id="fname"
                                                placeholder="M,B..." name="units">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">Category</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="house_category">
                                            <option>~~Select option~~</option>
                                            
                                                <option value="rent">rent</option>
                                                <option value="sale">sale</option>
                                           
                                           
                                            </select>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">Status</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="house_status">
                                            <option>~~Select option~~</option>
                                            
                                                <option value="available">available</option>
                                                <option value="unavailable">unavailable</option>
                                           
                                           
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <hr>
                                     <label for="lname" class=" text-end control-label col-form-label" style="margin-right: 100px;">House Description</label>
                                    <div class="form-group row">
                                        
                                        <textarea id="w3review" class="form-control" name="house_description" rows="4" cols="50" placeholder="please further describe your house...">
                                        </textarea>

                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>