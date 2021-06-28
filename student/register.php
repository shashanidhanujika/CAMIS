
<?php 
  session_start();

  include("../connection.php");
  $_SESSION['message']='';

  if ($_SERVER['REQUEST_METHOD']=='POST') {
    if($_POST['pass']==$_POST['repass']){

      $fullname = $_POST['stuFname'];
      $username = $_POST['stuUname'];
      $contact = $_POST['stucNumber'];
      $email = $_POST['stuEmail'];
      $address = $_POST['stuAddress'];
      $gender = $_POST['stugender'];
      $type = $_POST['stuStaff'];
      $password = $_POST['pass'];
      $avatar_path = 'images/'.$_FILES['avatar']['name'];
      
      $fullname = mysqli_real_escape_string($con,$fullname);
      $username = mysqli_real_escape_string($con,$username);
      $contact = mysqli_real_escape_string($con,$contact);
      $email = mysqli_real_escape_string($con,$email);
      $address = mysqli_real_escape_string($con,$address);
      $gender = mysqli_real_escape_string($con,$gender);
      $type = mysqli_real_escape_string($con,$type);
      $password = mysqli_real_escape_string($con,$password);
      $avatar_path = mysqli_real_escape_string($con,$avatar_path);

      if (preg_match("!image!", $_FILES['avatar']['type'])) {
        
        if (copy($_FILES['avatar']['tmp_name'],$avatar_path)) {
          
          $_SESSION['username'] = $username;
          $_SESSION['avatar'] = $avatar_path;

          $sql = "INSERT INTO st_info (st_fullname, st_username, st_tel, st_email, st_address, st_gender, st_staff_type, st_password, st_avatar_path) VALUES ('$fullname', '$username', '$contact', '$email', '$address', '$gender', '$type', '$password', '$avatar_path')";

          if (mysqli_query($con,$sql)) {
            $_SESSION['message'] = "Registration Successful";
            header("location:../index.php");
          }
          else{
            $_SESSION['message'] = "User Could Not Be Added To Database";
          }
        }
        else{
          $_SESSION['message'] = "File Upload Failed";
        }

      }
      else{
        $_SESSION['message'] = "Please upload Only JPG, PNG or GIF Image!";
      }

    }
    else{
      $_SESSION['message'] = "Password Did Not Match!";
      #echo "<script>alert('Password Did Not Match!');</script>";
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
  <body>
      <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.php">CAMIS <span>CA Management Information System</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>Charted@email.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>Call Us: 041 2234800</span>
                            </div>
                        </div>
                        <!--div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0">
                                <a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                    <span>Student Login</span>
                                </a>
                            </p>
                        </div-->

                        <div class="col-md topper d-flex align-items-center justify-content-end">
                        <!--div class="col-lg-3 text-right"-->
                            <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
                        </div>

                    </div>
                </div>
            </div>
          </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="../index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="../about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('../images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

  <!--form-->
  <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="site-section">

      <!--?php 
        echo "<p style='color:#000033; margin-bottom:40px; text-align:center; font-weight:bold; font-family:serif; font-size:27px;'>{$_SESSION['message']}</P>";           
      ?-->

        <div class="container">
           <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" placeholder="Enter Full Name" id="fullname" name="stuFname" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">User Name</label>
                            <input type="text" placeholder="Enter User Name" id="username" name="stuUname" class="form-control form-control-lg" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="contact">Contact number</label>
                            <input type="text" placeholder="Enter Contact Number" id="contact" name="stucNumber" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" id="email" name="stuEmail" class="form-control form-control-lg" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="address">Address</label>
                            <input type="text" placeholder="Enter Address" id="address" name="stuAddress" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="gender">Gender</label>
                            <!--input type="text" placeholder="Enter Your Gender" id="gender" name="stugender" class="form-control form-control-lg" required-->
                            <select id="gender" name="stugender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Staff Type</label>
                            <input type="text" placeholder="Enter Student, Lecture Or Admin" id="pword" name="stuStaff" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" placeholder="Enter Password" id="pword" name="pass" minlength="8" maxlength="20" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Comfirm Password</label>
                            <input type="password" placeholder="Re Enter Password" id="pword" name="repass" minlength="8" maxlength="20" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Profile Picture</label>
                            <input type="file" name="avatar" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Register" name="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                        <div class="col-6">
                            <a href="login.php">Already have a Account</a>
                        </div>
                    </div>
                   
                </div>
            </div>
  
        </div>
    </div>

    
</form>

     <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

