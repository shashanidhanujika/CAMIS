<?php
	$email=$_GET['email'];
	include('../connection.php');
	mysqli_query($con,"delete from `contact` where email='$email'");
    
	header('location:admin-dash.php');
?>