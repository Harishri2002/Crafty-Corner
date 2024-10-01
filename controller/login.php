<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$stmt=$admin->ret("SELECT * FROM `customer` WHERE `c_email`='$email' and `c_pass`='$password'");
	$num=$stmt->rowcount();
	if($num>0){
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['c_id']=$row['c_id'];
		echo"<script>alert('login successfull');window.location='../loginindex.php';</script>";
	}else{
echo "<script>alert('you are not a valid user');window.location='../login.php';</script>";
	} 
}
?>