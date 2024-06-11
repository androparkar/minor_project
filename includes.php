<?php
session_start();

include_once('connection.php');
include_once("constants.php");

function user_login_check() {
    print_r($_SESSION);
    die();
    if( !isset($_SESSION['id']) || empty($_SESSION['id'])  ) {
        exit(header("Location: login_page.php"));
    }
}

?>