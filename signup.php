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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/owl1.css">
    <link rel="stylesheet" href="assets/css/deepdrones.css">

     
    <title>Create new account</title>
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <script src="https://kit.fontawesome.com/992e697e7d.js" crossorigin="anonymous"></script>
  </head>
    <body>
      
      <!-- ***** Preloader End ***** -->

       <!-- Header -->
           
              
                       <!--header ends-->

        <style>
             @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');
         *{
             margin: 0;
             padding: 0px 2px;
             box-sizing: border-box;
             font-family: 'Open Sans', sans-serif;
         }
               
         body{
             background:white;
             padding: 0px 5px;
         }

         .form{
             width: 100%;
             
         }
    /*--- set styles for close button ---*/
        .request-estimate-close {
            display: none;
            position: fixed;
            z-index: 99999;
            color:black;
            font-size: 20px;
            left: 97%;
            cursor: pointer;
        }

    /*--- set extra styles for close button ---*/
        .request-estimate-close:hover,
        .request-estimate-close:focus{
            color: chocolate;
            cursor: pointer;
        }

    /*--- form input_field styles ---*/
         .form .input_field{
             margin-bottom: 15px;
             display: flex;
             align-items: center;
         }

         .form .input_field label{
             width: 200px;
             color: #2c2b2b;
             margin-right: 10px;
             font-size: 17px;
             font-weight: 500;
         }

         .form .input_field .input{
             width: 50%;
             outline: none;
             border: 1px solid #d4dbd9;
             font-size: 15px;
             padding: 18px 10px;
             border-radius: 3px;
             margin-left: 40px;
             transition: all 0.3s ease;
         }

         .form .input_field .input .custom_select{
             position: relative;
             width: 100%;
             height: 125px;
         }

         .form .input_field .input .custom_select select{
             -webkit-appearance: none;
             appearance: none;
             border: 1px solid #d5dbd9;
             width: 100%;
             height: 100%;
             padding: 8px 10px;
             border-radius: 3px;
             outline: none;
         }

         .form .input_field .input:focus,
         .form .input_field select:focus{
             border: 1px solid #ffa93f;
         }

         a {
            color: #242525;
            text-decoration: none;
            background-color: transparent;
         }
         .h2, h2 {
            font-size: 1.6rem;
        }
        .h1, h1 {
            margin-top: 20px;
            font-size: 2.5rem;
        }
        .button, select {
                text-transform: none;
                margin-left: 40px;
                padding: 8px 20px;
            }
        
        /*--- Responsive style ---*/
        @media all and (display-mode: fullscreen) {
        .body {
            margin: 0;
            padding: 0px 5px;
            box-sizing: border-box;
        }
        }
        @media (max-width: 575.98px) {
            .h1,h1{
                    font-size: calc(1.10rem + 1.5vw);
                    margin-top: 20px;
                }
            .h2,h2 {
                font-size: calc(1.09rem + .9vw);
                }
                .form .input_field .input {
                    width: 100%;
                    outline: none;
                    font-size: 12px;
                    padding: 16px 10px;
                    border-radius: 3px;
                    margin-left: 40px;
                    margin-bottom: 13px;
                }
            .form .input_field {
                margin-bottom: 9px;
                display: flex;
                align-items: center;
                font-size: 12px;
                margin-right: 25px;
            }
            .form .input_field label {
                width: 200px;
                margin-right: 30px;
                font-size: 15px !important;
                font-weight: 470;
            }
            .button, select {
                margin-left: 40px;
                padding: 3px 10px;
                font-size: 15px;
                margin-left: 130px;
            }
            .h4,h4 {
                font-size: calc(0.94rem + .3vw);
            } 
            .p{
                    margin-top: 0;
                    margin-bottom: 0.5rem;
                    font-size: 15px;
                }
            .form-check-label {
                margin-bottom: 0;
                font-size: 12.5px;
            }
            .btn-group-lg>.btn, .btn-lg{
                padding: .4rem 1rem;
                font-size: 1.01rem;
                border-radius: .2rem;
            } 
        }
    @media (max-width: 767.98px) {
            .h1,h1{
                margin-top: 10px;
            }
            .h1.page-header.qa-page-header{
                
                    font-size: 2rem;
            }
            .h2,h2 {
                font-size: 1.4rem;
            }
            .container-sm {
                max-width: 540px;
            }
            
            .form .input_field {
                margin-bottom: 9px;
                display: flex;
                align-items: center;
            }
            .form .input_field label {
            width: 200px;
            margin-right: 10px;
            font-size: 14px;
            font-weight: 500;
        }
        .form .input_field .input {
                width: 50%;
                outline: none;
                border: 1px solid #d4dbd9;
                font-size: 12px;
                padding: 18px 10px;
                border-radius: 3px;
                margin-left: 40px;
                transition: all 0.3s ease;
                margin-bottom: 13px;
            }
        .button,select {
                margin-left: 35px;
                padding: 5px 20px;
            }
            .p {
                margin-top: 0;
                margin-bottom: .3rem;
                font-size: 14px;
            }
            .btn-group-lg>.btn, .btn-lg {
                padding: .4rem 1rem;
                font-size: 1.04rem;
                border-radius: .2rem;
            }
            .h4,h4 {
                font-size: calc(1.02rem + .3vw);
            }
            .form-check-label {
                margin-bottom: 0;
                font-size: 15px;
            }
    }
     @media (max-width: 991.98px) {
            .h1,h1{
                margin-top: 13px;
            }
            .h1.page-header.qa-page-header{
                    font-size: 2.2rem;
            }
            .h2,h2 {
                font-size: 1.5rem;
            }

            .h4,h4 {
                font-size: calc(1.07rem + .3vw);
            }
            p {
                margin-top: 0;
                margin-bottom: 1rem;
                font-size: 16px;
            }
            .button,select {
                margin-left: 40px;
                padding: 4px 20px;
                font-size: 14px;
            }
            .form .input_field .input {
                width: 50%;
                outline: none;
                font-size: 15px;
                padding: 18px 10px;
                border-radius: 3px;
                margin-left: 40px;
                margin-bottom: 13px;
            }
            .form .input_field label {
                width: 200px;
                margin-right: 10px;
                font-size: 15.5px;
                font-weight: 470;
            }
            .label {
                display: inline-block;
                margin-bottom: 9px;
            }
            .btn-group-lg>.btn, .btn-lg {
                padding: .5rem 1rem;
                font-size: 1.10rem;
                border-radius: .3rem;
                }
            .btn {
                display: inline-block;
                font-weight: 400;
            }
        }
        @media (max-width: 1199.98px) { 
            .h1, h1 {
                font-size: calc(1.375rem + 1.5vw);
                margin-top: 20px;
            }
            .h2, h2 {
                font-size: calc(1.123rem + .9vw);
            }
            .form .input_field {
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }
            .form .input_field label {
                width: 200px;
                margin-right: 10px;
                font-size: 18px;
                font-weight: 500;
            }
            .button, select {
                text-transform: none;
                margin-left: 40px;
                padding: 8px 20px;
                font-size: 15px;
            }
            .h4, h4 {
                font-size: calc(1.12rem + .3vw);
            }
            .p {
                margin-top: 0;
                margin-bottom: 1rem;
            }
        .btn-group-lg>.btn, .btn-lg {
                padding: .5rem 1rem;
                font-size: 1.21rem;
                border-radius: .3rem;
            }
        
     }
        </style>

            <div class="container">
              
                <div class="form-container create-a-account-container">
                    <div class="request-estimate-close" style="display: block;"><a href="cart.php?login_status=<?php echo $login_status; ?>" style="position: absolute;right: 20px;"><i class="fas fa-times" ></i></a></div>
                    <h1 class="page-header qa-page-header">Create a Account</h1><hr>
                       <div class="col-xs-1">
                    <!--Create Account Form Section-->
                      <div class="qa-form-section-info form-section _">
                      <div class="heading-byline">
                    <a name="form-section-info" class="form-section-anchor"></a>
                    <form action="signup.php?login_status=<?php echo $login_status; ?>" method="post">
                    <h2 style="text-align: center;">
                      <span class="optional-required-label" >
                             Required
                      </span >
                      Account Details
                     </h2>
                       </div>
                    </div>
                </div>
              </div>
              <br>
        
                <div class="form">
                <div class="input_field">
                 <label>First Name</label>
                 <input name="firstname"  type="text" placeholder="Enter First Name" maxlength="50" class="input" required="">
                 </div>
                 
                 <div class="input_field">
                 <label>Last Name</label>
                 <input type="text" name="lastname"  placeholder="Enter Last Name" maxlength="50" class="input" required="">
                 </div>

                 <div class="input_field">
                 <label>Password</label>
                 <input type="password" name="password1"  placeholder="Enter Password" maxlength="50" class="input" required="">
                 </div>

                 <div class="input_field">
                 <label>Confirm Password</label>
                 <input type="password" name="password2" placeholder="Enter Confirm Password" maxlength="50" class="input" required="">
                 </div>

                 <div class="input_field">
                 <label>Gender</label>
                 <div class="custom_select">
                     <select name="gender">
                         <option name="select" value="">Select</option>
                         <option name="male" value="male">Male</option>
                         <option name="female" value="female">Female</option>
                     </select>
                 </div>
                </div>

                <div class="input_field">
                    <label>Email Address</label>
                    <input name="email" type="text" placeholder="Enter email address" maxlength="50" class="input" required="">
                </div>

                <div class="input_field">
                    <label>Phone No</label>
                    <input name="phonenumber" type="text" maxlength="50" class="input" required="">
                </div>  
                <br><br>
                <h2 style="text-align: center;"> Security purpose</h2>
                <br>
                <div class="input_field">
                 <label>Favourite Colour</label>
                 <input type="text" name="colour"  placeholder="Enter your favourite colour" maxlength="50" class="input" required="">
                 </div>
                 <div class="input_field">
                 <label>Pet's Name</label>
                 <input type="text" name="pet"  placeholder="Enter your pet name" maxlength="50" class="input" required="">
                 </div>

                 
                 <!--Optional Sigup Marketing section-->
                <div class="qa-form-section-marketing-signup">
                    <div class="qa-form-section-heading-marketing-signup">
                  <div class="heading-byline">
                      <a name="form-section-marketing-signup" class="form-section-anchor"></a>
                
                    <h2>
                        <span class="optional-tooltip pull-right qa-optional-label">
                          Optional
                        </span>
                      Sign Up For Email
                    </h2>
                
                      <h4>Get an exclusive offer when you sign up, plus insider access to even more offers, new arrivals, style tips and more. You can unsubscribe at any time.</h4>
                  </div>
                </div>
                
                  <div class="form-block qa-form-block-marketing-signup">
                          <div class="qa-marketing-signup-form _form_j4bnvp">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Deepdrones Emails
                                </label>
                              </div>
                            </div> 

                            <p class="terms qa-marketing-sign-up-terms __a07c8 marketing-signup-terms">
                               
                                  Any information you provide will be held in accordance with our
                                   <a href="privacy policy.php">Privacy Notice</a> and
                                
                                    <a href="Terms & Conditions.php" >Terms of Use</a>.
                                    <a href="contact.php" >Contact Us</a>.
                            </p>   <!--Optional Sigup Marketing section ends-->
                            <br> 

                             <!--Create Account button-->
                             <button name="submit" type="submit" class="btn btn-secondary btn-lg btn-block">Create a account</button>
                              
                             <br>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>
