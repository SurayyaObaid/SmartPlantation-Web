<?php
	
	   $servername = "localhost";
       $user ="stigpk_Timetable_Generator";
       $pass = "[x5?uxt[GPT*";
       $dbname = "stigpk_timetable_generator";
       $database = new mysqli($servername, $user, $pass, $dbname);
	session_start(); 

	//checks if user is logged in
	if($_SESSION['user']){ 
	}
	else{

		// redirects if user is not logged in
		header("location:viewproduct.php"); 
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		//mysqli_connect("localhost","root","","smart-plantation") or die(mysql_error()); //Connect to server
        mysqli_select_db($database, $dbname) or die("Cannot connect to database"); //Connect to database
		$Plant_ID = $_GET['Plant_ID'];

		mysqli_query($database,"DELETE FROM plant WHERE Plant_ID='$Plant_ID'");

		header("location: viewproduct.php");
	}

?>