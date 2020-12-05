<?php
include 'adminheaders.php';
?>
<body style="padding-top:100px;">
    <div class="container col-lg-12 justify-content-center">
        <form method="post" enctype="multipart/form-data"  action="addproduct.php">
            <h3 class="text-success justify-content-center">Add Product</h3>
        
            <div class="p-2">
                Local Name<br><input class="w-75" type="text" name="lname">
            </div>
            <div class="p-2">
                Botanical Name<br><input class="w-75" type="text" name="bname">
            </div>
            <div class="p-2">
                Flowering Time<br><input class="w-75" type="text" name="ftime">
            </div>
            <div class="p-2">
                Family<br><input class="w-75" type="text" name="family">
            </div>
            <div class="p-2">
                Spread in Meters<br><input class="w-75" type="text" name="spread">
            </div>
            <div class="p-2">
                Price<br><input class="w-75" type="text" name="price">
            </div>
            <div class="p-2">
                Hazards<br><input class="w-75" type="text" name="hazards">
            </div>
            <div class="p-2">
                habitat<br><input class="w-75" type="text" name="habitat">
            </div>
             <div class="p-2">
                Soil<br><input class="w-75" type="" name="soil">
            </div>
             <div class="p-2">
                Temperature<br><input class="w-75" type="number" name="temperature">
            </div>
             <div class="p-2">
                Select image<br><input class="w-75" type="file" name="image">
            </div>
            <input class="btn btn-success" type="submit" name="addnewprod" href="addproduct.php">
            
        </form>
    </div>
</body>
<?php
$servername = "localhost";
$username ="stigpk_Timetable_Generator";
$password = "[x5?uxt[GPT*";
$dbname = "stigpk_timetable_generator";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['addnewprod'])){
    if($_POST['lname'] || $_POST['bname'] || $_POST['price'] || $_POST['ftime'] || $_POST['family'] || $_POST['spread'] || $_POST['hazards'] || $_POST['habitat']
    || $_POST['soil'] || $_POST['water'] || $_POST['temperature'] == ""){
        echo "Empty Fields";
    }
    else{
    $lname = $_POST['lname'];
    $bname = $_POST['bname'];
    $price = $_POST['price'];
    $ftime = $_POST['ftime'];
    $family = $_POST['family'];
    $spread = $_POST['spread'];
    $hazards = $_POST['hazards'];
    $habitat = $_POST['habitat'];
    $soil = $_POST['soil'];
    $water = $_POST['water'];
    $termperature = $_POST['temperature'];
    $image = basename( $_FILES['image']['name']); 
    $imagedir = "img/".$image;
    $w = 0;
    $sun = 0;
    $p = 0;
    
    $addnewprodQuery = $mysqli->query("INSERT into plant(Local_name, Botanical_name, Flowering_time, family,
    `spread_in_metres(in)`, Known_hazards, Habitat, Soil, Temperature, image, `price(PKR)`) 
    VALUES ('$lname','$bname', '$ftime', '$family', '$spread', '$hazards', '$habitat', '$soil',  $temperature, $imagedir , '$price' )");
    if(!$addnewprodQuery){
        echo $mysqli->error;
    }
    else{
        echo 'nopes';
    }
}
    
}
?>