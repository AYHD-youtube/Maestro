<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Serenity Bootstrap Template</title>
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
          <li><a href="index.php">Home</a></li>

          <li class="drop-down"><a href="#">Instruments</a>
            <ul>
              <li><a href="guitar.php">Acoustic Guitar</a></li>
              <li><a href="piano.php">Classic Paino</a></li>
            </ul>
          </li>
          <li><a href="record.php">Record</a></li>
          <li><a href="practice.php">Practice</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="active"><a href="team.php" >About Us</a></li>
          <?php
      session_start();
      if(isset($_SESSION["username"])){
        include("auth.php");
        echo "<li class='get-started'><a href='dashboard.php'>".$_SESSION['username']."</a></li>
          <li class='get-started'><a href='logout.php'>Logout</a></li>";
      }
        else{
        echo "<li class='get-started'><a href='signup.php'>Sign Up</a></li>
          <li class='get-started'><a href='login.php'>Login</a></li>";
        }
        ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Team</h2>
            <p>The people who work at Maestro share the vision and values of our community.
We’re driven by the idea that the best work is born from diligence, craftsmanship and fun. </p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Team</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/abhishek.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/abhishek3yadav3"><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/AYHD.Youtube/"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/_ayhd_/"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/abhishek-yadav-436a5a163"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abhishek Yadav</h4>
                <span>Web Devloper</span>
                <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea non est corporis in.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/meghana.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Meghana Wagh</h4>
                <span>WEB DEVLOPER</span>
                <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque. Dolores eum non.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/vedant.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Vedant Tilwankar</h4>
                <span>WEB DEVELOPER</span>
                <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat aliquid. Tenetur possimus qui enim.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

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
