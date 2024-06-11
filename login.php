<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("connection.php");
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $fetchQuery    = "SELECT * FROM `user` WHERE Email= '$email' AND password= '$password' ";
    $fetchSQL = mysqli_query($CONN, $fetchQuery);
    $rows = mysqli_num_rows($fetchSQL);
    if ($rows == 1) {
        $fetchRes = mysqli_fetch_assoc($fetchSQL);
        $username = $fetchRes['name'];
        $id = $fetchRes['id'];
        $access = $fetchRes['access'];
        $_SESSION['username'] = $fetchRes['name'];
        $_SESSION['id'] = $fetchRes['id'];
        if (headers_sent()) {
            die(" Redirect failed. Please click on this link: <a href= ./dashboard.php > dashboard </a>");
        } else {
            switch ($access) {
                case 'Student':
                    exit(header("Location: ./student_dashboard/Student_dashboard.php"));
                    break;
                case 'Teacher':
                    exit(header("Location: ./teacher_dashboard/Teacher_dashboard.php"));
                    break;
                default:
                    echo $access;
                    break;
            }
        }
    } else {
        echo $rows;
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login_form.php'>Login</a> again.</p>
                  </div>";
    }
}
