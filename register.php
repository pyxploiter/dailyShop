<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Daily Shop | Home</title>

<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner"> <span>Loading</span> </div>
</div>
<!-- / wpf loader Two --> 
<!-- SCROLL TOP BUTTON --> 
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a> 
<!-- END SCROLL TOP BUTTON --> 

<!-- Start header section -->
<header id="aa-header"> 
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area"> 
            <!-- start header top left -->
            <div class="aa-header-top-left"> 
              <!-- start language -->
              <div class="aa-language">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="img/flag/english.jpg" alt="english flag">ENGLISH <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                    <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                  </ul>
                </div>
              </div>
              <!-- / language --> 
              
              <!-- start currency -->
              <div class="aa-currency">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fa fa-usd"></i>USD <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                    <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                  </ul>
                </div>
              </div>
              <!-- / currency --> 
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>00-62-658-658</p>
              </div>
              <!-- / cellphone --> 
            </div>
            <!-- / header top left -->
            
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                <li><a href="index.php">My Account</a></li>
                <li class="hidden-xs"><a href="cart.php">Wishlist</a></li>
                <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                <?php
					if(isset($_SESSION['customer_email'])){
						echo "<li><a href='logout.php' >Logout</a></li>" ;	
					}
					else{
						echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
 
					}
				?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  --> 
  
  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area"> 
            <!-- logo  -->
            <div class="aa-logo"> 
              <!-- Text based logo --> 
              <a href="index.html"> <span class="fa fa-shopping-cart"></span>
              <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
              </a> 
              <!-- img based logo --> 
              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> --> 
            </div>
            <!-- / logo  --> 
            

            
             <!-- cart box -->
            <div class="aa-cartbox"> <a class="aa-cart-link" href="#"> <span class="fa fa-shopping-basket"></span> <span class="aa-cart-title">SHOPPING CART</span> <span class="aa-cart-notify"><?php total_items(); ?></span> </a>
              <div class="aa-cartbox-summary">
                <ul>
                            <?php
  $total=0;
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	
	while($p_price=mysqli_fetch_array($run_items)){
		
		$pro_id = $p_price['p_id'];
		$qty = $p_price['qty'];
		
		$pro_price="select * from products where product_id='$pro_id'"; 
		$run_pro_price = mysqli_query($conn,$pro_price);
		
			while($pp_price=mysqli_fetch_array($run_pro_price)){
					$product_price = array($pp_price['price']);
					$product_title = $pp_price['product_title'];
					$product_image = $pp_price['product_img1'];
					$single_price = $pp_price['price'];
					$qty_price = $single_price * $qty;
					$total+=$qty_price;
			
	
	?>
                  <li> <a class="aa-cartbox-img" href="#"><img src="admin_area/product_images/<?php echo $product_image; ?>" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#"><?php echo $product_title; ?></a></h4>
                      <p><?php echo $qty; ?> x <?php echo "$".$single_price; ?></p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a> </li>
                  <?php }}?> 
                  <li> <span class="aa-cartbox-total-title"> Total </span> <span class="aa-cartbox-total-price"><?php total_price(); ?></span> </li>
                 
                </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.php">Checkout</a> </div>
            </div>
            <!-- / cart box --> 
          
 <!-- search box -->
            <div class="aa-search-box">
              <form action="">
                <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                <button type="submit"><span class="fa fa-search"></span></button>
              </form>
            </div>
            <!-- / search box --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  --> 
</header>
<!-- / header section --> 
<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area"> 
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse"> 
          <!-- Left nav -->
          
          <?php getIp(); ?>
          <?php cart(); ?>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            
			<?php getCatsMainNav(); ?>
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Welcome " . $_SESSION['customer_email'];
				}
				else{
					echo "Welcome Guest";
				}
				
			?></a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

<!-- Register section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
       <form action="" method="post">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Fill form to Register
                          </a>
                        </h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="f_name" placeholder="First Name*">                              
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="l_name" placeholder="Last Name*">
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="email" placeholder="Email Address*">
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              	<input type="password" name="pass" placeholder="Password*">
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                          	<div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <input type="tel" name="contact"  placeholder="Phone*">
                             </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select <select name="country">>
                                  <option value="0">Select Your Country</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Afganistan">Afganistan</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="Canada">Canada</option>
                                  <option value="China">China</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="India">India</option>
                                  <option value="Iran">Iran</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="UAE">UAE</option>
                                  <option value="UK">UK</option>
                                  <option value="USA">USA</option>
                                </select>
                              </div>                             
                            </div>                           
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="city" placeholder="City / Town*">
                              </div>                             
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="address" cols="20" rows="4" placeholder="Address*" ></textarea>
                              </div>                             
                            </div>
                          </div>   
                           
                                <input type="submit" value="Register" name="register" class="aa-browse-btn">
                                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Register section -->



  <!-- footer -->
