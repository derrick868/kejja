<?php
if(isset($_GET['t_id'])){
    $t_id=$_GET['t_id'];

}

if(isset($_GET['b_id'])){
    $b_id=$_GET['b_id'];

}
     
                        $query = "SELECT * FROM users WHERE id = $t_id" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['mobile'];
                            $house = $row['house'];
                            $date_reg = $row['date'];
                           
                            $role = $row['role'];
                            $email = $row['email'];
                            $password = $row['password'];



                                             

                        $query = "SELECT * FROM bookings WHERE id = $b_id" ;
                        $select_rent = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_rent)) {
                            $id=$row['id'];
                           
                            $house_no = $row['house_id'];
                             $status = $row['status'];
                            $date = $row['date'];
                            }                           
                                    

                                     $query = "SELECT * FROM houses WHERE house_id = $house_no " ;
                        $select_houses = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_houses)) {
                            $house_id = $row['house_id'];
                            $house_number = $row['house_number'];
                            $house_image = $row['house_image'];
                            $house_size = $row['house_size'];
                            $house_rent = $row['house_rent'];
                            $house_category = $row['house_category'];
                            $house_status = $row['house_status'];
                            $house_location = $row['house_location'];
                          }

}

if(isset($_POST['edit'])){
$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
   $date_approved = date("Y-m-d");
    $house=$_POST['house'];
    $status=$_POST['status'];
     $role = $_POST['role'];
    $email = $_POST['email'];
  


  


    $query = "UPDATE users SET ";
                        $query .= "firstname = '{$firstname}', ";
                        $query .= "lastname = '{$lastname}', ";
                        $query .= "mobile = '{$phone}', ";
                   
                        $query .= "house = '{$house}', ";
                        $query .= "role = '{$role}', ";
                        $query .= "email = '{$email}' ";
                      
                       
                        
                        $query .= "WHERE id = {$t_id} ";


$update_query=mysqli_query($connection,$query);


    $query1 = "UPDATE bookings SET ";
                        $query1 .= "status = '{$status}', ";
                         $query1 .= "house_id = '{$house}', ";

                        $query1 .= "date_approved = '{$date_approved}' ";
                      
                       
                        
                        $query1 .= "WHERE id = {$b_id} ";

$update=mysqli_query($connection,$query1);
 
 if($update_query){
        echo "<p class='alert alert-success' style='margin-top:30px'>tenant successfully updated<p>".""."<a href='tenants.php'>View All tenants</a>";
    }else{
       die("failed".mysqli_error($connection));
    // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
}
// if($update){
//         echo "<p class='alert alert-success' style='margin-top:30px'>tenant successfully registered<p>".""."<a href='tenants.php'>View All tenants</a>";
//     }else{
//        die("failed".mysqli_error($connection));
//     // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
// }



}


?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">update user</h4>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">firstname</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter firstname" required="true" name="firstname" value="<?php echo $firstname?>">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">lastname</label>
                                            <input type="text" class="form-control" id="validatedCustomFile"
                                                required  name="lastname" placeholder="enter lastname" value="<?php echo $lastname?>">

                                        </div>
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">phone</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="07234567" name="phone" value="<?php echo $phone?>">
                                        </div>
                                       
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">Role</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="user role" required="true" name="role" value="<?php echo $role?>">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">email</label>
                                            <input type="text" class="form-control" id="validatedCustomFile"
                                                required  name="email" placeholder="email@email.com" value="<?php echo $email?>" >

                                        </div>
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Approve Booking: <?php echo $status?></label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="status">
                                            <option value="<?php echo $status?>">~~update option~~</option>
                                            
                                                <option value="pending">pending</option>
                                                <option value="approved">approve</option>
                                                 <option value="rejected">reject</option>
                                                
                                           
                                           
                                            </select>
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">date registered</label>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="5000" name="date_registered" value="<?php echo $date_reg?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">date booked</label>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="5000" name="date_admitted" value="<?php echo $date?>">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">house number: <?php error_reporting(0); echo $house_number?></label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="house">

                                            <option value="<?php echo $house_id?>">~~update option~~</option>
                                            <?php
                $query_sel="SELECT * FROM houses WHERE house_status = 'available' ";
                $select=mysqli_query($connection,$query_sel);
                while($row=mysqli_fetch_assoc($select)){
                    $id=$row['house_id'];
                    $house_number=$row['house_number'];

                    echo "<option value='$id'>{$house_number}</option>";
                } 

                ?>
                                           
                                            </select>

                                        </div>
                                        
                                       <!--  <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Status</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="status">
                                            <option value="<?php echo $status?>">~~update option~~</option>
                                            
                                                <option value="paid">paid</option>
                                                <option value="not_paid">not paid</option>
                                                
                                           
                                           
                                            </select>
                                        </div> -->
                                       
                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>