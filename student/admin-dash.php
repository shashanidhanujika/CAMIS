<?php 

include("../connection.php");
session_start();
error_reporting(0);
$ad_profile = $_SESSION['user_name'];

if ($ad_profile==true) {
	# code...
}
else{
	header("location:login.php");
}

$query = "SELECT * FROM admin_info WHERE ad_username='$ad_profile'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>admin home</title>
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
									<?php echo $result['ad_fullname']; ?> </p>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span class="btn-txt">About</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class=""></i> <span class="btn-txt">Password</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="" aria-hidden="true"></i> <span class="btn-txt">Lec Details</span></a></li>
											<li><a href="#section-4" class="icon-lab"><i class=""></i> <span class="btn-txt">Stu Deatails</span></a></li>
											<li><a href="#section-5" class="icon-truck"> <span class="btn-txt">Crs 2019</span></a></li>
											<li><a href="#section-6" class="icon-truck"> <span class="btn-txt">Crs 2020</span></a></li>
											<li><a href="#section-7" class="icon-truck"> <span class="btn-txt">Msg</span></a></li>
										</ul>
									</nav>

									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong class="str-hdn">Personal Information</strong>
												<p><strong>Name : 
													<?php echo $result['ad_fullname']; ?>
													</strong>
												</p>
												<p><strong>Gender : 
													<?php echo $result['ad_gender']; ?>
													</strong>
												</p>
											</div>
											<div class="mediabox">
												<strong class="str-hdn">Contact Details</strong>
												<p><strong>Email : 
													<?php echo $result['ad_email']; ?>
													</strong>
												</p>
												<p><strong>Contact Number : 
													<?php echo $result['ad_tel']; ?>
													</strong>
												</p>
											</div>
											<div class="mediabox">
												<strong class="str-hdn">Parents Detail</strong>
												<p> <strong>Username :
													<?php echo $result['ad_username']; ?>
													</strong>
												</p>
												<p><strong>Password : 
													<?php echo $result['ad_password']; ?>
													</strong>
												</p>
												<p><strong>Staff Type : 
													<?php echo $result['ad_staff_type']; ?>
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
													$prev_password = $result['ad_password'];
													$old_password = $_POST['oldpassword'];

													if($prev_password!=$old_password)
													{ 
														$flag = "Old Password Does not Matched";
														
													}

													else{
														$ad_username = $result['ad_username'];
														$ad_password_update = $_POST['newpassword'];

														$admin_password_update_query = "UPDATE admin_info SET ad_password='$ad_password_update' WHERE ad_username='$ad_username'";

														$result2 = mysqli_query($con,$admin_password_update_query);

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
																			<th>Image</th>
																			<th>Name</th> 
																			<th>Email</th>  
																			<th>Qualification</th>
																			<th>Course</th>
																			<th>Gender</th>
																			<th>Contact</th>
																			<th>Delete</th>
																		</tr> 
																	</thead> 
																	<tbody>
															
																		<?php
									
																		$query1=mysqli_query($con,"select * from `lecturer_info`");
													                    
																		while($row=mysqli_fetch_array($query1)){
																		?>
																			<tr>

																				<td class="column100 column1" data-column="column1"><?php echo '<img src="data:image;base64,'.base64_encode($row['lec_avatar']).'" alt="image" style="width= 50px; height= 50px;" >'; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['lec_fullname']; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['lec_email']; ?></td>
																				<td class="column100 column1" data-column="column1"><?php echo $row['lec_qualification']; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['course_id_&_name']; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['lec_gender']; ?></td>
																				<td class="column100 column1" data-column="column1"><?php echo $row['lec_tel']; ?></td>
																				<td ><a href="delete_lec.php?lec_id=<?php echo $row['lec_id']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																					
																			</tr>
																			<?php
																		}
																		?>
																	</tbody> 
																</table>
															</div>
												
													</div-->
										</section>
										<section id="section-4">
											<div class="graph">
											<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>Image</th>
																			<th>Name</th> 
																			<th>Email</th>   
																			<th>Gender</th>
																			<th>Contact</th>
																			<th>Delete</th>

																		</tr> 
																	</thead> 
																	<tbody>
															
																		<?php
									
																		$query2=mysqli_query($con,"select * from `st_info`");
													                    
																		while($row=mysqli_fetch_array($query2)){
																		?>
																			<tr>

																				<td class="column100 column1" data-column="column1"><?php echo '<img src="data:image;base64,'.base64_encode($row['st_avatar_path']).'" alt="image" style="width= 50px; height= 50px;" >'; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['st_fullname']; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['st_email']; ?></td>
																				<td class="column100 column2" data-column="column"><?php echo $row['st_gender']; ?></td>
																				<td class="column100 column1" data-column="column1"><?php echo $row['st_tel']; ?></td>
																				<td ><a href="delete_stu.php?st_id=<?php echo $row['st_id']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																					
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
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query7=mysqli_query($con,"select * from `2019_cor`");
													                    
														while($row=mysqli_fetch_array($query7)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2019_cor.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2019_cor.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
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
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query8=mysqli_query($con,"select * from `2019_bus`");
													                    
														while($row=mysqli_fetch_array($query8)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2019_bus.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2019_bus.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
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
															<th>Execute level</th>
															<th>Course Name</th> 
															<th>File Name</th>
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query9=mysqli_query($con,"select * from `2019_exe`");
													                    
														while($row=mysqli_fetch_array($query9)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2019_exe.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2019_exe.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
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
											<div class="graph">
											<div class="tables">
															
												<table class="table table-hover"> 
													<thead>
														<tr> 
															<th>Corporate level</th>
															<th>Course Name</th> 
															<th>File Name</th>
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query5=mysqli_query($con,"select * from `2020_cor`");
													                    
														while($row=mysqli_fetch_array($query5)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2020_cor.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2020_cor.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
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
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query6=mysqli_query($con,"select * from `2020_bus`");
													                    
														while($row=mysqli_fetch_array($query6)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2020_bus.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2020_bus.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
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
															<th>Strategy level</th>
															<th>Course Name</th> 
															<th>File Name</th>
															<th>Delete</th>  
															<th>Edit</th> 
																			
														</tr> 
													</thead> 
													<tbody>
															
													<?php
					
														$query4=mysqli_query($con,"select * from `2020_stra`");
													                    
														while($row=mysqli_fetch_array($query4)){
															?>
																<tr class="row100" name="t1">

																	<td class="column100 column1" data-column="column1"><?php echo $row['cid']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['cName']; ?></td>
																	<td class="column100 column2" data-column="column"><?php echo $row['filename']; ?></td>
																	<td class="column100 column7" data-column="column7"><a href="delete_2020_stra.php?cid=<?php echo $row['cid']; ?>"><img src="images/delete.png" style="width:30px;"></td>
																	<td class="column100 column8" data-column="column8"><a href="edit_2020_stra.php?cid=<?php echo $row['cid']; ?>"><img src="images/edit.png" style="width:30px;"></a></td>
																</tr>
															<?php
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
																			<th>User Name</th>
																			<th>Email</th> 
																			<th>Message</th>  
																			<th>Delete</th> 
																		</tr> 
																	</thead> 
																	<tbody>
															
																	<?php
																		
																		$query3=mysqli_query($con,"select * from `contact`");
													                    
																		while($row=mysqli_fetch_array($query3)){
																			?>
																				<tr>

																					<td class="column100 column1" data-column="column1"><?php echo $row['userName']; ?></td>
																					<td class="column100 column2" data-column="column"><?php echo $row['email']; ?></td>
																					<td class="column100 column2" data-column="column"><?php echo $row['message']; ?></td>
																					<td><a href="delete_msg.php?email=<?php echo $row['email']; ?>"><img src="images/delete.png" style="width:30px;"></a></td>
																				</tr>
																			<?php
																		}
																	?>
																	</tbody> 
																</table>
															</div>
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
				<a href="index.html"><img src="<?php echo $result['ad_avatar']; ?>" width=90px height=90px></a>
				<a href="index.html"><span class=" name-caret"><?php echo $result['ad_fullname']; ?></span></a>

				<h4 class="name"><?php echo $result['ad_staff_type']; ?></h4>

				<ul>
					<li><a class="tooltips" href="admin_updateprofile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
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