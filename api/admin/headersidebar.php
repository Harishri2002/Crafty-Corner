<?php
$a_id=$_SESSION['a_id'];
$stmt=$admin->ret("SELECT * FROM `admin`");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
 
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>CRAFTYCORNER</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $row['a_name']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    
                    <a href="manageseller.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Manage Seller</a>
                    <a href="manageuser.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage User</a>
                    <a href="managepayment.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Manage Payments</a>
                    <a href="category.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Category</a>
                    
                    <a href="feedback.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>feedback</a>

			
                </div>
            </nav>
        </div>