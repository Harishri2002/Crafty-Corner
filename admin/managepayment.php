<?php
include "config.php";
$admin=new Admin();
 if(!isset($_SESSION['a_id'])){
    header('location:signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include "headersidebar.php" ?>
        

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include "navbar.php" ?>

<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Users</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Sl No.</th>
                                    <th scope="col">Cutomer Name</th>
                                    <th scope="col">Transaction date</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">paymode</th>
									<th scope="col">Seller Amount</th>
                                    <th scope="col">Admin Amount</th>
                                    <th scope="col">Status</th>
                                    
                                    
                                </tr>
                            </thead>
                            <?php
		                            $count=1;
        	                       $stmt=$admin->ret("SELECT * FROM `payment`");
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tbody>
                                <tr>
							  	    <td>
				                        <?php echo $count++?>
			                        </td>
                                   
                                    <td>
				                         <?php $cid=$row['c_id'];
										        $stmt2=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
		                                        $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
										         echo $row2['c_name']; ?>
			                        </td>
                                    <td>
				                         <?php echo $row['py_date'] ?>
			                        </td>
                                    <td>
				                         <?php $orid=$row['or_id'];
										        $stmt3=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$orid' ");
		                                        $row3=$stmt3->fetch(PDO::FETCH_ASSOC);

										        $pid=$row3['p_id']; 
												$stmt4=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid' ");
		                                        $row4=$stmt4->fetch(PDO::FETCH_ASSOC); 
												echo $row4['p_name']?>
			                        </td>
                                    <td>
				                         <?php echo $row['py_pay_mode'] ?>
			                        </td>
									<td>
				                         <?php echo $row['py_pc_amt'] ?>
			                        </td>

                                    <td>
				                         <?php echo $row['py_a_amt'] ?>
			                        </td>
                                   
                                    <td>
				                         <?php echo $row['py_status'] ?>
			                        </td>
                                    <td>
                                  

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>