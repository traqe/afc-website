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

  <title>Olimem-shop</title>


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
              <a class="navbar-brand" href="index.html">
                <span>
                  Olimem
                </span>
              </a>
  
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown show px-3">
                  <i class="fa fa-filter" aria-hidden="true"></i><a class="dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span> Browse Categories</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Laptops</a>
                    <a class="dropdown-item" href="#">Drones</a>
                    <a class="dropdown-item" href="#">Network Switch</a>
                  </div>
                </div>
              
              <from class="search_form">
                <input type="text" class="form-control" placeholder="Search here...">
                <button class="" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </from>
              
              
                <div class="dropdown show">
                  <i class="fa fa-gear" aria-hidden="true"></i><a class="dropdown-toggle text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Services</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Laptop Repairs</a>
                    <a class="dropdown-item" href="#">Data Recovery</a>
                    <a class="dropdown-item" href="#">Network Support</a>
                  </div>
                </div>
              </div>
              <div class="user_option_box">
                <a href="" class="account-link">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    My Account
                  </span>
                </a>
                <a href="" class="cart-link">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span>
                    Cart
                  </span>
                </a>
              </div>
            </nav>
          </div>
        </div>
        <br>
        <div class="header_top">
          <div class="container-fluid">
            <div class="top_nav_container">
              <div class="contact_nav">
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call : +2638644263212346
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                Email :olimemmarketing@gmail.com
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