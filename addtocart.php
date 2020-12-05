<?php 
require "sessionconnection.php";

$servername = "localhost";
$username ="stigpk_Timetable_Generator";
$password = "[x5?uxt[GPT*";
$dbname = "stigpk_timetable_generator";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

$l_name = $_POST["lnamekey"];
$plant_id = $_POST['plantid'];
$itemid = $_POST["itemid"];
$user_id = $_POST['userid'];
$itemquantity = $_POST['quantity'];
$item_price = $_POST['price'];
$insertintocart = "INSERT INTO cart ( Plant_ID, User_ID, Item_name, Item_quantity, item_price) VALUES ('$plant_id','$user_id','$item_name','$item_quantity','$item_price')";
$check = mysqli_query($db, $insertintocart);
if(!$check){
     echo "error occurred in adding!".mysqli_error($db);
}
else{
    echo "registered successfully";
    }
?>
