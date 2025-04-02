<?php include "includes/db.php"?>
<?php session_start();
if(isset($_SESSION['id'])){

$user_id = $_SESSION['id'];
}

?>
<?php if(isset($_POST["submit_search"]))  
 {  
      if(!empty($_POST["search"]) )  
       {  
           $query = str_replace(" ", "+", $_POST["search"]);  
            // $query1 = str_replace(" ", "+", $_POST["search_rooms"]);  
           header("location:search.php?search=" . $query);  
       }  
 }  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leoma properties</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
		<link href="css/property_details.css" rel="stylesheet">
			<link href="css/property.css" rel="stylesheet">
			<link href="css/contact.css" rel="stylesheet">
			<link href="css/blog.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
<section id="header_main" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="col-sm-4 space_all">
     <div class="header_main_1">
       <ul>
	        <li><i class="fa fa-phone"></i><a href="#">+254722518457</a></li>
			<li><i class="fa fa-envelope"></i><a href="#">info@gmail.com</a></li>
	   </ul>
     </div>
    </div>

    <div class="col-sm-3 space_all">
     <div class="header_main_2">
      <div id="custom-search-input">
      	<form method="post">
        <div class="input-group col-md-12">
  <input type="text" name="search" class="search-query form-control" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>"placeholder="Property location">
                               


                                <span class="input-group-btn">

                                <input type="submit" name="submit_search" class="btn btn-warning" value="Search" /> 
                                  <!--   <button class="btn btn-danger" type="button" name="submit_search" value="Search">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button> -->
                                </span>
                            </div>
                          </form>
       </div>
     </div>
    </div>
	<div class="col-sm-3">
	 <div class="header_main_4">
	  <ul class="nav navbar-nav navbar nav_2">			
	  <div class="login">
				<ul class="nav-login">
					<li class="tell_main_8"><a href="login">Login</a></li>
					<li class="tell_main_8"><a href="includes/logout">Logout</a></li>
					
				</ul>
			</div>
	  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
							
									<div class="login-right">
										<form action="#" method="post">
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" name=" Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required>	
											<input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>	
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- signup -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">							
									<div class="login-right">
										<?php

if(isset($_POST['signup-btn'])){

echo "hae";
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];

// $mobile=$_POST['mobile'];

// $email=$_POST['email'];
// $password=$_POST['password'];
// $confirm_password=$_POST['confirm-password'];






// if(!empty($username) && !empty($email) && !empty($password) && ($password==$confirm_password)){
// $username=mysqli_escape_string($connection,$username);
// $email=mysqli_escape_string($connection,$email);
// $password=mysqli_escape_string($connection,$password);

// $password=password_hash($password, PASSWORD_BCRYPT,array('cost=>10') );

   

// $query="INSERT INTO users(username,firstname,lastname,email,password,role) ";
// $query.="VALUES('{$username}','{$firstname}','{$lastname}','{$email}','{$password}','{$client}')";
// $register=mysqli_query($connection,$query);
//     if($register){
//         echo "<p class='alert alert-success' style='margin-top:30px'>successfully registered<p>";
//     }else{
//        die("failed".mysqli_error($connection));
//     // echo "<p class='alert alert-danger' style='margin-top:30px'>sorry an error occured while adding<p>";   
// }


// }
}

?>



<form class="form-group"  action="" method="post" >
			<h3>Create your account </h3>
              <div id="success" style="color: lime;
      font-size: 90% !important;
      display: none;">successfully submitted</div>
                <div id="error" style="color: red;
      font-size: 90% !important;"></div>
   
			<div class="row">
			<div class="col-sm-6">
				
							
			<input type="text" class="form-control" placeholder="Firstname" name="firstname" id="firstname"  required>
													
			</div>
			<div class="col-sm-6">
				
			<input type="text" class="form-control"placeholder="Lastname" name="lastname" id="lastname"  required>
													
												</div>
			</div>
									
			<input type="text"class="form-control" placeholder="Mobile number" name="mobile" id="mobile"  required><br>
			
			<input type="email"  class="form-control" placeholder="Email id" name="email" id="email"  required>	
			<div class="row">
			<div class="col-sm-6">
			
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>	
													
			</div>
			<div class="col-sm-6">
				
		<input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" id="confirm-password" required>	
													
												</div>
			</div>
														
			<input type="submit" name="signup-btn" id="submit" value="CREATE ACCOUNT">
										</form>
									</div>								
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </ul>
	 </div>
	</div>
    <div class="col-sm-2 space_all">
     <div class="header_main_3">
      <ul>
           <li><a href="facebook.com/101292054805862"><i class="fa fa-facebook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		   <li><a href="#"><i class="fa fa-youtube"></i></a></li>
		   <li><a href="#"><i class="fa fa-google"></i></a></li>
		   <li><a href="#"><i class="fa fa-dribbble"></i></a></li>		   
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>