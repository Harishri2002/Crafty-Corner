<?php
include '../config.php';
$admin =new Admin();

$id=$_GET['cr_id'];
{
    $stmt=$admin->cud("DELETE FROM `cart` WHERE `cr_id`=".$id,"DELETED");
    echo"<script>
    alert('Cart deleted succesfully');
    window.location='../shoppingcart.php';
    </script>";
}
?>