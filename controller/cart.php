<?php
include '../config.php';
$admin=new Admin();
if(isset($_SESSION['c_id'])){
	$cid=$_SESSION['c_id'];
}
if(isset($_GET['p_id'])){
	$pid=$_GET['p_id'];
	$cid=$_SESSION['c_id'];
	$quantity=1;
	$stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid'");
	$p_row=$stmt->fetch(PDO::FETCH_ASSOC);
	$p_price=$p_row['p_price'];
	$cart_total=$quantity*$p_price;
    
	$stmt1=$admin->ret("SELECT * FROM `cart` WHERE `c_id`='$cid' AND `p_id`='$pid'");
	$cart_row=$stmt1->fetch(PDO::FETCH_ASSOC);
	$num=$stmt1->rowCount();
	if($num>0){
		$quantity_cart=$cart_row['cr_quantity']+1;
		$stmt2=$admin->cud("UPDATE `cart` SET `cr_quantity`='$quantity_cart' WHERE `c_id`='$cid' AND `p_id`='$pid'",'Updated');
		echo"<script>alert('Cart Updated Successfully');window.location='../productpage.php?p_id=$pid';</script>";
	}else{
		$stmt3=$admin->cud("INSERT INTO `cart`(`c_id`,`p_id`,`cr_quantity`,`cr_added_date`)VALUES('$cid','$pid','$quantity',now())",'inserted');
       echo "<script>alert('Added to cart');window.location='../productpage.php?p_id=$pid';</script>";
	} 
}
?>