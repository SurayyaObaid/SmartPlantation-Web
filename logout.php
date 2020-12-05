<?php
session_start();
session_destroy();
unset($_SESSION['username']);	
header('location: index.php');
//echo 'You have been logged out. <a href="signin.php">Go back</a>';