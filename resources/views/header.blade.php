<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Accessories Fitment Centre (AFC)</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="public/img/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/slick/slick.css">
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset('public/services') }}/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('public/services') }}/css/style.css">

</head>

<body>

  <!-- Header start -->
  <header id="header" class="header-one">
    <div class="bg-white">
      <div class="container">
        <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
              <a class="d-block" href="/afc">
                <img loading="lazy" src="public/services/afc-logo.jpg" alt="afc logo">
              </a>
            </div><!-- logo end -->

            <div class="col-lg-9 header-right">
              <ul class="top-info-box">
                <li>
                  <div class="info-box">
                    <div class="info-box-content">
                      <p class="info-box-title">Call Us</p>
                      <p class="info-box-subtitle"> +263 4 746892-3 / +263 8644 0759 25-6</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="info-box">
                    <div class="info-box-content">
                      <p class="info-box-title">Email Us</p>
                      <p class="info-box-subtitle">[afc email]</p>
                    </div>
                  </div>
                </li>

                <li class="header-get-a-quote">
                  <!-- button to open modal of get a quote -->
                  <button class="btn btn-primary" id="myBtnHeader">Request Qoutation</button>
                </li>
              </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->

        </div><!-- Row end -->
      </div><!-- Container end -->
    </div>

    <div class="site-navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav mr-auto">
                  <li class="nav-item"><a class="nav-link" href="/afc">Home</a></li>

                  <li class="nav-item"><a class="nav-link" href="#ts-features">About Us</a></li>

                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="services">All Services</a></li>
                      <li><a href="canopies">Canopies</a></li>
                      <li><a href="rubberizing">Rubberizing</a></li>
                      <li><a href="accessories">Vehicle Accessories</a></li>
                      <li><a href="entertainment">Vehicle Entertainment</a></li>
                      <li><a href="protection">Vehicle Protection</a></li>
                      <li><a href="security">Vehicle Security</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="shop">Accessories</a></li>
                  <li class="nav-item"><a class="nav-link" href="#footer">Contact Us</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
      </div>
      <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
  </header>
  <!--/ Header end -->
  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!-- <h3>Gp<span>.</span></h3> -->
              <h4 style="color: rgb(64,64,200);">ADDRESS</h4>
              <p>
                100 McChlery Ave <br>
                Eastlea <br>
                Harare <br>

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
            <h4 style="color: rgb(32, 32, 170);">PHONE</h4>
            +263 4 746892/3 <br>
            +263 8644 0759 25/6
            <br>
            <br>
            <h4 style="color: rgb(64,64,200);">EMAIL</h4>
            <p>[afc-email]</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color: rgb(64,64,200);">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/afc">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#ts-features">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/afc/shop">Accessories</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color: rgb(64,64,200);">OUR SERVICES</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="canopies">Canopies</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="rubberizing">Rubberizing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="accessories">Vehicle Accessories</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="entertainment">Vehicle Entertainment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="protection">Vehicle Protection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="security">Vehicle Security</a></li>

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

    <div class="container-fluid">
      <div class="copyright justify-content-center">
        &copy; <strong><span> AFC - Accessories Fitment Centre</strong> | developed by Contessasoft (Pvt) Ltd</span>. All Rights Reserved
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

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{ asset('public/services') }}/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{ asset('public/services') }}/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('public/services') }}/plugins/slick/slick.min.js"></script>
  <script src="{{ asset('public/services') }}/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="{{ asset('public/services') }}/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="{{ asset('public/services') }}/plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{ asset('public/services') }}/plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="{{ asset('public/services') }}/js/script.js"></script>

  </div><!-- Body inner end -->
</body>

<!-- modal for get a quote/ get a request
required fields: select desired services - checkbox to select several services
                 client contact details - email; phone number
                 comment fields - to include specifics if possible

-->
<div id="myModalHeader" class="modal">

  <!-- Modal content -->
  <div class="modal-content justify-contents-centre">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <p><strong>REQUEST FOR QUOTE</strong></p>
        </div>
        <div class="col-sm-2">
          <span class="closeHeader close">&times;</span>
        </div>
      </div>
    </div>
    <form action="postEmail" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Email" required>
      <div class="gap-20"></div>
      <input type="text" name="phone" placeholder="Phone Number" required>
      <div class="gap-20"></div>
      <fieldset>
        <legend style="font-size: 15px; font-weight: bold;">SERVICES</legend>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Canopies"> Canopies</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Rubberizing"> Rubberizing</br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Vehicle Accessories"> Vehicle Accessories</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Vehicle Entertainment"> Vehicle Entertainment</br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Vehicle Protection"> Vehicle Protection</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Vehicle Security"> Vehicle Security</br>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="gap-20"></div>
      <input type="text" name="comment" placeholder="Descriprion of Service" required>
      <div class="gap-20"></div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</html>
