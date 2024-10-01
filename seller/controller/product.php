<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$des=$_POST['des'];
	$price=$_POST['price'];
	$cat=$_POST['category'];
	$pcid=$_SESSION['pc_id'];
	$imgpath1='upload/'.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$imgpath1);
	
	$stmt=$admin->cud("INSERT INTO `product`(`p_name`,`ct_id`,`p_desc`,`p_price`,`p_img`,`p_status`,`pc_id`,`p_posted_date`=now())VALUES('$name','$cat','$des','$price','$imgpath1','ACTIVE','$pcid')","saved");
echo "<script>alert('Product updated');window.location='../manageproduct.php';</script>"; 
    
}
?>