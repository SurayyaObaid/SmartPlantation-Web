<?php 
include 'header.php';
?>
<body style="padding-top: 150px;">
<?php
$servername = "localhost";
            $username ="stigpk_Timetable_Generator";
            $password = "[x5?uxt[GPT*";
            $dbname = "stigpk_timetable_generator";

            // Create connection
            $db = new mysqli($servername, $username, $password, $dbname);
           
include 'session.php';

echo "believe me your code isn't working. product id is ".$_SESSION['cart_item[3]'];
$cart_item_qty = $_SESSION['cart_item[1]'];
//print_r($_SESSION['cart_item']);
$query="select * from plant";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_array($result)) {
				# code...
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

<form class="w-50 mt-4" >
			 <div class="card-deck">
			    <div class="card m-4" style="border-radius: 5px; border-color: black;">
			      <div class="card-body">
			      			<div class="row m-4">
			                <div class="m-2">
			                <h5 class="card-title w-50">Product Name:<?php echo $row['Botanical_name'];?></h5>
			                <p style="margin: 5 px;"><solid>Price: <?php echo $row['price(PKR)'];?></p>   
			                <input type="text" name="quantity" value="<?php echo $cart_item_qty; ?>" class="form-control w-50" > 
			                <input type="text" name="price" class="w-50" value="<?php echo $row['price(PKR)'];?>">

							<input type="hidden" name="local_name" value="<?php echo $row['Local_name'];?>">
							<input type="submit" name="add_to_cart" class="btn btn-success w-50 mt-4" value="Add to cart">
							</div>
							<img class="w-25 h-75" style="width: 50%" src="<?php echo $row['image'];?>">
			                <td align="center"><a href="cart.php?action=delete&id=<?php echo $cart_item_id; ?>"><span class="text-danger" style="text-decoration: none;">Remove</span></a></td>  
			                <a class="btn btn-success js-scroll-trigger" href="payment.php">Proceed to payment</a>
			                </div>
			    </div>
			  </div>
		</div>
			
</form>

<?php
			}
		}

	?>






                 

        <section class="page-section bg-white mb-0 mt-0" id="user-info" style="width: 100%">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="text-center w-75" >
                        <h2 class="text-dark mt-0 mb-4">Enter shipping details</h2>
                       <form class="w-75" style="text-align: left;" action="checkout.php" method="post">
                        
                        <div class="p-2">
                            First Name<br><input class="w-75" type="text" name="fname" value="" placeholder= "First Name" pattern="[a-z]{3,}">
                        </div>
                         <div class="p-2">
                           Last Name <br><input class="w-75" type="text" name="lname" value="" placeholder= "Last Name" pattern="[a-z]{3,}">
                        </div>    
                        <div class="p-2">
                            Shipping Address <br><input class="w-75" type="text" name="address" value="" placeholder= "street, city, country" pattern="[a-z,- ]{10,}">
                        </div>   
                        <div class="p-2">
                            Mobile Number <br><input class="w-75" type="Number" name="mobile" value="" placeholder= "e.g 03123456789" pattern="[0-9]{11}" >
                        </div>   
                       
                        <div class="p-2">
                            <p>Select Payment type :</p>
                              <input type="radio" id="cod" name="payment" value="Cash-On-Delivery">
                              <label for="cod">Cash On Delivery</label><br>
                              <input type="radio" id="visa" name="payment" value="Visa Card">
                              <label for="visa">Visa</label><br>  
                        </div> 
                        
                        <input class="btn btn-success js-scroll-trigger m-2" name="submitorder" type="submit" href="shop-plants.php">
                        </form>
                        
                    </div>

                       <?php
                       $servername = "localhost";
                        $username ="stigpk_Timetable_Generator";
                        $password = "[x5?uxt[GPT*";
                        $dbname = "stigpk_timetable_generator";
            
                        // Create connection
                        $db = new mysqli($servername, $username, $password, $dbname);
           
                        if (isset($_POST['submitorder'])) {
                        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
                        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
                        $address = mysqli_real_escape_string($conn,$_POST['address']);
                        $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
                        $otime = mysqli_real_escape_string($conn,date("Y-m-d"));
                        $etime = mysqli_real_escape_string($conn,date("Y-m-d", strtotime("+7 day"))); 
                        $name = $fname.$lname;
                        //print_r($_SESSION['cart_item']);             
                        $cart_item_name= $_SESSION['cart_item'][0];
                        $cart_item_quantity = $_SESSION['cart_item'][1];
                        $cart_item_price = $_SESSION['cart_item'][2];
                        $total = 0;
                             $total = $total + ($cart_item_quantity * $cart_item_price);  
                               
                       

                        $orderQuery = "insert into order_details(Item_name, Item_quantity, Item_price, Date_ordered, Expexted_Arrival,Address,mobile,User_name, Total) values ('$cart_item_name', $cart_item_quantity, $cart_item_price, '$otime', '$etime', '$address', $mobile,'$name', $total)";
                        //mysqli_query($conn,$orderQuery);
                        if ($conn->query($orderQuery) === TRUE) {
							  //echo "New record created successfully";
							} else {
							  echo "Error: " . $orderQuery . "<br>" . $conn->error;
							}

                    ?>


                    <div class="col-lg-3 justify-content-center ml-auto mr-auto mt-0 mb-4" >
                        <h2 class="text-dark mt-0">Your Shipping details</h2>
                        <table>
                            <tbody style="border: 2pt" class="col-lg-6">
                            <tr class="m-2 ">
                                <td class="m-2 col-lg-3">First Name</td>
                                <td class="m-2"><?php echo $fname ?></td>
                            </tr>
                            <tr class="m-2">
                                <td class="m-2 col-lg-3">Last Name</td>
                                <td class="m-2 "><?php echo $lname ?></td>
                            </tr>
                            <tr class="m-2">
                                <td class="m-2 col-lg-3">Address</td>
                                <td class="m-2 "><?php echo $address ?></td>
                            </tr>
                            <tr class="m-2">
                                <td class="m-2 col-lg-3">Mobile</td>
                                <td class="m-2"><?php echo $mobile ?></td>
                            </tr>
                            <tr class="m-2">
                                <td class="m-2 col-lg-3">Expexted Arrival</td>
                                <td class="m-2"><?php echo $etime ?></td>
                            </tr>
                            <tr class="m-2">
                                <td class="m-2 col-lg-3">To be paid</td>
                                <td class="m-2">Amount</td>
                            </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>



</body>
<?php
}
include 'footer.php';
?>