<?php session_start(); ?>
<?php
$_SESSION['id'] = null;
$_SESSION['email'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['role'] = null;

header("Location:../index.php");
?>