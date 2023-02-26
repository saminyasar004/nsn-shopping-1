<?php 

$product_image = $_REQUEST['product_image'];
$product_name = $_REQUEST['product_name'];
$product_price = $_REQUEST['product_price'];
$product_quantity = $_REQUEST['product_quantity'];
$size = $_REQUEST['size'];

if ($product_image || $product_name || $product_price != "") {
  include "connect.php";
  if (!$connect) {
    die ("Connection Failed!" . mysqli_connect($connect));
  }
  $query = "INSERT INTO add_to_cart_info (product_image, product_name, product_price, size, product_quantity) VALUES ('$product_image', '$product_name', '$product_price', '$size', '$product_quantity')";
  $result = mysqli_query($connect, $query);
  header("location: cart.php");
} else {
    header("location: cart.php");
}

?>
