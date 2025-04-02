<?php include "db.php"; ?>
<?php session_start(); ?>
<?php

if(isset($_POST['login'])){
	$email= $_POST['email'];
	$password = $_POST['password'];

	$email = mysqli_escape_string($connection,$email);
	$password = mysqli_escape_string($connection,$password);

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
	




if(password_verify($password, $db_user_password)) {

$_SESSION['id'] = $db_user_id;
$_SESSION['email'] = $db_email;
$_SESSION['firstname'] = $db_user_firstname;
$_SESSION['lastname'] = $db_user_lastname;
$_SESSION['role'] = $db_user_role;

header("Location:../property.php");
} else{
	header("Location:../index.php");
}

	
}

?>