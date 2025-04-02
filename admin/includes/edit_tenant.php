<?php
if(isset($_GET['t_id'])){
	$t_id=$_GET['t_id'];


	 
                        $query = "SELECT * FROM users WHERE id = $t_id" ;
                        $select_tenant = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_tenant)) {
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $mobile = $row['mobile'];
                            $house = $row['house'];
                            $date_admitted = $row['date'];
                           
                            $role = $row['role'];
                            $email = $row['email'];
                           
}


if(isset($_POST['edit'])){
$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $date=$_POST['date_admitted'];
   
     $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    


                        $query = "UPDATE users SET ";
						$query .= "firstname = '{$firstname}', ";
						$query .= "lastname = '{$lastname}', ";
						$query .= "mobile = '{$mobile}', ";
						$query .= "date = '{$date}', ";
						$query .= "house = '{$house}', ";
                        $query .= "role = '{$role}', ";
                        $query .= "email = '{$email}', ";
                        $query .= "password = '{$password}' ";
						
						
						$query .= "WHERE id = {$t_id} ";



    $update_query=mysqli_query($connection,$query);
	if($update_query){
		
		 echo "<p class='alert alert-success' style='margin-top:30px'>tenant successfully updated<p>".""."<a href='tenants.php'>View All tenants</a>";
	}else{
		die("failed".mysqli_error($connection));
		//echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occurred while updating<p>";
	}


}
}

?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">update tenant</h4>
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
                                                placeholder="07234567" name="phone" value="<?php echo $mobile?>">
                                        </div>
                                       
                                    </div>
                                    <div class="form-group row">
                                        
                                      <!--   <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">username</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter username" required="true" name="username" value="<?php echo $username?>">
                                        </div>
 -->                                        <div class="col-sm-6">
                                             <label for="lname" class=" text-end control-label col-form-label">email</label>
                                            <input type="text" class="form-control" id="validatedCustomFile"
                                                required  name="email" placeholder="email@email.com" value="<?php echo $email?>" >

                                        </div>
                                        
                                        <div class="col-sm-6">
                                             <label for="lname" class=" text-end control-label col-form-label">password</label>
                                            <input type="password" class="form-control" id="fname"
                                                placeholder="07234567" name="password" value="<?php echo $password?>">
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">date registered</label>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="5000" name="date_admitted" value="<?php echo $date_admitted?>">
                                        </div>
                         
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Role:</label><?php echo $role?>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="role">
                                            <option value="<?php echo $status?>">~~update option~~</option>
                                            
                                                <option value="admin">admin</option>
                                                <option value="client">client</option>
                                                
                                           
                                           
                                            </select>
                                        </div>
                                       
                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>