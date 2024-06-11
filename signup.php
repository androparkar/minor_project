<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("connection.php");
if (isset($_REQUEST['signup']) && !empty($_REQUEST['signup'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $access = $_REQUEST['access'];
    // echo $access;
    // die;
    if (!empty($username) && !empty($email) && !empty($password) && !empty($access)) {
        $insertQuery = "INSERT INTO `user`(`name`, `email`, `password`, `access`) VALUES ('" . $username . "','" . $email . "','" . $password . "','" . $access . "')";
        $insertSQL = mysqli_query($CONN, $insertQuery);
        $last_inserted_id = mysqli_insert_id($CONN);
        if ($insertSQL) {
            $_SESSION['id'] = $last_inserted_id;
            switch ($access) {
                case 'Student':
                    exit(header("Location: ./student_dashboard/Student_dashboard.php"));
                    break;
                case 'Teacher':
                    exit(header("Location: ./teacher_dashboard/Teacher_dashboard.php"));
                    break;
                default:
                    echo"error at access type";
                    break;
            }
        } else {
            echo "something went wrong!!!";
        }
    } else {
        echo "please enter data correctly!";
    }
}
