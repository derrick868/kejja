<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<section id="">
 <div class="container">
  <div class="row">
   <div class="contact_main_1">
    <h2>Login</h2>
	<p><a href="#"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> LOGIN </a></p>
   </div>
  </div>
 </div>
</section>
<section id="contact">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
	 <div class="col-sm-6">
	  <form class="form-group"  action="includes/login" method="post">
			<h3>LOGIN </h3><br>
              			
			<input type="email"  class="form-control" placeholder="Email" name="email" id="email"  >	<BR>
			
			
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" >	<br>
													
			
											
			<input type="submit"class="btn btn-warning" name="login"  value="submit">
										</form>
	 </div>
	 <div class="col-sm-6">
	 	<h3>Create your account </h3><br>

	 		<?php
 error_reporting(0);
if(isset($_POST['reg'])){

$date = "Y-m-d";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$mobile=$_POST['mobile'];

$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm-password'];



$query = "SELECT * FROM users WHERE email ='{$email}'";
	$login_query = mysqli_query($connection,$query);
	if(!$login_query){
		die("QUERY FAILED". mysqli_error($connection));
	}

	while($row = mysqli_fetch_array($login_query)){
		$db_user_id = $row['id'];
		$db_email = $row['email'];
		$db_user_password = $row['password'];
		$db_user_firstname = $row['firstname'];
		$db_user_lastname = $row['lastname'];
		$db_user_role = $row['role'];
	}
	



if($email != $db_email){

if(!empty($email) && !empty($password) && ($password==$confirm_password)){

$email=mysqli_escape_string($connection,$email);
$password=mysqli_escape_string($connection,$password);

$password=password_hash($password, PASSWORD_BCRYPT,array('cost=>10') );

   

$query="INSERT INTO users(firstname,lastname,mobile,email,password,role,date) ";
$query.="VALUES('{$firstname}','{$lastname}','{$mobile}','{$email}','{$password}','client',now())";
$register=mysqli_query($connection,$query);
    if($register){
        echo "<p class='alert alert-success' style='margin-top:30px'>successfully registered<p>";
    }else{
    //   die("failed".mysqli_error($connection));
     echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
}


}else{
	 echo "<p class='alert alert-danger' style='margin-top:30px'>your passwords do not match<p>"; 
}
}else{
	echo "<p class='alert alert-danger' style='margin-top:30px'>the email is already registered<p>"; 
}
}

?>
	<form class="form-horizontal"  action="" method="post" enctype="multipart/form-data">
			
    
   
			<div class="row">
			<div class="col-sm-6">
				
							
			<input type="text" class="form-control" placeholder="Firstname" name="firstname" id="firstname"  >
													
			</div>
			<div class="col-sm-6">
				
			<input type="text" class="form-control"placeholder="Lastname" name="lastname" id="lastname"  >
													
												</div>
			</div>
				<br>					
			<input type="number"class="form-control" placeholder="Mobile number" name="mobile" id="mobile"  ><br>
			
			<input type="email"  class="form-control" placeholder="Email" name="email" id="email"  >	
			<br>
			<div class="row">
			<div class="col-sm-6">
			
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" >	
													
			</div>
			<div class="col-sm-6">
				
		<input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" id="confirm-password" >	
													
												</div>
			</div>
			<br>
														
			<input type="submit" class="btn btn-warning" name="reg"  value="CREATE ACCOUNT">
										</form>	 </div>
	</div>
   </div>
  </div>
</section>

