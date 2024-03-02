<?php
$CONN = mysqli_connect('localhost', 'root', '', 'master_tester');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// include("auth_session.php");

function signup()
{
    global $CONN;
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $insertQuery = "INSERT INTO `student`(`name`, `email`, `password`) VALUES ('" . $username . "','" . $email . "','" . $password . "')";
    $insertSQL = mysqli_query($CONN, $insertQuery);
    if ($insertSQL) {
        echo "data submitted!!!";
    } else {
        echo "something went wrong!!!";
    }
}
function login($email, $password)
{
    global $CONN;
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
        // echo "user is : ", $username;
        // echo "user id : ", $id;
        if (headers_sent()) {
            die(" Redirect failed. Please click on this link: <a href= ./dashboard.php > dashboard </a>");
        } else {
            exit(header("Location: dashboard.php"));
        }
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
    }
}
