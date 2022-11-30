@extends('services.header')

@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/banner/it-banner.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">INFORMATION TECHNOLOGY</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">INFORMATION TECHNOLOGY</li>
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
                        <ul class="nav service-menu">
                            <li class="active" id="remodel" onclick="customApps()"><a>Networking Solutions</a></li>
                            <li class=" " id="web_design_active" onclick="websiteDesign()"><a>Cloud Support</a></li>
                            <li class=" " id="web_hosting_active" onclick="websiteHosting()"><a>PC Maintenance & Repairs</a></li>
                            <li class=" " id="housing_care_system_active" onclick="housingCare()"><a>Software Installations</a></li>
                            <!--<li class=" " id="custom_emails_active" onclick="customEmails()"><a>Custom Company Emails</a></li>-->
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Information technology and business are becoming interwoven.
                                Nobody can talk meaningfully about one without talking about the other.
                            </div>

                            <div class="quote-item-footer">
                                <img style="height: 70pt; width: 120%;" loading="lazy" class="testimonial-thumb" src="{{ asset('public') }}/img/services/it-user.jpg" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Shalimba Mudenda</h3>
                                    <span class="quote-subtext">IT Consultant</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->

                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">
                    <div class="row">
                        <div class="col-md-12" id="build">
                            <h2 class="column-title mrt-0">Networking Solutions</h2>
                            <p>We monitor and maintain the computer systems and networks of an organization. We can install and configure the computer
                                systems of your company, diagnose hardware and software failures and offer our customers the best option to maintain
                                100% of their systems, either by phone, remote or in person where
                                IT Network Solutions covers each of the following areas with the greatest commitment and professionalism possible.</p>
                            <p>
                                Here at Olimem, our IT personnel can setup an efficient network for you, we have exemplary speed. We also have smooth file sharing for ease of back-up and rollback. Apart from these, we have phenomenal software and hardware sharing, security, scalability, and reliability.
                            </p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/it-server.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/it-cloud.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/it-repair.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/it-install.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/it-networking.jpg" alt="project-slider-image" />
                        </div>
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">What Makes Us Different</h3>

                            <p>
                                <strong>We are a company that:</strong>
                            <ul>
                                <li>Has highly trained consultants.</li>
                                <li>Has an analytical mindset in providing solutions.</li>
                                <li>Works well on tight deadlines to offer services in due time.</li>
                            </ul>
                            <strong>We also have a strong culture that’s compatible with your own company: <br></strong>
                            <ul>
                                <li>We actively listen to your queries and:</li>
                                <li>have a low employee turnover.</li>
                            </ul>
                            <br>
                            <strong>We aim to deliver consistent IT support</strong>
                            <br>
                            As a result, we offer:
                            <ul>
                                <li>Convenient solutions to your problem</li>
                                <li>Smooth ticket escalation</li>
                            </ul>
                            </p>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3 class="column-title-small">You Should Know</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Advantages of Cloud Computing
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Cost Saving and strategic edge</li>
                                                <li>High speed through use of super fast servers</li>
                                                <li>Easy back-up and restore of data</li>
                                                <li>Reliability and mobility</li>
                                                <li>Unlimited storage capacity</li>
                                                <li>Collaboration</li>
                                                <li>Quick deployment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What can the 'IT' department do for you?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            We focus on the application of business and technical expertise to enable organizations in the creation, management
                                            and optimization of or access to information and business processes.
                                            The IT services market can be segmented by the type of skills that are employed to deliver the service (design, build, run).
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
    <div hidden class="col-md-12" id="website_design">
        <h2 class="column-title mrt-0">Cloud Support</h2>
        <p><strong>So, you want to adopt the cloud for your business. But with so many choices out there, it can be an overwhelming process.</strong>
            We are proud to say that our cloud services meet these standards. Read on to find out how we are the solution to your cloud computing needs.
        </p>
        <p>We ensure the following expectations are met to provide for you the best cloud service provision:
        <ul>
            <li>Cost and Services</li>
            <li>Cloud Security</li>
            <li>Technical expertise and Customer Support</li>
            <li>Trust and Performance Guarantees</li>
            <li>Uptime Guarantees</li>
            <li>Abundance of cloud support tools you can utilise</li>
            <li>Ease of migration of data</li>
        </ul>
        In summary, if you desire some quality controlled cloud service and assurance of sustainability, come through to us here at Olimem Enterprise Solutions.
        </p>
    </div>

    <!-- PC Maintenance & Repairs -->
    <div hidden class="col-md-12" id="website_hosting">
        <h2 class="column-title mrt-0">PC Maintenance & Repairs</h2>
        <p>
            We practice the keeping of computers in a good state of repair. We clean up, fix and maintain hardware components to optimise a computer overall perfomance.
            We also take part in backup operations: we copy data and archive it securely so that in the event of failure, the data and systems may be reconstructed.
        </p>
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
    <div hidden class="col-md-12" id="custom_apps">
        <h2 class="column-title mrt-0">Networking Solutions</h2>
        <p>We monitor and maintain the computer systems and networks of an organization. We can install and configure the computer
            systems of your company, diagnose hardware and software failures and offer our customers the best option to maintain
            100% of their systems, either by phone, remote or in person where
            IT Network Solutions covers each of the following areas with the greatest commitment and professionalism possible.</p>
        <p>
            Here at Olimem, our IT personnel can setup an efficient network for you, we have exemplary speed. We also have smooth file sharing for ease of back-up and rollback. Apart from these, we have phenomenal software and hardware sharing, security, scalability, and reliability.
        </p>
    </div><!-- col end -->

    <!-- software installations -->
    <div hidden class="col-md-12" id="housing_care_system">
        <h2 class="column-title mrt-0">Software Installations</h2>
        <p>
            We provide a wide range of software installations such as:
        <ul>
            <li>Media-based software installations</li>
            <li>Web-based software installations</li>
            <li>Single executable (.exe) installations</li>
            <li>Windows installer installations</li>
        </ul>
        </p>
        <p>
            We offer the best methods of installation that give you error-free resolutions, efficient functioning of software applications and optimized perfomance.
        <ul>
            <li>Manual installations</li>
            <li>Using remote desktop with installation software</li>
            <li>Remote software management servers</li>
        </ul>
        </p>
    </div>
</section><!-- Main container end -->

<script>
    function websiteDesign() {
        var new_t = document.getElementById("website_design").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("housing_care_system_active").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("web_design_active").className = "active";
    }

    function websiteHosting() {
        var new_t = document.getElementById("website_hosting").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("housing_care_system_active").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("web_hosting_active").className = "active";

    }

    function customApps() {
        var new_t = document.getElementById("custom_apps").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("housing_care_system_active").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("remodel").className = "active";

    }

    function housingCare() {
        var new_t = document.getElementById("housing_care_system").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_apps").className = " ";
        document.getElementById("remodel").className = " ";
        document.getElementById("housing_care_system_active").className = "active";
    }
</script>
@endsection