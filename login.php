<?php
session_start();
include_once("connection.php");
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    // print_r($_SESSION);

    $fetchQuery    = "SELECT * FROM `student` WHERE Email= '$email' AND password= '$password' ";
    $fetchSQL = mysqli_query($CONN, $fetchQuery);
    $rows = mysqli_num_rows($fetchSQL);
    if ($rows == 1) {
        echo "user found: ", $rows, ",";
        $fetchRes = mysqli_fetch_assoc($fetchSQL);
        $username = $fetchRes['name'];
        $id = $fetchRes['id'];
        $_SESSION['username'] = $fetchRes['name'];
        $_SESSION['id'] = $fetchRes['id'];
        print_r($_SESSION);
        echo "user is : ", $username;
        echo "user id : ", $id;
        if (headers_sent()) {
            die(" Redirect failed. Please click on this link: <a href= ./dashboard.php > dashboard </a>");
        } else {
            exit(header("Location: dashboard.php"));
        }
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login_page.php'>Login</a> again.</p>
                  </div>";
    }
}
