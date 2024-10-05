<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$des=$_POST['des'];
	$price=$_POST['price'];
	$pcid=$_SESSION['pc_id'];
	$imgpath1='upload/'.basename($_FILES['img']['name']);
	  move_uploaded_file($_FILES['img']['tmp_name'],$imgpath1);
	
	$stmt=$admin->cud("INSERT INTO `service`(`s_name`,`s_desc`,`s_charge`,`s_img`,`s_status`,`pc_id`)VALUES('$name','$des','$price','$imgpath1','ACTIVE','$pcid')","saved");
echo "<script>alert('Service updated');window.location='../service.php';</script>"; 
    
}
?>