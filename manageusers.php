<?php 
include 'adminheaders.php';
?>

<center>
	<section class="page-section bg-white mb-0" id="device">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-2 text-center" style="background: #4BB543;">
                                <center><h2 class="text-light pt-4 ">Menu</h2></center>
                                <hr style="border-color: #4BB543; width: 100px" />
                                
                                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><solid style="color: white;">Reply Queries</solid></a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#services"><solid style="color: white;">Manage Orders</solid></a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#about"><solid style="color: white;">Manage Users</solid></a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php"><solid style="color: white;">Manage Products</solid></a></li>
                                
                                
                            </ul>
                    </div>
<div class="col-lg-8 ml-4 justify-content-center" >
    <div class=" text-light font-weight-bold mt-4" style="background: #4BB543; height: 100px; margin-right: 20px; margin-left: 20px; padding-top: 35px;">
		<h4><center>Admin - Manage Orders</center></h4>
	</div>
	<div class="row m-4 w-75">
        <div class="col-lg-6">
            <table id="productTable" class="w-75 table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="w-25">User Name</th>
                        <th class="w-25">ID</th>
                        <th class="w-25">Email</th>
                        <th class="w-25">Password</th>
                    </tr>
                </thead>
                
	<?php
	    $servername = "localhost";
        $user ="stigpk_Timetable_Generator";
        $pass = "[x5?uxt[GPT*";
        $dbname = "stigpk_timetable_generator";
        $database = new mysqli($servername, $user, $pass, $dbname);
      
        $checkuser = "select * from user";
        $result = mysqli_query($database, $checkuser);
        $numOfRows = mysqli_num_rows($result);
        if($numOfRows > 0){
            while ($row= mysqli_fetch_array($result)) {
            $User_ID = $row['User_ID'];           
            session_start();
            
	?>
                <tr>
                        <td><?php echo $row['User_ID']; ?></td>
                        <td><?php echo $row['User_name'];  ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><a href="updateuserpassword.php?id=<?php echo $User_ID?>" class="btn btn-success">Update Password</a></td>
                    </tr>
                    <?php
            }}
            ?>
            </table>
        </div>
    </div>
	
</div>
</div>
</div>