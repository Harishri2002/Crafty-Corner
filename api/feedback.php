<?php
include "config.php";
$admin=new Admin();

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
    
    <!-- Page Header End -->
        <center>
            <div class="comments-area comments-reply-area">
            <div class="row">
                <div class="col-lg-12 col-custom" width="200px;">
                    <form action="controller/feedback.php" class="comment-form-area" method="post">
                        <br><br><br><br><br>
                        <center>
                        <h1>Thank You For Ordering</h1>
                        <p align="center">Thank you for placing your order with us. We truly appreciate your business and the trust you have placed in our company. Your satisfaction is our top priority, and we are committed to ensuring that your order is handled with the utmost care and attention to detail.

                        </p><p align="center">We want to assure you that we are working diligently to process your order as quickly as possible. Our dedicated team is carefully preparing your items for shipment, ensuring that they are packaged securely to reach you in perfect condition.</p>
                            </center>
                        <div class="row comment-input">
                            <br><br>
                            <h2>Feedback</h2>
                            
                            
                        </div>
                        <div class="comment-form-comment mb-3">
                            
                            <textarea class="comment-notes" required="required" name="feed"></textarea>
                        </div>
                        <div class="comment-form-submit">
                        <?php   $orid=$_GET['orid'];
                                                                        $pcid=$_GET['pcid'];
                                                                        ?>
                        <input type="hidden" value="<?php echo $pcid?>" name="pcid">
                        <input type="hidden" value="<?php echo $orid?>" name="orid">
                            <button class="btn flosun-button secondary-btn rounded-0" type="submit"name="sub">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </center>
    <br><br><br><br><br><br>

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>