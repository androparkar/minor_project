<?php
session_start();
// print_r($_SESSION); # just to check
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }
// function login_session(){
//     // session_start();
//     if(!isset($_SESSION["username"])) {
//         header("Location: login.php");
//         exit();
//     }
// }

function logout()
{
    session_start();
    // Destroy session
    if (session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
}
// function Redirect($url, $permanent = false) {
//     header('Location: ' . $url, true, $permanent ? 301 : 302);
//     exit();
// }
// Redirect('https://www.example.com', false);
