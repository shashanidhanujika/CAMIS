<?php

    include("../connection.php");

    if (isset($_POST['update'])) 
    {
        $id = $_POST['id'];

        $query = "UPDATE `lecturer_info` SET lec_fullname='$_POST[Fname]', lec_username='$_POST[Uname]', lec_password='$_POST[pass]', lec_email='$_POST[email]', lec_qualification='$_POST[qua]', lec_study='$_POST[study]', lec_address='$_POST[address]', lec_staff_type='$_POST[type]', course_id_&_name='$_POST[crs]', lec_gender='$_POST[gender]', lec_status='$_POST[status]', lec_tel='$_POST[tel]' WHERE lec_id='$_POST[id]' ";

        $query_run = mysqli_query($con,$query);

        if ($query_run) 
        {
            #echo '<script type="text/javascript"> alert("Data Updated..") </script>';
            header("location:lecturer-dash.php");
        }
        else
        {
            echo '<script type="text/javascript"> alert("Data Not Updated..") </script>';
        }
    }

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
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="site-section">
        <center><h2 style="color: #ff3300; font-family: serif; font-weight: bold;">Update Profile</h2></center><br>
        <div class="container">
           <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="id">Lecturer ID</label>
                            <input type="text" placeholder="Enter Your Current ID" id="id" name="id" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="Fname">Full Name</label>
                            <input type="text" placeholder="Enter Full Name" id="fullname" name="Fname" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="Uname">User Name</label>
                            <input type="text" placeholder="Enter User Name" id="username" name="Uname" class="form-control form-control-lg" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="pass">Password</label>
                            <input type="text" placeholder="Enter Password" id="password" name="pass" minlength="8" maxlength="20" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="qua">Qualification</label>
                            <input type="text" placeholder="Enter Your Qualification" id="qualification" name="qua" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="study">College</label>
                            <input type="text" placeholder="Enter Your College" id="study" name="study" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="address">Address</label>
                            <input type="text" placeholder="Enter Your Home Address" id="address" name="address" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="type">Staff Type</label>
                            <input type="text" placeholder="Enter Student, Lecture Or Admin" id="type" name="type" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="crs">Course Id & Name</label>
                            <input type="text" placeholder="Enter Course Id & Name" id="crs" name="crs" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                        </div>     
                        <div class="col-md-12 form-group">
                            <label for="pword">Status</label>
                            <input type="text" placeholder="Enter Married Or Unmaried" id="status" name="status" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="tel">Contact Number</label>
                            <input type="text" placeholder="Enter Contact Number" id="tel" name="tel" class="form-control form-control-lg" required>
                        </div>
                        <!--div class="col-md-12 form-group">
                            <label for="pword">Comfirm Password</label>
                            <input type="password" placeholder="Re Enter Password" id="pword" name="repass" minlength="8" maxlength="20" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Profile Picture</label>
                            <input type="file" name="avatar" class="form-control form-control-lg" required>
                        </div-->
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Update Profile" name="update" class="btn btn-primary btn-lg px-5">
                        </div>
                        <div class="col-6">
                            <a href="lecturer-dash.php">&nbsp;&nbsp;&nbsp;Back To Homepage</a>
                        </div>
                    </div>
                   
                </div>
            </div>
  
        </div>
    </div>

    
</form>


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
  <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    

</body>
</html>
