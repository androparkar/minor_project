<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }
$host = "localhost";
$username = "root";
$passowrd = "";
$dbname = "master_tester";
$CONN = mysqli_connect($host, $username, $passowrd, $dbname);
if (!$CONN) {
    echo "connection er maa chu*e geche: ";
}
