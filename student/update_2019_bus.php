<?php
	include('../connection.php');
	$cid=$_GET['cid'];
	$cName=$_POST['cName'];
	
	mysqli_query($conn,"update `2019_bus` set cid='$cid', cName='$cName'");
	header('location:admin-dash.php');
?>