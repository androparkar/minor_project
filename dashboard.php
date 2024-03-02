<?php
include ("auth_session.php")
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
        $id = $_SESSION['id'];
        ?>
        <p>You are now at your user dashboard page.</p>
        <input type="submit" value="Logout" class="btn solid" id=logout />
        
    </div>
    <div>
        <p> update your name or delete acount </p>
        <!-- <a href="http://localhost/minor_project/v2.0/update.php"> -->
        <input type="submit" value="update" class="btn solid" name=update />
        <!-- </a> -->
        <!-- <a href="http://localhost/minor_project/v2.0/delete.php"> -->
        <input type="submit" value="delete" class="btn solid" name=delete />
        <!-- </a> -->

    </div>
</body>

<?php
echo "the logic doesnot work";
if (isset($_REQUEST['logout'])) {
    echo "logging out";
    logout();
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

</html>