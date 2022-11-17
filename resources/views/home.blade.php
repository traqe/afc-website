@extends('app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <a href="index.html" class="logo me-auto me-lg-0"> <img src="{{ asset('public') }}/img/olimem_logo.png" alt="" class="img-fluid"> </a>
        <h1>Certified SAGE Pastel Partner<br>
          <h1>
            <h2> Software Development | GIS Consultancy <span>.</span></h2>
            <h3 id="motto"><i>"</i> Technology @ your fingertips<i>"</i></h3>
      </div>
    </div>
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="ri-calendar-todo-line"></i>
          <h3><a class="icon-text" href="#services">SAGE Accounting Solutions</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line"></i>
          <h3><a href="#services">Software Development Services</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line"></i>
          <h3><a href="#services">Geographical Information Systems</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="ri-database-2-line"></i>
          <h3><a href="#services">Networking & Technical Solutions</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">



  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset('public') }}/img/about.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>A software powerhouse, and more. Welcome to the OLIMEM experience.</h3>
          <p class="fst-italic">
            For 19 years, government entities, town/district councils, small companies, medium scale enterprises, and large corporate entities have counted on us to provide the following:
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> SAGE Accounting Solutions and Training Services.</li>
            <li><i class="ri-check-double-line"></i> Geographical Information Systems (GIS) Solutions.</li>
            <li><i class="ri-check-double-line"></i> Custom made software applications.</li>
            <li><i class="ri-check-double-line"></i> Competitive prices and flexible payment arrangements.</li>
            <li><i class="ri-check-double-line"></i> Up market hardware and networking equipment and accessories.</li>
            <li><i class="ri-check-double-line"></i> Outstanding training workshops & after-sales support.</li>
          </ul>
          <p>
            We are confident that we can meet your requirements and provide a solution that will accelerate your performance and maximize your profits.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6" style='background-image: url("{{ asset('public') }}/img/features.jpeg");' data-aos="fade-right"></div>
        <div class="image col-lg-6" data-aos="fade-right"></div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-receipt"></i>
            <h4>Our Mission</h4>
            <p>To become a central hub for business software, hardware and networking solutions in Zimbabwe.</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4>Our Vision</h4>
            <p>To provide the finest, latest information technology (IT) solutions to our customers and a unique, upscale and innovative service to keep our client's finger on the technologies pulse.</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-user"></i>
            <h4>Our Values</h4>
            <p>&#x2022; Team work<br>
              &#x2022; Innovation<br>
              &#x2022; Integrity <br>
              &#x2022; Quality <br>
              &#x2022; Commitment to clients
            </p>
          </div>
          <!--
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div> -->
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Check our Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">SAGE Accounting Solutions</a></h4>
            <p>Trusted SAGE consultants</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Software Development Services</a></h4>
            <p>Custom Business Systems</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Geographical Information Systems</a></h4>
            <p>Implementation and Training</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Hardware, Networking Hub</a></h4>
            <p>Find all tech gadgets and networks here</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Technical Support Services</a></h4>
            <p>Implementation and Training designed to equip stakeholders with first class GIS operation expertise. We also sell GIS related hardware</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  {{--
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>//</h3>
        <p>//</p>
        <a class="cta-btn" href="#">//</a>
      </div>

    </div>
  </section><!-- End Cta Section -->
  --}}

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-councils">Councils</li>
            <li data-filter=".filter-companies">Companies</li>
            <li data-filter=".filter-products">Products</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mberengwa Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mberengwa Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bubi Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bubi Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bikita Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bikita Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Buhera Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Buhera Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Chegutu Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Chegutu Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-companies">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Beitbridge Town Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Beitbridge Town Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Makonde Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Makonde Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tsholotsho Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tsholotsho Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Chipinge Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Chipinge Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-12.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Matobo Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Matobe Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-13.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mhondoro-Ngezi Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mhondoro-Ngezi Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-14.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Murehwa Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Murehwa Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-15.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Umguza Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Umguza Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-16.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Umzingwane Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Umzingwane Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-councils">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-17.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vungu Rural District Council</h4>
              <p>Council</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Vungu Rural District Council"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-products">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-18.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Networking Products</h4>
              <p>Networking</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Networking Products"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-products">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-19.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Stationery Products</h4>
              <p>Stationery</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-19.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Stationery Products"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-products">
          <div class="portfolio-wrap">
            <img src="{{ asset('public') }}/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Commando</h4>
              <p>Commando Equipment</p>
              <div class="portfolio-links">
                <a href="{{ asset('public') }}/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Commando"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
          <div class="content d-flex flex-column justify-content-center">
            <h3>We are experienced, and ready</h3>
            <p>
              A few statistics which are a testimony to our continuous growth and reliability
            </p>
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="2" class="purecounter"></span>
                  <p><strong>Happy Clients</strong> Companies across Zimbabwe and beyond our borders.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="2" class="purecounter"></span>
                  <p><strong>Projects</strong> Robust tailor-made business software applications.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="4" class="purecounter"></span>
                  <p><strong>Years of experience</strong> Each year better than the last, improvement is part of our nature.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="4" class="purecounter"></span>
                  <p><strong>Awards</strong> Recognition for good work, much appreciated.</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Counts Section -->

  {{--
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('public') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
  <h3>Saul Goodman</h3>
  <h4>Ceo &amp; Founder</h4>
  <p>
    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
  </p>
  </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="{{ asset('public') }}/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
      <h3>Sara Wilsson</h3>
      <h4>Designer</h4>
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="{{ asset('public') }}/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
      <h3>Jena Karlis</h3>
      <h4>Store Owner</h4>
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="{{ asset('public') }}/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
      <h3>Matt Brandon</h3>
      <h4>Freelancer</h4>
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="{{ asset('public') }}/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
      <h3>John Larson</h3>
      <h4>Entrepreneur</h4>
      <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->
  </div>
  <div class="swiper-pagination"></div>
  </div>

  </div>
  </section><!-- End Testimonials Section -->
  --}}

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Check our Team</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset('public') }}/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Oliver Mugadza</h4>
              <span>Managing Director</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('public') }}/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Memory Mugadza</h4>
              <span>Operations Director</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('public') }}/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nothando Ndlovu</h4>
              <span>Business Development Executive</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('public') }}/img/team/team-5.jpeg" alt="image" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Crescent C. T. Phiri</h4>
              <span>HR & Administrator</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('public') }}/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Judith Magada</h4>
              <span>Accounts & Administration Officer</span>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div>
        <iframe style="border: 0; width: 100%; height: 270px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d936.3497667837347!2d28.58339187952031!3d-20.159103126482055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1eb55474f449f011%3A0xaf9c847179e0d32f!2sFidelity%20Life%20Centre%2C%20Eleventh%20Ave%2C%20Bulawayo!5e0!3m2!1sen!2szw!4v1643808934354!5m2!1sen!2szw" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <br>
              <p><strong>Harare Branch (HQ)</strong><br>Cnr 5th St. & RG Mugabe Way,
                Exploration Hse, 3rd Floor No 145, Harare, Zimbabwe<br><br><strong>Bulawayo Branch</strong><br>Fidelity Life Center,Cnr 11th Ave and Fife Street, 1st Floor Suite 110, Bulawayo, Zimbabwe
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>olimembulawayo@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+263 8644 212346</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection