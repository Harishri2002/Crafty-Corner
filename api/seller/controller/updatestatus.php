<?php 
include '../config.php';
$admin=new Admin();
$orcid=$_GET['orid'];
if(isset($_GET['order_update'])){
    $orid = $_GET['order_update'];
    $cus_id = $_GET['cus_id'];
    echo $cus_id;
    $stmt=$admin->cud("UPDATE `order` SET `or_status`='order_accepted' WHERE `uid`='$orid' AND `c_id`='$cus_id'",'UPDATED');
    echo "<script>alert('Order Accepted');window.location='../delivery.php?orid=$orcid';</script>";
}
if(isset($_GET['deliver'])){
    $unid = $_GET['deliver'];
    $cus_id = $_GET['cus_id'];
    $stmt=$admin->cud("UPDATE `order` SET `or_status`='Dispatched' WHERE `uid`='$unid'  and `c_id`='$cus_id'",'UPDATED');
    echo "<script>alert('Dispatched');window.location='../delivery.php?orid=$orcid';</script>";
}
if(isset($_GET['on_the_way'])){
    $unid = $_GET['on_the_way'];
  
    $cus_id = $_GET['cus_id'];
	$stmt2=$admin->
    $stmt=$admin->cud("UPDATE `order` SET `or_status`='Delivered' WHERE `uid`='$unid'  and `c_id`='$cus_id' ",'UPDATED');
    echo "<script>alert('Delivered');window.location='../delivery.php?orid=$orcid';</script>";
}
?>