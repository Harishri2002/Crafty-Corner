<?php
include "config.php";
$admin=new Admin();

?>
</DOCTYPE html>
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

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
   
    
    
    <!-- my Css
    <link href="css1/cindex.css" rel="stylesheet"> -->
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, Manglore,India</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@Craftycorner.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Crafty<span class="text-secondary">Corner</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="aboutus.php" class="nav-item nav-link">About Us</a>
                    <a href="login.php" class="nav-item nav-link active">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="Sellerpage.php" class="dropdown-item">Seller's Camp</a>
                            <a href="viewseller.php" class="dropdown-item">Craftmens</a>
                           
                        </div>
                    </div>
                    <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2" style="decoration:none;">
            
                <a class="btn btn-primary " style="height:40px; width:100px; " href="login.php" >Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Crafts With Love,</h1>
                                    <a href="login.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="aboutus.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Varities of hand crafts by famous craftsmen</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <!-- sadhaksj -->
    
    <section class="container-xxl py-3 about "  id="about"> 

<h1 class="heading"><span><center>About us</center></span></h1>
<div class="row">
    <div class="video-con">
         <video src="img/video2.mp4" loop autoplay muted></video>
         <h3>Best Crafts</h3>
    </div>
    <div class="content">
         <h3>Crafts With Love,</h3>
         <p>We are delighted to present to you our exquisite collection of handcrafted treasures. At our store, we take great pride in offering you the very best in handmade crafts, carefully curated by skilled artisans from around the world.

</p>
    </div>

</div>

<div class="row" id="row2">
    <div class="video-con">
         <video src="img/video3.mp4" loop autoplay muted></video>
         <h3>certified craftmens</h3>
    </div>
    <div class="content">
         <h3>Craftsmen,</h3>
         <p>Our commitment to quality is unwavering. We carefully select artisans who share our values and uphold the highest standards of craftsmanship. Every item in our collection is meticulously crafted using premium materials, ensuring that it not only looks exquisite but also stands the test of time.</p>
        
    </div>

</div>

<div class="row">
    <div class="video-con">
         <video src="img/video2.mp4" loop autoplay muted></video>
         <h3>Quality materials</h3>
    </div>
    <div class="content">
         <h3>Quality,</h3>
         <p>Each piece in our collection is a testament to the artistry, passion, and dedication that goes into creating unique and timeless works of art. Whether you're searching for a stunning piece of jewelry, a beautifully woven textile, or a meticulously carved wooden sculpture, we have something to captivate your senses and ignite your imagination.</p>
        
    </div>
    <center> <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="aboutus.php" >Read More</a></center>
</div>

</section>

                <!-- kgiug -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
             
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                   
                   
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
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


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                        <p>Hight Valued Product</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    
                </div>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
							$stmt=$admin->ret("SELECT * FROM `product`");
						    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
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
                                        <a class="text-body" href="login.php"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href="login.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                    </small>
                                </div>                       
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                        
                
                        <div class="col-12 text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="login.php">Browse More Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    
    <!-- Firm Visit End -->


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


    <!-- Footer Start -->
    <?php include "mainfooter.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){ 
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
     s1.src='https://embed.tawk.to/64859b8b94cf5d49dc5cfd4b/1h2kuf6g0';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

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