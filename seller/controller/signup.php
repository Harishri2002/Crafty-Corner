<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
    $pass=$_POST['pass'];
	$stmt=$admin->cud("INSERT INTO `admin`(`a_name`,`a_email`,`a_pass`) VALUES ('$name','$email','$pass')","saved");
echo "<script>alert('registerd');window.location='../signin.php';</script>";
    
}
?>
