<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home | NSN Shopping | Ecommerce Website</title>
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<!---======================= header section =======================------>

<header class="header_section" id="home">
  <nav>
    <div class="row">
      <a href="index.php" class="logo">
        <img src="img/nsn.png" alt="NSN Shopping">
      </a>
      <ul class="nav_links">
        <li><a href="index.php" class="active">home</a></li>
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
              ?></a></li>
        <li><a href="cart.php" class="cart"><i class="fa fa-shopping-cart big_cart"></i></a></li>
        <li><a href="search" class="search"><i class="fa fa-search big_search"></i></a></li>
      </ul>
      <a href="cart.html"><i class="fa fa-shopping-cart small_cart"></i></a>
      <i class="fa fa-bars menubar"></i>
    </div>
  </nav>
  <div class="row hero">
    <div class="col1 span-1-of-2 hero_text_box">
      <h1>Give your workout a new style!</h1>
      <p>Success isn't always about greatness. It's about consistency consistent hard wrk gains success. Greatness will come.</p>
      <a href="products.php" class="btn btn_hero">Explore Now &#8594;</a>
    </div>
    <div class="col1 span-1-of-2 hero_image_box">
      <img src="img/image1.png" alt="">
    </div>
  </div>
</header>

<!---=============== FEATURED SECTION ==========================-------->

<section class="featured_section">
  <div class="row">
    <div class="featured_box">
      <div class="col1 span-1-of-3">
        <div class="featured_categories">
          <img src="img/category-1.jpg" alt="category-1">
        </div>
      </div>
      <div class="col1 span-1-of-3">
        <div class="featured_categories">
          <img src="img/category-2.jpg" alt="category-2">
        </div>
      </div>
      <div class="col1 span-1-of-3">
        <div class="featured_categories">
          <img src="img/category-3.jpg" alt="category-3">
        </div>
      </div>
    </div>
  </div>
</section>

<!---==================== FEATURED PRODUCTS ==================-------->

<section class="featured_products" id="products">
  <div class="row">
    <h2>Featured Products</h2>
    <a href="product detail.php?product_image=<?php echo 'img/product-1.jpg' ?>&product_name=<?php echo 'Red Printed T-Shirt' ?>&product_price=<?php echo '$50.00' ?>">
      <div class="col1 span-1-of-4 product_box">
          <img src="img/product-1.jpg" alt="Red T-Shirt">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$50.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-2.jpg' ?>&product_name=<?php echo 'Black Sneakers' ?>&product_price=<?php echo '$80.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-2.jpg" alt="Red T-Shirt">
        <h4>Black Sneakers</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$80.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-3.jpg' ?>&product_name=<?php echo 'Gray Jogger' ?>&product_price=<?php echo '$120.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-3.jpg" alt="Red T-Shirt">
        <h4>Gray Jogger</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$120.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-4.jpg' ?>&product_name=<?php echo 'Blue Polo-Shirt' ?>&product_price=<?php echo '$50.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-4.jpg" alt="Red T-Shirt">
        <h4>Blue Polo-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$50.00</p>
      </div>
    </a>
  </div>
  <div class="row">
    <h2>Latest Products</h2>
    <a href="product detail.php?product_image=<?php echo 'img/product-5.jpg' ?>&product_name=<?php echo 'White Sneakers' ?>&product_price=<?php echo '$90.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-5.jpg" alt="Red T-Shirt">
        <h4>White Sneakers</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$90.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-6.jpg' ?>&product_name=<?php echo 'Black T-Shirt' ?>&product_price=<?php echo '$40.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-6.jpg" alt="Red T-Shirt">
        <h4>Black T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
        <p>$40.00</p>
      </div>
    </a>
    <a href="product detail.php?product_image=<?php echo 'img/product-7.jpg' ?>&product_name=<?php echo '3 colors Socks' ?>&product_price=<?php echo '$120.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-7.jpg" alt="Red T-Shirt">
        <h4>3 colors Socks</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$120.00</p>
      </div>
    </a>
      <a href="product detail.php?product_image=<?php echo 'img/product-8.jpg' ?>&product_name=<?php echo 'FOSSIL Black Watch' ?>&product_price=<?php echo '$290.00' ?>">
      <div class="col1 span-1-of-4 product_box">
        <img src="img/product-8.jpg" alt="Red T-Shirt">
        <h4>FOSSIL Black Watch</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p>$290.00</p>
      </div>
    </a>
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
        <img id="blackSneakers" src="img/product-10.jpg" alt="Red T-Shirt">
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

<!---================ OFFER SECTION =======================------>

<section class="offer_section">
  <div class="row">
    <div class="col1 span-1-of-2 offer_imagebox">
      <img src="img/exclusive.png" alt="Smart Fitness Tracker">
    </div>
    <div class="col1 span-1-of-2 offer_textbox">
      <p>Exclusively available on RedStore</p>
      <h2>Smart Band 4</h2>
      <small>
        The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full touch display with adjustable brigtness, so everything is clear as csn be.
      </small>
      <a href="#" class="btn btn_offer">Buy Now &#8594;</a>
    </div>
  </div>
</section>

<!---==================== TESTIMONIAL SECTION ===============--------->

<section class="testimonial_section">
  <div class="row">
    <div class="col1 span-1-of-3 testimonial_box">
      <i class="fa fa-quote-left"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aspernatur debitis optio labore in repellat consectetur nemo cumque esse culpa.</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <img src="img/user-1.png" alt="Sean Perker">
      <h3>Sean Parker</h3>
    </div>
    <div class="col1 span-1-of-3 testimonial_box">
      <i class="fa fa-quote-left"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aspernatur debitis optio labore in repellat consectetur nemo cumque esse culpa.</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <img src="img/user-2.png" alt="Sean Perker">
      <h3>Mike Smith</h3>
    </div>
    <div class="col1 span-1-of-3 testimonial_box">
      <i class="fa fa-quote-left"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aspernatur debitis optio labore in repellat consectetur nemo cumque esse culpa.</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
      </div>
      <img src="img/user-3.png" alt="Sean Perker">
      <h3>Mabel Joe</h3>
    </div>
  </div>
</section>

<!--================= BRAND SECTION =============------->

<section class="brand_section">
  <div class="row">
    <div class="col1 span-1-of-5 brand_box">
      <img src="img/logo-godrej.png" alt="Godrej">
    </div>
    <div class="col1 span-1-of-5 brand_box">
      <img src="img/logo-oppo.png" alt="Godrej">
    </div>
    <div class="col1 span-1-of-5 brand_box">
      <img src="img/logo-paypal.png" alt="Godrej">
    </div>
    <div class="col1 span-1-of-5 brand_box">
      <img src="img/logo-philips.png" alt="Godrej">
    </div>
    <div class="col1 span-1-of-5 brand_box">
      <img src="img/logo-coca-cola.png" alt="Godrej">
    </div>
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
