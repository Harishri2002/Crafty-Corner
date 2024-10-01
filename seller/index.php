<?php
include 'config.php';
$admin=new Admin();
$pcid=$_SESSION['pc_id'];
$stmt=$admin->ret("SELECT * FROM `center` WHERE `pc_id`='$pcid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CC-seller's camps</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    
    <!-- Sidebar Start -->
    <?php include "sidebar.php" ?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include "header.php" ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
            <div class="card-body p-4">
            <?php
		                           $count=1;
                               $pcid=$_SESSION['pc_id'];
        	                       $stmt3=$admin->ret("SELECT COUNT(*) FROM `product` WHERE `pc_id`='$pcid'");
                                 $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                                 $quantity=implode($row3);
                            ?>
                    <h5 class="card-title mb-9 fw-semibold">Number of Products</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $quantity?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                           
                          </span>
                          
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                <div class="card-body p-4">
                <?php
		                           $count=1;
                               $pcid=$_SESSION['pc_id'];
        	                       $stmt4=$admin->ret("SELECT COUNT(*) FROM `order` WHERE `pc_id`='$pcid'");
                                 $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
                                 $quantity=implode($row4);
                            ?>
                    <h5 class="card-title mb-9 fw-semibold">Number of Orders</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $quantity?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                           
                          </span>
                          
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>

                <div class="card overflow-hidden">
                <div class="card-body p-4">
                <?php
		                           $count=1;
                               $pcid=$_SESSION['pc_id'];
        	                       $stmt5=$admin->ret("SELECT SUM(`py_pc_amt`) FROM `payment` INNER JOIN `order` ON order.or_id=payment.or_id WHERE `pc_id`='$pcid'");
                                 $row5=$stmt5->fetch(PDO::FETCH_ASSOC);
                                 $total=implode($row5);
                            ?>
                    <h5 class="card-title mb-9 fw-semibold">Income</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php echo $total?></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                           
                          </span>
                          
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         
            
          </div>
          <div class="row" style="margin-left:10px;">
	  <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Products</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Price</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Image</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Category</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					        <?php
		                           $count=1;
                               $pcid=$_SESSION['pc_id'];
        	                       $stmt=$admin->ret("SELECT * FROM `product` WHERE `pc_id`='$pcid'");
                                 
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $count++?></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['p_name'] ?></h6>
                            <span class="fw-normal"><?php echo $row['p_desc'] ?></span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['p_price'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"> <img height="60px" width="60px" src="../seller/controller/<?php echo $row['p_img'] ?>"></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['p_status'] ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php $ctid=$row['ct_id'];
                                                          $stmt2=$admin->ret("SELECT * FROM `category` WHERE `ct_id`='$ctid'");
                                 
                                                          $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
                                                           echo $row2['ct_name']; ?></p>
                        </td>
                      </tr> 
					  <?php } ?>                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
       
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://CraftyCorner.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">CraftyCorner.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>