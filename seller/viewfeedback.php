<?php
include "config.php";
$admin=new Admin();

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CC-seller's camp</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->


    <!-- Sidebar Start -->
    <?php include "sidebar.php" ?>
    <!--  Sidebar End -->


    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
     <!--  Header Start -->
     <?php include "header.php" ?>
      <!--  Header End -->
      <!--  Header End -->
	  <br><br><br>
	  <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Feedbacks</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
					                    <?php
		                           $count=1;
								                $pcid=$_SESSION['pc_id'];
        	                       $stmt=$admin->ret("SELECT * FROM `feedback` WHERE `pc_id`='$pcid' ");
    
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <h4 class="fw-semibold mb-3"><?php echo $row['f_feedback'] ?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                         
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0"><?php echo $row['f_date'] ?></p>
                          <p class="fs-3 mb-0"></p>
                        </div>
						<br><br>
						<?php } ?>      
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
				   
                  
                </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>