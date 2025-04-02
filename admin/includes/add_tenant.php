<?php
if(isset($_POST['add'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $date_admitted=$_POST['date_admitted'];
    
    $role=$_POST['role'];
  
    $email = $_POST['email'];
    $password = $_POST['password'];
    
$email=mysqli_escape_string($connection,$email);
$password=mysqli_escape_string($connection,$password);

$password=password_hash($password, PASSWORD_BCRYPT,array('cost=>10') );
    
    $query="INSERT INTO users(firstname,lastname,mobile,date,email,password,role)";
    $query.="VALUES('{$firstname}','{$lastname}','{$phone}','{$date_admitted}','{$email}','{$password}','{$role}')";
    $insert=mysqli_query($connection,$query);
    if($insert){
        echo "<p class='alert alert-success' style='margin-top:30px'>tenant successfully registered<p>".""."<a href='tenants.php'>View All tenants</a>";
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
                                             <label for="lname" class=" text-end control-label col-form-label">phone</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="07234567" name="phone">
                                        </div>
                                       
                                    </div>


                                     <div class="form-group row">
                                        
                                    <!--     <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">username</label>
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="enter username" required="true" name="username">
                                        </div> -->

                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">Role</label>
                                            <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" name="role">
                                            <option>~~Select option~~</option>
                                            
                                                <option value="admin">admin</option>
                                                <option value="client">client</option>
                                                
                                           
                                           
                                            </select>
                                        </div>
                                       
                                        <div class="col-sm-3">
                                             <label for="lname" class=" text-end control-label col-form-label">email</label>
                                            <input type="text" class="form-control" id="validatedCustomFile"
                                                required  name="email" placeholder="email@email.com">

                                        </div>
                                        
                                        <div class="col-sm-4">
                                             <label for="lname" class=" text-end control-label col-form-label">password</label>
                                            <input type="password" class="form-control" id="fname"
                                                placeholder="07234567" name="password">
                                        </div>
                                       
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-4">
                                            <label for="lname" class="text-end control-label col-form-label">date registered</label>
                                            <input type="date" class="form-control" id="fname"
                                                placeholder="5000" name="date_admitted">
                                        </div>
                                        
                                      
                                    </div>

                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="add" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>