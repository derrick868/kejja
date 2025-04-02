<?php
if(isset($_GET['u_id'])){
	$u_id=$_GET['u_id'];


	 
                      $query = "SELECT * FROM main where id = $u_id";
                        $select_main = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($select_main)) {
                            $id = $row['id'];
                            $username = $row['username'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $user_role = $row['user_role'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $location = $row['location'];
                            $password = $row['password'];
                            $status = $row['status'];
                          
}


if(isset($_POST['edit'])){
 $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $user_role=$_POST['user_role'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    
    


                        $query = "UPDATE main SET ";
						$query .= "firstname = '{$firstname}', ";
						$query .= "lastname = '{$lastname}', ";
						$query .= "phone = '{$phone}', ";
						$query .= "user_role = '{$user_role}', ";		
						$query .= "location = '{$location}', ";
                        $query .= "username = '{$username}', ";
                        $query .= "email = '{$email}', ";
                        $query .= "password = '{$password}', ";
						$query .= "status = '{$status}' ";
						
						$query .= "WHERE id = {$u_id} ";



    $update_query=mysqli_query($connection,$query);
	if($update_query){
		
		 echo "<p class='alert alert-success' style='margin-top:30px'>user successfully updated<p>".""."<a href='main.php'>View All users</a>";
	}else{
		die("failed".mysqli_error($connection));
		//echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occurred while updating<p>";
	}


}
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
                                            <label for="lname" class="text-end control-label col-form-label">username</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter username" required="true" name="username" value="<?php echo $username ?>">
                                        </div>
                                        
                                        
                                    </div>


                                     <div class="form-group row">
                                       <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">phone</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="07234567" name="phone" required  value="<?php echo $phone?>">
                                        </div>
                                       
                                        
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">email</label>
                                            <input type="email" class="form-control" id="validatedCustomFile"
                                                required  name="email" placeholder="email@email.com" value="<?php echo $email?>">

                                        </div>
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">password</label>
                                            <input type="password" class="form-control" id="fname"
                                                placeholder="07234567" name="password" required value="<?php echo $password?>">
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">Location</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="ruiru" name="location" required="true" value="<?php echo $location?>">
                                        </div>
                                       
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Role</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="user_role" required>
                                            <option value="<?php echo $user_role?>">~~Select option~~</option>
                                            
                                                <option value="admin">admin</option>
                                                <option value="caretaker">caretaker</option>
                                                <option value="maintenance">maintenance</option>
                                                
                                           
                                           
                                            </select>
                                        </div>
                                         <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">status</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="status" required>
                                            <option value="<?php echo $status?>">~~Select option~~</option>
                                            
                                                <option value="approved">approve</option>
                                                <option value="unapproved">unapprove</option>
                                                
                                                                                  
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