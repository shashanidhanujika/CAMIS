<?php 

include("../connection.php");
session_start();
error_reporting(0);
$lec_profile = $_SESSION['user_name'];

if ($lec_profile==true) {
	# code...
}
else{
	header("location:login.php");
}

$query = "SELECT * FROM lecturer_info WHERE lec_username='$lec_profile'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>lecturer home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!--script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script-->
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/temp.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />

	<!--new-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<p class="welcome">Welcome
									<?php echo $result['lec_fullname']; ?> </p>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span class="btn-txt">About</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class=""></i> <span class="btn-txt">Change Password</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="" aria-hidden="true"></i> <span class="btn-txt">Add Crs 2019</span></a></li>
											<li><a href="#section-4" class="icon-food"><i class="" aria-hidden="true"></i> <span class="btn-txt">Add Crs 2020</span></a></li>
											<li><a href="#section-5" class="icon-lab"><i class=""></i> <span class="btn-txt">Add Notices</span></a></li>
											<li><a href="#section-6" class="icon-truck"> <span class="btn-txt">Add Marks</span></a></li>
											<li><a href="#section-7" class="icon-truck"> <span class="btn-txt">Upload Lecture Notes</span></a></li>
										</ul>
									</nav>

									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong class="str-hdn">Personal Information</strong>
												<p><strong>Name : 
													<?php echo $result['lec_fullname']; ?>
													</strong>
												</p>
												<p><strong>Email : 
													<?php echo $result['lec_email']; ?>
													</strong>
												</p>
												<p> <strong>Gender :
													<?php echo $result['lec_gender']; ?>
													</strong>
												</p>
												<p><strong>Contact Number : 
													<?php echo $result['lec_tel']; ?>
													</strong>
												</p>
												<p> <strong>Address :
													<?php echo $result['lec_address']; ?>
													</strong>
												</p>
												<p> <strong>Status :
													<?php echo $result['lec_status']; ?>
													</strong>
												</p>
											</div>
											<div class="mediabox">
												<strong class="str-hdn">About Lecturer</strong>
												<p> <strong>Qualification :
													<?php echo $result['lec_qualification']; ?>
													</strong>
												</p>
												<p> <strong>College :
													<?php echo $result['lec_study']; ?>
													</strong>
												</p>
											</div>
											<div class="mediabox">
												<strong class="str-hdn">Account Detail</strong>
												<p> <strong>Username :
													<?php echo $result['lec_username']; ?>
													</strong>
												</p>
												<p><strong>Password : 
													<?php echo $result['lec_password']; ?>
													</strong>
												</p>
												<p><strong>Staff Type : 
													<?php echo $result['lec_staff_type']; ?>
													</strong>
												</p>
											</div>
										</section>

										<section id="section-2">
											<div class="col-md-12">
												<?php

												$flag = '';

												if(isset($_POST['change_password']))
												{
													$prev_password = $result['lec_password'];
													$old_password = $_POST['oldpassword'];

													if($prev_password!=$old_password)
													{ 
														$flag = "Old Password Does not Matched";
														
													}

													else{
														$lec_username = $result['lec_username'];
														$lec_password_update = $_POST['newpassword'];

														$lec_password_update_query = "UPDATE lecturer_info SET lec_password='$lec_password_update' WHERE lec_username='$lec_username'";

														$result2 = mysqli_query($con,$lec_password_update_query);

														if ($result2) 
													    {
													      $flag = "Password Change Successfuly";
													    }
													    else
													    {
													      $flag = "Password Change failed";
													    }
													}
												}
												?>

												<form method="post">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class="fa fa-key"></i>	
														</span>
														<input type="password" class="form-control1 icon" name="oldpassword" placeholder="Old Password">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class="fa fa-key"></i>	
														</span>
														<input type="password" class="form-control1 icon" name="newpassword" placeholder="New Password">
														
													</div>	
											
														<input type="submit" name="change_password" class="a_demo_four" value="Change Password">

													<div class="input-group input-icon margin">
														
														<?php 
															if($flag!=''){
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>{$flag}</P>";		
															}
														?>	

													</div>
												</form>
											</div>
										</section>

										<section id="section-3">
											<div class="col-md-12">
											<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Corporate Level</P>
											<?php
													if (isset($_POST['submit1'])) 
													{
														if ((empty($_POST['cid1'])) || (empty($_POST['cname1']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid1 = $_POST['cid1'];
															$cname1 = $_POST['cname1'];
															$file11 = addslashes($_FILES['myfile1']['tmp_name']);
															$filename1 = addslashes($_FILES['myfile1']['name']);
															#$myfile1 = file_get_contents($file);
															$file1 = base64_encode($file1);

															$sql1 = "INSERT INTO 2019_cor (cid, cName, file, filename) VALUES ('$cid1', '$cname1', '$file1','$filename1')";

															$result1 = mysqli_query($con,$sql1);

															if ($result1) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid1" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname1" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile1" id="myfile1">
														
													</div>											
														<input type="submit" name="submit1" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>

											<div class="col-md-12">
											<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Business Level</P>
											<?php
													if (isset($_POST['submit2'])) 
													{
														if ((empty($_POST['cid2'])) || (empty($_POST['cname2']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid2 = $_POST['cid2'];
															$cname2 = $_POST['cname2'];
															$file2 = addslashes($_FILES['myfile2']['tmp_name']);
															$filename2 = addslashes($_FILES['myfile2']['name']);
															#$myfile1 = file_get_contents($file);
															$file2 = base64_encode($file2);

															$sql2 = "INSERT INTO 2019_bus (cid, cName, file, filename) VALUES ('$cid2', '$cname2', '$file2','$filename2')";

															$result2 = mysqli_query($con,$sql2);

															if ($result2) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid2" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname2" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile2" id="myfile3">
														
													</div>											
														<input type="submit" name="submit2" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
											<div class="col-md-12">
											<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Execute Level</P>
											<?php
													if (isset($_POST['submit3'])) 
													{
														if ((empty($_POST['cid3'])) || (empty($_POST['cname3']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid3 = $_POST['cid3'];
															$cname3 = $_POST['cname3'];
															$file3 = addslashes($_FILES['myfile3']['tmp_name']);
															$filename3 = addslashes($_FILES['myfile3']['name']);
															#$myfile1 = file_get_contents($file);
															$file3 = base64_encode($file3);

															$sql3 = "INSERT INTO 2019_exe (cid, cName, file, filename) VALUES ('$cid3', '$cname3', '$file3','$filename3')";

															$result3 = mysqli_query($con,$sql3);

															if ($result3) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid3" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname3" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile3" id="myfile3">
														
													</div>											
														<input type="submit" name="submit3" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
										</section>

										<section id="section-4">
											<div class="col-md-12">
												<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Strategy Level</P>
											<?php
													if (isset($_POST['submit4'])) 
													{
														if ((empty($_POST['cid4'])) || (empty($_POST['cname4']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid4 = $_POST['cid4'];
															$cname4 = $_POST['cname4'];
															$file4 = addslashes($_FILES['myfile4']['tmp_name']);
															$filename4 = addslashes($_FILES['myfile4']['name']);
															#$myfile1 = file_get_contents($file);
															$file4 = base64_encode($file4);

															$sql4 = "INSERT INTO 2020_stra (cid, cName, file, filename) VALUES ('$cid4', '$cname4', '$file4','$filename4')";

															$result4 = mysqli_query($con,$sql4);

															if ($result4) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid4" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname4" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile4" id="myfile2">
														
													</div>											
														<input type="submit" name="submit4" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
											<div class="col-md-12">
											<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Corporate Level</P>
											<?php
													if (isset($_POST['submit5'])) 
													{
														if ((empty($_POST['cid5'])) || (empty($_POST['cname5']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid5 = $_POST['cid5'];
															$cname5 = $_POST['cname5'];
															$file5 = addslashes($_FILES['myfile5']['tmp_name']);
															$filename5 = addslashes($_FILES['myfile5']['name']);
															#$myfile1 = file_get_contents($file);
															$file5 = base64_encode($file5);

															$sql5 = "INSERT INTO 2020_cor (cid, cName, file, filename) VALUES ('$cid5', '$cname5', '$file5','$filename5')";

															$result5 = mysqli_query($con,$sql5);

															if ($result5) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid5" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname5" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile5" id="myfile2">
														
													</div>											
														<input type="submit" name="submit5" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
											<div class="col-md-12">
											<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Business Level</P>
											<?php
													if (isset($_POST['submit6'])) 
													{
														if ((empty($_POST['cid6'])) || (empty($_POST['cname6']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$cid6 = $_POST['cid6'];
															$cname6 = $_POST['cname6'];
															$file6 = addslashes($_FILES['myfile6']['tmp_name']);
															$filename6 = addslashes($_FILES['myfile6']['name']);
															#$myfile1 = file_get_contents($file);
															$file6 = base64_encode($file6);

															$sql6 = "INSERT INTO 2020_bus (cid, cName, file, filename) VALUES ('$cid6', '$cname6', '$file6','$filename6')";

															$result6 = mysqli_query($con,$sql6);

															if ($result6) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cid6" placeholder="Enter Course Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="cname6" placeholder="Enter Course Name">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile6" id="myfile2">
														
													</div>											
														<input type="submit" name="submit6" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
										</section>
										<section id="section-5">
											<div class="col-md-12">
												<?php
													if (isset($_POST['submit1'])) 
													{
														if (empty($_POST['topic1'])) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$topic = $_POST['topic1'];
															$file = addslashes($_FILES['myfile1']['tmp_name']);
															$filename = addslashes($_FILES['myfile1']['name']);
															#$myfile1 = file_get_contents($file);
															$file = base64_encode($file);

															$sql5 = "INSERT INTO notice (topic, file, file_name) VALUES ('$topic', '$file', '$filename')";

															$result5 = mysqli_query($con,$sql5);

															if ($result5) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">

													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="topic1" id="topic1" placeholder="Enter Topic">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile1" id="myfile1">
														
													</div>		
											
														<input type="submit" name="submit1" id="submit1" value="Upload" class="a_demo_four">

												</form>
											</div>
										</section>
										<section id="section-6">
											<div class="col-md-12">
											<?php
													if (isset($_POST['submit'])) 
													{
														if ((empty($_POST['stuid'])) || (empty($_POST['stuname'])) || (empty($_POST['crsid'])) || (empty($_POST['crsname'])) || (empty($_POST['marks']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$stu_id = $_POST['stuid'];
															$stu_name = $_POST['stuname'];
															$crs_id = $_POST['crsid'];
															$crs_name = $_POST['crsname'];
															$marks = $_POST['marks'];

															$sql4 = "INSERT INTO stu_result (stu_id, stu_name, crs_id, crs_name, marks) VALUES ('$stu_id', '$stu_name', '$crs_id','$crs_name','$marks')";

															$result4 = mysqli_query($con,$sql4);

															if ($result4) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="stuid" id="stuid" placeholder="STU ID">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="stuname" id="stuname" placeholder="STU NAME">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="crsid" id="crsid" placeholder="SUBJECT ID">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="crsname" placeholder="SUBJECT NAME">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="marks" id="marks" placeholder="MARKS">
														
													</div>	
											
														<input type="submit" name="submit" class="a_demo_four" value="Upload">

													<div class="input-group input-icon margin">
														
														
													</div>
												</form>
											</div>
										</section>
										<section id="section-7">
											<div class="col-md-12">
												<?php
													if (isset($_POST['submit'])) 
													{
														if ((empty($_POST['lecid'])) || (empty($_POST['crsid'])) || (empty($_POST['email'])) || (empty($_POST['topic']))) 
														{

 															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properly..</P>";		
														}
														else
														{
															$lecid = $_POST['lecid'];
															$crsid = $_POST['crsid'];
															$email = $_POST['email'];
															$topic = $_POST['topic'];
															$file = addslashes($_FILES['myfile']['tmp_name']);
															$filename = addslashes($_FILES['myfile']['name']);
															#$myfile = file_get_contents($file);
															$file = base64_encode($file);

															$sql3 = "INSERT INTO lecture_note (lec_id, crs_id, lec_email, topic, file, file_name) VALUES ('$lecid', '$crsid','$email', '$topic', '$file', '$filename')";

															$result3 = mysqli_query($con,$sql3);

															if ($result3) 
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Successfuly..</P>";
															}
															else
															{
																echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Record Added Fail..</P>";
															}
														}
													}
												
												?>

												<form method="post" enctype="multipart/form-data">

													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="lecid" id="lecid" placeholder="Enter Lecturer Id">
														
													</div>
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="crsid" id="crsid" placeholder="Enter Course Id">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="email" class="form-control1 icon" name="email" id="email" placeholder="Enter Lecturer Email">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="text" class="form-control1 icon" name="topic" id="topic" placeholder="Enter topic">
														
													</div>	
													<div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<input type="file" name="myfile" id="myfile">
														
													</div>		
											
														<input type="submit" name="submit" id="submit" value="Upload" class="a_demo_four">

												</form>
											</div>
										</section>
									</div>
									<!-- /content -->
								</div>
								<!-- /tabs -->

							</div>
							<script src="js/cbpFWTabs.js"></script>
							<script>
								new CBPFWTabs(document.getElementById('tabs'));
							</script>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//tabs-inner-->


					<!--custom-widgets-->
					<div class="custom-widgets">
						<div class="row-one">
							<div class="col-md-3 widget">
								<div class="stats-left ">
									<h5>Today</h5>
									<h4> Users</h4>
								</div>
								<div class="stats-right">
									<label>0</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-mdl">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Visitors</h4>
								</div>
								<div class="stats-right">
									<label> 0</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-thrd">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Tasks</h4>
								</div>
								<div class="stats-right">
									<label>0</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 widget states-last">
								<div class="stats-left">
									<h5>Today</h5>
									<h4>Notices</h4>
								</div>
								<div class="stats-right">
									<label>0</label>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//custom-widgets-->

					<!--/charts-->
					<div class="charts">
						<div class="chrt-inner">
							<!--//weather-charts-->
							<div class="graph-visualization">
								<div class="col-md-6 map-1">
									<h3 class="sub-tittle">Profile </h3>


								</div>
								<div class="col-md-6 map-2">
									<div class="profile-nav alt">
										<section class="panel">
											<div class="user-heading alt clock-row terques-bg">
												<h3 class="sub-tittle clock">Easy Clock </h3>
											</div>
											<ul id="clock">
												<li id="sec"></li>
												<li id="hour"></li>
												<li id="min"></li>
											</ul>



										</section>

									</div>
								</div>
								<div class="clearfix"> </div>
							</div>


						</div>
						<!--/charts-inner-->
					</div>
					<!--//outer-wp-->
				</div>
				<!--footer section start>
				<footer class="ft">
					<p>Charted</p>
				</footer>
				<footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu sidebar">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Charted</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<a href="index.html"><img src="<?php echo $result['lec_avatar']; ?>" width=90px height=90px></a>
				<a href="index.html"><span class=" name-caret"><?php echo $result['lec_fullname']; ?></span></a>

				<h4 class="name"><?php echo $result['lec_staff_type']; ?></h4>

				<ul>
					<li><a class="tooltips" href="lec_updateprofile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="setting.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

			
				

				
	
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>