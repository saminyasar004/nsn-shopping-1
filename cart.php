<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cart Page | NSN Shopping | Ecommerce Website</title>
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
  <link rel="stylesheet" href="css/cart.css">
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
        <li><a href="cart.php" class="cart active"><i class="fa fa-shopping-cart big_cart"></i></a></li>
        <li><a href="search.html" class="search"><i class="fa fa-search big_search"></i></a></li>
      </ul>
      <a href="cart.html"><i class=" active fa fa-shopping-cart small_cart"></i></a>
      <i class="fa fa-bars menubar"></i>
    </div>
  </nav>
</header>

<!--================= CART ITEM =============------->

<section class="cart_section">
  <div class="row">
    <table class="first_table">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

      <?php
        include "connect.php";
        if (!$connect) {
          die ("Connection Failed!" . mysqli_connect($connect));
        }
        $query = "SELECT * FROM add_to_cart_info";
        $result = mysqli_query($connect, $query);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_image = $row['product_image'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $size = $row['size'];
            $product_quantity = $row['product_quantity'];
            ?>
            <tr>
              <td>
                <div class="cart_info">
                  <img src="<?php echo $product_image ?>">
                  <div>
                    <p><?php echo $product_name ?></p>
                    <small>Price : <span class="product_price"><?php echo $product_price ?></span></small><br>
                    <a href="cart_item_remove.php?remove_id=<?php echo $id ?>">Remove</a>
                  </div>
                </div>
              </td>
              <td><input class="product_quantity" type="number" value="<?php echo $product_quantity ?>"></td>
              <td><span class="subTotal"><?php echo $product_price ?></span></td>
            </tr>
            <?php
          }
        } else {
          ?>
            <tr>
                <td>
                  <div class="cart_info">
                    No Cart available.
                  </div>
                </td>
              </tr>
          <?php
        }
      ?>
    </table>
    <div class="total_price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td><span class="all_subtotal">$390.00</span></td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$30.00</td>
        </tr>
        <tr>
          <td>Total</td>
          <td><span class="all_total">$420.00</span></td>
        </tr>
      </table>
    </div>
  </div>
</section>

<!--=================FOOTER SECTION =============------->

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
  <script src="js/cart.js"></script>
</body>
</html>
