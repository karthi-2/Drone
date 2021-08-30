<?php 
ob_start();
$connection=mysqli_connect("localhost:3307","root","","drones") or die("no connected");
mysqli_select_db($connection,"drones") or die("no database");


if(isset($_GET['login_status'])){

    $login_status=$_GET['login_status'];
    if($login_status==1){

          $login_status=1;
          session_start();
          $username=$_SESSION['user'];

          if(isset($_GET['clear'])){

              if($login_status==1){

                  $del="DELETE FROM cart WHERE user='$username'";
                  $query=mysqli_query($connection,$del);
              }
          }

          if(isset($_GET['k'])){

              $delete_drone=$_GET['k'];
              $item="DELETE FROM cart WHERE user='$username' AND name='$delete_drone'";
              $query=mysqli_query($connection,$item);
          }

          if(isset($_GET['p'])){

              $plus_drone=$_GET['p'];
              $count="SELECT * FROM cart WHERE user='$username' AND name='$plus_drone'";
              $result = mysqli_query($connection, $count);
              $table=mysqli_fetch_assoc($result);
              $a=$table['totalprice']+$table['price'];
              $b=$table['quantity']+1;
              $update="UPDATE cart SET totalprice=$a WHERE user='$username' AND name='$plus_drone'";
              $query=mysqli_query($connection,$update);
              $update="UPDATE cart SET quantity=$b WHERE user='$username' AND name='$plus_drone'";
              $query=mysqli_query($connection,$update);
          }

          if(isset($_GET['m'])){

              $minus_drone=$_GET['m'];
              $count="SELECT * FROM cart WHERE user='$username' AND name='$minus_drone'";
              $result = mysqli_query($connection, $count);
              $table=mysqli_fetch_assoc($result);
              $a=$table['totalprice']-$table['price'];
              $b=$table['quantity']-1;

              if($b==0){

                  $item="DELETE FROM cart WHERE user='$username' AND name='$minus_drone'";
                  $query=mysqli_query($connection,$item);

              }else{

                  $update="UPDATE cart SET totalprice=$a WHERE user='$username' AND name='$minus_drone'";
                  $query=mysqli_query($connection,$update);
                  $update="UPDATE cart SET quantity=$b WHERE user='$username' AND name='$minus_drone'";
                  $query=mysqli_query($connection,$update);

              }

          }

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
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="assets/css/cart.css">
    <script src="https://kit.fontawesome.com/46def20446.js" crossorigin="anonymous"></script>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   

    <link rel="stylesheet" href="assets/css/cart.css">

    <link rel="stylesheet" href="assets/css/owl1.css">

    <title>Cart Page</title>
    
    <link rel="stylesheet" href="assets/css/owl.css">
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

       <!-- Header -->
          <header class=""></header>
            <nav class="navbar navbar-expand-lg" style="top:-80px; background-color: #000; position: relative; bottom: 100px;height: 95px;">
              <div class="container">
                <a class="navbar-brand" href="index.php?login_status=<?php echo $login_status; ?>"><img  style="margin-bottom: 0px !important;width: 100px;margin-left: 30px;"class="logo" src="./assets/images/deep drones.jpeg" alt="deep drones logo"></a>
                <button style ="width: 56px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto" style="background-color: #000;">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?login_status=<?php echo $login_status; ?>">Home</a>
                    </li>           
                  
                    <li class="nav-item">
                      <a class="nav-link" href="shop.php?login_status=<?php echo $login_status; ?>">Shop
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                  
                    

                    <li class="nav-item">
                      <a class="nav-link" href="contact.php?login_status=<?php echo $login_status; ?>">Contact Us</a>
                    </li>
                    
                    <li class="cart nav-item" style="background-color:#ffa93f ; color:#000 ">
                      <a class=" nav-link" href="cart.php?login_status=<?php echo $login_status; ?>">
                        <ion-icon name="cart-outline"></ion-icon> Cart 

                                            <?php 

                                                if($login_status==1){

                                                    $count="SELECT * FROM cart WHERE user='$username'";
                                                    $result = mysqli_query($connection, $count);
                                                        if($result-> num_rows > 0){

                                                            $count="SELECT SUM(quantity) as total FROM cart WHERE user='$username'";
                                                            $result = mysqli_query($connection, $count);
                                                            $query=mysqli_fetch_assoc($result);
                                                            echo $query['total'];

                                                        }else{

                                                            echo "0";
                                                        
                                                        }
                                                }   
                                          
                                          ?>

                                                                <?php
                                                                if($login_status==0){ ?>
                                                                   <span> 0 </span>
                                                               <?php } ?>
                    </a>
                    </li>
                  <?php 

                  if($login_status==1){ ?>
                    <li class="cart nav-item" style="background-color:#ffa93f ; color:#000 ">
                      <a class=" nav-link" href="new folder/account setting.php?login_status=<?php echo $login_status; ?>">
                          Account settings
                    </a>
                    </li>
                  <?php }  ?>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
              
                       <!--header ends-->
            
   
 
         <nav  class="navbar navbar-light bg-light justify-content-between" style="margin-top: -77px;">
          <h1 class="navbar-brand">SHOPPING CART</h1>
          <form class="form-inline" action="cart.php?login_status=<?php echo $login_status; ?>" method="post">
            <?php 
            if($login_status==0){ ?>
            <div class=".float-sm-left">
            <div class="form-group">
            <button style="margin-right: 3%;" class="btn btn-success"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Sign-in </button>
            </div>
            </div>
         <?php } ?>

         <?php 
            if($login_status==1){ ?>
            <div class=".float-sm-left">
            <div class="form-group">
            <button style="margin-right: 3%;" class="btn btn-danger" style="width:auto;"><a href="index.php" style="text-decoration: none; color: white;"> Log out </a></button>
            </div>
            </div>
         <?php } ?>
            

               <!--Pop up of Sign IN form -->
        <div id="id01" class="modal container-fluid " >
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="centre signin-box" >
            <div class="container-1">
                <h1>Sign In</h1> <hr>
            <form action="#" method="post">
                <div class="data">
                    <label for="email"><b>Email or Mobile number</b></label>
                    <input style="text-align: center;"  type="text" autocomplete="email" placeholder="Email" maxlength="50" placeholder="Enter Email" name="email" required>
                </div>

                <div class="data">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div>
                    
                <div class="forgot-pass"><a href="forgot.php">Forgot Password?</a></div>
                      
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button name="submit" type="submit" value="submit" class="signinbtn">SIGN IN</button>
                </div>

                <div class="signin-link">Not a member?  <a href="signup.php?login_status=<?php echo $login_status; ?>">Create a account</a></div>
              </form>
            </div>
        </div>
              
              <script>
              // Get the modal
              var modal = document.getElementById('id01');
              
              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
              </script>
              </div>    <!--Pop up of Sign IN form ends-->
            </div>
          </nav>
        </form>

 
        <div class="form-group">
          <a href="cart.php?login_status=<?php echo $login_status; ?>&clear=1"><button id="clear-cart" class="btn btn-danger my-2 my-sm-0" type="submit">Clear-Cart</button></a>
        </div>
        <form style="margin-left: 900px;"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HqiZeOB8fHGzU2" async> </script> </form> 
        <div class="products-container">
          <div class="product-header">
              <p class="product-title">Product</p>
              <p class="product-price">Price</p>
              <p class="quantity">Quantity </p> 
              <p class="total">Total</p>
          </div>
          <div class="products">
            <div>

      
  
              <?php 

              if($login_status==1){ 

                $sql = "SELECT * from cart";
                $result= $connection-> query($sql);
                $f=0;$sum=0;
                if($result-> num_rows > 0){

                      while($row = $result-> fetch_assoc()){

                          if($row['user']==$username){ 

                                $f=1;  ?>
                                <li class='product-list' style="list-style-type: none;" >
                                <div class='products-container'>
                                <a class='delete-item btn-danger' href="cart.php?login_status=<?php echo $login_status; ?>&k=<?php echo $row['name']; ?>"><button style="outline:none;" class='delete-item btn-danger'>X</button></a>
                                <img src="assets/images/<?php echo $row['name']; ?>.jpg">
                                <p>
                                <?php echo $row['name']; ?> &nbsp; 
                                </p>   
                                <p>  
                                <?php echo $row['price']; ?> 
                                </p>
                                <a class='plus-item btn-primary' href="cart.php?login_status=<?php echo $login_status; ?>&p=<?php echo $row['name']; ?>"><button style="outline:none;" class='plus-item btn-primary' >+</button></a>
                                <p > 
                                <?php echo $row['quantity']; ?>
                                </p>
                                <a class='subtract-item btn-primary' href="cart.php?login_status=<?php echo $login_status; ?>&m=<?php echo $row['name']; ?>"><button style="outline:none;" class='subtract-item btn-primary' >-</button></a>
                                <p class='totals' style='width:6%' >
                                <?php echo $row['totalprice']; ?>
                                <?php $sum+=$row['totalprice']; ?>
                                </p>
                                </div>
                                </li>
                        <?php 
                          }
                      }
                  }
              }
                ?>

    

            <?php 
               if(($login_status==1 and $f==0) or $login_status==0 ){ 
                                                                      ?>

              <ul id="show-cart">
                  <li >???????</li>
              </ul>

            <?php } ?>
        
         
              
              <div style="float: right; position: relative; ">Total Cart:$
                                                  <?php 
                                                      if($login_status==1){
                                                        echo $sum;
                                                      } ?>
                <span id="total-cart" class="basketTotal"></span><br></div>
            </div>
          </div>
          
      </div>


      <div>
   
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript"> 
          AOS.init({
            once: true,
            easing: 'ease-in-out'
          }
          );
          $(".signin-box").removeClass('aos-animate');
          
          var iconButtonOpen = $(".sign-in");
          var iconBox = $(".signin-box");
          iconButtonOpen.on("click", function() {
            
            setTimeout(function() {
            $(iconBox).addClass('aos-animate');
            }, 400);
        });
        var iconButtonClose = $(".close");
        iconButtonClose.on("click", function() {
          $(iconBox).removeClass('aos-animate');
      });
      var iconButtonClose1 = $(".modal");
          iconButtonClose1.on("click", function() {
          $(iconBox).removeClass('aos-animate');
      });



    

        </script>
        <script src="assets/js/shoppingCart.js"></script>
        <script type="text/javascript">

            $(".add-to-cart").click(function(event){
                event.preventDefault();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price"));


                        shoppingCart.addItemToCart(name, price, 1);
                        displayCart();
            });

            $("#clear-cart").click(function(event){
                shoppingCart.clearCart();
                displayCart();
            });
       
            function displayCart() {
                var cartArray = shoppingCart.listCart();
                
                var output = "";

                for (var i in cartArray) {
                    output += "<li class='product-list'>"
                      +"<div class='products-container'>"
                      
                        +" <button class='delete-item btn-danger' data-name='"
                        +cartArray[i].name+"'>X</button>"
                        +" <img src='assets/images/"+cartArray[i].name+".jpg'>"
                        +"<p >"
                        +cartArray[i].name +"&nbsp "
                        +"</p>"    
                        +"<p >"     
                        +cartArray[i].price 
                        +"</p>"
                        +" <button class='plus-item btn-primary' data-name='"
                        +cartArray[i].name+"'>+</button>"
                        +"<p>" 
                        +cartArray[i].count
                        +"</p>"
                        +" <button class='subtract-item btn-primary' data-name='"
                        +cartArray[i].name+"'>-</button>"
                        +"<p class='totals' style='width:6%'>"
                        +cartArray[i].total;
                        +"</p>"
                        +"</div>"
                        +"</li>"

                        
                }

              <?php 

                if($login_status==0){ ?>

                $("#show-cart").html(output);
                $("#count-cart").html( shoppingCart.countCart() );
                $("#total-cart").html( shoppingCart.totalCart() );

                <?php } ?>

            }
          
            $("#show-cart").on("click", ".delete-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCartAll(name);
                displayCart();
            });

            $("#show-cart").on("click", ".subtract-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCart(name);
                displayCart();
            });

            $("#show-cart").on("click", ".plus-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.addItemToCart(name, 0, 1);
                displayCart();
            });

            $("#show-cart").on("change", ".item-count", function(event){
                var name = $(this).attr("data-name");
                var count = Number($(this).val());
                shoppingCart.setCountForItem(name, count);
                displayCart();
            });

            displayCart();
     

        </script>

        
     <!-- Footer Starts Here -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-item">
              <h4>Additional Pages</h4>
              <ul class="menu-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shop</a></li>
              
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

<?php
$key=0;
$connection=mysqli_connect("localhost:3307","root","","drones") or die("no connected");
mysqli_select_db($connection,"drones") or die("no database");
if(isset($_POST['submit']))
{
  $username=$_POST['email'];
  $password=$_POST['psw'];
  $sql = "SELECT email,password from users";
  $i=0;
  $result= $connection-> query($sql);
  if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
      if(($row['email']==$username or $row['phonenumber']==$username) and  $row['password']==$password){
        session_start();
        $_SESSION['user']=$username;
        $login_status=1;
        header("Refresh:0;url=cart.php?login_status=1");
        echo '<script>alert("Successfully Logged In")</script>';

        $i=1;
      }
    }
    if($i==0){
      echo '<script>alert("Invalid details")</script>';
    }
  }
}
?>