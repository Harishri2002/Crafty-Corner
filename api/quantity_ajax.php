<?php
include 'config.php';
$admin=new Admin();
$cid=$_SESSION['c_id'];
$stmt1=$admin->ret("SELECT COUNT(*) FROM `cart`");
$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
$quantity=implode($row1);

if(isset($_GET['cart_id_increment'])){
	$cart_id=$_GET['cart_id_increment'];
	$stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `cr_id`='$cart_id' AND `c_id`='$cid'" );
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
	$item_price=$row['p_price'];
	$old_quantity=$row['cr_quantity'];
	$new_quantity=$old_quantity + 1;
    $total=$item_price * $new_quantity;

	$stmt1=$admin->cud("UPDATE `cart` SET `cr_quantity`='$new_quantity' WHERE `cr_id`='$cart_id' AND `c_id`='$cid'",'updated');
}

if(isset($_GET['cart_id_decrement'])){
	$cart_id=$_GET['cart_id_decrement'];
	$stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `cr_id`='$cart_id' AND `c_id`='$cid'" );
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
	$item_price=$row['p_price'];
	$old_quantity=$row['cr_quantity'];
	$new_quantity=$old_quantity - 1;
    $total=$item_price * $new_quantity;
	
	$stmt1=$admin->cud("UPDATE `cart` SET `cr_quantity`='$new_quantity' WHERE `cr_id`='$cart_id' AND `c_id`='$cid'",'updated');
}
?>


<div class="cart-main-wrapper mt-no-text" id="ajax_table">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- Cart Table Area -->
					<h1> <center>Shopping Cart     <div style="margin-left:900px;"><b><h2>Items: <?php echo $quantity?></h2><b></div></center></h1>
					
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered" id="ajax_table">
							
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							 $total=0;
							 $g_total=0;
                             $cid=$_SESSION['c_id'];
							 $stmt=$admin->ret("SELECT * FROM `cart` INNER JOIN `product` ON product.p_id=cart.p_id WHERE `c_id`='$cid'" );
							 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								$price=$row['p_price'];
								$quantity=$row['cr_quantity'];
								$total=$price*$quantity;
                                $g_total=$g_total+$total;
							 
							
							?>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="seller/controller/<?php echo $row['p_img']?>" alt="Product" /></a></td>
                                    <td class="pro-title"><a href="#"><?php echo $row['p_name']?> <br> s / green</a></td>
                                    <td class="pro-price"><span><?php echo $row['p_price']?></span></td>
                                    <td class="pro-quantity">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="<?php echo $quantity?>" type="text">
												<?php echo $row['cr_quantity']?>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
												<?php if ($row['cr_quantity']>1){?>
                                                <button onclick="decrement(<?php echo $row['cr_id']; ?>)" type="button" class="dec qtybutton"><i class="fa fa-minus" aria-hidden="true"></i>
											    </button><?php }?>
                                                <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                <button onclick="increment(<?php echo $row['cr_id']; ?>)" type="button" class="inc qtybutton"><i class="fa fa-plus" aria-hidden="true"></i>
											    </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span><?php echo $total ?></span></td>
                                    <td class="pro-remove"><a ><a href="controller/deletecart.php?cr_id=<?php echo $row['cr_id']?>" class="btn flosun-button primary-btn rounded-0 black-btn" >Delete Cart</a></a></td>
                                </tr>
                                
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            
                        </div>
                        <div class="cart-update mt-sm-16">
                          
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-5 ml-auto col-custom">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Total</td>
                                        <td><?php echo $g_total?></td>
                                                </tr>
                                    <tr class="total">
                                        <td>Grand Total</td>
                                        <td class="total-amount"><?php echo $g_total ?></td>
                                    </tr>
                                    
                                </table>
                                <?php 
                                    $cid=$_SESSION['c_id'];
                    $stmt3=$admin->ret("SELECT * FROM `cart` WHERE `c_id`='$cid'");
                    $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                    if($stmt3->rowCount()>0){
                                     ?>
                                     <a href="order.php?pc_id=<?php echo $row['pc_id']?>" class="btn flosun-button primary-btn rounded-0 black-btn w-100">Proceed To Checkout</a>
                                     <?php } else { ?>
                            <h5 style="color:red;">cart is full empty</h5>
                        <?php } ?>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>              