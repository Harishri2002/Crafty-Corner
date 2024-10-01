<?php
    include '../config.php';
	$admin=new Admin();
	$pc_id=$_SESSION['pc_id'];
	$p_id=$_GET['p_id'];
	$stmt=$admin->cud("UPDATE `product` SET `p_status`='SOLD' WHERE `pc_id`='$pc_id' AND `p_id`='$p_id'",'updated');
	echo "<script> alert('Product Updated Successfully');window.location='../modifyproduct.php';</script>";
?>