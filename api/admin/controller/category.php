<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$ctname=$_POST['name'];
	$stmt=$admin->cud("INSERT INTO `category`(`ct_name`,`ct_status`,`ct_posted_date`)VALUES('$ctname','ACTIVE',now())","saved");
echo "<script>alert('Category Added');window.location='../category.php';</script>";
    
}
?>
