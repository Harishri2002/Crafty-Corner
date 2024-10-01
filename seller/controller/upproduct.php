<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$pid=$_GET['p_id'];
	$name=$_POST['name'];
    $des=$_POST['des'];
	$price=$_POST['price'];
	$cat=$_POST['category'];
	$pcid=$_SESSION['pc_id'];
	$target="upload/";
	$imgpath1=$target.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$imgpath1);
	$stmt=$admin->cud("UPDATE `product` SET `p_name`='$name',`p_desc`='$des',`p_price`='$price',`p_update_date`=now(),`p_img`='$imgpath1' WHERE `p_id`='$pid'","saved");
    echo "<script>alert('Profile updated');window.location='../edit.php?p_id=$pid';</script>"; 
    
}
?>