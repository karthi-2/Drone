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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
   
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/privacy policy.css">
    <link rel="stylesheet" href="assets/css/owl1.css">
    
    
     
    <title>About Privacy Policy</title>
    
   
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="index.php?login_status=<?php echo $login_status; ?>"><img class="logo" src="./assets/images/deep drones.jpeg" alt="deep drones logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php?login_status=<?php echo $login_status; ?>">Home
                  </a>
                </li>
           
                <li class="nav-item">
                  <a class="nav-link" href="shop.php?login_status=<?php echo $login_status; ?>">Shop</a>
                </li>                        
                <li class="nav-item" style="text-align: center;">
                  <a class="nav-link" href="contact.php?login_status=<?php echo $login_status; ?>">ContactUs</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>  
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
  
      
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .navbar-collapse .nav-item active .nav-item{
      color: black;
      background: black;
    }
    ul{
        padding:0 !important;
    }
    .Landing-page-policy{
         background: url("assets/images/privacy7.jpeg")no-repeat center center fixed;
         height: 80vh;
    }
    
    .header-text{
      padding: 210px 0px 130px 0px;
      text-align: center;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      justify-content: space-between;
        }
    .header-text .h1.display-1 {
        padding-left: 40px;
      }
    
      @media (min-width: 576px) {
        .display-3 {
        font-size: 3.6rem !important;
        font-weight: 300;
        line-height: 1.2;
    }
    .text-muted {
       color: #6c757d!important;
      }
      .small, small {
          font-size: 70%;
          font-weight: 400;
      }
      .p {
          font-size: 1px;
      }
      .p {
          margin-bottom: 30px;
          color: #666666;
          line-height: 25px;
      }
       }
       @media (min-width: 768px) { 
          .display-3 {
              font-size: 4.2rem;
              font-weight: 300;
              line-height: 1.2;
          }
          .text-muted {
                color: #6c757d!important;
            }
            .small, small {
                font-size: 80%;
                font-weight: 400;
            }
          .p {
              font-size: 20px;
          }
          
       }
</style>

            <div class="Landing-page-policy header-text">
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 >Privacy Policy</h2><br><br>
                        <h2>
                   <small class="text-muted">Your privacy is important to us</small>
                        </h>
                    </div>
                  </div>
                </div>
            </div>
          
      <div class="container">
        <br>
        <p>At Softrate, accessible from www.softrateindia.com, one of our main priorities is the privacy of our
            visitors. This Privacy Policy document contains types of information that is collected and recorded by
            Softrate and how we use it.</p>

        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to
            contact us.</p>

        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with
            regards to the information that they shared and/or collect in Softrate. This policy is not applicable to any
            information collected offline
            or via channels other than this website.</p>

        <h4>Consent</h4>

        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

        <h4>Information we collect</h4>

        <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will
            be made clear to you at the point we ask you to provide your personal information.</p>
        <p>If you contact us directly, we may receive additional information about you such as your name, email address,
            phone number, the contents of the message and/or attachments you may send us, and any other information you
            may choose to provide.</p>
        <p>When you register for an Account, we may ask for your contact information, including items such as name,
            company name, address, email address, and telephone number.</p>

        <h4>How we use your information</h4>

        <p>We use the information we collect in various ways, including to:</p>

        <ul>
            <li>Provide, operate, and maintain our website</li>
            <li>Improve, personalize, and expand our website</li>
            <li>Understand and analyze how you use our website</li>
            <li>Develop new products, services, features, and functionality</li>
            <li>Communicate with you, either directly or through one of our partners, including for customer service, to
                provide you with updates and other information relating to the website, and for marketing and promotional
                purposes</li>
            <li>Send you emails</li>
            <li>Find and prevent fraud</li>
        </ul>

        <h4>Log Files</h4>

        <p>Softrate follows a standard procedure of using log files. These files log visitors when they visit websites.
            All hosting companies do this and a part of hosting services' analytics. The information collected by log
            files include internet protocol
            (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages,
            and possibly the number of clicks. These are not linked to any information that is personally identifiable.
            The purpose of the information
            is for analyzing trends, administering the site, tracking users' movement on the website, and gathering
            demographic information.</p>




        <h4>Advertising Partners Privacy Policies</h4>

        <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Softrate.</p>

        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are
            used in their respective advertisements and links that appear on Softrate, which are sent directly to users'
            browser. They automatically
            receive your IP address when this occurs. These technologies are used to measure the effectiveness of their
            advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.
        </p>

        <p>Note that Softrate has no access to or control over these cookies that are used by third-party advertisers.
        </p>

        <h4>Third Party Privacy Policies</h4>

        <p>Softrate's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to
            consult the respective Privacy Policies of these third-party ad servers for more detailed information. It
            may include their practices and instructions
            about how to opt-out of certain options. </p>

        <p>You can choose to disable cookies through your individual browser options. To know more detailed information
            about cookie management with specific web browsers, it can be found at the browsers' respective websites.
        </p>

        <h4>CCPA Privacy Rights <br>( Do Not Sell My Personal Information )</h4>

        <p>Under the CCPA, among other rights, California consumers have the right to:</p>
        <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces
            of personal data that a business has collected about consumers.</p>
        <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
        <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these
            rights, please contact us.</p>

        <h4>GDPR Data Protection Rights</h4>

        <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled
            to the following:</p>
        <p>The right to access – You have the right to request copies of your personal data. We may charge you a small
            fee for this service.</p>
        <p>The right to rectification – You have the right to request that we correct any information you believe is
            inaccurate. You also have the right to request that we complete the information you believe is incomplete.
        </p>
        <p>The right to erasure – You have the right to request that we erase your personal data, under certain
            conditions.</p>
        <p>The right to restrict processing – You have the right to request that we restrict the processing of your
            personal data, under certain conditions.</p>
        <p>The right to object to processing – You have the right to object to our processing of your personal data,
            under certain conditions.</p>
        <p>The right to data portability – You have the right to request that we transfer the data that we have
            collected to another organization, or directly to you, under certain conditions.</p>
        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these
            rights, please contact us.</p>

        <h4>Children's Information</h4>

        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents
            and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

        <p>Softrate does not knowingly collect any Personal Identifiable Information from children under the age of 13.
            If you think that your child provided this kind of information on our website, we strongly encourage you to
            contact us immediately and
            we will do our best efforts to promptly remove such information from our records.</p>
    </div>
</div>


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
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

  </body>
</html>