</div>

                                   
    </body>
</html>

<?php
$connection=mysqli_connect("localhost:3307","root","","drones") or die("no connected");
mysqli_select_db($connection,"drones") or die("no database");
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $colour=$_POST['colour'];
    $pet=$_POST['pet'];
    $phonenumber=$_POST['phonenumber'];
    if(strcmp($gender,'select')==0 or $gender==''){
        echo '<script>alert("Select Gender")</script>';
        exit();
    }
     if($password1!=$password2)
        {
            echo '<script>alert("Incorrect Password")</script>';
            exit();
        }
        $same = "SELECT email,phonenumber from users";
        $result= $connection -> query($same);
        if($result-> num_rows > 0)
        {
            while($row = $result-> fetch_assoc())
            {
                if($row['email']==$email)
                {
                    echo '<script>alert("Account Already Exist")</script>';
                    exit();
                }
                if($row['phonenumber'] == $phonenumber)
                {
                    echo '<script>alert("Account Already Exist")</script>';
                    exit();
                }
            }
        }
    $details="INSERT INTO users (firstname,lastname,password,gender,email,phonenumber,colour,pet) VALUES ('$firstname','$lastname','$password1','$gender','$email','$phonenumber','$colour','$pet')";
    $query=mysqli_query($connection,$details);
    header("location:cart.php?login_status=1");
    
}
?>

