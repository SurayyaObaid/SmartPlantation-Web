<?php
?>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="img/favicon.png" rel="icon">
        <a href="index.php" ><title>Smart Pantation-Home</title></a>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="css/register.css">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light text-dark fixed-top py-3" id="mainNav" style="background-color: white;">
            <div class="container">
              <img class="fixed" src="img/logoo.png" height="54px" width="54px" alt="" style="margin-left: -25px; margin-right: 40px;">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><solid style="color:black;">Smart Plantation</solid></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="AdminHome.php"><solid style="color: black;">Home</solid></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Adminlogin.php"><solid style="color: black;"> <?php 
                            session_start();
                            if (!empty($_SESSION['user'])){
                                echo "Welcome  " . $_SESSION['user'] . "!";
                            } else {
                                    ;
                                echo "Login";
                            }
                        ?>
                            </solid></a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php" onclick=" return confirm('Are you sure you want to logout') "><solid style="color: black;">Logout</solid>  </a></li>
                    </ul>
                </div>
            </div>
        </nav>


        







