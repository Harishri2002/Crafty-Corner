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
      <?php include "header.php" ?>
      <!--  Header End -->
	  <br><br><br><br>
	  <div class="row" style="margin-left:10px;">
	  <div class="col-lg-8 d-flex align-items-stretch">
          
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Shipping</h5>
                <div class="table">
                  <table class="table text-nowrap mb-0 " border="2">
                    <thead class="text-dark fs-4">
                      <tr>
                        
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Phone</h6>
                        </th>
						<th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Adress</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">state</h6>
                        </th>
						<th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">zip</h6>
                        </th>
						<th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">date</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					        <?php
		                           $count=1;
								   $pcid=$_SESSION['pc_id'];
								   $orid=$_GET['orid'];
        	                       $stmt=$admin->ret("SELECT * FROM `shipping` WHERE `or_id`='$orid'");
                                 
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                       
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['name'] ?></h6>                     
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['phone'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['email'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['adress'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['state'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['zip'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['date'] ?></p>
                        </td>

                      </tr> 
					  <?php } ?>                   
                    </tbody>
                  </table>

                  <!-- payment -->
                  <br>
                  <h5 class="card-title fw-semibold mb-4">Payment</h5>
                
                  <table class="table text-nowrap mb-0 " border="2">
                    <thead class="text-dark fs-4">
                      <tr>
                        
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Pay Mode</h6>
                        </th>
						<th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Amount Recived(After commission)</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
					        <?php
		                           $count=1;
								   $pcid=$_SESSION['pc_id'];
								   $orid=$_GET['orid'];
        	                       $stmt=$admin->ret("SELECT * FROM `payment` WHERE `or_id`='$orid'");
		                           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                       
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?php echo $row['py_date'] ?></h6>                     
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['py_pay_mode'] ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['py_status'] ?></p>
                        </td>
						<td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $row['py_pc_amt'] ?></p>
                        </td>
						<td class="border-bottom-0">

                      </tr> 
					  <?php } ?>                   
                    </tbody>
                  </table>

                  <!-- stop payment -->
                  <br><br><br><br>
                  <center>
                  <?php 
                               $i=1;
                                $sum = 0;
                                $pcid=$_SESSION['pc_id'];
                                $orid=$_GET['orid'];
                               $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `shipping` ON shipping.or_id=order.or_id WHERE `pc_id` = '$pcid'");
                               $row=$stmt->fetch(PDO::FETCH_ASSOC);
                                
                                $stmt1=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$orid'");
                               
                                $row1=$stmt1->fetch(PDO::FETCH_ASSOC);
                                $unid=$row1['uid'];
                                
                               ?>
                     <?php
										if($row1['or_status']=='pending'){
											?>
											 <a type="button" class="btn btn-info btn-rounded btn-fw" href="controller/updatestatus.php?order_update=<?php echo $row1['uid'] ?> & cus_id=<?php echo $row1['c_id'] ?>& orid=<?php echo $orid ?>">Accept</a>
											 
						
											<?php
										 } else
                     if($row1['or_status']=='order_accepted'){?>
                                    <a type="button" class="btn btn-info btn-rounded btn-fw" href="controller/updatestatus.php?deliver=<?php echo $row1['uid'] ?> & cus_id=<?php echo $row1['c_id'] ?>& orid=<?php echo $orid ?>"> Dispatch</a>
                                 
                    <?php }elseif($row1['or_status']=='Dispatched'){?>
                                    <a type="button" class="btn btn-success btn-rounded btn-fw" href="controller/updatestatus.php?on_the_way=<?php echo $row1['uid'] ?> & cus_id=<?php echo $row1['c_id'] ?>& orid=<?php echo $orid ?>">On The Way</a>
                                 
                    <?php }elseif($row1['or_status']=='Delivered'){?>
                                    <a type="button" class="btn btn-success btn-rounded btn-fw" href="">Delivered</a>
                                 
                    <?php }   ?>
                    </center>
                  

				  
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