<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Detail | NSN Shopping | Ecommerce Website</title>
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
  <link rel="stylesheet" href="css/product detail.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<?php 

// if ($_REQUEST['product_image'] && $_REQUEST['product_name'] && $_REQUEST['product_price']) {
  $product_image = $_REQUEST['product_image'];
  $product_name = $_REQUEST['product_name'];
  $product_price = $_REQUEST['product_price'];
// } else {
//   echo "File Not Found. Please go back and try again after some time.";
// }


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
        <li><a href="account.php">
          <?php 
            session_start();
            if ($_SESSION['username'] == true) {
              echo $username;
              } else {
                echo "account";
              }
              ?>
        </a></li>
        <li><a href="cart.php" class="cart"><i class="fa fa-shopping-cart big_cart"></i></a></li>
        <li><a href="search.html" class="search"><i class="fa fa-search big_search"></i></a></li>
      </ul>
      <a href="cart.html"><i class="fa fa-shopping-cart small_cart"></i></a>
      <i class="fa fa-bars menubar"></i>
    </div>
  </nav>
</header>

<!---==================== SINGLE PRODUCT DETAIL ==================-------->

<section class="product_detail">
  <div class="row">
    <div class="col1 span-1-of-2 detail_box">
      <img src="<?php echo $product_image ?>" alt="<?php echo $product_name ?>" id="productimg">
      <!-- <div class="small_img">
        <div class="col1 span-1-of-4 small_img_box">
          <img src="img/gallery-1.jpg" class="smallimg">
        </div>
        <div class="col1 span-1-of-4 small_img_box">
          <img src="img/gallery-2.jpg" class="smallimg">
        </div>
        <div class="col1 span-1-of-4 small_img_box">
          <img src="img/gallery-3.jpg" class="smallimg">
        </div>
        <div class="col1 span-1-of-4 small_img_box">
          <img src="img/gallery-4.jpg" class="smallimg">
        </div>
      </div> -->
    </div>
    <div class="col1 span-1-of-2 detail_box">
      <p>Home / Product Details</p>
      <h1><?php echo $product_name ?></h1>
      <h4><?php echo $product_price ?></h4>
      <form action="cart_item_insert.php?product_image=<?php echo $product_image ?>&product_name=<?php echo $product_name ?>&product_price=<?php echo $product_price ?>" method="POST">
        <select name="size" id="size_select">
          <option value="">Select Size</option>
          <option value="">S</option>
          <option value="">M</option>
          <option value="">L</option>
          <option value="">XL</option>
          <option value="">XXL</option>
        </select>
        <input id="quantity_select" type="number" name="product_quantity" value="1">
        <input style="cursor: pointer;" class="btn" type="submit" name="submit" value="Add To Cart">
      </form>
      <h3>Product Details <i class="fa fa-indent"></i></h3>
      <p>Give yoyr summer wardrobe a style upgrade with the HRX Men's Active T-Shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
    </div>
  </div>
</section>

<!---====================== TITLE SECTION ======================-------->

<section class="title">
  <div class="row">
    <h2>Related Product</h2>
    <p>View More</p>
  </div>
</section>

<!---=============================================================-------->

<section class="featured_products" id="products">
  <div class="row">
    <a href="product detail.php?product_image=<?php echo 'img/product-9.jpg' ?>&product_name=<?php echo 'Black Watch' ?>&product_price=<?php echo '$200.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-9.jpg" alt="Red T-Shirt">
        <h4>Black Watch</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$200.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-10.jpg' ?>&product_name=<?php echo 'Black Sneakers' ?>&product_price=<?php echo '$140.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-10.jpg" alt="Red T-Shirt">
        <h4>Black Sneakers</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$140.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-11.jpg' ?>&product_name=<?php echo 'Gray Soft Sneakers' ?>&product_price=<?php echo '$140.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-11.jpg" alt="Red T-Shirt">
        <h4>Gray Soft Sneakers</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$140.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-12.jpg' ?>&product_name=<?php echo 'Black Nike Jogger' ?>&product_price=<?php echo '$90.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-12.jpg" alt="Red T-Shirt">
        <h4>Black Nike Jogger</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$90.00</p>
      </div>
    </a>
  </div>
</section>

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


<!--================= JAVASCRIPT SECTION =============------->

  <script src="js/jquery.js"></script>
  <script src="vendor/js/html5shiv.min.js"></script>
  <script src="vendor/js/respond.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
