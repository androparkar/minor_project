<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "master_tester";
$CONN = mysqli_connect($host, $username, $password, $dbname);
if (!$CONN) {
    echo "connection venge geche: ";
}
