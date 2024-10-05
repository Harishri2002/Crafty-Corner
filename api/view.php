<?php
include 'config.php';
$admin = new Admin();
$cid = $_SESSION['c_id'];

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from s7template.com/tf/carace/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 11:16:03 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Track Order</title>
  <link rel=icon href="assets/img/favicon.jpg" sizes="20x20" type="image/png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Stylesheet -->
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
  <link rel="stylesheet" href="assets/css/vendor.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/remixicon/remixicon.css">
  <style>
    .track-line {
      height: 2px !important;
      background-color:red;
      opacity: 1;
    }

    .dot {
      height: 10px;
      width: 10px;
      margin-left: 3px;
      margin-right: 3px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block
    }

    .big-dot {
      height: 25px;
      width: 25px;
      margin-left: 0px;
      margin-right: 0px;
      margin-top: 0px;
      background-color: #488978;
      border-radius: 50%;
      display: inline-block;
    }

    .big-dot i {
      font-size: 12px;
    }

    .card-stepper {
      z-index: 0
    }
  </style>
</head>

<body>

  <!-- preloader area start -->
  <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
  <!-- preloader area end -->

  <!-- search popup start-->
  
  <!-- search popup end-->

  <!-- navbar start -->

  <!-- navbar end -->

  <!-- breadcrumb start -->


  <section class="vh-100" style="background-image:url('images/ss.jpg');">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <?php
          $stmt2 = $admin->ret("SELECT * FROM `order1` INNER JOIN `product` ON order1.pid=product.pid WHERE order1.cid='$cid' ORDER BY order1.oid DESC");
          $c=$stmt2->rowCount();
         
          
          while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
            
            $unid = $row['unid'];
            $b_status = $row['orstatus'];

          ?>
            <div class="card card-stepper mt-2" style="border-radius: 10px;">

              <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center">
                  <?php
                //   $stmt4 = $admin->ret("SELECT * FROM `order` INNER JOIN `product` ON product.p_id=order.p_id WHERE order.r_id='$cid' AND order.unid='$unid'");
                // $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                    $qty = $row['orqty'];
                    $price = $row['pprice'];
                    $total = $qty * $price;

                  ?>
                    <div class="d-flex flex-column">
                      <h6 class="lead fw-normal"><?php echo $row['pname'] ?></h6>
                      <span class="text">Quantity: <?php echo $row['orqty'] ?> x <?php echo $row['pprice'] ?> = <?php echo $total ?></span>
                    </div>
                 
                  <div>
                    <?php if ($b_status == 'assigned') { ?>
                      <button class="btn btn-success">Accepted</button>

                    <?php } ?>





                  </div>
                </div>

                <hr class="my-4">

                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'accepted') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill "><span class="dot" style=""></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'assigned') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill "><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'on_the_way') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill "><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                  <?php if ($b_status == 'deliver') { ?>
                    <span class="dot"></span>
                    <hr class="flex-fill track-line "><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="dot"></span>
                    <hr class="flex-fill track-line"><span class="d-flex justify-content-center align-items-center big-dot dot">
                      <i class="fa fa-check text-white"></i></span>
                  <?php } ?>
                </div>

                <div class="d-flex flex-row justify-content-between align-items-center">
                  <div class="d-flex flex-column align-items-start"><span>Order Accepted </span>
                  </div>
                  <div class="d-flex flex-column justify-content-center"><span>Picked By The Courier</span></div>
                  <div class="d-flex flex-column justify-content-center align-items-center"><span>On The Way</span></div>
                  <div class="d-flex flex-column align-items-center"><span>Delivered</span></div>
                </div>
                <?php
                if($b_status=='deliver'){
                ?>
                
<a href="feedback.php?rid=<?php echo $cid;?>" class="btn btn-info">Feedback</a>
<?php } ?>
              </div>
          

            </div>
           
          <?php   } ?>

        </div>
      </div>
    </div>
  </section>

  <!-- feddback area start -->
  <!--Modal Launch Button-->


  <!--Division for Modal-->
 
  <!-- feedback area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
  </div>
  <!-- back to top area end -->


  <!-- all plugins here -->
  <script src="assets/js/vendor.js"></script>
  <!-- main js  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
</body>

<!-- Mirrored from s7template.com/tf/carace/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 11:16:03 GMT -->

</html>