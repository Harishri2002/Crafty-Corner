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
	$pcid=$_SESSION['pc_id'];
	$target="upload/";
	$imgpath1=$target.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$imgpath1);
	$stmt=$admin->cud("UPDATE `center` SET `pc_name`='$name',`pc_email`='$email',`pc_phone`='$phone',`pc_add`='$add',`pc_city`='$city',`pc_pin`='$pin',`pc_state`='$state',`pc_profile_pic`='$imgpath1',`pc_status`='Updated',`pc_updated_date`=now() WHERE `pc_id`='$pcid'","saved");
    echo "<script>alert('Profile updated');window.location='../manageprofile.php?pc_id=$pcid';</script>"; 
    
}
?>