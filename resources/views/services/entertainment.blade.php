@extends('header')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/services/entertainment2.jpeg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">VEHICLE ENTERTAINMENT</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/afc.co.zw">Home</a></li>
                                <li class="breadcrumb-item"><a href="/afc.co.zw/services">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">VEHICLE ENTERTAINMENT</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->
</div>
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title">Entertainment</h3>
            <ul class="nav service-menu">
              <li id="advanced" class="active"><a onclick="change_advanced()">Vehicle Entertainment</a></li>
            </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">



          <div class="row" id="floating">
            <div style="text-align: justify" class="col-md-12">
              <h2 class="column-title mrt-0">Vehicle Entertainment</h2>
              <p>Upgrade your driving experience with our premium vehicle entertainment systems, including high-quality radios, speakers, and sub-woofers.</p>
              <p>We have the following entertainment equipment: <br></p>
              <ul>
                <li>Single Din Radios</li>
                <li>Double Din Radios</li>
                <li>Satelite Navigation Radios (6 inch & 6 x 9 inch)</li>
                <li>Speakers</li>
                <li>Subwoofers</li>
                <li>Amplifiers</li>
                <li>DVD Headset</li>
              </ul>
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider">
            <div class="item">
              <img loading="lazy" class="img-fluid" src="public\services\images\services\entertainment.jpeg" alt="erp_benefits" />
            </div>

            <div class="item">
              <img loading="lazy" class="img-fluid" src="public\services\images\services\entertainment3.jpg" alt="project-slider-image" />
            </div>
          </div><!-- Page slider end -->

          <div class="gap-40"></div>

          <div class="row">
            <div class="col-md-6">
              <h3 class="column-title-small">What Makes Us Different</h3>
              <ul class="list-arrow">
                <li>Cut costs without sacrificing quality entertainment equipment</li>
              </ul>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
              <h3 class="column-title-small">You Should Know</h3>

              <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        what is the advantage of having entertainment in your vehicle?
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                    <div style="text-align: justify" class="card-body">
                      <p>
                        Having entertainment in your car offers several advantages. First, it enhances the driving experience by providing music, podcasts, and other content during long journeys. Second, personalized recommendations make the ride more enjoyable. Third, voice-controlled systems ensure safety and convenience. Fourth, connectivity keeps passengers engaged with the outside world. Finally, in-car entertainment opens up monetization opportunities for automakers and content providers.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Accordion end -->
            </div>
          </div>
          <!--2nd row end -->

          <div class="gap-40"></div>

          <div class="call-to-action classic">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Interested with this service.</h3>
                </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <!-- button to open modal of get a quote -->
                  <button class="btn btn-primary" id="myBtn">GET A QUOTE</button>
                </div>
              </div><!-- col end -->
            </div><!-- row end -->
          </div><!-- Action end -->

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

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

</div>

<script>
  function change_advanced() {
    var new_t = document.getElementById("advanced_proc").innerHTML;
    document.getElementById("floating").innerHTML = new_t;
    document.getElementById("annuity").className = " ";
    document.getElementById("retail").className = " ";
    document.getElementById("fixed").className = " ";
    document.getElementById("multi").className = " ";
    document.getElementById("customer").className = " ";
    document.getElementById("advanced").className = "active";
  }
</script>
@endsection
