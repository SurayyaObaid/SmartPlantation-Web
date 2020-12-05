<?php
include 'session.php';
?>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="img/favicon.png" rel="icon">
        <title>Smart Pantation-Home</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
              <img class="fixed" src="img/logoo.png" height="54px" width="54px" alt="" style="margin-left: -25px; margin-right: 40px;">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Smart Plantation</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="userlogin.php"> <?php 
                            session_start();
                            if (!empty($_SESSION['user'])){
                                echo "Welcome  " . $_SESSION['user'] . "!";
                            } else {
                                    ;
                                echo "Login";
                            }
                        ?>
                            </a>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php" onclick=" return confirm('Are you sure you want to logout') ">Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>





        <!-- Masthead-->
        <header class="masthead" style="background-image: url(img/p5.jpg); ">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Let's join hands to recreate our planet</h1>
                        <h3 class="text-uppercase text-white">the same GREEN land</h3>
                        <hr style="border-color: #4BB543; width: 100px" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">We aim to let you acheive the highest possible AIR QUALITY by suggesting you what your environment NEEDS</p>
                        <a class="btn btn-success btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-success" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr style="border-color: #4BB543; width: 100px" />
                        <p class="text-white-50 mb-4">Smart Plantation is a platform that lets you know what is eactly needed by your environment. We do it by providing you a device that will collect data from your surrounding. This data will be used to suggest you, your environment protector!</p>
                        <p class="text-white-50 mb-4">You can buy the device from here</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="prediction.php">Get plant suggestion </a>
                    </div>
                </div>
            </div>
        </section>

        <!--Device Description-->
        <section class="page-section bg-white mb-0" id="device">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-dark mt-0">One Device with capability to handle a number of Air Quality parameters</h2>
                        <hr style="border-color: #4BB543; width: 100px" />
                        <p class="text-white-90 mb-4">This Device is multi-purpose i.e you can use it for plant suggestion and plant maintenance. Just connect it by entering the serial number provided on the device. </p>
                        <p class="text-white-50 mb-4">You can buy the device from here</p>
                        <a class="btn btn-success btn-xl js-scroll-trigger" href="device.php">Get your device now! </a>
                    </div>
                    <div class="col-lg-3 justify-content-center" style="padding: 50px;">
                        <img src="img/device.jpg" style="height: 400px; width: 400px; ">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="page-section bg-light justify-content-center mt-0" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr style="border-color: #4BB543; width: 100px" />
                <div class="row">
                    <div class="col-lg-2 col-md-6 text-center" 
                    style="border-radius: 15px;background-image: linear-gradient(to top left,#CCCC99,white); margin: 18px;">
                    <a href="prediction.php" style="text-decoration: none;">
                        <div class="mt-5">
                            <img class="mb-4" src="img/predict1.png" style="height: 80px;">
                            
                            <h5 class="text-dark">Know the Right Plant</h3>
                            <!--<p class="text-white mb-0">Get a suggestion of plant that is suitable for your environment</p>-->
                        </div>
                    </a>    
                    </div>
                    <div class="col-lg-2 col-md-6 text-center" style="border-radius: 15px; background-image: linear-gradient(to top left,#CCCC99,white); margin:18px;">
                    <a href="track-plant.php" style="text-decoration: none;">
                        <div class="mt-5">
                            <img class="mb-4" src="img/maintain2.png" style="height: 80px;">
                            
                            <h5 class="mb-4 text-dark">Track your plant</h5>
                            <!--<p class="text-white mb-0">Check your daily growth of plant to keep the record of your plant.</p>-->
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center" style="border-radius: 15px; background-image: linear-gradient(to top left,#CCCC99,white); margin: 18px;">
                    <a href="donation.php" style="text-decoration: none;">
                        <div class="mt-5">
                            <img class="mb-4" src="img/donate2.jpg" style="height: 80px;">
                            
                            <h5 class="mb-4 text-dark">Get help in Donating a plant</h5>
                            <!--<p class="text-white mb-0">Donate a plant for any area of ypur choice to add one more in your good deeds</p>-->
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center" style="border-radius: 15px; background-image: linear-gradient(to top left,#CCCC99,white); margin: 18px;">
                    <a href="gardener.php" style="text-decoration: none;">
                        <div class="mt-5">
                            <img class="mb-4" src="img/gardener.png" style="height: 80px;">
                            
                            <h5 class="mb-4 text-dark">Get Gardener' Consultation</h5>
                            <!--<p class="text-white mb-0">Get a suggestion of plant that is suitable for your environment</p>-->
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center box wow fadeInBottom" data-wow-delay="0.3s" style="border-radius: 15px; background-image: linear-gradient(to top left,#CCCC99,white); margin: 18px;">
                    <a href="shop-plants.php" style="text-decoration: none;">
                        <div class="mt-5">
                            <img class="mb-4" src="img/cart.png" style="height: 80px;">
                            
                            <h5 class=" mb-4 text-dark">Buy seeds of Plants</h5>
                            <!--<p class="text-white mb-0">Get a suggestion of plant that is suitable for your environment</p>-->
                        </div>
                    </a>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <h2 class="text-dark mt-4"><center>Some INDOORS that can help in purifying Air</center></h2>
                        <hr style="border-color: #4BB543; width: 100px" />
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant1.jpeg" style="width: 100%; height: 100%" 
                            ><img class="img-fluid" src="img/plant1.jpeg" style="height: 242px;" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Money Plant</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant2.jpg" style="width: 100%; height: 100%"
                            ><img class="img-fluid" src="img/plant2.jpg" style="height: 242px;" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Snake Plant</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant3.jpg" style="width: 100%; height: 100%"
                            ><img class="img-fluid" src="img/plant3.jpg" style="height: 242px; width: 450px;"  alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Chrysanthemums</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant4.jpg" style="width: 100%; height: 100%"
                            ><img class="img-fluid" src="img/plant4.jpg" style="height: 242px;" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Rubber Plant</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant5.jpg" style="width: 100%; height: 100%"
                            ><img class="img-fluid" src="img/plant5.jpg" style="height: 242px;" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Peace Lily</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="img/plant7.jpg" style="width: 100%; height: 100%"
                            ><img class="img-fluid" src="img/plant7.jpg" style="height: 242px; "
                            alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Aloe Vera</div>
                                <div class="project-name">Click to enlarge</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Free Download our Mobile app from playstore</h2>
                <a class="btn btn-light btn-xl" href="#">Download Now!</a>
            </div>
        </section>

<?php
include 'footer.php';
?>