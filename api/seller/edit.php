<?php
include "config.php";
$admin=new Admin();
?>
<?php
    $stmt=$admin->ret("SELECT * FROM `center`");
		$row=$stmt->fetch(PDO::FETCH_ASSOC)
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
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Product Details</h5>
              <div class="card">
                <div class="card-body">
				<?php
		                        $count=1;
                                $pcid=$_SESSION['pc_id'];
							    $pid=$_GET['p_id'];
        	                    $stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$pid'");
                                $row=$stmt->fetch(PDO::FETCH_ASSOC)
                            ?>
                  <form action="controller/upproduct.php?p_id=<?php echo $row['p_id']?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product name</label>
                      <input type="text" value="<?php echo $row['p_name']?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                     
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Description</label>
                      <input type="text" value="<?php echo $row['p_desc']?>" class="form-control" id="exampleInputPassword1" name="des">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Price</label>
                      <input type="text" value="<?php echo $row['p_price']?>" class="form-control" id="exampleInputPassword1" name="price">
                    </div>
                    <div class="mb-8">
                      <label for="category" class="form-label">Category</label>
                      <select name="category"  id="">Category
                        <?php
                           $stmt=$admin->ret("SELECT * FROM `category`");
                          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <Option value="<?php echo $row['ct_id']?> "><?php echo $row['ct_name'] ?></Option>
                       <?php } ?>
                      </select>
                    </div>

                    <div class="mb-3 form-check">
                      <label class="form-check-label" for="exampleCheck1">Product Image</label>
                      <input type="file" class="form-control" id="file" name="img" >
                    </div>
                    <input type="submit" class="btn btn-primary" name="sub" value="Update"></button>
                    &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                 
                  </form>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>


