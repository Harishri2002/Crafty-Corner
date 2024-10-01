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
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="logo/logo21.png" width="260" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                

                <div class="row">
        <div class="col-xl-4" style=" width:350px; height:200px; margin-left:100px;">
            <!-- Profile picture card-->
          
            <div class="card mb-4 mb-xl-0" >
                <div class="card-header" >Profile Picture</div>
                <div class="card-body text-center" >
                    <!-- Profile picture image-->
                    <img  style=" width:200px; height:200px; margin-left:20px;" class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <br>
                    <br>
                    <!-- Profile picture help block-->
                    <form action="controller/sregister.php" method="POST" enctype="multipart/form-data">
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <label class="form-label" for="customFile">Default file input example</label>
                    <input type="file" class="form-control" id="file" name="pfp">
                 
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
                 
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="name" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleInputtext1" name="phone" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputtext1" name="add" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">City</label>
                    <input type="text" class="form-control" id="exampleInputtext1"  name="city" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">State</label>
                    <input type="text" class="form-control" id="exampleInputtext1"  name="state" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Pin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="pin" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Addhaar number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="adh" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Upload Addhar picture</label >
                    <input type="file" class="form-control" id="file"   name="adhpic" required>
                  </div>
                  

                  <input href="login.php" type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="sub" value="Sign Up">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>