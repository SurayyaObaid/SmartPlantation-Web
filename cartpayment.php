<?php
include 'header.php';
?>
<section class="page-section bg-success" id="sale-descrip" style="height: 180px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text-light font-weight-bold"><center>Just one step away from your order!</center></h1>
                        <hr style="border-color: white; width: 100%" />
                       
                    </div>
                </div>
            </div>
        </section>
        <?php
        $item_ID = $_GET['id'];
        
        $servername = "localhost";
        $username ="stigpk_Timetable_Generator";
        $password = "[x5?uxt[GPT*";
        $dbname = "stigpk_timetable_generator";

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $userid = $_SESSION['userid'];
    $fetchcart= "select * from cart where Item_ID='".$item_ID."'";
            	$query_run= mysqli_query($db,$fetchcart);
            
            	while ($row= mysqli_fetch_array($query_run)) {
            	    $itemid = $row['Item_ID'];
            	    $user_id = $row['User_ID'];
            	    $item_name = $row['Item_name'];
            	    $item_quantity = $row['Item_quantity'];
            	    $item_price = $row['item_price'];
            	  
                
                ?>
                <center>

        <section class="page-section bg-white ml-4 mr-4" style="width: 100%">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="text-center w-75" >
                        <h2 class="text-dark mt-0 mb-4">Enter shipping details</h2>
                       <form class="w-75" style="text-align: left;" action="cartpayment.php?id=<?php echo $_GET['id'];?>" method="post">
                        
                        <div class="p-2">
                            First Name<br><input class="w-75" type="text" name="fname" value="" placeholder= "First Name" pattern="[A-Za-z]{3,}">
                        </div>
                         <div class="p-2">
                           Last Name <br><input class="w-75" type="text" name="lname" value="" placeholder= "Last Name" pattern="[A-Za-z]{3,}">
                        </div>    
                        <div class="p-2">
                            Shipping Address <br><input class="w-75" type="text" name="address" value="" placeholder= "street, city, country" pattern="[A-Za-z, -]{10,}">
                        </div>   
                        <div class="p-2">
                            Mobile Number <br><input class="w-75" type="Number" name="mobile" value="" placeholder= "e.g 03123456789" pattern="[0-9]{11}" >
                        </div>   
                       
                        <div class="p-2">
                            <p>Only cash on delivery is entertained</p>
                              
                        </div> 
                        
                        <input class="btn btn-success js-scroll-trigger m-2" name="submitorder" type="submit" href="orderconfirmation.php">
                        </form>
                        
                    </div>
                </div>
            </div>    
       </section>
    
    </center>
    <?php
    //order entry
                       $servername = "localhost";
                        $username ="stigpk_Timetable_Generator";
                        $password = "[x5?uxt[GPT*";
                        $dbname = "stigpk_timetable_generator";
            
                        // Create connection
                        $mysqli = new mysqli($servername, $username, $password, $dbname);
                        if (isset($_POST['submitorder'])) {
                        $fname = mysqli_real_escape_string($db,$_POST['fname']);
                        $lname = mysqli_real_escape_string($db,$_POST['lname']);
                        $address = mysqli_real_escape_string($db,$_POST['address']);
                        $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
                        $otime = mysqli_real_escape_string($db,date("Y-m-d"));
                        $etime = mysqli_real_escape_string($db,date("Y-m-d", strtotime("+7 day"))); 
                        $usname = $fname.$lname;
                        
                        $total = 0;
                        
                             $total = $total + ($item_quantity * $item_price); 
                             echo $name, $address, $mobile, $otime, $etime;
                             $orderQuery = $mysqli->query("insert into order_details(Item_ID,Item_name, Item_quantity, Item_price, Date_ordered, Expexted_Arrival,Address,mobile,User_name, Total,Product_type) values ('$itemid','$item_name', '$item_quantity', '$item_price', '$otime', '$etime', '$address', '$mobile','$usname', $total,'plant')");
                             echo $name,$item_quantity,$item_price, $address, $mobile, $otime, $etime,$usname;
                             if(!$orderQuery){
                                 echo $mysqli->error;
                             }
                             else{
                                 echo "success";
                             }
                        }
                             
  
    
    //end of order entry
    ?>
    <center>
<div class="card col-lg-4 mt-4" style="border-radius: 5px; border-color: black;">
    <h3>Your Item</h3>

      <div class="card-body">
                <h5 class="card-title"><center><?php echo $item_name?></center></h5>
                <div class="row">
                <img src="<?php echo $row["image"]?>" style="height: 100px; width: 100px;">
                <div class="float-right ">
                <h6 style="margin: 5 px;"><solid>Availability: Yes</h6>
                <h6 style="margin: 5 px;"><solid>Price: <?php echo $row["item_price"]?></h6>    
                 <h6 style="margin: 5 px;"><solid>Quantity: <?php echo $item_quantity; ?></h6>    
                </div>
                </div>
                <a href="cartpayment.php?id=<?php echo $row['Item_ID'];?>" class="btn btn-success float-right">Proceed to pay</a>
      </div>
    </div>
</center>

    
                
                <?php
            	    
            	}

?>

        
<?php
include 'footer.php';
?>