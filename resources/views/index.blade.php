@extends('services.header')
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
            <h3 class="action-title">We understand your business needs
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
          <h3 class="into-sub-title">A software powerhouse, and more. Welcome to the OLIMEM experience</h3>
          <p>For 19 years, government entities, town/district councils, small companies, medium scale enterprises, and large corporate entities have counted on us to provide the following:</p>
          <ul>
            <li><i class="ri-check-double-line"></i> SAGE Accounting Solutions and Training Services.</li>
            <li><i class="ri-check-double-line"></i> Geographical Information Systems (GIS) Solutions.</li>
            <li><i class="ri-check-double-line"></i> Custom made software applications.</li>
            <li><i class="ri-check-double-line"></i> Competitive prices and flexible payment arrangements.</li>
            <li><i class="ri-check-double-line"></i> Up market hardware and networking equipment and accessories.</li>
            <li><i class="ri-check-double-line"></i> Outstanding training workshops & after-sales support.</li>
          </ul>
        </div><!-- Intro box end -->

        <div class="gap-20"></div>

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-trophy"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">We've Reputation for Excellence</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-sliders-h"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">We Build Partnerships</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 1 end -->

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-thumbs-up"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Guided by Commitment</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-users"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">A Team of Professionals</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 1 end -->
      </div><!-- Col end -->

      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="into-sub-title">Our Mission</h3>
        <p>To become a central hub for business software, hardware and networking solutions in Zimbabwe.</p>

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
                To provide the finest, latest information technology (IT) solutions to our customers and a unique, upscale and innovative service to keep our client's finger on the technologies pulse.
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
                <p>&#x2022; Team work<br>
                  &#x2022; Innovation<br>
                  &#x2022; Integrity <br>
                  &#x2022; Quality <br>
                  &#x2022; Commitment to clients
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
            <img loading="lazy" src="public/services/images/icon-image/fact1.png" alt="facts-img">
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="36">0</span></h2>
            <h3 class="ts-facts-title">Happy Clients</h3>
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/icon-image/fact2.png" alt="facts-img">
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
            <h3 class="ts-facts-title">Projects</h3>
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/icon-image/fact3.png" alt="facts-img">
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="19">0</span></h2>
            <h3 class="ts-facts-title">Years of Experience</h3>
          </div>
        </div><!-- Col end -->

        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
          <div class="ts-facts-img">
            <img loading="lazy" src="public/services/images/icon-image/fact4.png" alt="facts-img">
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="5">0</span></h2>
            <h3 class="ts-facts-title">Awards</h3>
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
            <h3 class="service-box-title"><a href="#">Sage Evolution ERP</a></h3>
            <p>Regain the fundamentals with clever, economical software for large businesses</p>
          </div>
        </div><!-- Service 1 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon2.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Software Development</a></h3>
            <p>We are aware of the diverse software requirements that each organization has thanks to our extensive experience. For this reason, we provide a variety of software development services.</p>
          </div>
        </div><!-- Service 2 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon3.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="gis">Geographical Information Systems</a></h3>
            <p>With the use of a well-designed Geographic Information System (GIS), businesses may glean useful information from location-based information, map layers, and 3D modeling.</p>
          </div>
        </div><!-- Service 3 end -->

      </div><!-- Col end -->

      <div class="col-lg-4 text-center">
        <img loading="lazy" class="img-fluid " style="height:575px" src="public/services/images/services/gugu.png" alt="service-avater-image">
      </div><!-- Col end -->

      <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/service-icon4.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">IT Support</a></h3>
            <p>Proactive IT planning, cloud support, a help desk, and other features can transform your business. For companies of all sizes, we provide a comprehensive range of services.</p>
          </div>
        </div><!-- Service 4 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/fact3.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Payroll & HR</a></h3>
            <p>Your HR leaders may rest easy knowing that all legal obligations are being completed throughout your firm by using our payroll and HR services, which come with guaranteed local compliance.</p>
          </div>
        </div><!-- Service 5 end -->

        <div class="ts-service-box d-flex">
          <div class="ts-service-box-img">
            <img loading="lazy" src="public/services/images/icon-image/fact2.png" alt="service-icon">
          </div>
          <div class="ts-service-box-info">
            <h3 class="service-box-title"><a href="#">Reporting</a></h3>
            <p>Rich data visualization, such as charts, maps, and sparklines, can be accessed on demand through our Reporting services.</p>
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
        <h3 class="section-sub-title">Recent Clients</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="RDC">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">RDC
          </label>
          <label for="OTHER">
            <input type="radio" name="shuffle-filter" id="education" value="education">Other
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/projects/portfolio-1.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/projects/portfolio-1.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <p class="project-cat">RDC</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="public/services/images/projects/portfolio-2.jpg" aria-label="project-img">
                <img class="img-fluid" src="public/services/images/projects/portfolio-2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">

                  <p class="project-cat">RDC</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">TNT East Facility</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Narriot Headquarters</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Kalas Metrorail</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ancraft Avenue House</a>
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
          <a class="btn btn-primary" href="projects.html">View All Clients</a>
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