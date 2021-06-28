<?php
  include('../connection.php');
  $cid=$_GET['cid'];
  $query=mysqli_query($con,"select * from `2019_bus` where cid='$cid'");
  $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
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
  <form  method="post" action="update_2019_bus.php?cid=<?php echo $cid; ?>">
    <div class="site-section">

      <!--center><h2 style="color: #ff3300; font-family: serif; font-weight: bold;">Forget Password</h2></center><br-->

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        
                      <div class="col-md-12 form-group">
                          <label for="cid">Course ID</label>
                          <input type="text" placeholder="Enter course ID" id="cid" name="cid" value="<?php echo $row['cid']; ?>" class="form-control form-control-lg" required>
                      </div>
                      <div class="col-md-12 form-group">
                          <label for="cName">Course Name</label>
                          <input type="text" placeholder="Enter Course Name" id="cName" name="cName" value="<?php echo $row['cName']; ?>" class="form-control form-control-lg" required>
                      </div>
                       
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Save" name="submit" class="btn btn-primary btn-lg px-5"> 
                        </div><br/>
                        
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>


</body> 
</html>
