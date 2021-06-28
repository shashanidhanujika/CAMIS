<?php
	include('../connection.php');
	$cid=$_GET['cid'];
	$cName=$_POST['cName'];
	
	mysqli_query($con,"update `2020_bus` set cid='$cid', cName='$cName'");
	header('location:admin-dash.php');
?>