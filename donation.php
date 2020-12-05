<?php
include 'header.php';
 $servername = "localhost";
        $username ="stigpk_Timetable_Generator";
        $password = "[x5?uxt[GPT*";
        $dbname = "stigpk_timetable_generator";

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    session_start();


if(isset($_POST['submit'])){
if($_SESSION['user']==""){
  echo "<script type='text/javascript'> 
 alert('Please login to for donation'); 
 </script>";"";
}
else{
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $payment_method = "Cash On Delivery";
  $treeCount = mysqli_real_escape_string($db,$_POST['tree-count']);
  $amount = (int)$treeCount * 1000;
 // echo $amount;
  
  $loggedInUser = $_SESSION['user'];  
  //echo $loggedInUser;

  $retrieve = "SELECT User_ID FROM user WHERE User_name = '{$loggedInUser}'";
  $result = mysqli_query($db, $retrieve);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    $dDate = mysqli_real_escape_string($db,date("Y-m-d"));
    $dTime = mysqli_real_escape_string($db,date("h:i:s"));


  $donateQuery = "INSERT INTO donation(U_ID,D_amount,D_date,D_time,payment_mode) VALUES (".$_SESSION['userid'].",'$amount','$dDate','$dTime','$payment_method')";
   if ($db->query($donateQuery) === TRUE) {
                //echo "New record created successfully";
              } else {
                echo "Error: " . $donateQuery . "<br>" . $db->error;
              }

}
}
}
?>


<section class="page-section bg-success" style="height: 280px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                      <h1 class="text-light font-weight-bold"><center>Contribute to Greenify our Planet</center></h1>
                      <hr style="border-color: white; width: 100px" />
                    </div>
                </div>
            </div>
        </section>

<section class="page-section">
      <div class="container py-5 px-n5 mt-n5">
        <div class="row">
          <center>
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="donation.php" method="post" role="form" class="php-email-form w-75">

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="name" style="float: left">Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" style="float: left">NIC</label>
                  <input type="number" class="form-control" name="number" id="NIC" data-msg="Please enter a valid NIC" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name" style="float: left">Payment Mode: Cash on Delivery</label>
                  
                  <div class="validate"></div>
                </div>          
                <div class="col-md-12 form-group">
                  <label for="name" style="float: left">Choose Number of Trees (10 trees-10000 PKR)</label>
                  <select name="tree-count" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option value="10" selected>10 Trees</option>
                      <option value="20">20 Trees</option>
                      <option value="30">30 Trees</option>
                      <option value="40">40 Trees</option>
                      <option value="50">50 Trees</option>
                      <option value="60">60 Trees</option>
                      <option value="70">70 Trees</option>
                    </select>
                  <div class="validate"></div>
                </div>

                    <div class="custom-control custom-checkbox my-1 mr-sm-2 col-md-12">
                      <input type="checkbox" class="custom-control-input" id="customControlInline">
                      <label class="custom-control-label" for="customControlInline">I'm not a Robot</label>
                    </div>

                </form>

        
                  
                <input type="submit" name="submit" class="btn btn-success d-block w-100" value="Donate">
                  
            </div>
            </form>
        </div>
      </div>
</section>

        
        <?php
        include 'footer.php';
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
