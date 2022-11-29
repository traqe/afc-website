@extends('services.header')

@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(public/img/gis/gis2.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">GEOGRAPHICAL INFORMATION SYSTEMS</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Services</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">Solutions</h3>
                        <ul class="nav service-menu bg-success">
                            <li class=" " id="summary" onclick="what_is_it()"><a>WHAT IS IT?</a></li>
                            <li class=" " id="sensing" onclick="remote_sensing()"><a>REMOTE SENSING</a></li>
                            <li class=" " id="cart" onclick="cartograph_y()"><a>CARTOGRAPHY</a></li>
                            <li class=" " id="register" onclick="sales()"><a>DRONE SALES AND REGISTRATION</a></li>

                            <!--<li class=" " id="custom_emails_active" onclick="customEmails()"><a>Custom Company Emails</a></li>-->
                        </ul>
                    </div><!-- Widget end -->
                    

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            
                    <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">
                    <div class="row">
                        <div class="col-md-12" id="about">
                            <h2 class="column-title mrt-0 text-success">WHAT IS GIS AND WHAT DO WE OFFER</h2>
                            <h5><p>G-I-Systems gather, manage & analyze data. We analyze spatial location and organize layers of information into visualizations using maps and 3D scenes revealing patterns, relationships,& situations to users to make smarter decisions. 
                                We serve the Local Government, Mining, Engineering, Telecomunications, Wildlife & Transport industries. 
                                We also sell top quality Unmanned Aerial Vehicles (Drones)</p></h5>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

<div id="page-slider" class="page-slider">
    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/gis2.jpg" alt="project-slider-image" />
    </div>

    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/gis agric.png" alt="project-slider-image" />
    </div>
    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/RS2.jpg" alt="project-slider-image" />
    </div>
    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/gis agric4.jpg" alt="project-slider-image" />
    </div>

    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/gis2.jpg" alt="project-slider-image" />
    </div>
    
    <div class="item">
        <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/gis/cart.jpg" alt="project-slider-image" />
    </div>

    
</div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3  class="column-title-small">What Makes Us Different</h3>

                            <p>For state-of the art responsive websites, built to reflect your business in the best light possible. We also offer assistance
                                with web hosting and maintenace as well as tailored business e-mails. We are able to design applications to your specifications no matter your business. </p>
                            <ul class="list-arrow">
                                <li>Olimem Enterprise Solutions takes responsibility.</li>
                                <li>You work with competent, business-oriented people.</li>
                                <li>We are a partner, not just a service provider.</li>
                                <li>We have a growth mindset.</li>
                                <li>Team-playing is part of our values, we deliver on time.</li>
                                <li>A 5-star development team experience.</li>
                            </ul>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3  class="column-title-small">You Should Know</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class ="btn btn-block text-left text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                USES OF GIS ?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <p>GIS MAPPING </P>
                                            <p>URBAN PLANNING</P>
                                            <p>ENVIRONMENTAL ANAYLSIS </P>
                                            <p>TRANSPORTATION OPTIMIZATION </P>
                                            <p>GIS MAPPING </P>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div  class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Advantages of USING GIS?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Unique Solution that Belongs to Your Business Only</li>
                                                <li>Personalized Solution</li>
                                                <li>Customer Satisfaction</li>
                                                <li>Security</li>
                                                <li>Integration</li>
                                                <li>Flexibility & Scalability</li>
                                                <li>Reliability</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                BENEFITS OF USING GIS TO YOUR PROJECT ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#construction-accordion">
                                        <div class="card-body">
                                          <p>enable easy decision making</p>
                                          <p>access centrally located</p>
                                          <p>easily organize information</P>
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
                                    <a class="btn btn-primary" href="#">Get a Quote</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->

                </div><!-- Content inner end -->
            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->

    <!-- website design description -->
    <div  class="col-md-12" id="remote">
        <h2 class="column-title mrt-0 text-success">REMOTE SENSING</h2>
        <h5><p> Remote sensing is the process of detecting and monitoring the physical 
            characteristics of an area by measuring its reflected and emitted radiation at a 
            distance (typically from satellite or aircraft). Special cameras collect remotely 
            sensed images, which help researchers "sense" things about the Earth.  some of the  uses of remotes senses are:</p></h5>

        <p><strong>-analysis and visulizations of particular sizes</strong></p>
        <p><strong>-sustainable planning and development</strong></p>
        <p><strong>-infrastructure  safety</strong></p>
        <p><strong>-precision agriculture</strong></p>
    
    </div>
    <div  class="col-md-12" id="sales_registration">
        <h2 class="column-title mrt-0 text-success">DRONE REGISTRATION AND SALES </h2>
        WE SELL GIS EQUIPMENTS AND OFFER DRONE REGISTRATION (consultancy)
    </div>


    <!-- cartography description -->
    <div hidden class="col-md-12" id="cartography">
        <h2 class="column-title mrt-0 text-success">CARTOGRAPHY </h2>
        <h5><p>
        Maps and mapping are the subject of the art and science known as cartography—creating two-dimensional representations
         of our three-dimensional Earth. These representations were once hand-drawn with paper and pen.The capabilities of a computer system are invaluable to map users, who often need to know much more about an area than can be reproduced on paper, no matter how large that piece of paper is or how small the annotation is. 
         Maps stored on a computer can be queried, analyzed, and updated quickly
</h5></p>
        <!-- <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p> -->
    </div>

    <!-- custom emails
    <div hidden class="col-md-12" id="custom_emails">
        <h2 class="column-title mrt-0">Custom Company Emails</h2>
        <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
        <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
    </div>
-->

    <!-- custom made applications -->
   

</section><!-- Main container end -->

<script>
      function what_is_it() {
        var new_t = document.getElementById("about").innerHTML;
        document.getElementById("about").innerHTML = new_t;
        document.getElementById("remote_sensing").className = " ";
        document.getElementById("cartography").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("summary").className = "active";
      }
    function remote_sensing() {
        var new_t = document.getElementById("remote").innerHTML;
        document.getElementById("about").innerHTML = new_t;
        document.getElementById("remote_sensing").className = " ";
        document.getElementById("cartography").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("sensing").className = "active";
    }

    function cartograph_y() {
        var new_t = document.getElementById("cartography").innerHTML;
        document.getElementById("about").innerHTML = new_t;
        document.getElementById("remote_sensing").className = " ";
        document.getElementById("cartography").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("cart").className = "";
    }
    function sales() {
        var new_t = document.getElementById("sales_registration").innerHTML;
        document.getElementById("about").innerHTML = new_t;
        document.getElementById("remote_sensing").className = " ";
        document.getElementById("cartography").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("register").className = "";
    }

    /*function customEmails() {
        var new_t = document.getElementById("custom_emails").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_emails_active").className = "active";
    }*/

    

    
</script>

@endsection