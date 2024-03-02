<?php
include ("auth_session.php");
$CONN = mysqli_connect('localhost', 'root', '', 'master_tester');
$id = $_SESSION['id'];
print_r($_SESSION)
?>
<h1>enter your new User name here.</h1>
 <input type="text" placeholder="Username" name="username" id="username" />
 <button type="submit" class="btn" name="submit">Submit</button>

 <!-- <input type="submit" class="btn" value="make changes" name="submit" /> -->

<?php    
if (isset($_REQUEST['submit'])) {
        echo "this is inside of the work";
        $u_name = $_REQUEST['username'];
        $updateQuery = "UPDATE `student` SET `name`='$u_name' WHERE `id`='$id'";
        $updateSQL = mysqli_query($CONN, $updateQuery);
        if ($updateSQL) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "something went wrong!!!";
        }
    }
?>



