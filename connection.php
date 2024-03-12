<?php

$host = "localhost";
$username = "root";
$passowrd = "";
$dbname = "master_tester";
$CONN = mysqli_connect($host, $username, $passowrd, $dbname);
if (!$CONN) {
    echo "connection er maa chu*e geche: ";
}
