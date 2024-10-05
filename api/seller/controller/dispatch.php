<?php
include '../config.php';
$admin =new Admin();

$orid=$_GET['or_id'];
{
   
	$stmt2=$admin->cud("UPDATE `order` SET `or_status`='Delivered' WHERE `or_id`='$orid'",'Updated');
    echo"<script>
    alert('Order Delivered');
    window.location='../delivery.php?or_id=$orid';
    </script>";
}
?>

