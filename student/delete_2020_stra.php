<?php
	$cid=$_GET['cid'];
	include('../connection.php');
	mysqli_query($con,"delete from `2020_stra` where cid='$cid'");
    
	header('location:admin-dash.php');
?>