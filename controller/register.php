<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
    $pass=$_POST['pass'];
	$add=$_POST['add'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	
	$stmt=$admin->cud("INSERT INTO `customer`(`c_name`,`c_phone`,`c_email`,`c_pass`,`c_add`,`c_city`,`c_state`,`c_pin`,`c_status`) VALUES ('$name','$phone','$email','$pass','$add','$city','$state','$pin','ACTIVE')","saved");
echo "<script>alert('registerd');window.location='../login.php';</script>";
    
}
?>