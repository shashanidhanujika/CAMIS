<?php
  include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CAMIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

<!--extra-->
    <link rel="stylesheet" href="../css/style1.css">

  </head>
<body>
	<form action="" method="post">
    <div class="site-section">

    	<center><h2 style="color: #ff3300; font-family: serif; font-weight: bold;">Forget Password</h2></center><br>
    	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="text" id="uname" placeholder="Enter Email" name="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="psw">New Password</label>
                            <input type="password" id="pword" placeholder="Enter New Password" name="pass" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" name="submit" value="Reset Password" class="btn btn-primary btn-lg px-5">
                        </div>
                        <div class="col-6">
                            <a href="../index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back To Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</form>


	<?php
		if (isset($_POST['submit'])) 
		{
			$email = $_POST['email'];
			$password = $_POST['pass'];

			$import = "UPDATE st_info SET st_password='$password' WHERE st_email='$email'";
			$import2 = "UPDATE lecturer_info SET lec_password='$password' WHERE lec_email='$email'";
			$import3 = "UPDATE admin_info SET ad_password='$password' WHERE ad_email='$email'";

			$result = mysqli_query($con,$import);
			$result2 = mysqli_query($con,$import2);
			$result3 = mysqli_query($con,$import3);

			if ($result) 
			{
				header("location:login.php");
				
			}
			elseif ($result2) 
			{
				header("location:login.php");	
			}
			elseif ($result3) 
			{
				header("location:login.php");
			}
			else
			{
				echo "<script>alert('Incorrect Email..');</script>";
			}
		}
	?>


<script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>


</body>	
</html>
