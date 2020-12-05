<?php 
include 'header.php';
?>

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
        		<h4><center>Admin - Manage Products</center></h4>
        	</div>
        	
         <div class="row m-4 p-4 bg-light justify-content-center">
            <div class="card m-4" style="border-radius: 5px; border-color: black;">
              <div class="card-body">
                <h5 class="card-title"><center>Add products</center></h5>
                <img src="img/addproduct.png" style="height: 100px; width: 100px;">
                
                <center><a href="addproduct.php" class="btn btn-success m-3">View More</a></center>
                
              </div>
            </div>
            <div class="card m-4" style="border-radius: 5px; border-color: black;">
              <div class="card-body">
                <h5 class="card-title"><center>Update Product</center></h5>
                <img src="img/updateprod.png" style="height: 100px; width: 100px;">
                
                <center><a href="updateplant.php" class="btn btn-success m-3">View More</a></center>
                
              </div>
            </div>
        </div> 
         
        
    <!--second row-->
    <div class="row m-4 p-4 bg-light justify-content-center">
           <div class="card m-4" style="border-radius: 5px; border-color: black;">
              <div class="card-body">
                <h5 class="card-title"><center>Delete Product</center></h5>
                <img src="img/deleteprod.png" style="height: 100px; width: 100px;">
                
                <center><a href="deleteplant.php" class="btn btn-success m-3">View More</a></center>
                
              </div>
        </div> 
        <div class="card m-4" style="border-radius: 5px; border-color: black;">
              <div class="card-body">
                <h5 class="card-title"><center>View Products</center></h5>
                <img src="img/viewprod.png" style="height: 100px; width: 100px;">
                
                <center><a href="viewproduct.php" class="btn btn-success m-3">View More</a></center>
                
              </div>
            </div>
        </div>
        
        	<?php
        	    $servername = "localhost";
                $user ="stigpk_Timetable_Generator";
                $pass = "[x5?uxt[GPT*";
                $dbname = "stigpk_timetable_generator";
                $database = new mysqli($servername, $user, $pass, $dbname);
              
                
                    
        	?>
                    

        </div>
    </div>
</section>
<center></center>