<?php 

session_start();
 
include "../config/db-connection.php";

//GET DATA LOGIN FOR FORM
$email = $_POST['email'];
$password = $_POST['pass'];
 
//SYNTAX SQL
$data = mysqli_query($db1,"select * from akun_guru where email='$email' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:../dashboard.php");
}else{
    header("location:../index.php/");
}
?>