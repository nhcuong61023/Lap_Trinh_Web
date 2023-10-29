<?php
define("CURRENCY", "₫");

$server = "fdb1031.runhosting.com";
$username = "4393401_shop";
$password = "cuong052";
$database = "4393401_shop";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {

    die("Connection Error" . mysqli_connect_error());
}
