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
        if(isset($_GET['name'])){
                        $name=$_GET['name'];
                        $price=$_GET['price'];
                        $count="SELECT * FROM cart WHERE user='$username' AND name='$name'";
                        $result = mysqli_query($connection, $count);
                        $row=$result-> num_rows;
                        if($row==0){
                            $quantity=1;
                            $totalprice=$price;
                            $details="INSERT INTO cart (user,name,price,quantity,totalprice) VALUES ('$username','$name','$price','$quantity','$totalprice')";
                            $query=mysqli_query($connection,$details);
                        }
                        if($row==1){
                            $table=mysqli_fetch_assoc($result);
                            $quantity=$table['quantity'];
                            $quantity=$quantity+1;
                            $totalprice=$table['totalprice']+$price;
                            $detail1="UPDATE cart SET quantity=$quantity  WHERE user='$username' AND name='$name'";
                            $query=mysqli_query($connection,$detail1);
                            $detail2="UPDATE cart SET totalprice=$totalprice  WHERE user='$username' AND name='$name'";
                            $query=mysqli_query($connection,$detail2);


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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
         

    <title>Deep Drones India</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46def20446.js" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/deepdrones.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="assets/css/owl1.css">
       
    
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
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
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg" style="background-color: black;height: 100%">
          <div class="container">
            <a class="navbar-brand" href="index.php?login_status=<?php echo $login_status; ?>"><img class="logo" src="./assets/images/deep drones.jpeg" alt="deep drones logo"></a>
            <button style = "width:50px;"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?login_status=<?php echo $login_status; ?>">Home</a>
                  </li>           
                 
                  <a class="nav-link" href="shop.php?login_status=<?php echo $login_status; ?>">Shop
                    <span class="sr-only">(current)</span>
                  </a>
                </li>     
               
  
  
                <li class="nav-item">
                  <a class="nav-link" href="contact.php?login_status=<?php echo $login_status; ?>">Contact Us</a>
                </li>
                <li class="cart nav-item" style="background-color:#ffa93f ; color:#000; ">
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
               
               
              </ul>
            </div>
          </div>
        </nav>
      </header>
  
    <!-- ***** Preloader End ***** -->
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4>Best Offer</h4>
              <h2>New Arrivals On Sale</h2>
            </div>
          </div>
          <div class="banner-item-02">
            <div class="text-content">
              <h4>Flash Deals</h4>
              <h2>Get your best products</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Last Minute</h4>
              <h2>Grab last minute deals</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->
      <div class="container pb-5 form-popup" id="detail1">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="assets/images/drones7.jpg" alt="Card image cap" id="product-detail">
                </div>
                
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">product name</h1>
                        <p class="h3 py-2">$25.75</p>
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Brand:</h6>
                            </li>
                            
                        </ul>
  
                        <h6>Description:</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                        
  
                       
  
                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="Activewear">
                            
                            <div class="row pb-3" style="margin-top: 8%; ">
                                
                                <div class="col d-grid">
                                    <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones7" data-price="25.75">Add To Cart</a>
                                </div>
                                <div class="buttons">
                                  <button type="button" class="btn prev" onclick="showPrev()" >Prev</button>
                                 <button  type="button"class="btn next"onclick="showNext()" >Next</button>
                                 <button type="button" class="btn cancel btn-danger" onclick="closeForm()">Close</button>
                                </div>
                                
                            </div>
                        </form>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5 form-popup"  id="detail2">
      <div class="row">
          <div class="col-lg-5 mt-5">
              <div class="card mb-3">
                  <img class="card-img img-fluid" src="assets/images/drones6.jpg" alt="Card image cap" id="product-detail">
              </div>
              
          </div>
          <!-- col end -->
          <div class="col-lg-7 mt-5 ">
              <div class="card">
                  <div class="card-body">
                      <h1 class="h2">product name</h1>
                      <p class="h3 py-2">$30.25</p>
                      <p class="py-2">
                          <i class="fa fa-star text-warning"></i>
                          <i class="fa fa-star text-warning"></i>
                          <i class="fa fa-star text-warning"></i>
                          <i class="fa fa-star text-warning"></i>
                          <i class="fa fa-star text-secondary"></i>
                          <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                      </p>
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <h6>Brand:</h6>
                          </li>
                          
                      </ul>
  
                      <h6>Description:</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                      
  
                    
  
                      <form action="" method="GET">
                          <input type="hidden" name="product-title" value="Activewear">
                        
                          <div class="row pb-3" style="margin-top: 8%;">
                              <div class="col d-grid">
                                <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones6" data-price="30.25"  >Add To Cart</a>
                              </div>
                              <div class="buttons">
                                <button type="button" onclick="showPrev()" class="btn prev">Prev</button>
                               <button type="button" onclick="showNext()" class="btn prev">Next</button>
                               <button type="button" class="btn cancel btn-danger" onclick="closeForm1()">Close</button>
                              </div>
                             
  
                          </div>
                      </form>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container pb-5 form-popup" id="detail3">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="assets/images/drones5.jpg" alt="Card image cap" id="product-detail">
            </div>
            
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">product name</h1>
                    <p class="h3 py-2">$20.45</p>
                    <p class="py-2">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Brand:</h6>
                        </li>
                        
                    </ul>
  
                    <h6>Description:</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                    
  
                   
  
                    <form action="" method="GET">
                        <input type="hidden" name="product-title" value="Activewear">
                      
                        <div class="row pb-3" style="margin-top: 8%;">
                            
                            <div class="col d-grid">
                              <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones5" data-price="20.45"  >Add To Cart</a>
                            </div>
                            <div class="buttons">
                              <button type="button" onclick="showPrev()" class="btn prev">Prev</button>
                             <button  type="button" onclick="showNext()" class="btn next">Next</button>
                             <button type="button" class="btn cancel btn-danger" onclick="closeForm2()">Close</button>
                            </div>
                            
                        </div>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="container pb-5 form-popup" id="detail4">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="assets/images/drones4.jpg" alt="Card image cap" id="product-detail">
            </div>
            
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">product name</h1>
                    <p class="h3 py-2">$15.25</p>
                    <p class="py-2">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Brand:</h6>
                        </li>
                        
                    </ul>
  
                    <h6>Description:</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                    
  
                   
                    <form action="" method="GET">
                        <input type="hidden" name="product-title" value="Activewear">
                        <div class="row pb-3" style="margin-top: 8%; ">
                            <div class="col d-grid">
                              <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones4" data-price="15.25"  >Add To Cart</a>
                            </div>
                            <div class="buttons">
                              <button type="button" onclick="showPrev()" class="btn prev">Prev</button>
                             <button type="button" onclick="showNext()" class="btn next">Next</button>
                             <button type="button" class="btn cancel btn-danger" onclick="closeForm3()">Close</button>
                            </div>
                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="container pb-5 form-popup" id="detail5">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="assets/images/drones3.jpg" alt="Card image cap" id="product-detail">
            </div>
            
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">product name</h1>
                    <p class="h3 py-2">$12.50</p>
                    <p class="py-2">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Brand:</h6>
                        </li>
                    </ul>
                    <h6>Description:</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                    <form action="" method="GET">
                        <input type="hidden" name="product-title" value="Activewear">
                        <div class="row">
                          
                            
                        </div>
                        <div class="row pb-3" style="margin-top: 8%;">
                            
                            <div class="col d-grid">
                              <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones3" data-price="12.50"  >Add To Cart</a>
  
                              </div>
                              <div class="buttons">
                                <button type="button" onclick="showPrev()" class="btn prev">Prev</button>
                               <button  type="button"onclick="showNext()" class="btn next">Next</button>
                               <button type="button" class="btn cancel btn-danger" onclick="closeForm4()">Close</button>
                              </div>
                              

                        </div>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="container pb-5 form-popup" id="detail6">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="assets/images/drones2.jpg" alt="Card image cap" id="product-detail">
            </div>
            
        </div>
        <!-- col end -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">product name</h1>
                    <p class="h3 py-2">$22.50</p>
                    <p class="py-2">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-secondary"></i>
                        <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Brand:</h6>
                        </li>
                        
                    </ul>
  
                    <h6>Description:</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                    <form action="" method="GET">
                        <input type="hidden" name="product-title" value="Activewear">
                        <div class="row">
                          
                            
                        </div>
                        <div class="row pb-3" style="margin-top: 8%;">
                            
                            <div class="col d-grid">
                              <a  class="btn btn-success btn-lg  add-to-cart"  data-name="drones2" data-price="22.50"  >Add To Cart</a>
                            </div>
                            <div class="buttons">
                              <button type="button" onclick="showPrev()" class="btn prev">Prev</button>
                             <button type="button" onclick="showNext()" class="btn next">Next</button>
                             <button type="button" class="btn cancel btn-danger" onclick="closeForm5()">Close</button>
                            </div>
                           
  
                        </div>
                    </form>
  
                </div>
            </div>
        </div>
    </div>
  </div>
      <div class="latest-products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Latest Products</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm()"><img src="assets/images/drones7.jpg" alt=""></button>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$25.75</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (24)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm1()"><img src="assets/images/drones6.jpg" alt=""></button>
  
         
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$30.25</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (21)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm2()"><img src="assets/images/drones5.jpg" alt=""></button>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$20.45</h6>
                  <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (36)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm3()"><img src="assets/images/drones4.jpg" alt=""></button>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$15.25</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (48)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm4()"><img src="assets/images/drones3.jpg" alt=""></button>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$12.50</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (16)</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <button  onclick="openForm5()"><img src="assets/images/drones2.jpg" alt=""></button>
                <div class="down-content">
                  <a href="#"><h4>Tittle goes here</h4></a>
                  <h6>$22.50</h6>
                  <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (32)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="best-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>About Deep Drones</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Looking for the best products?</h4>
                <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                <ul class="featured-list">
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Consectetur an adipisicing elit</a></li>
                  <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                  <li><a href="#">Corporis, omnis doloremque</a></li>
                  <li><a href="#">Non cum id reprehenderit</a></li>
                </ul>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
  
  
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Creative &amp; Hightech Deep <em>Drone </em> Products</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="filled-button">Purchase Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-item">
              <h4>Additional Pages</h4>
              <ul class="menu-list">
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="shop.php">Shop</a></li>
               
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
  

        <script src="assets/js/shoppingCart.js"></script>
            <!-- Bootstrap core JavaScript -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
      function openForm() {
            document.getElementById("detail1").style.display = "block";

            document.getElementById("detail2").style.display = "none";
            document.getElementById("detail3").style.display = "none";
            document.getElementById("detail4").style.display = "none";
            document.getElementById("detail5").style.display = "none";
            document.getElementById("detail6").style.display = "none";

          }
      function closeForm() {
        document.getElementById("detail1").style.display = "none";
      }
      function openForm1() {
            document.getElementById("detail2").style.display = "block";

            document.getElementById("detail1").style.display = "none";
            document.getElementById("detail3").style.display = "none";
            document.getElementById("detail4").style.display = "none";
            document.getElementById("detail5").style.display = "none";
            document.getElementById("detail6").style.display = "none";

          }
      function closeForm1() {
        document.getElementById("detail2").style.display = "none";
      }
      function openForm2() {
            document.getElementById("detail3").style.display = "block";
            document.getElementById("detail1").style.display = "none";
            document.getElementById("detail2").style.display = "none";
            document.getElementById("detail4").style.display = "none";
            document.getElementById("detail5").style.display = "none";
            document.getElementById("detail6").style.display = "none";

          }
      function closeForm2() {
        document.getElementById("detail3").style.display = "none";
      }
      function openForm3() {
            document.getElementById("detail4").style.display = "block";
            document.getElementById("detail1").style.display = "none";
            document.getElementById("detail2").style.display = "none";
            document.getElementById("detail3").style.display = "none";
            document.getElementById("detail5").style.display = "none";
            document.getElementById("detail6").style.display = "none";

          }
      function closeForm3() {
        document.getElementById("detail4").style.display = "none";
      }
      function openForm4() {
            document.getElementById("detail5").style.display = "block";
            document.getElementById("detail1").style.display = "none";
            document.getElementById("detail2").style.display = "none";
            document.getElementById("detail3").style.display = "none";
            document.getElementById("detail4").style.display = "none";
            document.getElementById("detail6").style.display = "none";

          }
      function closeForm4() {
        document.getElementById("detail5").style.display = "none";
      }
      function openForm5() {
            document.getElementById("detail6").style.display = "block";
            document.getElementById("detail1").style.display = "none";
            document.getElementById("detail2").style.display = "none";
            document.getElementById("detail3").style.display = "none";
            document.getElementById("detail4").style.display = "none";
            document.getElementById("detail5").style.display = "none";

          }
      function closeForm5() {
        document.getElementById("detail6").style.display = "none";
      }
          </script>
          
        <script src="assets/js/main.js"></script>
        <script src="assets/js/customs.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/accordions.js"></script>

        <script>

            $(".add-to-cart").click(function(event){
                event.preventDefault();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price"));

                <?php 
                if($login_status==0){
                ?>

                shoppingCart.addItemToCart(name, price, 1);
                displayCart();

                <?php 
                } else { ?>

                    window.location.href="shop.php?login_status=1&name=" + name +"&price=" + price;
                <?php

                } ?>


            });

            $("#clear-cart").click(function(event){
                shoppingCart.clearCart();
                displayCart();
            });

            function displayCart() {
                var cartArray = shoppingCart.listCart();
               
                var output = "";

                for (var i in cartArray) {
                    output += "<li>"
                        +" <img src='assets/images/"+cartArray[i].name+".jpg'>"
                        +cartArray[i].name
                        +" <input class='item-count' type='number' data-name='"+cartArray[i].name+"' value='"+cartArray[i].count+"' >"
                        +" x "+cartArray[i].price
                        +" = "+cartArray[i].total
                        +" <button class='plus-item' data-name='"+cartArray[i].name+"'>+</button>"
                        +" <button class='subtract-item' data-name='"+cartArray[i].name+"'>-</button>"
                        +" <button class='delete-item' data-name='"+cartArray[i].name+"'>X</button>"
                        +"</li>";
                }

                $("#show-cart").html(output);
                $("#count-cart").html( shoppingCart.countCart() );
               
                $("#total-cart").html( shoppingCart.totalCart() );
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
        <script>
          var visiblediv = 0;
          function showDiv()
          {
            $(".form-popup").hide();
            $(".form-popup:eq("+ visiblediv +")").show();
          }
          
          function showPrev(){
            if(visiblediv == 0){
              visiblediv = $(".form-popup").length-1;
             
            }
            else{
              visiblediv --;
            }
            showDiv();
          }
          function showNext(){
            if(visiblediv == $(".form-popup").length-1){
              visiblediv=0;
            }
            else{
              visiblediv ++;
            }
            
            showDiv();
          }
          </script>
    </body>
</html>




