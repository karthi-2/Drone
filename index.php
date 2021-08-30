<?php 
ob_start();

if(isset($_GET['login_status'])){

    $login_status=$_GET['login_status'];
    if($login_status==1){

          $login_status=1;

    }else{

        $login_status=0;

    }
}
else{

    $login_status=0;

}

?>






<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->


    <title>Deep Drones India</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/deepdrones.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/details.css">
    
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php?login_status=<?php echo $login_status; ?>"><img class="logo" src="./assets/images/deep drones.jpeg" alt="deep drones logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php?login_status=<?php echo $login_status; ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
         
              <li class="nav-item">
                <a class="nav-link" href="shop.php?login_status=<?php echo $login_status; ?>">Shop</a>
              </li>                        
              <li class="nav-item" style="text-align: center;">
                <a class="nav-link" href="contact.php?login_status=<?php echo $login_status; ?>">Contact Us</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
              </li>  

              <?php 
              if($login_status==1){ ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Log out</a>
              </li> 
              
             <?php }?>
              <div class="btn-group dropdown" style="margin-top:5px">
                <button type="button" class="btn  dropdown-toggle btn-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.php?login_status=<?php echo $login_status; ?>">About Us</a>
                  <a class="dropdown-item" href="Terms & Conditions.php?login_status=<?php echo $login_status; ?>">Terms & Conditions</a>
                  <a class="dropdown-item" href="privacy policy.php?login_status=<?php echo $login_status; ?>">Privacy Policy</a>
                  


                  <div class="dropdown-divider"></div>
                </div>
                
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <i class="fa-light fa-cart-shopping"></i>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we are ready to help you</h6>
                  <h4>Providing a Wide Choice <br> of Drones</h4>

                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>explore drone technology </h6>
                  <h4>Top-Rated Camera <br>Drones</h4>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>We help you embrace the future</h6>
                  <h4>Providing top-notch drones & service</h4>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    

  
 <div class="container features" style="margin-top: 12%; height: 60vh;">
  <div class="col-md-12">
    <div class="section-heading">
      <h2>Drone <em>Features</em></h2>
      
    </div>
    <div class="content">
    <div class="feature">
   
    <div class="hero">
      <img class="model-left"src="assets/images/split1.jpg" alt="model-left">
      <img class="model-right"src="assets/images/split2.jpg" alt="model-right">
   </div>
    <div class="feature-right container">
    <p class="f1"> Transmission <br> Distance <em> 5 ml</em></p> <br/>
    <p class="f2"> Maximal Flight time <br>  <em>31 min</em></p><br/>
    <p class="f3"> Effective Pixels <br><em> 12 mp </em></p>
  </div> 
    <div class="feature-left">
      <p class="f4">Max Payload <br> <em>4.3Kg</em></p> <br/>
      <p class="f5">Maximal Flight <br>  Distance <em>320m</em> </p><br/>
      <p class="f6">Drone Length  <br> <em>70cm</em></p>
    </div> 
    </div>
  </div>
 </div>
</div>
<div class="container-fluid mob-feature" style="padding: 94px 0px 0px 0px; height: 100%; background-color: #c0bcbc7a;">
        <div class="section-heading">
          <h2>Drone <em>Features</em></h2>
          

        </div>
        <div class="container">

          <img style="width: 100%;" src="assets/images/split.png" alt="drone-model">

        </div>
        <div class="container" style="text-align: center; padding: 6%;">
          <ul class="feature-mob">
          <li> Transmission  Distance <em> 5 ml</em></li>
          <li> Maximal Flight time   <em>31 min</em></li>
          <li> Effective Pixels <em> 12 mp </em> </li>
          <li> Max Payload  <em>4.3Kg </em> </li>
          <li> Maximal Flight  Distance <em>320m</em></li>
          <li> Drone Length  <em>70cm</em></li>
        </ul>
        </div> 
</div>




   <!-- Gallery -->
   <div class="gallery-top container" ><h2 class="gallery-heading">Our <em> Gallery</em></h2>    </div>

   <div class="row gallery" >
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="assets/images/drones1.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="assets/images/drones2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="assets/images/drones3.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="assets/images/drones4.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="assets/images/drones5.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="assets/images/drones6.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>


    <div class="testimonials" id="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="partners">
      <h3 style="text-align: center;position: relative;bottom: 37px;font-size:30px;  color: #1e1e1e; font-weight: 600;">OUR <em>PARTNERS</em></h3>
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/client-01.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="about.php?login_status=<?php echo $login_status; ?>">About Us</a></li>
              <li><a href="contact.php?login_status=<?php echo $login_status; ?>">Contact Us</a></li>
              <li><a href="shop.php?login_status=<?php echo $login_status; ?>">Shop</a></li>
             
            </ul>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Legal Notices</h4>
            <ul class="menu-list">
              <li><a href="Terms & Conditions.php?login_status=<?php echo $login_status; ?>">Terms and Conditions</a></li>
              <li><a href="privacy policy.php?login_status=<?php echo $login_status; ?>">Privacy Policy</a></li>
            </ul>
          </div>
         
          <div class="col-md-4 footer-item last-item">
            <h4>Write To Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2021 Deep Drones .All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/wow.min.js"></script>
   
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                     
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>