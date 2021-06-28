<?php
	$lec_id=$_GET['lec_id'];
	include('../connection.php');
	mysqli_query($con,"delete from `lecturer_info` where lec_id='$lec_id'");
    
	header('location:admin-dash.php');
?>