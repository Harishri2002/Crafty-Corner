<?php
include "config.php";
$admin=new Admin();
$cid=$_SESSION['c_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crafty Corner-Order</title>
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
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                
                    <li class="breadcrumb-item text-dark active" aria-current="page">Order</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

	 <!-- About Area Start Here -->
	 <div class="about-area mt-no-text">
        <div class="container custom-area">
            <div class="row mb-30 align-items-center">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Greetings.</span>
                            <h3 class="section-title-3 pb-0">Welcome to world of Crafts</h3>
                        </div>
                        <div class="desc-content">
                            <p>Welcome to our craft selling website, where creativity meets opportunity! We are passionate about connecting artisans and craft enthusiasts from around the world, providing a platform for artisans to showcase their unique creations and for customers to discover and purchase one-of-a-kind handmade items.</p><br>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="img/1.jpg" alt="About Image">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="img/2.jpg" alt="About Image">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1"></span>
                            <h3 class="section-title-3 pb-0">Gift of Love</h3>
                        </div>
                        <div class="desc-content">
                            <p>At our craft selling website, we believe in the power of handmade crafts to tell stories, evoke emotions, and bring joy to both the creator and the recipient. We are dedicated to supporting independent artisans, makers, and designers who pour their heart and soul into their craft. Whether you're a seasoned artisan or just starting out, we welcome you to join our vibrant community and share your talent with the world.</p>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
    
	<div class="about-area mt-no-text">
        <div class="container custom-area">
            <div class="row mb-30 align-items-center">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1"></span>
                            <h3 class="section-title-3 pb-0">Made with love</h3>
                        </div>
                        <div class="desc-content">
                            <p>For customers, our craft selling website is a treasure trove of unique and authentic handmade items. Whether you're searching for a meaningful gift, a special piece of home decor, or something to treat yourself with, we've got you covered. Browse through a wide selection of handmade products, carefully curated by artisans from around the world. Each item tells a story, reflects the individuality of its creator, and represents the spirit of craftsmanship.</p><br>
                        </div>
                        <a href="product.php" class="btn flosun-button secondary-btn rounded-0">Shop Collection</a>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="img/3.jpg" alt="About Image">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
           
        </div>
    </div>
	
    <!-- About Us Area End Here -->
    <!-- History Area Start Here -->
    <div class="our-history-area gray-bg pt-5 mt-text-3">
        <div class="our-history-area">
            <div class="container custom-area">
                <div class="row">
                    <!--Section Title Start-->
                    <div class="col-12 col-custom">
                        <div class="section-title text-center mb-30">
                            <span class="section-title-1">A little story about us</span>
                            <h2 class="section-title-large">Our History</h2>
                        </div>
                    </div>
                    <!--Section Title End-->
                </div>
                <div class="row">
                    <div class="col-lg-8 ms-auto me-auto">
                        <div class="history-area-content text-center border-0">
                            <p><strong>Shopping on our platform is a delightful experience, with secure payment options, detailed product descriptions, and high-quality images that capture the essence of each item. We foster a sense of community by encouraging customers to engage with artisans, ask questions, and even request customizations. By purchasing from our craft selling website, you not only acquire a unique and beautiful item but also support independent artisans and their creative journeys.

Join us on this creative adventure and become part of a passionate community that celebrates the beauty of handmade crafts. Whether you're an artisan or a customer, we invite you to explore, connect, and experience the joy of craftsmanship. Together, let's embrace the art of handmade and bring the world closer, one craft at a time.
</strong></p>
                            <p>For customers, our craft selling website is a treasure trove of unique and authentic handmade items. Whether you're searching for a meaningful gift, a special piece of home decor, or something to treat yourself with, we've got you covered. Browse through a wide selection of handmade products, carefully curated by artisans from around the world. Each item tells a story, reflects the individuality of its creator, and represents the spirit of craftsmanship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature History Area End Here -->
    <!-- Team Member Area Start Here -->
    <div class="team-member-wrapper mt-text-3">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">The guys behind the curtains</span>
                        <h2 class="section-title-2">a team of highly-skilled experts</h2>
                    </div>
                </div>
            </div>
            <div class="row ht-team-member-style-two pt-40">
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="assets/images/team/1.jpg" alt="">
                                <div class="social-networks">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Dollie Horton </h5>
                                <div class="position">Marketing</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="assets/images/team/2.jpg" alt="">
                                <div class="social-networks">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Stephen Mearsley </h5>
                                <div class="position">President & CEO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="assets/images/team/3.jpg" alt="">
                                <div class="social-networks">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Maggie Strickland </h5>
                                <div class="position">Financial Services</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Member Area End Here -->
    <!-- Brand Logo Area Start Here -->
    
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Goal</h1>
                <p>The major goals that we try to Acheive Through Out Our Journey Are,</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/craft1.png" alt="">
                        <h4 class="mb-3">Uniting Craftmens</h4>
                        <p class="mb-4">bringing together artisans and craftsmen to collaborate, share knowledge, and collectively work towards common goals.: When craftsmen come together, they have the opportunity to share their expertise, techniques, and experiences. This knowledge exchange helps in preserving traditional crafts, promoting innovation, and enhancing the overall skill level within the community.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="aboutus.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/craft2.png" alt="">
                        <h4 class="mb-3">Encouraging Artisians</h4>
                        <p class="mb-4"> Encouraging young individuals to learn and pursue traditional crafts is crucial for their continuity. Institutions and organizations can offer vocational training, apprenticeships, or workshops to pass on artisanal skills to the next generation. Providing educational opportunities can inspire and nurture budding craftsmen.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="aboutus.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/craft3.png" alt="">
                        <h4 class="mb-3">Crossing Boundries</h4>
                        <p class="mb-4"> By crossing boundaries, artisans can tap into global markets and reach customers from different parts of the world. Online platforms, e-commerce websites, and social media enable artisans to showcase and sell their handcrafted products to a broader customer base.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="aboutus.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

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


    <!-- Testimonial Start -->
    
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