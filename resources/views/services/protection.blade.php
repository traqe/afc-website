@extends('header')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/services/car-bumper2.jpeg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">VEHICLE PROTECTION</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/afc.co.zw">Home</a></li>
                                <li class="breadcrumb-item"><a href="/afc.co.zw/services">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">VEHICLE PROTECTION</li>
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
            <h3 class="widget-title">Vehicle Protection</h3>
            <ul class="nav service-menu">
              <li id="advanced" class="active"><a onclick="change_advanced()">Vehicle Protection</a></li>
            </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">



          <div class="row" id="floating">
            <div style="text-align: justify" class="col-md-12">
              <h2 class="column-title mrt-0">Vehicle Protection</h2>
              <p>Safeguard your vehicle with our robust protection equipment, such as bull bars, tow bars, nudge bars, and roll bars, designed to prevent damage and enhance durability.</p>
              <p>We cover the following range of protection equipment for your car: <br></p>
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
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider">
            <div class="item">
              <img loading="lazy" class="img-fluid" src="public/services/images/services/car-bumper.jpeg" alt="erp_benefits" />
            </div>

            <div class="item">
              <img loading="lazy" class="img-fluid" src="public/services/images/services/car-bumper2.jpeg" alt="project-slider-image" />
            </div>
          </div><!-- Page slider end -->

          <div class="gap-40"></div>

          <div class="row">
            <div class="col-md-6">
              <h3 class="column-title-small">What Makes Us Different</h3>
              <ul class="list-arrow">
                <li>Cut costs without sacrificing service quality</li>
                <li>High quality car protection equipment that is neccessary for you car</li>
              </ul>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
              <h3 class="column-title-small">You Should Know</h3>

              <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Why is neccessary to protect your vehicle?
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                    <div style="text-align: justify" class="card-body">
                      <p>
                        Firstly, insurance plays a crucial role. Having comprehensive car insurance provides financial protection in case of accidents, theft, or damage. It covers repair costs and liability for injuries to others. Secondly, regular maintenance ensures your car runs smoothly and reduces the risk of breakdowns. Regularly check tire pressure, brakes, fluids, and lights to keep your vehicle in optimal condition. Thirdly, practicing defensive driving is essential. Follow traffic rules, maintain a safe distance, and anticipate other drivers’ actions. Defensive driving helps prevent accidents and promotes road safety. Additionally, consider security measures. Install anti-theft devices like steering wheel locks, alarms, and tracking systems. Parking in well-lit areas also deters theft. Lastly, keep an emergency kit in your car. Essentials like a first aid kit, flashlight, jumper cables, and a spare tire can be lifesavers during unexpected situations.
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
