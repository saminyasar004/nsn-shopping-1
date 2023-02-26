<?php 

if ($_REQUEST['remove_id']) {
    $remove_id = $_REQUEST['remove_id'];
    include "connect.php";
    if (!$connect) {
        die ("Connection Failed!" . mysqli_connect($connect));
    }
    $query = "DELETE FROM add_to_cart_info WHERE id = $remove_id";
    $result = mysqli_query($connect, $query);
    header("location: cart.php");
} else {
    header("location: cart.php");
}

?>
