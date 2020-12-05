<?php
include 'header.php';
include 'session.php';
$servername = "localhost";
            $username ="stigpk_Timetable_Generator";
            $password = "[x5?uxt[GPT*";
            $dbname = "stigpk_timetable_generator";

            // Create connection
            $db = new mysqli($servername, $username, $password, $dbname);
           
if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "Plant_ID");  
           if(!in_array($_GET["Plant_ID"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["Plant_ID"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  

           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["Plant_ID"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  


<body style="margin-top: 100px;">
	<div class="text-uppercase text-light font-weight-bold" style="background: #4BB543; height: 100px; margin-right: 20px; margin-left: 20px; padding-top: 35px;">
		<h4><center>Your Cart</center></h4>
	</div>

	<?php 
		$query="select * from plant order by Plant_ID ASC";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_array($result)) {
				# code...
				?>
			<form method="post" class="w-50 mt-4" action="cart.php?action=add&Plant_ID=<?php echo $row["Plant_ID"];?>">
			 <div class="card-deck">
			    <div class="card m-4" style="border-radius: 5px; border-color: black;">
			      <div class="card-body">
			      			<div class="row m-4">
			                <div class="m-2">
			                <h5 class="card-title w-50">Product Name:<?php echo $row['Botanical_name'];?></h5>
			                <p style="margin: 5 px;"><solid>Price: <?php echo $row['price(PKR)'];?></p>   
			                <input type="text" name="quantity" class="form-control w-50" value="1"> 
			                <input type="hidden" name="hidden_price" class="w-50" value="<?php echo $row['price(PKR)'];?>">

							<input type="hidden" name="hidden_name" value="<?php echo $row['Local_name'];?>">
							<input type="submit" name="add_to_cart" class="btn btn-success w-50 mt-4" value="Add to cart">
							</div>
							<img class="w-25 h-75" style="width: 50%" src="<?php echo $row['image'];?>">
			                
			                </div>
			    </div>
			  </div>
		</div>
			
</form>
				<?php
			}
		}

	?>
	 <div style="clear:both;"></div>  
                <br />  <center>
                <h3>Order Details</h3>  
                <div class="table-responsive w-50" >  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="10%">Price</th>  
                               <th width="10%">Total</th>  
                               <th width="10%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                                $iname = $values["item_name"];
                                $iqty = $values["item_quantity"];
                                $iprice = $values["item_price"];
                                $iid = $values["item_id"]
                          ?>  
                          <tr>  
                       <form action="cart.php" method="post">
                        <?php
                          print_r($_SESSION["shopping_cart"]);
                         ?>
                               <td><input type="text" name="iname" value="<?php echo $iname ?>"></td>  
                               <td><input type="text" name="iqty" value="<?php echo $iqty ?>"></td>  
                               <td><input type="text" name="iprice" value="Rs<?php echo $iprice ?>"></td>  
                               <td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td align="center"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger" style="text-decoration: none;">Remove</span></a></td>  
                               
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                           
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"> <?php echo number_format($total, 2); ?></td>  
                               <td align="center"><a href="checkout.php" type="submit" name="checkout" class="btn btn-success">View Cart</a></td>  </form> 
                          </tr> 	
                          <?php


                          }  



                            $item_name = $iname;
                            $item_quantity = $iqty;
                            $item_price = $iprice;
                            $item_id = $iid;


                            $products = array($item_name,$item_quantity,$item_price, $iid);
                            $_SESSION['cart_item'] = $products;
                            $_SESSION['proid'] = $item_id;
                            echo "product id".$_SESSION['proid'];
                            


                          ?>  
                     </table>  
                </div>  
                </center>
           </div>  
           <br />  


<!--
		

		<div class="col-sm-8 h-200 p-4" >
					<form method="post" action="cart.php?action=add&Plant_ID=<?php //echo $row["Plant_ID"];?>">
						<div style="border: 1px solid #333; background: #f1f1f1;border-radius: 5px; padding: 16px;" align="center">
							<img src="<?php //echo $row['image'];?>" class="img-responsive" style="width: 120px; height: 160px;"><br>
							<h5 class="text-info"><?php //echo $row['Botanical_name'];?></h5>
							<h5 class="text-info">Price: Rs. <?php //echo $row['price(PKR)'];?></h5>
							<input type="text" name="quantity" class="form-control" value="1">
							<input type="hidden" name="hidden_name" value="<?php// echo $row['Local_name'];?>">
							<input type="hidden" name="hidden_price" value="<?php //echo $row['price(PKR)'];?>">
							<input type="submit" name="add_to_cart" class="btn btn-success" value="Add to cart">
						</div>
					</form>
				</div>

	-->
</solid>
</p>
</div>
</div></div>
</div>
</div>
</body>

<?php
include 'footer.php'
?>