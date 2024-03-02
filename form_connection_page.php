<?php
	$conn = mysqli_connect('localhost','root','','form_1');
	if ($conn) {
		//echo "Connected";
	} else {
		echo "Connection failed";
		die;
	}
?>