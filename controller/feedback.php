<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$feed=$_POST['feed'];
	$pcid=$_POST['pcid'];
	$orid=$_POST['orid'];

	$cid=$_SESSION['c_id'];
	$stmt=$admin->cud("INSERT INTO `feedback`(`f_feedback`,`pc_id`,`f_date`,`c_id`,`or_id`)VALUES('$feed','$pcid',now(),'$cid','$orid')","saved",);
    echo "<script>alert('Commented');window.location='../loginindex.php';</script>"; 
    
}
?>