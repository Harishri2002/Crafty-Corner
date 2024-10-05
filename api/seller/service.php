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
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Services</h5>
            <p class="mb-0">Fill the services provided by the seller</p><br>
            
			<form action="controller/serve.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Service name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                     
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Description</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="des">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Extra Price</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="price">
                    </div>

                    <div class="mb-3 form-check">
                      <label class="form-check-label" for="exampleCheck1">Service Logo</label>
                      <input type="file" class="form-control" id="file" name="img" >
                    </div>
                    <input type="submit" class="btn btn-primary" name="sub"></button>
                  </form>

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