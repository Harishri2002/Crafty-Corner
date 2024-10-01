<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_email`='$email' and `a_pass`='$password'");
	$num=$stmt->rowcount();
	if($num>0){
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['a_id']=$row['a_id'];
		echo"<script>alert('login successfull');
		window.location='../index.php';</script>";
	}else{
echo "<script>alert('you are not a valid user');window.location='../signin.php';</script>";

	} 
}
?>