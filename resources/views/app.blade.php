<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Olimem Enterprise Solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('public') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('public') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h0 class="logo me-auto me-lg-0"><a href="index.html">Welcome <span>to</span></a></h0> -->
      <!-- Uncomment below if you prefer to use an image logo -->

      <a href="index.html" class="logo me-auto me-lg-0"> <img src="{{ asset('public') }}/img/olimem_logo_text.png" id="image_logo" alt="logo" class="img-fluid"> </a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home">Home</a></li>
          <li><a class="nav-link scrollto" href="ts-features">About</a></li>
          <li><a class="nav-link scrollto" href="services">Services</a></li>
          <li><a class="nav-link scrollto " href="portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="team">Team</a></li>

          <!--
		  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			
		
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
		  
		-->

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!-- <h3>Gp<span>.</span></h3> -->
              <p>
                <strong>Harare Branch (Headquarters)</strong><br>
                Cnr 5th St. & RG Mugabe Way,
                Exploration Hse, 3rd Floor No 145.
                <br>
                <br>
                <strong>Bulawayo Branch</strong><br>

                Fidelity Life Center, <br>
                Cnr 11th Ave & Fife Street <br>1st Floor Suite 110, Bulawayo<br><br>

              <div class="social-links mt-3">

                <a href="https://www.facebook.com/OlimemEnterpriseSolutions/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/olimementerprises/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				-->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-8">
            <strong>Phone</strong><br>
            <br>
            <strong>Harare:</strong> <br> +263775902459/ +263775285850 <br>
            <br>
            <strong>Bulawayo:</strong> <br> +2638644263212346/ +263735842573
            <br>
            <br>
            <strong>Email:</strong> olimembulawayo@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#ts-features">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="sage">SAGE Pastel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="software-development">Software Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gis">GIS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="payroll-hr">payroll-Hr</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="reporting">reporting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="it">informtion technology</a></li>


            </ul>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>
-->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OLIMEM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public') }}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('public') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('public') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('public') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('public') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('public') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('public') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public') }}/js/main.js"></script>

</body>

</html>