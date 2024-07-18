@extends('shop.master')
@section('content')
  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="row">
        {{--
        <div class="col-sm-8 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/laptop.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Laptops
              </h5>
              <div class="product_info">
                <h5>
                  Starting from <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/p2.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/p3.png" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        --}}
        <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="detail-box">
                <img style="height: 90px; border-radius: 90px" src="public/services/images/products/v-accessories-img.jpg"/>
                <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                  Vehicle Accessories
                </h5>
                <p>
                  <ul>
                      <li>Car Floor Mats</li>
                      <li>Weather Shields</li>
                      <li>Seat Covers</li>
                      <li>Upholstery</li>
                      <li>LED Lights</li>
                      <li>Customised Fibreglass Work</li>
                      <li>Spray Painting</li>
                      <li>Tonneou Covers (Tents)</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="detail-box">
                <img style="height: 90px; border-radius: 90px" src="public/services/images/products/v-security-img.jpg"/>
                <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                  Vehicle Security
                </h5>
                <p>
                  <ul>
                      <li>Motor Vehicle Alarms</li>
                      <li>Parking Assist Sensors</li>
                      <li>Smash and Grab Protection</li>
                      <li>Window Tint</li>
                      <li>Wheel Lock Nuts</li>
                      <li>Sparewheel Locks</li>
                      <li>Solex Locks</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="detail-box">
                <img style="height: 90px; border-radius: 90px" src="public/services/images/products/v-protection-img.jpg"/>
                <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                  Vehicle Protection
                </h5>
                <p>
                  <ul>
                      <li>Nudge Bars</li>
                      <li>Roll Bars</li>
                      <li>Bumper Protectors</li>
                      <li>Bull Bars</li>
                      <li>Tow Bars</li>
                      <li>Rear Bumper Replacement</li>
                      <li>Side Steps</li>
                      <li>Winch</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="detail-box">
              <img style="height: 90px; border-radius: 90px" src="public\services\images\services\canopy2.jpeg"/>
              <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                Canopies
              </h5>
              <p>
                <ul>
                    <li>Chevloret</li>
                    <li>Ford</li>
                    <li>Toyota</li>
                    <li>Isuzu</li>
                    <li>Mazda</li>
                    <li>Nissan</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="detail-box">
              <img style="height: 90px; border-radius: 90px" src="public/services/images/products/rubberizing-img.jpg"/>
              <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                Rubberizing
              </h5>
              <p>
                <ul>
                    <li>Standard 3mm thick</li>
                    <li>Heavy Duty 5mm thick</li>
                    <li>Customised</li>
                    <li>Stone Chip</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="detail-box">
              <img style="height: 90px; border-radius: 90px" src="public/services/images/products/v-entertainment-img.jpg"/>
              <h5 style="margin-left: 0.8cm; margin-top: 0.4cm">
                Vehicle Entertainment
              </h5>
              <p>
                <ul>
                <li>Single Din Radios</li>
                <li>Double Din Radios</li>
                <li>Satelite Navigation Radios (6 inch & 6 x 9 inch)</li>
                <li>Speakers</li>
                <li>Subwoofers</li>
                <li>Amplifiers</li>
                <li>DVD Headset</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn_box">
        <a href="/afc.co.zw/services" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end product section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div style="text-align: justify" class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide Best For You
              </h2>
            </div>
            <p>
                We are a wholly owned Zimbabwean company incorporated in 2012.
                The Company trades in buying and selling of vehicle accessories such as canopies, vehicle
                protection equipment (bull bars, tow bars, nudge bars, roll bars); vehicle security (alarms,
                gear locks, spare wheel locks); vehicle entertainment (radios, speakers, sub-woofers), motor
                glass (windscreens, door glass, panel glass, quarter glass).
            </p>
            <a href="/afc.co.zw/#ts-features">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('public/services') }}/images/slider-main/canopy-slide.jpeg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Top Notch Services
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Durable Accessories
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('public/shop') }}/images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Best Quality
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why us section -->

{{--
  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Says Our Customers
        </h2>
      </div>
    </div>
    <div class="client_container ">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </p>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a
                    long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                  </p>
                </div>
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      James Dew
                    </h5>
                    <h6>
                      Photographer
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->
--}}
  <!-- info section -->


  <!-- end info_section -->

@endsection
