<?php
    include '../config.php';
	$admin=new Admin();
	$pc_id=$_GET['pc_id'];
	$stmt=$admin->cud("UPDATE `center` SET `pc_status`='Updated' WHERE `pc_id`='$pc_id'",'updated');
	echo "<script> alert('Approved Successfully');window.location='../manageseller.php';</script>";
?>