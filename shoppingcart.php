<?php
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];

$stmt1=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `c_id`='$cid'");
$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
$quantity=implode($row1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crafty Corner-Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     
     <!-- Main Style CSS -->
     <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include "mainnavbar.php" ?>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Shopping Cart</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    
    
    <div class="cart-main-wrapper mt-no-text" id="ajax_table">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
					<h1> <center>Shopping Cart     <div style="margin-left:900px;"><b><h2>Items: <?php echo $quantity?></h2><b></div></center></h1>
					
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered" id="ajax_table">
							
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							 $total=0;
							 $g_total=0;
                             $cid=$_SESSION['c_id'];
							 $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `c_id`='$cid'" );
							 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								$price=$row['p_price'];
								$quantity=$row['cr_quantity'];
								$total=$price*$quantity;
                                $g_total=$g_total+$total;
							 
							
							?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="seller/controller/<?php echo $row['p_img']?>" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#"><?php echo $row['p_name']?> <br> s / green</a></td>
                                    <td class="pro-price"><span><?php echo $row['p_price']?></span></td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="<?php echo $quantity?>" type="text">
												<?php echo $row['cr_quantity']?>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
												<?php if ($row['cr_quantity']>1){?>
                                                <button onclick="decrement(<?php echo $row['cr_id']; ?>)" type="button" class="dec qtybutton"><i class="fa fa-minus" aria-hidden="true"></i>
											    </button><?php }?>
                                                <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                <button onclick="increment(<?php echo $row['cr_id']; ?>)" type="button" class="inc qtybutton"><i class="fa fa-plus" aria-hidden="true"></i>
											    </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span><?php echo $total ?></span></td>
                                    <td class="pro-remove"><a ><a href="controller/deletecart.php?cr_id=<?php echo $row['cr_id']?>" class="btn flosun-button primary-btn rounded-0 black-btn" >Delete Cart</a></a></td>
                                </tr>
                                
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            
                        </div>
                        <div class="cart-update mt-sm-16">
                          
                        </div>
                    </div>
                </div>
            </div>
   
            <div class="row">
                <div class="col-lg-5 ml-auto col-custom">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                       
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $g_total?></td>
                                                </tr>
                                    <tr class="total">
                                        <td>Grand Total</td>
                                        <td class="total-amount"><?php echo $g_total ?></td>
                                    </tr>
                                    
                                </table>
                                <?php 
                                    $cid=$_SESSION['c_id'];
                    $stmt3=$admin->ret("SELECT * FROM `cart` WHERE `c_id`='$cid'");
                    $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                    if($stmt3->rowCount()>0){
                                     ?>
                                     <a href="cartorder.php" class="btn flosun-button primary-btn rounded-0 black-btn w-100">Proceed To Checkout</a>
                                     <?php } else { ?>
                            <h5 style="color:red;">cart is full empty</h5>
                        <?php } ?>
                            </div>
                            
                        </div>
                       
                        
                    </div>
                </div>
               
            </div>
            
        </div>
      
    </div>           

	<script>
		function increment(vcart_id){
            var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById("ajax_table").innerHTML = this.responseText;

				}
			};
			xmlhttp.open("GET" , "quantity_ajax.php ? cart_id_increment=" + vcart_id,true);
			xmlhttp.send();
		}
	</script>
	<script>
        function decrement(vcart_id){
          
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
                
				if (this.readyState == 4 && this.status == 200){
                   
					document.getElementById("ajax_table").innerHTML = this.responseText;

				}
			};
            console.log("Beep boop");
			xmlhttp.open("GET" , "quantity_ajax.php ? cart_id_decrement=" + vcart_id,true);
			xmlhttp.send();
		}
	</script>

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Experiences from various customers of this Platform</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php  $stmt=$admin->ret("SELECT * FROM `feedback`");
                        while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4"><?php echo $row['f_feedback']?></p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1"><?php $cid=$row['c_id'];
                                                   $stmt2=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
                                                   $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
                                                   echo $row2['c_name']?></h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


     <!-- Footer Start -->
     <?php include "mainfooter.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Floasun js -->
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>