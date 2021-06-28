<?php
	$st_id=$_GET['st_id'];
	include('../connection.php');
	mysqli_query($con,"delete from `st_info` where st_id='$st_id'");
    
	header('location:admin-dash.php');
?>