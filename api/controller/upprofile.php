<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$cid=$_SESSION['c_id'];
	$target="upload/";
	$imgpath1=$target.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$imgpath1);	
	$stmt=$admin->cud("UPDATE `customer` SET `c_name`='$name',`c_email`='$email',`c_phone`='$phone',`c_add`='$add',`c_city`='$city',`c_pin`='$pin',`c_state`='$state',`c_profile_pic`='$imgpath1',`c_status`='Updated' WHERE `c_id`='$cid'","saved");
    echo "<script>alert('Profile updated');window.location='../profile.php';</script>"; 
}
?>