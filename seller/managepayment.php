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
	  <div class="row" style="margin-left:10px;">
	  <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Manage Order</h5>
                <div class="table">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
					  <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Customer Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">product name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Amount</h6>
                        </th>
						<th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">paymode</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">pay status</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					        <?php
		                           $count=1;
								                $pcid=$_SESSION['pc_id'];
        	                       $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `payment` ON payment.or_id=order.or_id WHERE `pc_id`='$pcid' ");
    
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo $count++?></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php  
							                                    $pid=$row['or_id'];
							                                    $stmt2=$admin->ret("SELECT * FROM `shipping` WHERE `or_id`='$pid'");
																$row1=$stmt2->fetch(PDO::FETCH_ASSOC);
							                                     echo $row1['name'];
														?>
																 </h6>                     
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php  
							                                    $pid=$row['p_id'];
							                                    $stmt3=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid'");
																$row2=$stmt3->fetch(PDO::FETCH_ASSOC);
							                                     echo $row2['p_name'];
														?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['or_price'] ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['py_pay_mode'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['or_date'] ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['py_status'] ?></p>
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
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>