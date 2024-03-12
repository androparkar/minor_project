<?php
include_once("connection.php");
if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    if (!$username || !$email || !$password) {
        echo "please enter data correctly!";
    } else {
        echo "noice submit, ";
        $insertQuery = "INSERT INTO `student`(`name`, `email`, `password`) VALUES ('" . $username . "','" . $email . "','" . $password . "')";
        $insertSQL = mysqli_query($CONN, $insertQuery);
        if ($insertSQL) {
            echo "data submitted!!!";
        } else {
            echo "something went wrong!!!";
        }
    }
}
