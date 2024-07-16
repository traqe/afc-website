@extends('header')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/banner/banner4.jpg)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Service</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="#ts-service-area">Services</a></li>
                <li class="breadcrumb-item active" aria-current="services">All Services</li>
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

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service1.png" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/service-icon1.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="sage">Sage Evolution ERP</a></h3>
              <p>Regain the fundamentals with clever, economical software for large businesses</p>
              <a class="learn-more d-inline-block" href="sage" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service2.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/service-icon2.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="software-development">Software Development</a></h3>
              <p>We are aware of the diverse software requirements that each organization has thanks to our extensive experience. For this reason, we provide a variety of software development services.</p>
              <a class="learn-more d-inline-block" href="software-development" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service2 end -->
      </div><!-- Col 2 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service3.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/service-icon3.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="gis">Geographical Information Systems</a></h3>
              <p>With the use of a well-designed Geographic Information System (GIS), businesses may glean useful information from location-based information, map layers, and 3D modeling.</p>
              <a class="learn-more d-inline-block" href="gis" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service4.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/service-icon4.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="it">IT Support</a></h3>
              <p>Proactive IT planning, cloud support, a help desk, and other features can transform your business. For companies of all sizes, we provide a comprehensive range of services.</p>
              <a class="learn-more d-inline-block" href="it" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service1 end -->
      </div><!-- Col 4 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service5.png" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/fact3.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="payroll-hr">Payroll & HR</a></h3>
              <p>Your HR leaders may rest easy knowing that all legal obligations are being completed throughout your firm by using our payroll and HR services, which come with guaranteed local compliance.</p>
              <a class="learn-more d-inline-block" href="payroll-hr" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
          <div class="ts-service-image-wrapper">
            <img loading="lazy" class="w-100" src="public/services/images/services/service6.jpg" alt="service-image">
          </div>
          <div class="d-flex">
            <div class="ts-service-box-img">
              <img loading="lazy" src="public/services/images/icon-image/fact2.png" alt="service-icon">
            </div>
            <div class="ts-service-info">
              <h3 class="service-box-title"><a href="reporting">Reporting</a></h3>
              <p>Rich data visualization, such as charts, maps, and sparklines, can be accessed on demand through our Reporting services.</p>
              <a class="learn-more d-inline-block" href="reporting" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
            </div>
          </div>
        </div><!-- Service3 end -->
      </div><!-- Col 6 end -->

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


@endsection
