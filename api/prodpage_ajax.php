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



<div class="quantity-with_btn mb-5" id="ajax_table">
                            <div class="quantity">
                            <div class="cart-plus-minus">
                            <?php
        	                     $stmt4=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `p_id`='$pid'");
                                 $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
                                 $qty=implode($row4);
                                 
                                 if($qty>0){
                               ?>

                            <?php
							 $total=0;
							 $g_total=0;
                             $pid=$_GET['p_id'];
							 $stmt=$admin->ret("SELECT * FROM `cart` WHERE `p_id`='$pid'  ");
							 $row=$stmt->fetch(PDO::FETCH_ASSOC);
						     $quantity=$row['cr_quantity'];
								
                               
							      
							
							?>
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
                            <?php } ?>
                            </div>
                            <div class="add-to_cart">
                                <a class="btn product-cart button-icon flosun-button dark-btn" href="controller/cart.php?p_id=<?php echo $pid?>">Add to cart</a>
                                
                            </div>
                            <div class="add-to_cart">
                            <?php
        	                     $stmt4=$admin->ret("SELECT COUNT(*) FROM `cart` WHERE `p_id`='$pid'");
                                 $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
                                 $qty=implode($row4);
                                 
                                 if($qty>0){
                               ?>
                
                <a class="btn product-cart button-icon flosun-button dark-btn" href="order.php?pc_id=<?php echo $row['pc_id']?>">Buy</a>
                                <?php } ?>
                                
                                
                            </div>
                        </div>
                       