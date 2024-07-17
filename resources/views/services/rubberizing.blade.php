@extends('header')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/slider-main/rubberizing2.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">RUBBERIZING</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/afc">Home</a></li>
                                <li class="breadcrumb-item"><a href="/afc/services">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">RUBBERIZING</li>
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
            <h3 class="widget-title">Rubberizing</h3>
            <ul class="nav service-menu">
              <li id="advanced" class="active"><a onclick="change_advanced()">Rubberizing</a></li>
            </ul>
          </div><!-- Widget end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">



          <div class="row" id="floating">
            <div style="text-align: justify" class="col-md-12">
              <h2 class="column-title mrt-0">Rubberizing</h2>
              <p>Protect your vehicle’s undercarriage and load areas from rust and wear with our high-quality rubberizing services. Our skilled technicians apply a durable rubber coating that acts as a shield against corrosion, impacts, and abrasions. By investing in this protective layer, you ensure a longer lifespan for your vehicle, allowing it to withstand the rigors of daily use and environmental challenges. Whether you’re driving through rugged terrain or navigating city streets, our rubberizing solutions offer peace of mind and help maintain your vehicle’s value over time.</p>
              <p>The properties of our rubberizing are: <br></p>
              <ul>
                <li>Standard 3mm thick</li>
                <li>Heavy Duty 5mm thick</li>
                <li>Customized</li>
                <li>Stone Chip</li>
              </ul>
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider">
            <div class="item">
              <img loading="lazy" class="img-fluid" src="public\services\images\slider-main\rubberizing.jpeg" alt="erp_benefits" />
            </div>

            <div class="item">
              <img loading="lazy" class="img-fluid" src="public\services\images\services\rubberizing2.jpg" alt="project-slider-image" />
            </div>
          </div><!-- Page slider end -->

          <div class="gap-40"></div>

          <div class="row">
            <div class="col-md-6">
              <h3 class="column-title-small">What Makes Us Different</h3>
              <ul class="list-arrow">
                <li>Cut costs without sacrificing service quality</li>
                <li>High quality rubberizing that is fit for you car</li>
              </ul>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
              <h3 class="column-title-small">You Should Know</h3>

              <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the benefits of rubberizing your car?
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                    <div style="text-align: justify" class="card-body">
                      <ul>
                        <li>Chemical Resistance: The rubber material resists damage from chemicals, oil, and fuel spills. </li>
                        <li>Sound Dampening: Rubberized coatings reduce road noise and vibrations, enhancing driving comfort. </li>
                        <li>Impact Resistance: Rubberized surfaces absorb impacts, reducing the risk of scratches, dents, and chips from stones, debris, or minor collisions. </li>
                        <li>Corrosion Protection: The rubber coating acts as a barrier, preventing rust and corrosion caused by exposure to moisture, salt, and other environmental factors. </li>
                        <li>Durability: The protective layer extends the lifespan of your vehicle, especially in rugged conditions or off-road driving.</li>
                        <li>Easy Maintenance: Cleaning rubberized surfaces is straightforward, requiring minimal effort.</li>
                      </ul>
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

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content justify-contents-centre">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <p><strong>REQUEST FOR QUOTE</strong></p>
        </div>
        <div class="col-sm-2">
          <span class="close">&times;</span>
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
              <input type="checkbox" name="services[]" value="Sage Evolution ERP"> Sage Evolution ERP</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Software Development"> Software Development</br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Sage Evolution ERP"> GIS</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Software Development"> HR & Payroll</br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Sage Evolution ERP"> IT Support</br>
            </div>
            <div class="col-sm-6">
              <input type="checkbox" name="services[]" value="Software Development"> Reporting</br>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="gap-20"></div>
      <input type="text" name="comment" placeholder="Comment" required>
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
