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
    <title>Crafty Corner</title>
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

    <!-- Exatra -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- extra -->
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Flosun -->
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
    
    <!-- Page Header End -->


    <!-- Product Start -->
    <!-- Single Product Main Area Start -->
	<br>
	<br><br><br><br><br>
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                    <div class="product-details-img">
                        <div class="single-product-img swiper-container gallery-top popup-gallery">
                            <div class="swiper-wrapper">
							<?php
							    $pid=$_GET['p_id'];
						      	$stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid'");
						        $row=$stmt->fetch(PDO::FETCH_ASSOC);
                              
                             ?>
                                <div class="swiper-slide">
                                    <a class="w-100" href="assets/images/product/large-size/1.jpg">
                                        <img class="w-100" src="seller/controller/<?php echo $row['p_img'] ?>" alt="Product">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                              
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"><i class="lnr lnr-arrow-right"></i></div>
                            <div class="swiper-button-prev swiper-button-white"><i class="lnr lnr-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title"><?php echo $row['p_name'] ?></h2>
                        </div>
                        <div class="price-box mb-2">
                            <span class="regular-price"><?php echo $row['p_price'] ?></span>
                          
                        </div>
                      
                        
                        <p class="desc-content mb-5"><?php echo $row['p_desc'] ?></p>
                          <div class="quantity-with_btn mb-5" id="ajax_table">
                           <!--   <div class="quantity">
                            <div class="cart-plus-minus">
                            <?php
        	                     $stmt4=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `p_id`='$pid'");
                                 $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
                                 $qty=implode($row4);
                                 
                                 if($qty>0){
                               ?>

                            <?php
							 $total=0;
							 $g_total=0;
                             $pid=$_GET['p_id'];
							 $stmt=$admin->ret("SELECT * FROM `cart` WHERE `p_id`='$pid'  ");
							 $row=$stmt->fetch(PDO::FETCH_ASSOC);
						     $quantity=$row['cr_quantity'];
								
                               
							      
							
							?>
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
                            <?php } ?>
                            </div> -->
                                             
                            <div class="add-to_cart">
                                <a class="btn product-cart button-icon flosun-button dark-btn" href="controller/cart.php?p_id=<?php echo $pid?>">Add to cart</a>
                                
                            </div>
                            <div class="add-to_cart">
                            <?php
                                 $cid=$_SESSION['c_id'];
        	                     $stmt4=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `p_id`='$pid'");
                                 $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
                                 $qty=implode($row4);
                                 $stmt5=$admin->ret("SELECT * FROM `cart` WHERE `p_id`='$pid' AND `c_id`='$cid'");
                                 $row5=$stmt5->fetch(PDO::FETCH_ASSOC);
                                 
                                 if($qty>0){
                               ?>
                                    
                <a class="btn product-cart button-icon flosun-button dark-btn" href="order.php?cr_id=<?php echo $row5['cr_id']?>">Buy</a>
                                <?php } ?>
                                
                                
                            </div>
                        </div>
                        <div class="social-share mb-4">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div>
                        <div class="payment">
                            <a href="#"><img class="border" src="assets/images/payment/payment-icon.png" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-no-text">
                <div class="col-lg-12 col-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Service's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Craftsmen</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content">
							<?php 	$stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid'");
						            $row=$stmt->fetch(PDO::FETCH_ASSOC);
                                    $pcid=$row['pc_id'];
                                     echo $row['p_desc'] ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content  border p-3">
                                <div class="review_address_inner">
                                    <!-- Start Single Review -->
									<?php
						            $stmt3=$admin->ret("SELECT * FROM `feedback` WHERE `pc_id`='$pcid'");
						            while($row3=$stmt3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                    <div class="pro_review mb-5">
                                        <div class="review_thumb">
                                            <img alt="review images" src="assets/images/review/1.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info mb-2">
                                                <div class="product-rating mb-2">
                                                  
                                                </div>
                                                <h5><?php $cid=$row3['c_id'];
                                                          $stmt2=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
                                                          $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
                                                          echo $row2['c_name']?><span><?php echo $row3['f_date']?></span></h5>
                                            </div>
                                            <p><?php echo $row3['f_feedback']?></p>
                                        </div>
                                    </div>
									<?php }?>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
								
                               
								
                                <!-- End RAting Area -->
								
                                
								
                            </div>
                            <!-- End Single Content -->
							<?php
						    $stmt2=$admin->ret("SELECT * FROM `service` WHERE `pc_id`='$pcid'");
						    while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="shipping-policy">
                                <h4 class="title-3 mb-4"><?php echo $row2['s_name'] ?></h4>
                                <p class="desc-content mb-2"><?php echo $row2['s_desc'] ?></p>
                                <ul class="policy-list mb-2">
                                    <li>Extra Charge: <?php echo $row2['s_charge'] ?></li>
                                </ul>
                            </div>
							<?php }?>
                        </div>

						<?php
						    $stmt1=$admin->ret("SELECT * FROM `center` WHERE `pc_id`='$pcid'");
						    $row1=$stmt1->fetch(PDO::FETCH_ASSOC);
                        ?>

                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <h4 class="title-3 mb-4"><?php echo $row1['pc_name']?></h4>
                                <table class="table border">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>E-mail : <?php echo $row1['pc_email']?></span></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Phone : <?php echo $row1['pc_phone']?></span></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td class="cun-name">City : <?php echo $row1['pc_city']?></td>
                                            
                                          
                                        </tr>
                                       
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->




    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include "mainfooter.php" ?>
    <!-- Footer End -->

    <script>
		function increment(vcart_id){
            var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById("ajax_table").innerHTML = this.responseText;

				}
			};
			xmlhttp.open("GET" , "prodpage_ajax.php ? cart_id_increment=" + vcart_id,true);
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
			xmlhttp.open("GET" , "prodpage_ajax.php ? cart_id_decrement=" + vcart_id,true);
			xmlhttp.send();
		}
	</script>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>