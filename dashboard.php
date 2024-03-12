<?php
session_start();
print_r($_SESSION);
include_once("constants.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="form">
        <?php
        echo "<p> hi, </p>", $_SESSION['username'];
        echo "<p> your user id is, </p>", $_SESSION['id'];
        // $id = $_SESSION['dashboard_id'];
        ?>
        <p>You are now at your user dashboard page.</p>
        <!-- <input type="submit" value="Logout" class="btn solid" id=logout /> -->
        
    </div>
    <div>
        <p> update your name or delete acount </p>
        <a href="<?php $baseURL?>update.php"> update
        </a>
        <br>
        <a href="<?php $baseURL?>delete.php">delete
        </a>

    </div>
</body>

</html>
<?php
echo "the logout does not work right now";
if (isset($_REQUEST['logout'])) {
    echo "logging out";
}
if (isset($_REQUEST['update'])) {
    echo "redirecting to update page";
    if (headers_sent()) {
        die(" Redirect failed. Please click on this link: <a href= ./update.php > update </a>");
    } else {
        exit(header("Location: update.php"));
    }
}
if (isset($_REQUEST['delete'])) {
    echo "redirecting to delete page";
    if (headers_sent()) {
        die(" Redirect failed. Please click on this link: <a href= ./delete.php > delete </a>");
    } else {
        exit(header("Location: delete.php"));
    }

}

?>
