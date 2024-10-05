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
	  <br><br><br><br><br><br>
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
                          <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Edit</h6>
                        </th>
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
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">
							<?php if($row['p_status']=='ACTIVE'){?>
                                    <a class="btn btn-danger" href="controller/modproduct.php?p_id=<?php echo $row['p_id']?>">ACTIVE</a><?php } else {
                                        ?> <a class="btn btn-success">SOLD</a>
                                        <?php } ?>
							</span>
                          </div>
                        </td>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">
							
                                    <a class="btn btn-danger" href="edit.php?p_id=<?php echo $row['p_id']?>">EDIT</a>
                                   
                                        
						              	</span>
                          </div>
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