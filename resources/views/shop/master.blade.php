<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AFC Accessories</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/shop') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{ asset('public/shop') }}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('public/shop') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('public/shop') }}/css/responsive.css" rel="stylesheet" />

</head>

<body>
    <header class="header_section">
        <div class="header_bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="/afc.co.zw/">
                <span>
                  <img style="height: 80px" src="public\img\favicon.png" alt="">
                   AFC - Accessories Fitment Centre
                </span>
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>

              </div>
            </nav>
          </div>
        </div>
        <br>
        <div class="header_top">
          <div class="container-fluid">
            <div class="top_nav_container">
              <div class="contact_nav row">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                     Call : +263 4 746892/3; +263 8644 0759 25/6
                  </span>
                <div style="width: 0.5cm"></div>
                <a href="mailto:[afc@gmail.com]">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                Email :[afc@gmail.com]
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>

      @yield('content')

  <!-- footer section -->
  @include('shop.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('public/shop') }}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('public/shop') }}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{ asset('public/shop') }}/js/custom.js"></script>


</body>

</html>
