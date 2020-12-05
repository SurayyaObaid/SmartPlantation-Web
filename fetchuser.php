<?php

require "sessionconnection.php";

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
    echo "successful connection";
}
/*
$email = $_GET['Email'];
$password = $_GET['Password'];
$query = "select * from user where Email like '%$email%'";
$res = mysqli_query($db, $query);
$result = array();
while($row = mysqli_fetch_array($res)){
    array_push($result, array('Email'=>$row[1]), 'Password'=> $row[2]));
}
echo json_encode("result"=>$result);
mysqli_close($db);*/

$id = $_GET['User_ID'];
$query = "select * from user where User_ID like '%$id%'";
$res = mysqli_query($db, $query);
$result = array();
while($row = mysqli_fetch_array($res)){
    array_push($result, array('User_name'=>$row[1]));
}
echo json_encode(array("result"=>$result));
mysqli_close($db);
?>