@extends('header')
@section('content')


<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(public/services/images/slider-main/finance.jpg)">
    <div class="slider-content">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12 text-center">
            <h2 class="slide-title" data-animation-in="slideInLeft">19 Years of excellence in</h2>
            <h3 class="slide-sub-title" data-animation-in="slideInRight">Financial Consultancy</h3>
            <p data-animation-in="slideInLeft" data-duration-in="1.2">
              <a href="services.html" class="slider btn btn-danger border">Our Services</a>
              <a href="contact.html" class="slider btn btn-warning border">Contact Now</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(public/services/images/slider-main/solutions.jpg)">
    <div class="slider-content text-left">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12">
            <h2 class="slide-title-box" data-animation-in="slideInDown">IT solutions</h2>
            <h3 class="slide-title" data-animation-in="fadeIn">Hardware & Software</h3>
            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Top Grade Technology</h3>
            <p data-animation-in="slideInRight">
              <a href="services.html" class="slider btn btn-danger border">Our Services</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(public/services/images/slider-main/team.jpg)">
    <div class="slider-content text-right">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12">
            <h2 class="slide-title" data-animation-in="slideInDown">Professional Consultants</h2>
            <h3 class="slide-sub-title" data-animation-in="fadeIn">We Are Results Oriented</h3>
            <p class="slider-description lead" data-animation-in="slideInRight">Expert Advice To Businesses And Organisations.</p>
            <div data-animation-in="slideInLeft">
              <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
      <div class="row align-items-center">
        <div class="col-md-8 text-center text-md-left">
          <div class="call-to-action-text">
            <h3 class="action-title">Your Trusted Partner in Quality Car Parts and Fitment Solutions
            </h3>
          </div>
        </div><!-- Col end -->
        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
          <div class="call-to-action-btn">
            <!-- button to open modal of get a quote -->
            <button style="background-color: #272d33;" class="btn btn-primary" id="myBtn">GET A QUOTE</button>
          </div>
        </div><!-- col end -->
      </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="ts-intro">
          <h2 class="into-title">About Us</h2>
          <h3 class="into-sub-title">Modern, Quality Car Accessories to Meet Your Needs. Welcome to the AFC experience!</h3>
          <p><div style="text-align: justify">Accessories Fitment Centre (AFC) is a wholly owned Zimbabwean company incorporated in 2012. The Company trades in buying and selling of vehicle accessories such as canopies, vehicle protection equipment (bull bars, tow bars, nudge bars, roll bars); vehicle security (alarms, gear locks, spare wheel locks); vehicle entertainment (radios, speakers, sub-woofers), motor glass (windscreens, door glass, panel glass, quarter glass). AFC services garages, parastatals, corporates, and individual car owners throughout the country.</div></p>
          <!--<ul>
            <li><i class="ri-check-double-line"></i> SAGE Accounting Solutions and Training Services.</li>
            <li><i class="ri-check-double-line"></i> Geographical Information Systems (GIS) Solutions.</li>
            <li><i class="ri-check-double-line"></i> Custom made software applications.</li>
            <li><i class="ri-check-double-line"></i> Competitive prices and flexible payment arrangements.</li>
            <li><i class="ri-check-double-line"></i> Up market hardware and networking equipment and accessories.</li>
            <li><i class="ri-check-double-line"></i> Outstanding training workshops & after-sales support.</li>
          </ul>-->
        </div><!-- Intro box end -->

        <div class="gap-20"></div>

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-car"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Comprehensive Vehicle Accessory Solutions</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-sliders-h"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Trusted by Garages, Corporates and Individuals Nationwide</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 1 end -->

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-users"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Vehicle Protection and Security Expertise</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-thumbs-up"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Enhancing Your Driving Experience</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 1 end -->
      </div><!-- Col end -->

      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="into-sub-title">Our Mission</h3>
        <p>To ensure our customer experience a modern life style by providing high quality products and services which are second to none in Zimbabwe.</p>

        <div class="accordion accordion-group" id="our-values-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Our Vision
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
              <div class="card-body">
                To be the most preferred motor vehicle accessories fitment centre in Zimbabwe.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Our Values
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
              <div class="card-body">
                <p>&#x2022; Efficiency<br>
                  &#x2022; Professionalism <br>
                  &#x2022; Good Workmanship <br>
                  &#x2022; Innovation<br>
                </p>
              </div>
            </div>
          </div>

        </div>
        <!--/ Accordion end -->

      </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
      <div class="row">
        <div class="col-md-3 col-sm-6 ts-facts">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/cards/andycab-card.png" alt="facts-img">
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/cards/beekman-card.png" alt="facts-img">
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/cards/maxliner-card.png" alt="facts-img">
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/cards/prem-card.png" alt="facts-img">
          </div>
        </div><!-- Col end -->

      </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">We Are Specialists In</h2>
        <h3 class="section-sub-title">What We Do</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-lg-4">
        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon1.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Canopies</a></h3>
            <p>Our canopies provide durable and stylish solutions for added vehicle protection and storage, perfect for both personal and commercial use.</p>
          </div>
        </div><!-- Service 1 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon2.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Rubberizing</a></h3>
            <p>Protect your vehicle’s undercarriage and load areas from rust and wear with our high-quality rubberizing services, ensuring a longer lifespan for your vehicle.</p>
          </div>
        </div><!-- Service 2 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon3.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="gis">Vehicle Accessories</a></h3>
            <p>Enhance and customize your vehicle with our extensive range of accessories, designed to meet both aesthetic and practical needs.</p>
          </div>
        </div><!-- Service 3 end -->

      </div><!-- Col end -->

      <div class="col-lg-4 text-center">
        <img loading="lazy" class="img-fluid " style="height:500px" src="public/services/images/services/car-vertical.png" alt="service-avater-image">
      </div><!-- Col end -->

      <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon4.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Vehicle Entertainment</a></h3>
            <p>Upgrade your driving experience with our premium vehicle entertainment systems, including high-quality radios, speakers, and sub-woofers.</p>
          </div>
        </div><!-- Service 4 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/fact3.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Vehicle Protection</a></h3>
            <p>Safeguard your vehicle with our robust protection equipment, such as bull bars, tow bars, nudge bars, and roll bars, designed to prevent damage and enhance durability.</p>
          </div>
        </div><!-- Service 5 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/fact2.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Vehicle Security</a></h3>
            <p>Ensure your vehicle’s safety with our advanced security solutions, including alarms, gear locks, and spare wheel locks, providing peace of mind against theft.</p>
          </div>
        </div><!-- Service 6 end -->
      </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <div class="row" style="justify-content: center">
            <h3 class="section-sub-title">Products <h3 class="section-sub-title" style="color: purple"> <div style="width: 55px"></div> & <div style="width: 55px"></div> </h3> <h3 class="section-sub-title"> Services</h3>
        </div>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="OTHER">
            <input type="radio" name="shuffle-filter" id="education" value="education">Other
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/canopies-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/canopies-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Canopies</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/rubberizing-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/rubberizing-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Rubberizing</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/v-accessories-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/v-accessories-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Vehicle Accessories</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/v-entertainment-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/v-entertainment-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Vehicle Entertainment</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/v-protection-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/v-protection-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Vehicle Protection</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/products/v-security-img.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/products/v-security-img.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Vehicle Security</a>
                  </h3>
                  <p class="project-cat">Residential</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/afc/services">View All Services</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

