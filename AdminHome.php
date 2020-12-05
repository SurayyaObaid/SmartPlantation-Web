<?php
include 'adminheaders.php';
?>
<body>

	<center>
	<section class="page-section bg-white mb-0" id="device">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-2 text-center" style="background: #4BB543;">
                                <center><h2 class="text-light pt-4 ">Menu</h2></center>
                                <hr style="border-color: #4BB543; width: 100px" />
                                
                                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="orderconfirmation.php"><solid style="color: white;">Manage Orders</solid></a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="manageusers.php"><solid style="color: white;">Manage Users</solid></a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="manageproducts.php"><solid style="color: white;">Manage Products</solid></a></li>
                                
                                
                            </ul>
                    </div>
<div class="col-lg-8 ml-4 justify-content-center" >
    <div class=" text-light font-weight-bold mt-4" style="background: #4BB543; height: 100px; margin-right: 20px; margin-left: 20px; padding-top: 35px;">
		<h4><center>Admin - Home</center></h4>
	</div>
    <div class="row m-4 bg-light">
        <div class="col-lg-4">
            <div class="card" style="border-radius: 5px; border-color: black;">
              <div class="card-body">
                <h5 class="card-title"><center>Users</center></h5>
                <img src="img/musers.png" style="height: 150px; width: 150px;">
                
                <center><a href="manageusers.php" class="btn btn-success m-3">View More</a></center>
                
              </div>
            </div>
        </div>  
  
    <div class="col-lg-4 ">
        <div class="card" style="border-radius: 5px; border-color: black;">
          <div class="card-body">
            <h5 class="card-title"><center>Orders</center></h5>
            <img src="img/order.png" style="height: 150px; width: 150px;">
            
            <center><a href="orderconfirmation.php" class="btn btn-success m-3">View More</a></center>
            
          </div>
        </div>
    </div>  
     <div class="col-lg-4 ">
        <div class="card" style="border-radius: 5px; border-color: black;">
          <div class="card-body">
            <h5 class="card-title"><center>Products</center></h5>
            <img src="img/addproduct.png" style="height: 150px; width: 150px;">
            
            <center><a href="manageproducts.php" class="btn btn-success m-3">View More</a></center>
            
          </div>
        </div>
    </div>  
   
                        
            </div>
            </div>
        </div>
    </section>
</center>
</body>