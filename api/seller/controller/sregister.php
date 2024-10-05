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
	$adh=$_POST['adh'];
	$target="upload/";
	$imgpath1=$target.basename($_FILES['adhpic']['name']);
	  move_uploaded_file($_FILES['adhpic']['tmp_name'],$imgpath1);
	$imgpath2=$target.basename($_FILES['pfp']['name']);
	  move_uploaded_file($_FILES['pfp']['tmp_name'],$imgpath2);
	
	$stmt=$admin->cud("INSERT INTO `center`(`pc_name`,`pc_email`,`pc_phone`,`pc_add`,`pc_city`,`pc_pin`,`pc_state`,`pc_pass`,`pc_adhar_no`,`pc_profile_pic`,`pc_adhar_pic`,`pc_status`,`pc_created_date`) VALUES ('$name','$email','$phone','$add','$city','$pin','$state','$pass','$adh','$imgpath1','$imgpath2','Pending',now())","saved");
    echo "<script>alert('registerd');window.location='../login.php';</script>"; 
    
}
?>