{{--
  <section class="content">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Testimonials</h3>

            <div id="testimonial-slide" class="testimonial-slide">
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                        view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                        subline of her own road.
                      </span>

                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Gabriel Denis</h3>
                            <span class="quote-subtext">Chairman, OKT</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 1 end -->

                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                        nisi aliquip consequat.
                      </span>

                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Weldon Cash</h3>
                            <span class="quote-subtext">CFO, First Choice</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 2 end -->

                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                        nisi ut commodo consequat.
                      </span>

                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Minter Puchan</h3>
                            <span class="quote-subtext">Director, AKT</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 3 end -->

            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <h3 class="column-title">Happy Clients</h3>

            <div class="row all-clients">
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 1 end -->

                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 2 end -->

                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 3 end -->

                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 4 end -->

                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 5 end -->

                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 6 end -->

            </div><!-- Clients row end -->

          </div><!-- Col end -->

      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Content end -->
  --}}
{{--
  <section class="subscribe no-padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
            <div class="subscribe-call-to-acton">
                <h3>Can We Help?</h3>
                <h4>(+9) 847-291-4353</h4>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-8">
            <div class="ts-newsletter row align-items-center">
                <div class="col-md-5 newsletter-introtext">
                  <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                  <p class="text-white">Latest updates and news</p>
                </div>

                <div class="col-md-7 newsletter-form">
                  <form action="#" method="post">
                      <div class="form-group">
                        <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                        <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                      </div>
                  </form>
                </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->

      </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
  </section>
  <!--/ subscribe end -->
   --}}

@endsection
