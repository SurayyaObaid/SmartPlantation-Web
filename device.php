<?php
include 'header.php';

$db = mysqli_connect('localhost', 'root', '', 'smart-plantation');
include 'session.php';

if(isset($_POST['submit'])){
if($_SESSION['user']==""){
  echo "<script type='text/javascript'> 
 alert('Please login to for ordering device'); 
 </script>";"";
}
else{
      
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
  $payment_method = "Cash On Delivery";
  $amount = 15000;
  $orderType = "device";
  $loggedInUser = $_SESSION['user']; 
  $oDate = date("Y-m-d");
  $eDate = date("Y-m-d", strtotime("+7 day")); 
  $itemName = "Device";
  $quantity = 1;
  $item_ID = 20;
  $total = $amount * $quantity;
  echo $name, $address, $email, $mobile, $payment_method, $amount, $orderType, $oDate, $eDate, $itemName;


  $orderQuery = "INSERT INTO order_details(Item_ID,Item_name, Item_quantity, Item_price, Date_ordered, Expexted_Arrival,Address,mobile,User_name, Total, Product_type) VALUES ('$item_ID','$itemName', '$quantity' , '$amount', '$oDate', '$eDate', '$address', '$mobile','$name', '$total','device')";
                        //mysqli_query($conn,$orderQuery);
              if ($db->query($orderQuery) === TRUE) {
                //echo "New record created successfully";
              } else {
               // echo "Error: " . $orderQuery . "<br>" . $db->error;
              }
 
}
}

?>


<section class="page-section bg-white mb-0" id="device">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-dark mt-0">One Device with capability to handle a number of Air Quality parameters</h2>
                        <hr style="border-color: #4BB543; width: 100px" />
                        <p class="text-white-90 mb-4">This Device is multi-purpose i.e you can use it for plant suggestion and plant maintenance. Just connect it by entering the serial number provided on the device. </p>
                        <p class="text-white-50 mb-4">You can buy the device from here</p>
                        <p class="text-white-90 mb-4">
                        	The <a target="_blank" href="device.php">device</a> has a number of sensors that collect data from surroundings regarding parameters that affect the environment for a particular time period. We use this data to return you a plant(s) that may possibly benefit the environment as well as your own body. This device work for both indoor and outdoor scenario.
                        </p>
                        <a class="btn btn-success js-scroll-trigger" href="device.php#device-form">Place your order now! </a>
                    </div>
                    <div class="col-lg-3 justify-content-center" style="padding-left: 50px;">
                        <img src="img/device.jpg" style="height: 500px; width: 500px; ">
                        
                    </div>
                </div>
            </div>
        </section>




<div class="container" style="width: 50%;" id="device-form">
  <h2><center>Order Device Today</center></h2>
  <p><center>It takes few days in device delivery, usually a week. Only Cash-On-Delivery is entertained</center></p>
  <p><center>Whole hardware unit including unit for plant prediction and monitoring(Costs Rs 15,000)</center></p>
  <p><center class="text-danger">Order cannot be cancelled or modified</center></p>
  
  <form class="w-75" action="device.php" method="post">
    <div class="form-group">
      <label for="text">Full Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
    </div>
    <div class="form-group">
      <label for="text">Address</label>
      <input type="text" name="address" class="form-control" placeholder="Enter your Address">
    </div>
    <div class="form-group">
      <label for="text">Mobile number</label>
      <input type="number" class="form-control" name="mobile" placeholder="+92 000 0000 000">
    </div>
    <div class="form-group">
      <label for="text">Email Address</label>
      <input type="email" class="form-control" name="email" placeholder="abc@xyz.com">
    </div>
   
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>


<?php
include 'footer.php';
?>