<?php
include 'adminheaders.php';
include 'session.php';
if(isset($_POST['login_admin'])){
     $error = NULL;
    $usercount = 0;
    $email = $_POST['email'];
    $password = $_POST['password'];
     if($email== "" || $password== ""){
        echo "<center>all fields are required</center>";
    }
    else{
            //checking email
        $servername = "localhost";
        $user ="stigpk_Timetable_Generator";
        $pass = "[x5?uxt[GPT*";
        $dbname = "stigpk_timetable_generator";
        $database = new mysqli($servername, $user, $pass, $dbname);
      
        $checkuser = "select * from user where Email = '$email'";
        $result = mysqli_query($database, $checkuser);
        $numOfRows = mysqli_num_rows($result);
        if($numOfRows > 0){
            while ($row= mysqli_fetch_array($result)) {
                $enpass = md5($password);
            if($email== $row['Email'] && $enpass==$row['Password']){
            echo $row['Email'];
            echo $row['Password'];
            echo "there you go!";
            session_start();
            $_SESSION['user'] = $row['User_name'];
            $_SESSION['userid'] = $row['User_ID'];
            $_SESSION['email'] = $row['Email'];
            header('location:AdminHome.php');
        

            }
            }
        }
        else{
            echo "<center>No record found. Please Register</<center>";
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body style="margin-top:100px;">
  <div class="header bg-success" style="margin-top: 200px; background-color:
  #4BB543;">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="Adminlogin.php">
    
    <div class="input-group">
      <label>Email</label>
      <input name="email" type="email" required="required">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required="required">
    </div>
    <div class="input-group">
      <button type="submit" style="background-color: #4BB543" class="btn" name="login_admin" value="login-btn">Login</button>
    </div>
   
    <br>
    
  </form>

</body>
</html> 