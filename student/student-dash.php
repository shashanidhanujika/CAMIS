<?php 

include("../connection.php");

session_start();
error_reporting(0);
$st_profile = $_SESSION['user_name'];

if ($st_profile==true) {
	# code...
}
else{
	header("location:login.php");
}

$query = "SELECT * FROM st_info WHERE st_username='$st_profile'";
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
	<title>student home</title>
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
									<?php echo $result['st_fullname']; ?> </p>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class=""></i> <span class="btn-txt">About</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class=""></i> <span class="btn-txt">Change Password</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="" aria-hidden="true"></i> <span class="btn-txt">Notices</span></a></li>
											<li><a href="#section-4" class="icon-lab"><i class=""></i> <span class="btn-txt">Crs 2019</span></a></li>
											<li><a href="#section-5" class="icon-lab"><i class=""></i> <span class="btn-txt">Crs 2020</span></a></li>
											<li><a href="#section-6" class="icon-truck"> <span class="btn-txt">Results</span></a></li>
											<li><a href="#section-7" class="icon-truck"> <span class="btn-txt">Lec Notes</span></a></li>
										</ul>
									</nav>

									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong class="str-hdn">Personal Information</strong>
												<p><strong>Name : 
													<?php echo $result['st_fullname']; ?>
													</strong>
												</p>
												<p><strong>Email : 
													<?php echo $result['st_email']; ?>
													</strong>
												</p>
												
												<p> <strong>Gender :
													<?php echo $result['st_gender']; ?>
													</strong>
												</p>

											</div>
											<div class="mediabox">
												<strong class="str-hdn">Contact Details</strong>

												<p> <strong>Address :
													<?php echo $result['st_address']; ?>
													</strong>
												</p>
												<p><strong>Contact Number : 
													<?php echo $result['st_tel']; ?>
													</strong>
												</p>
											</div>
											<div class="mediabox">
												<strong class="str-hdn">Account Details</strong>
												<p><strong>User Name : 
													<?php echo $result['st_username']; ?>
													</strong>
												</p>
												<p><strong>Password : 
													<?php echo $result['st_password']; ?>
													</strong>
												</p>
												<p><strong>Staff Type : 
													<?php echo $result['st_staff_type']; ?>
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
													$prev_password = $result['st_password'];
													$old_password = $_POST['oldpassword'];

													if($prev_password!=$old_password)
													{ 
														$flag = "Old Password Does not Matched";
														
													}

													else{
														$st_username = $result['st_username'];
														$st_password_update = $_POST['newpassword'];

														$student_password_update_query = "UPDATE st_info SET st_password='$st_password_update' WHERE st_username='$st_username'";

														$result2 = mysqli_query($con,$student_password_update_query);

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
												<div class="graph">
															<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>Notice Id</th>
																			<th>Topic</th> 
																			<th>File Name</th> 
																			<th>View</th>
																			<th>Download</th>
																		</tr> 
																	</thead> 
																	<tbody>

																	<?php
					
																		$query2=mysqli_query($con,"select * from `notice`");
														                    
																		while($row=mysqli_fetch_array($query2)){
																	?>
																		<tr>
																			<td class="column100 column1" data-column="column1"><?php echo $row['notice_id']; ?></td>
																			<td class="column100 column2" data-column="column"><?php echo $row['topic']; ?></td>
																			<td class="column100 column2" data-column="column"><?php echo $row['file_name']; ?></td>
																			<td class="column100 column7" data-column="column7"><a href="<?php echo $row['file']; ?>" target="_blank">View</a></td>
																			<td class="column100 column8" data-column="column8"><a href="<?php echo $row['file']; ?>" download>Download</td>
																			</tr>
																	<?php
																		}
																	?>
																	</tbody> 
																</table>
															</div>
												
													</div>
										</section>

										<section id="section-4">
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Corporate level</th> 
															<th>Course Name</th>
															<th>File Name</th>
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
													$query6=mysqli_query($con,"select * from `2019_cor`");
								                    
														while($row=mysqli_fetch_array($query6)){
															?>
															<tr >

																<td ><?php echo $row['cid']; ?></td>
																<td ><?php echo $row['cName']; ?></td>
																<td ><?php echo $row['filename']; ?></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
															</tr>
													<?php
														}
													?>


													</tbody> 
												</table>
											</div>
											</div>
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Business level</th> 
															<th>Course Name</th>
															<th>File Name</th>
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
													$query7=mysqli_query($con,"select * from `2019_bus`");
								                    
														while($row=mysqli_fetch_array($query7)){
															?>
															<tr >
																<td ><?php echo $row['cid']; ?></td>
																<td ><?php echo $row['cName']; ?></td>
																<td ><?php echo $row['filename']; ?></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
															</tr>
													<?php
														}
													?>


													</tbody> 
												</table>
											</div>
											</div>
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Executive level</th> 
															<th>Course Name</th>
															<th>File Name</th>
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
													$query8=mysqli_query($con,"select * from `2019_exe`");
								                    
														while($row=mysqli_fetch_array($query8)){
															?>
															<tr>
																<td ><?php echo $row['cid']; ?></td>
																<td ><?php echo $row['cName']; ?></td>
																<td ><?php echo $row['filename']; ?></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
																<td ><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
															</tr>
													 <?php
														}
													?>
													
													</tbody> 
												</table>
											</div>
											</div>
										</section>

										<section id="section-5">
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Corporate level</th> 
															<th>Course Name</th>
															<th>File Name</th>
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>
															
													<?php
													
													$query5=mysqli_query($con,"select * from `2020_cor`");
								                    
														while($row=mysqli_fetch_array($query5)){
															?>
															<tr >

																	<td ><?php echo $row['cid']; ?></td>
																	<td ><?php echo $row['cName']; ?></td>
																	<td ><?php echo $row['filename']; ?></td>
																	<td ><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
																	<td ><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
																</tr>
																 <?php
														}
													?>


													</tbody> 
												</table>
											</div>
											</div>
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Business level</th> 
															<th>Course Name</th>
															<th>File Name</th>
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>
															
													<?php

													$query4=mysqli_query($con,"select * from `2020_bus`");
									                    
														while($row=mysqli_fetch_array($query4)){
															?>
															<tr >

																	<td ><?php echo $row['cid']; ?></td>
																	<td ><?php echo $row['cName']; ?></td>
																	<td ><?php echo $row['filename']; ?></td>
																	<td ><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
																	<td ><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
																</tr>
																 <?php
														}
													?>


													</tbody> 
												</table>
											</div>
											</div>
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Strategy Level</th>
															<th>Course Name</th> 
															<th>File Name</th> 
															<th>View</th>
															<th>Download</th>
														</tr> 
													</thead> 
													<tbody>

													<?php
														$query1=mysqli_query($con,"select * from `2020_stra`");
														                    
														while($row=mysqli_fetch_array($query1)){
													?>

														<tr>

															<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
															<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
															<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
															<td class="column100 column7" data-column="column7"><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
															<td class="column100 column8" data-column="column8"><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
														</tr>
													<?php
														}
													?>
													</tbody> 
												</table>
											</div>
											</div>
										</section>

										<section id="section-6">
											

												<form method="post">
													<table>
													<tr style="color: darkblue; font-family: serif; font-weight: bold; ">
														<td>
															Student ID
														</td>
													</tr>
													<tr>
														<td>
															<div class="input-group input-icon">
																<span class="input-group-addon">
																	<i class=""></i>	
																</span>
																<input type="text" class="form-control1 icon" name="stuid" placeholder="Enter Student Id">
															</div>
														</td>
													</tr>
													</table>		
													
													<!--div class="input-group input-icon">
														<span class="input-group-addon">
															<i class=""></i>	
														</span>
														<label>Select Course Id &nbsp;&nbsp;</label>
														<select name="crsid">
															<option>c003</option>
															<option>coo2</option>
															<option>c001</option>
															<option>c005</option>
															<option>c008</option>
														</select>
															
													</div-->

														<input type="submit" name="submit1" class="a_demo_four" value="Submit">
												</form>
												
											<div class="graph">
											<div class="tables">		
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Student Id</th>
															<th>Student Name</th> 
															<th>Course Id</th> 
															<th>Course Name</th>
															<th>Marks</th>
														</tr> 
													</thead> 
													<tbody>

													<?php
													if (isset($_POST['submit1'])) {
														
														if ((empty($_POST['stuid']))) {
															
															echo "<p style='color:#ff3300; margin-bottom:10px; text-align:center; font-weight:bold; font-family:serif;'>Please Fill Properlly..</P>";
														}
														else{

															$stu_id = $_POST['stuid'];
															#$crs_id = $_POST['crsid'];

															$query3=mysqli_query($con,"select * from `stu_result` where stu_id='$stu_id'");
																													                    
															while($row=mysqli_fetch_array($query3)){
													?>
															<tr>

																<td class="column100 column1" data-column="column1"><?php echo $row['stu_id']; ?></td>
																<td class="column100 column2" data-column="column"><?php echo $row['stu_name']; ?></td>
																<td class="column100 column2" data-column="column"><?php echo $row['crs_id']; ?></td>
																<td class="column100 column2" data-column="column"><?php echo $row['crs_name']; ?></td>
																<td class="column100 column2" data-column="column"><?php echo $row['marks']; ?></td>
															</tr>
															<?php
															}
														}
													}
													?>

													</tbody> 
												</table>
											</div>
											</div>
										</section>
										<section id="section-7">
											<div class="graph">
												<div class="tables">
															
													<table class="table table-hover"> 
														<thead>
															<tr> 
																<th>Course Id</th>
																<th>Lecture Email</th> 
																<th>File Name</th> 
																<th>View</th>
																<th>Download</th>
															</tr> 
														</thead> 
														<tbody>

															<?php
					
																$query3=mysqli_query($con,"select * from `lecture_note`");
														                    
																while($row=mysqli_fetch_array($query3)){
															?>
																<tr>
																	<td class="column100 column1" data-column="column1"><?php echo $row['crs_id']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['lec_email']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['file_name']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="<?php echo $row['file']; ?>" target="_blank">View</a></td>
																	<td class="column100 column8" data-column="column8"><a href="<?php echo $row['file']; ?>" download>Download</td>
																</tr>
															<?php
																}
															?>
														</tbody> 
													</table>
												</div>
												
											</div>
										</section>

										<section id="section-6">
											
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
				<a href="index.html"><img src="<?php echo $result['st_avatar_path']; ?>" width=90px height=90px></a>
				<a href="index.html"><span class=" name-caret"><?php echo $result['st_fullname']; ?></span></a>

				<h4 class="name"><?php echo $result['st_staff_type']; ?></h4>

				<ul>
					<li><a class="tooltips" href="st_updateprofile.php"><span>Update Profile</span><i class="lnr lnr-user"></i></a></li>
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