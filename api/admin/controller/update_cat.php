<?php
    include '../config.php';
	$admin=new Admin();
	$ct_id=$_GET['ct_id'];
	$stmt=$admin->cud("DELETE FROM `category` WHERE `ct_id`='$ct_id'",'updated');
	echo "<script> alert('DELETED SUCCESSFULLY');window.location='../category.php';</script>";
?>