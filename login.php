<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maestro - Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v2.1.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style media="screen">
  @import url('https://fonts.googleapis.com/css?family=Cinzel|Comfortaa|Mina|Ropa+Sans|Sunflower:300');
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #2196f3;
  }

  input, button{
  border: none;
  }

  button{
  cursor: pointer;
  transition: ease-in-out 0.3s;
  }

  button:hover{
  transform: scale(1.2);
  }

  *:focus{
  outline: none;
  }

  /* Section one */
  #section-one{
  display: flex;
  justify-content: space-around;
  align-items: center;
  }

  #section-one .login-modal{
  background-color: #F2F2F2;
  width: 450px;
  height: 620px;
  margin: 60px 30px;
  -webkit-box-shadow: 0px 0px 19px -1px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 19px -1px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 19px -1px rgba(0,0,0,0.75);
  }

  #section-one .login-modal .close-btn a{
  position: relative;
  font-size: 1.5em;
  color: #444;
  display: none;
  }

  #section-one .login-modal h1{
  text-align:center;
  position: relative;
  top: 30px;
  padding-bottom: 70px;
  color: #777;
  font-family: Arial;
  font-size: 1.6em;
  }

  #section-one .login-modal input{
  display: block;
  margin: 20px auto;
  font-size: .85em;
  }

  #section-one .login-modal input[type="text"]{
  border-bottom: 2px solid #ddd;
  width: 80%;
  padding: 15px 8px;
  transition: ease-in-out .4s;
  }

  #section-one .login-modal input[type="password"]{
  border-bottom: 2px solid #ddd;
  width: 80%;
  padding: 15px 8px;
  transition: ease-in-out .4s;
  }

  #section-one .login-modal a{
  text-decoration: none;
  float: right;
  right: 40px;
  position: relative;
  font-size: 0.80em;
  color: #0A92BF;
  }

  #section-one .login-modal input[type="submit"]{
  margin-top: 80px;
  width: 80%;
  padding: 15px 0;
  border-radius: 30px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 400;
  opacity: 0.9;
  transition: ease-in-out .2s;
  cursor: pointer;
  letter-spacing: 1px;
  background: rgba(59,103,165,1);
  background: -moz-linear-gradient(45deg, rgba(59,103,165,1) 0%, rgba(56,105,168,1) 5%, rgba(21,117,208,1) 29%, rgba(6,122,224,1) 39%, rgba(6,133,224,1) 62%, rgba(21,166,249,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,103,165,1)), color-stop(5%, rgba(56,105,168,1)), color-stop(29%, rgba(21,117,208,1)), color-stop(39%, rgba(6,122,224,1)), color-stop(62%, rgba(6,133,224,1)), color-stop(100%, rgba(21,166,249,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,103,165,1) 0%, rgba(56,105,168,1) 5%, rgba(21,117,208,1) 29%, rgba(6,122,224,1) 39%, rgba(6,133,224,1) 62%, rgba(21,166,249,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,103,165,1) 0%, rgba(56,105,168,1) 5%, rgba(21,117,208,1) 29%, rgba(6,122,224,1) 39%, rgba(6,133,224,1) 62%, rgba(21,166,249,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,103,165,1) 0%, rgba(56,105,168,1) 5%, rgba(21,117,208,1) 29%, rgba(6,122,224,1) 39%, rgba(6,133,224,1) 62%, rgba(21,166,249,1) 100%);
  background: linear-gradient(45deg, rgba(59,103,165,1) 0%, rgba(56,105,168,1) 5%, rgba(21,117,208,1) 29%, rgba(6,122,224,1) 39%, rgba(6,133,224,1) 62%, rgba(21,166,249,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b67a5', endColorstr='#15a6f9', GradientType=1 );
  }

  #section-one .login-modal input[type="submit"]:hover{
  opacity: 1;
  }

  #section-one .login-modal .login-modal-text{
  position: relative;
  left: 165px;
  top: 20px;
  color: #888;
  font-size: 0.85em;
  letter-spacing: 0.80px;
  }

  #section-one .login-modal .login-with button{
  position: relative;
  top: 50px;
  left: 75px;
  padding: 15px 30px;
  margin-left: 20px;
  border-radius: 50%;
  background: #fff;
  -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
  border: 1px solid #ddd;
  }

  #section-one .login-modal .login-with i{
  color: #2196f3;
  }

  #section-one .login-modal .login-modal-footer span{
  position: relative;
  top: 110px;
  left: 155px;
  font-size: 0.80em;
  }

  #section-one .login-modal .login-modal-footer a{
  position: relative;
  top: 112px;
  right: 155px;
  font-size: 1em;
  }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!--  <h1 class="text-light"><a href="index.html">Maestro</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>

          <li class="drop-down"><a href="#">Instruments</a>
            <ul>
              <li><a href="guitar.php">Acoustic Guitar</a></li>
              <li><a href="piano.php">Classic Paino</a></li>
            </ul>
          </li>
          <li><a href="record.php">Record</a></li>
          <li><a href="practice.php">Practice</a></li>
          <li ><a href="contact.php">Contact</a></li>
          <li><a href="team.php">About Us</a></li>
          <li class="get-started"><a href="signup.php">Sign Up</a></li>
          <li class="get-started"><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <br>
  <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h1>Username/password is incorrect.</h1>
<br/><h1>Username/password is incorrect.,Click here to <a href='login.php'>Login</a></h1></div>";
 }
    }else{
?>
      <section id="section-one" data-aos="fade-up">
        <div class="login-modal">
          <div class="close-btn">
            <a href="#">&times;</a>
          </div>
          <h1>LOGIN</h1>
          <form method="POST" name="login">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Your password" required>
            <input type="submit" name="login" value="LOGIN">
          </form>
          <a href="#" class="forgot-password">Forgot password ?</a>
        </div>
      </section>
<?php } ?>
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-8 footer-info">
              <h3>Maestro</h3>
              <p>Music is essential to all individuals across the world. It plays an important role in the lives of people of all ages, both
                 in and out of school, and for people of all ages. Music and music education is for everyone, regardless of
                 socioeconomic status, and not just for those with the potential to become professional musicians.</p>
            </div>

            <div class="col-lg-4 col-md-8 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="team.php">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="privacy.php">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-8 footer-contact">
              <h4>Contact Us</h4>
              <p>
                A304 Mayuresh Residency <br>
                Bhandup, Mumbai 4000078<br>
                INDIA <br>
                <strong>Phone:</strong> +91 9702858226<br>
                <strong>Email:</strong> abhishek3yadav3@gmail.com<br>
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Maestro</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="https://ayhd.ga/">AYHD</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>
