<?php
if(isset($_POST['add'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $user_role=$_POST['user_role'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    

    
    $query="INSERT INTO main(firstname,lastname,phone,location,username,email,password,user_role,status)";
    $query.="VALUES('{$firstname}','{$lastname}','{$phone}','{$location}','{$username}','{$email}','{$password}','{$user_role}','{$status}')";
    $insert=mysqli_query($connection,$query);
    if($insert){
        echo "<p class='alert alert-success' style='margin-top:30px'>user successfully registered<p>".""."<a href='main.php'>View All users</a>";
    }else{
       die("failed".mysqli_error($connection));
    // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
}


}


?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Add user</h4>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">firstname</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter firstname" required="true" name="firstname">
                                        </div>
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">lastname</label>
                                            <input type="text" class="form-control" id="validatedCustomFile"
                                                required  name="lastname" placeholder="enter lastname">

                                        </div>

                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">username</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter username" required="true" name="username">
                                        </div>
                                        
                                        
                                    </div>


                                     <div class="form-group row">
                                       <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">phone</label>
                                            <input type="number" class="form-control" id="fname"
                                                placeholder="07234567" name="phone" pattern="" required>
                                        </div>
                                       
                                        
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">email</label>
                                            <input type="email" class="form-control" id="validatedCustomFile"
                                                required  name="email" placeholder="email@email.com">

                                        </div>
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">password</label>
                                            <input type="password" class="form-control" id="fname"
                                                placeholder="07234567" name="password" required>
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">Location</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="ruiru" name="location" required="true">
                                        </div>
                                       
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Role</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="user_role" required>
                                            <option>~~Select option~~</option>
                                            
                                                <option value="admin">admin</option>
                                                <option value="caretaker">caretaker</option>
                                                <option value="maintenance">maintenance</option>
                                                
                                           
                                           
                                            </select>
                                        </div>
                                         <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">status</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="status" required>
                                            <option>~~Select option~~</option>
                                            
                                                <option value="approved">approve</option>
                                                <option value="unapproved">unapprove</option>
                                                
                                                
                                           
                                           
                                            </select>
                                        </div>
                                       
                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>