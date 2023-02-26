<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard | NSN Shopping</title>
	<!-- --favicon icon -->
  <link rel="icon" href="img/cart.png" type="image/x-icon">
  <!--- googe font montseerat ---->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!--- goggole font poppince ------>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!--- FONT AWESOME ------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--- FONT AWESOME 4 CDN ------>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendor/css/normalize.css">
  <link rel="stylesheet" href="vendor/css/grid.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	
<?php 

session_start();
if ($_SESSION['username'] == true) {
	$username = $_SESSION['username'];
} else {
	header("location: account.php");
}


 ?>


<!---======================= header section =======================------>

<header class="header_section" id="home">
  <nav>
    <div class="row">
      <a href="index.php" class="logo">
        <img src="img/nsn.png" alt="NSN Shopping">
      </a>
      <ul class="nav_links">
        <li><a href="index.php">home</a></li>
        <li><a href="products.php">products</a></li>
        <li><a href="about.html">about</a></li>
        <li><a href="contact.html">contact</a></li>
        <li><a href="dashboard.php" class="active"><?php echo $username ?></a></li>
        <li><a href="logout.php" >logout</a></li>
        <li><a href="cart.php" class="cart"><i class="fa fa-shopping-cart big_cart"></i></a></li>
        <li><a href="search.html" class="search"><i class="fa fa-search big_search"></i></a></li>
      </ul>
      <a href="cart.html"><i class="fa fa-shopping-cart small_cart"></i></a>
      <i class="fa fa-bars menubar"></i>
    </div>
  </nav>
</header>


<!--================= FOOTER SECTION =============------->

<footer class="footer_section">
  <div class="row">
    <div class="col1 span-1-of-4 footer_box">
      <h3>Download Our App</h3>
      <p>Download our app for Android and ios mobile phone.</p>
      <div class="app_logo">
        <a href="#" target="_blank"><img src="img/play-store.png" alt="Google Play Store"></a>
        <a href="#" target="_blank"><img src="img/app-store.png" alt="App Store"></a>
      </div>
    </div>
    <div class="col1 span-1-of-4 footer_box">
      <a href="index.php"><img src="img/nsn-white.png" alt="NSN Shopping"></a>
      <p>Our purpose Is To sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
    </div>
    <div class="col1 span-1-of-4 footer_box">
      <h3>Useful Links</h3>
      <ul>
        <li><a href="#">coupons</a></li>
        <li><a href="#">blog post</a></li>
        <li><a href="#">return policy</a></li>
        <li><a href="#">join affiliate</a></li>
      </ul>
    </div>
    <div class="col1 span-1-of-4 footer_box">
      <h3>Follow Us</h3>
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <hr>
    <p class="copyright">Copyright 2020 - NSN Shopping</p>
  </div>
</footer>

<!--================= JS FOR TOGGLE INDICATOR =============------->


<script>

var loginForm = document.getElementById('loginForm');
var registerForm = document.getElementById('registerForm');
var indicator = document.getElementById('indicator');
function reg(){

  registerForm.style.transform = "translateX(0%)";
  loginForm.style.transform = "translateX(0%)";
  indicator.style.transform = "translateX(118%)";

}
function login(){

  registerForm.style.transform = "translateX(100%)";
  loginForm.style.transform = "translateX(100%)";
  indicator.style.transform = "translateX(5%)";

}

</script>


<!--================= JAVASCRIPT SECTION =============------->

  <script src="js/jquery.js"></script>
  <script src="vendor/js/html5shiv.min.js"></script>
  <script src="vendor/js/respond.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


</body>
</html>