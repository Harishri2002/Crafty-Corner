<?php
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
$stmt=$admin->ret("SELECT * FROM `customer` WHERE `c_id`='$cid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt1 = $admin->ret("SELECT COUNT(*) FROM `cart` ");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$qantity = implode($row1);
$crid=$_GET['cr_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crafty Corner-Order</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Exatra -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- extra -->
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Flosun -->
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include "mainnavbar.php" ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Order</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                
                    <li class="breadcrumb-item text-dark active" aria-current="page">Order</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
	<div class="checkout-area mt-no-text">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="coupon-accordion">
                       
                        <div id="checkout-login" class="coupon-content">
                            
                        </div>
                     
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 col-custom">
                    
                        <div class="checkbox-form">
                        <form action="controller/placeorder.php?crid=<?php echo $crid?>" method="POST" novalidate>
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12 col-custom">
                                    
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="name" value="<?php echo $row['c_name'];?>">
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input placeholder="Street address" type="text" value="<?php echo $row['c_add'];?>" name="add">
                                    </div>
                                </div>
                               
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" name="city" value="<?php echo $row['c_city'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="state" value="<?php echo $row['c_state'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="zip" value="<?php echo $row['c_pin'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email" name="email" value="<?php echo $row['c_email'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone" value="<?php echo $row['c_phone'];?>">
                                    </div>
                                </div>
								<div class="order-button-payment">
                                    <input class="btn flosun-button secondary-btn black-color rounded-0 w-100" type="submit" name="sub" value="Update Details">
                                </div>
                                
                            </div>
                        </div>
                
                </div>
				
                <div class="col-lg-6 col-12 col-custom">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
						<?php
				        	$crid=$_GET['cr_id'];
				        	$stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `cr_id`='$crid'" );
				        	$row=$stmt->fetch(PDO::FETCH_ASSOC);
                            $pcid=$row['pc_id'];
					        $stmt2=$admin->ret("SELECT * FROM `service` WHERE `pc_id`='$pcid'");
					        $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
                            $extra=0;
				        	$price=$row['p_price'];
                            $quantity = $row['cr_quantity'];
                            $total = $price * $quantity;
				          	$extra=$row2['s_charge'];
				         	$g_total=$total + $extra;
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> Price<strong class="product-quantity">
                                </strong></td>
                                        <td class="cart-product-total text-center"><span class="amount"><?php echo $price?> x <?php echo $row['cr_quantity']?><small></small></span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> Service Charge<strong class="product-quantity">
                                </strong></td>
                                        <td class="cart-product-total text-center"><span class="amount"><?php echo $extra?></span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td class="text-center"><strong><span class="amount"><?php echo $g_total?></span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                        <h4 class="mb-3">Payment</h4>
                                            <h5 class="panel-title mb-3">
                                                
                                                <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Direct Bank Transfer.
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Cheque Payment
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    PayPal
                                                </a>
                                            </h5>
                                        </div>

                                        <!-- payment -->
                                       

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="upi" id="upi" onclick="cardform(this.value)" required>
                <label class="custom-control-label" for="credit">UPI/Netbanking</label>
                <div style="display: none;" id="upi_div">
                  <b>scan and pay</b>
                  <img src="https://th.bing.com/th/id/OIP.-I8JMVhpM31DO8sqEGpocgHaHa?w=187&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7">

                  <!-- transaction id input form-->
                  <div class="billing-address-form">
                    <p><input type="text" placeholder="Enter Transaction id" name="trans_id"></p>
                  </div>
                </div>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="cash" id="cash" onclick="cardform(this.value)" required>
                <label class="custom-control-label" for="debit">Cash on Delivery</label>
                <div style="display: none;" id="cash_div">
                  <b>pay when your receive item</b>
                </div>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="card" id="card" onclick="cardform(this.value)" required>
                <label class="custom-control-label" for="paypal">Debit card/Credit card</label>
                <div style="display: none;" id="card_div">
                  <!-- 🔴 card paymen  body starts -->
                  <div class="container d-flex  main">
                    <div class="card">
                      <!-- <div class="d-flex justify-content-between px-3 pt-4"> <span class="pay">Pay amount</span>
                                                                <div class="amount">
                                                                    <div class="inner"><span class="dollar">$</span><span class="total">32</span></div>
                                                                </div>
                                                            </div> -->

                      <!-- <form action=""> -->
                      <div class="px-3 pt-3">
                        <label for="card number" class="d-flex justify-content-between"><span class="labeltxt">CARD NAME</span></label>
                        <input type="text" class="form-control inputtxt" id="cc-name" name="card_name" placeholder="CARD NAME"  >
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="px-3 pt-3">
                        <label for="card number" class="d-flex justify-content-between"><span class="labeltxt">CARD NUMBER</span><img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" width="25" class="image" /></label>
                        <input type="text" class="form-control inputtxt" id="card_no" name="card_no" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" >
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>


                      <div class="d-flex justify-content-between px-3 pt-4">
                        <div><label for="date" class="exptxt"> Expiry </label><input type="text" class="form-control expiry" placeholder="MM / YY" id="card_expiry" name="card_expiry" minlength="5" maxlength="5" >
                          <div class="invalid-feedback">
                            Expiration date required
                          </div>
                        </div>
                        <div><label for="cvv" class="cvvtxt">CVV / CVC</label><input type="text" name="cvv" class="form-control cvv" id="exp" minlength="3" maxlength="3" >
                          <div class="invalid-feedback">
                            Security code required
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between px-3 pt-4 pb-4">
                        <!-- <div><button type="reset" class="btn btn-light cancel">clear</button></div> -->

                        <!-- <div><button type="button" class="btn btn-primary payment">Make Payment</button></div> -->
                        <!-- <div><input type="submit" class="btn btn-primary payment" value="Make Payment"></div> -->
                      </div>
                      <!-- </form> -->
                    </div>
                  </div>
                                        <!-- end payment -->
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    
                                        <input type="hidden" value="<?php echo $total?>" name="tot">
                                        <input type="hidden" value="<?php echo $row['p_id']?>" name="pid">
                                        <input type="hidden" value="<?php echo $pcid?>" name="pcid">
                                       
                                    <button class="btn flosun-button secondary-btn black-color rounded-0 w-100" type="submit" name="sub">Place Order</button>
                                    </form>
                                </div>

                                 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<br><br><br><br>
    <!-- Product End -->
    

    <script>
    function cardform(myvalue) {

      if (myvalue == 'card') { //radio button id
        document.getElementById('card_div').style.display = 'block'; //div id
        document.getElementById('upi_div').style.display = 'none';
        document.getElementById('cash_div').style.display = 'none';
      } else if (myvalue == 'upi') {
        document.getElementById('card_div').style.display = 'none';
        document.getElementById('upi_div').style.display = 'block';
        document.getElementById('cash_div').style.display = 'none';
      } else {
        document.getElementById('card_div').style.display = 'none';
        document.getElementById('upi_div').style.display = 'none';
        document.getElementById('cash_div').style.display = 'block';
      }

    }
  </script>
  <script>
    (function() {
      'use strict'

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByTagName('form')

        // Loop over them and prevent submission
        Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      }, false)
    }())
  </script>


    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include "mainfooter.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>