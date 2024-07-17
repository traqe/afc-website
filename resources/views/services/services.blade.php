@extends('header')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/slider-main/canopy-slide.jpeg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">SERVICES</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/afc">Home</a></li>
                                <li class="breadcrumb-item"><a href="services">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Services</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/canopies-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/canopies.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="canopies">Canopies</a></h3>
              <p>Our canopies provide durable and stylish solutions for added vehicle protection and storage, perfect for both personal and commercial use.</p>
              <a class="learn-more d-inline-block" href="canopies" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/rubberizing-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/rubberizing.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="rubberizing">Rubberizing</a></h3>
              <p>Protect your vehicle’s undercarriage and load areas from rust and wear with our high-quality rubberizing services, ensuring a longer lifespan for your vehicle.</p>
              <a class="learn-more d-inline-block" href="rubberizing" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service2 end -->
      </div><!-- Col 2 end -->

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/v-accessories-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/accessories.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="accessories">Vehicle Accessories</a></h3>
              <p>Enhance and customize your vehicle with our extensive range of accessories, designed to meet both aesthetic and practical needs.</p>
              <a class="learn-more d-inline-block" href="accessories" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/v-protection-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/protection.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="protection">Vehicle Protection</a></h3>
              <p>Safeguard your vehicle with our robust protection equipment, such as bull bars, tow bars, nudge bars, and roll bars, designed to prevent damage and enhance durability.</p>
              <a class="learn-more d-inline-block" href="protection" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service1 end -->
      </div><!-- Col 4 end -->

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/v-entertainment-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/entertainment.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="entertainment">Vehicle Entertainment</a></h3>
              <p>Upgrade your driving experience with our premium vehicle entertainment systems, including high-quality radios, speakers, and sub-woofers.</p>
              <a class="learn-more d-inline-block" href="entertainment" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->

      <div class="col-lg-4 col-md-6 mb-5 service-tile">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/products/v-security-img.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/security.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="security">Vehicle Security</a></h3>
              <p>Ensure your vehicle’s safety with our advanced security solutions, including alarms, gear locks, and spare wheel locks, providing peace of mind against theft.</p>
              <a class="learn-more d-inline-block" href="security" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service3 end -->
      </div><!-- Col 6 end -->

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


@endsection
