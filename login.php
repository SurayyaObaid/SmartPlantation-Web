<?php

//include 'header.php';


$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'smart-plantation');


//for login
if (isset($_POST['login_user'])) {
  session_start();
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE User_name='$username'";
    $results = mysqli_query($db, $query);
    if ($db->query($query) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $query . "<br>" . $db->error;
              }
    if (mysqli_num_rows($results) == 1) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: login.php');
      echo $_SESSION['username'];
     
    }else {
      array_push($errors, "Wrong username/password combination");

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
  <div class="header bg-success" style="margin-top: 200px;">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" style="background-color: #4BB543" class="btn" name="login_user" value="login-btn">Login</button>
    </div>
    <p>
      <h3><?php echo $username; ?></h3>
      Not yet a member? <a href="signup.php">Sign up</a>
    </p>
    <br>
    
  </form>

</body>
</html> 