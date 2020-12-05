<?php 

	
$servername = "localhost";
$username ="stigpk_Timetable_Generator";
$password = "[x5?uxt[GPT*";
$dbname = "stigpk_timetable_generator";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
if(!$db){
    echo "not connected";
}
else{
   // echo "successful connection";
}
$stmt = $db->prepare("SELECT Plant_ID, Local_name, Botanical_name, `price(PKR)`, image FROM plant;");
$stmt->execute();
$stmt->bind_result($id, $lname, $bname, $price, $img);
$product = array();
while($stmt->fetch()){
    $temp = array();
    $temp['Plant_ID'] = $id;
    $temp['Local_name'] = $lname;
    $temp['Botanical_name'] = $bname;
    $temp['price(PKR)'] = $price;
    $temp['image'] = $img;
    array_push($product, $temp);
}
echo json_encode($product);

		
?>