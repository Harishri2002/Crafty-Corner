<?php
    include '../config.php';
	$admin=new Admin();
	$c_id=$_GET['c_id'];
	$stmt=$admin->cud("DELETE FROM `customer` WHERE `c_id`='$c_id'",'updated');
	echo "<script> alert('DELETED SUCCESSFULLY');window.location='../manageseller.php';</script>";
?>