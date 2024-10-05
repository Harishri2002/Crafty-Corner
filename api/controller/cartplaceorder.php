<?php 
include '../config.php';
$admin=new Admin();
if(true){
    $cus_id=$_SESSION['c_id'];
	$pid=$_POST['pid'];
    $pcid=$_POST['pcid'];

    $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `c_id`='$cus_id'");
    $un=uniqid();
   
   while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){
    // $cid=$row['cid'];
	$cus_id=$_SESSION['c_id'];
    $pcid=$row['pc_id'];
	$pid=$_POST['pid'];
    $price=$row['p_price'];
    $p_id=$row['p_id'];
    $g_total=0;
    $s_qty=$row['cr_quantity'];

    
    $total=$price*$s_qty;
    $g_total=$g_total + $total;
    $status='pending';
    $stmt1=$admin->rcud("INSERT INTO `order` (`c_id`,`p_id`,`or_qty`,`or_price`,`or_status`,`or_date`,`uid`,`pc_id`)VALUES('$cus_id','$p_id','$s_qty','$g_total','$status',now(),'$un','$pcid')");
   

    $fname=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['add'];
    $phone=$_POST['phone'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $stmt2=$admin->cud("INSERT INTO `shipping` (`or_id`,`c_id`,`p_id`,`name`,`email`,`phone`,`adress`,`state`,`zip`,`date`,`uid`)VALUES('$stmt1','$cus_id','$p_id','$fname','$email','$phone','$address','$state','$zip',now(),'$un')",'INSERTED');

    $stmt4=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$stmt1'");
    $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
    $or_id=$row4['or_id'];
    $trans_id=$_POST['trans_id'];
    $pay_type=$_POST['paymentMethod'];
    $card_name=$_POST['card_name'];
    $card_no=$_POST['card_no'];
    $pay_status='paid';

    $admin_amt=$g_total*0.10;
    $seller_amt=$g_total-$admin_amt;
    $stmt3=$admin->cud("INSERT INTO `payment` (`c_id`,`or_id`,`py_pay_mode`,`trans_id`,`card_name`,`card_no`,`py_date`,`uid`,`py_status`,`py_a_amt`,`py_pc_amt`)VALUES('$cus_id','$or_id','$pay_type','$trans_id','$card_name','$card_no',now(),'$un','$pay_status','$admin_amt','$seller_amt')",'INSERTED');


   }
    $stmt6=$admin->cud("DELETE FROM `cart` WHERE `c_id`='$cus_id'",'DELETED');
   
    echo "<script>alert('Thank you for ordering ');window.location='../feedback.php?pcid=$pcid & orid=$stmt1';</script>";
}
else{
	echo "<script>alert('No Data Found ');window.location='../order.php';</script>";
}
?>