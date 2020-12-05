<?php
include 'header.php'
?>


<section class="page-section bg-success" style="height: 280px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                      <h1 class="text-light font-weight-bold"><center>Nourish your Garden with our Services</center></h1>
                      <hr style="border-color: white; width: 100px" />
                    </div>
                </div>
            </div>
        </section>

      <section class="page-section mt-n5">
   	  <div class="container">

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px" >
              </div>
  	            <h3 class="mb-5">Garden Clearance</h3>
              </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px">
              </div>
              <h3 class="mb-5">Garden Designing</h3>
             </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px">
              </div>
              <h3 class="mb-5">Jet Washing</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px">
              </div>
              <h3 class="mb-5">Overgrowth Prevention</h3>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px">
              </div>
              <h3 class="mb-5">Lawn Mowing</h3>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <img src="img/hardware.png" height="80px" width="80px">
              </div>
              <h3 class="mb-5">Hedge Trimming</h3>
            </div>
          </div>
        </div>
        <center><a class="btn btn-success btn-xl js-scroll-trigger" href="#Gardenerform">Find a Gardener</a></center>
      </div>
    </section>



	<section class="page-section mt-n5 bg-success" id="Gardenerform">
		<div class="container py-5 px-n5 mt-n5">
        <center><div class="col-md-6 mt-n5" data-aos="fade-up">
            <h2 class="section-heading text-light mb-4">Request a Gardener</h2>
          </div>
          </center>
        <div class="row">
          <center>
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="gardeners-display.php" method="post" role="form" class="php-email-form w-75 ">

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="exampleInputEmail1" style="float: left;">Enter Location</label>
                  <input type="text" class="form-control" name="location" placeholder="Enter location">
                  <div class="validate"></div>
                </div>

                <div class="col-md-12 form-group">
                <label for="exampleInputEmail1" style="float: left;">Select Services</label>
                </div>

                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="clearance">  Garden Clearance</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="designing">  Garden Designing</label>
                  </div>
                </div>      
                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="jet washing">  Jet Washing</label>
                  </div>
                </div>          
                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="growth monitoring">  Overgrowth Prevention</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="lawn mowing">  Lawn Mowing</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="checkbox" style="float: left;">
                    <label><input type="checkbox" name="service[]" value="hedge trimming">  Hedge Trimming</label>
                  </div>
                </div>   
                </form>  
                <div class="col-md-12 form-group">
               
                <center><button type="submit" class="btn btn-success d-block w-100"> <a href="gardeners-display.php" style="color: #fff;">SUBMIT</a></button></center>
                </div>  
            </div>
            </form>
        </div>
      </div>
</section>


       
        <?php
        include 'footer.php';
        ?>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
