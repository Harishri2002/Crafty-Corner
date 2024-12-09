<?php
include "config.php";
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crafty Corner-products</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Seller Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                
                    <li class="breadcrumb-item text-dark active" aria-current="page">Craftmens</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Seller's Products</h1>
                        <p></p>
                        <br>
                    </div>
                </div>
                <br><br>
                  
                </div>
                    

            </div>
            

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
						    $pcid=$_GET['pcid'];
							$stmt=$admin->ret("SELECT * FROM `product` WHERE `pc_id`='$pcid'");
						    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
						&
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item" style="">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" style="display:inline; height:400px; width:200px;"height="40px" width="40px" src="seller/controller/<?php echo $row['p_img'] ?>" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php echo $row['p_status'] ?></div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href=""><?php echo $row['p_name'] ?></a>
                                    <span class="text-primary me-1">$<?php echo $row['p_price'] ?></span>
                                    <span class="text-body text-decoration-line-through"></span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href="productpage.php?pc_id=<?php echo $row['pc_id']?>"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        
                                        <a class="text-body" href="controller/cart.php?p_id=<?php echo $row['p_id']?>"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
    
                                    </small>
                                </div>                       
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        
                
                        
						<div class="contact-us-area mt-no-text">
        <div class="container custom-area">
		<div class="col-12 text-center">
                         
						 </div>
						 
						 <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
						 <h1 class="display-5 mb-3">Seller's services</h1>
						
						 
					 </div>
            <div class="row">
		
				</h1>
				<br><br>
                <?php 
				     $stmt=$admin->ret("SELECT * FROM `service` WHERE `pc_id`='$pcid'");
                     while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="col-lg-4 col-md-6 col-custom">
				
                    <div class="contact-info-item">
					&nbsp;&nbsp; 
						<img class="rounded-circle mt-5" width="150px" height="150px" src="seller/controller/<?php echo $row['s_img'] ?>">
                        

                        <div class="con-info-txt">
                            <h4><?php echo $row['s_name']?></h4>
                            <p>Description: <?php echo $row['s_desc']?></p>
							<p>Charge: <?php echo $row['s_charge']?></p>
							
                        </div>
                    </div>
                </div>
				<?php  }?>
                
            </div>

			<div class="contact-us-area mt-no-text" >
			</div>
						 <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" ">
						 <h1 class="display-5 mb-3">Feedback's</h1>
						
						 
					 </div>
        <div class="container custom-area" style="display: grid;
                    grid-template-columns: repeat(5, 700px);
                    gap: 20px;">
            <div class="row" >
			
                <?php $stmt=$admin->ret("SELECT * FROM `feedback` WHERE `pc_id`='$pcid'");
                     while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="col-lg-4 col-md-6 col-custom" >
                    <div class="contact-info-item"  >
                        
					
                        
                        <div class="con-info-txt">
                            <h4>date :<?php echo $row['f_date']?></h4>
                            <p> <?php echo $row['f_feedback']?></p>
							
                        </div>
                    </div>
                </div>
				<?php  }?>
                
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>