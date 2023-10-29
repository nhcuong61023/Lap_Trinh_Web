<?php
include('../db/connect.php');
include('../backend/common_function.php');
if (isset($_GET['p_id'])) {
    $conn = mysqli_connect('fdb1031.runhosting.com', '4393401_shop', 'cuong052', '4393401_shop');
    $ip = getIPAddress();
    $p_id = $_GET['p_id'];
    $sql = "delete from cart_details where ip_address='$ip' and product_id = '$p_id'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Item removed from cart")</script>';
        echo '<script>window.open("cart.php","_self")</script>';
    } else {
        die(mysqli_error($conn));
    }
}