<footer id="aa-footer"> 
  <!-- footer bottom -->
  <div class="aa-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                    <p> 25 Astor Pl, NY 10003, USA</p>
                    <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                    <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social"> <a href="#"><span class="fa fa-facebook"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-youtube"></span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer-bottom -->
  <div class="aa-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment"> <span class="fa fa-cc-mastercard"></span> <span class="fa fa-cc-visa"></span> <span class="fa fa-paypal"></span> <span class="fa fa-cc-discover"></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- / footer --> 

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login or Register</h4>
        <form class="aa-login-form" action="" method="post">
          <label for="">Username or Email address<span>*</span></label>
          <input type="text" name="email" placeholder="Username or email" required>
          <label for="">Password<span>*</span></label>
          <input type="password" name="pass" placeholder="Password" required>
          <button class="aa-browse-btn" name="login" type="submit">Login</button>
          <label for="rememberme" class="rememberme">
            <input type="checkbox" id="rememberme">
            Remember me </label>
          <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
          <div class="aa-register-now"> Don't have an account?<a href="register.php">Register now!</a> </div>
        </form>
        <?php
		
			if(isset($_POST['login'])){
				
				$c_email=$_POST['email'];
				$c_pass=$_POST['pass'];
			
				$sel_c = "select * from customers where customer_email='$c_email' AND customer_pass='$c_pass'";
				$run_c = mysqli_query($conn,$sel_c);
				
				$check_customer = mysqli_num_rows($run_c);
				
				if($check_customer==0){
					echo"<script>alert('Password or Email is incorrect! plz try again')</script>";
					

				}
				else{
				$ip=getIp();
				$sel_cart ="select * from cart where ip_add='$ip'";
				$run_cart = mysqli_query($conn,$sel_cart);
				
				$check_cart = mysqli_num_rows($run_cart);
				
				$_SESSION['customer_email']=$c_email;
				echo "<script>alert('Login Successful !')</script>";
				}
				
				if($check_customer>0 AND $check_cart==0){
					echo "<script>window.open('index.php','_self')</script>";
					
				}
				else{
					echo "<script>window.open('index.php','_self')</script>";
				}
				
			}
		?>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>

<!-- jQuery library --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<!-- SmartMenus jQuery plugin --> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script> 
<!-- SmartMenus jQuery Bootstrap Addon --> 
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script> 
<!-- Product view slider --> 
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script> 
<script type="text/javascript" src="js/jquery.simpleLens.js"></script> 
<!-- slick slider --> 
<script type="text/javascript" src="js/slick.js"></script> 
<!-- Price picker slider --> 
<script type="text/javascript" src="js/nouislider.js"></script> 

<!-- Custom js --> 
<script src="js/custom.js"></script>
</body>
</html>
<?php

	if(isset($_POST['register'])){
	
		$c_ip = getIp();
		$c_fname = $_POST['f_name'];
		$c_lname = $_POST['l_name'];
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$c_contact = $_POST['contact'];
		$c_country = $_POST['country'];
		$c_city = $_POST['city'];
		$c_address = $_POST['address'];

		$insert_c = "insert into customers ( customer_ip, customer_fname, customer_lname, customer_email, customer_pass, customer_country,
		customer_city, customer_contact, Address) 
					values ('$c_ip','$c_fname','$c_lname','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
			
		$run_c = mysqli_query($conn,$insert_c);
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($conn,$sel_cart);
		
		$check_cart = mysqli_num_rows($_cart);
		
		$_SESSION['customer_email']=$c_email;
		if($check_cart==0){
		
			echo "<script>alert('Registration Successful !');</script>";
			echo "<script>window.open('index.php','_self')</script>";	
        }
        else{
    		echo "<script>window.open('checkout.php','_self')</script>";	    	
        	
        }
	}

?>