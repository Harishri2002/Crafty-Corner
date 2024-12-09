<?php
include 'config.php';
$admin = new Admin();
$cid = $_SESSION['c_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crafty Corner-Seller's Camp</title>
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
	<style>
    .track-line {
      height: 2px !important;
      background-color:red;
      opacity: 1;
    }

    .dot {
      height: 10px;
      width: 10px;
      margin-left: 3px;
      margin-right: 3px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block
    }

    .big-dot {
      height: 25px;
      width: 25px;
      margin-left: 0px;
      margin-right: 0px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block;
    }

    .big-dot i {
      font-size: 12px;
    }

    .card-stepper {
      z-index: 0;
    }
  </style>
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
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Order Status</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>/pages/Order Status.
               
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

	 
    <!-- History Area Start Here -->
    
					<section class="vh-100" style="background-image:url('images/ss.jpg');">
    <div class="container py-5 h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <?php
          $stmt2 = $admin->ret("SELECT * FROM `order` INNER JOIN `product` ON order.p_id=product.p_id WHERE order.c_id='$cid' ORDER BY order.or_id DESC");
          $c=$stmt2->rowCount();
         
          
          while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
            
            $unid = $row['uid'];
            $b_status = $row['or_status'];

          ?>
            <div class="card card-stepper mt-2" style="border-radius: 10px;">

              <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center">
                  <?php
                //   $stmt4 = $admin->ret("SELECT * FROM `order` INNER JOIN `product` ON product.p_id=order.p_id WHERE order.r_id='$cid' AND order.unid='$unid'");
                // $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                    $qty = $row['or_qty'];
                    $price = $row['p_price'];
                    $total = $qty * $price;

                  ?>
                    <div class="d-flex flex-column">
                      <h6 class="lead fw-normal"><?php echo $row['p_name'] ?></h6>
                      <span class="text">Quantity: <?php echo $row['or_qty'] ?> x <?php echo $row['p_price'] ?> = <?php echo $total ?></span>
                    </div>
                 
                  <div>
                    <?php if ($b_status == 'pending') { ?>
                      <button class="btn btn-success">Accepted</button>

                    <?php } ?>





                  </div>
                </div>

                <hr class="my-4">

                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'pending') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill "><span class="dot" style=""></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'order_accepted') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'Dispatched') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'Delivered') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line "><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>

                <div class="d-flex flex-row justify-content-between align-items-center">
                  <div class="d-flex flex-column align-items-start"><span>Order Accepted </span>
                  </div>
                  <div class="d-flex flex-column justify-content-center"><span>Picked By The Courier</span></div>
                  <div class="d-flex flex-column justify-content-center align-items-center"><span>On The Way</span></div>
                  <div class="d-flex flex-column align-items-center"><span>Delivered</span></div>
                </div>
                <?php
                if($b_status=='Delivered'){
                ?>
                
<a href="feedback.php?orid=<?php echo $row['$or_id']?>" class="btn btn-info">Feedback</a>
<?php } ?>
              </div>
          

            </div>
           
          <?php   } ?>

        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br><br><br><br><br><br>
    <!-- Feature History Area End Here -->
    
   
     
    
                
         
                </div>
    <?php include "mainfooter.php" ?>
   
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