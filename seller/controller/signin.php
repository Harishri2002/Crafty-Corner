<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$stmt=$admin->ret("SELECT * FROM `center` WHERE `pc_email`='$email' and `pc_pass`='$password' and `pc_status`='Updated'");
	$num=$stmt->rowcount();
	if($num>0){
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['pc_id']=$row['pc_id'];
		echo"<script>alert('login successfull');
		window.location='../manageprofile.php';</script>";
	}else{
    echo "<script>alert('you are not a valid user');window.location='../login.php';</script>";

	} 
}
?>