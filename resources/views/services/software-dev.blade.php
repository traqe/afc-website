@extends('services.header')

@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/banner/banner4.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">SOFTWARE DEVELOPMENT</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SOFTWARE-DEVELOPMENT</li>
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
                            <li class="active" id="remodel" onclick="customApps()"><a>Custom Made Applications</a></li>
                            <li class=" " id="web_design_active" onclick="websiteDesign()"><a>Website Design</a></li>
                            <li class=" " id="web_hosting_active" onclick="websiteHosting()"><a>Web Hosting & Registration</a></li>
                            <li class=" " id="housing_care_system_active" onclick="housingCare()"><a>Housing Care System</a></li>
                            <li class=" " id="schools_management_system_active" onclick="schoolsManagement()"><a>Schools Management System</a></li>
                            <!--<li class=" " id="custom_emails_active" onclick="customEmails()"><a>Custom Company Emails</a></li>-->
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Olimem has to be the best software development agencies you will come across, our service is top notch.
                            </div>

                            <div class="quote-item-footer">
                                <img style="height: 70pt; width: 120%;" loading="lazy" class="testimonial-thumb" src="{{ asset('public') }}/img/services/software-hod.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Arnold M. Sibanda</h3>
                                    <span class="quote-subtext">Head of Department. Software Development</span>
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
                            <h2 class="column-title mrt-0">Custom Made Applications</h2>
                            <p>We design , create and deploy tailor-made software applications
                                for specific users. For instance, many schools, healthcare providers and businesses can enquire from us,
                                to create for them, their own custom portals for students, patients and employees alike, to be used for a variety of purposes.
                                Some of your best applications include: <strong>Housing Care System, School Management System, Hospital Management System</strong> among others.</p>
                            <p>Many businesses need specific software solutions to successfully deliver services to their customers. Custom software development creates applications
                                specially designed to meet the specific requirements of these organizations and users. Through working with us, we get to produce for you,
                                a unique solution that belongs to your business only, a personalized solution that satisfies you and comes with security, integration,flexibility and reliability. </p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/software-computer.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/software-housing.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/software-olimem dev.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/software-web development.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/software-web design2.jpg" alt="project-slider-image" />
                        </div>
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">What Makes Us Different</h3>

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
                            <h3 class="column-title-small">You Should Know</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What are the various categories of software?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <strong>System software</strong> e.g. operating systems, compilers, drivers,
                                            <strong>Networking and web development software</strong> offers the necessary functionality for computers to communicate with one another and with data storage facilities.
                                            <strong>Embedded Software</strong> Software used in instrumentation and control applications.
                                            <strong>Artificial Intelligence Software</strong> Expert systems that have a learning ability,
                                            <strong>Scientific software</strong> These support a scientific or engineering user's requirements for performing enterprise-specific tasks.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Advantages of custom made applications?
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
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Why is hosting important to my website?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Your website hosting server stores all of your website’s goodies, which makes it a valuable asset.
                                            If your hosting server is down or running slowly, so is your website,
                                            which will create a poor user experience and could drive away potential business.
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
                                    <!--<a class="btn btn-primary" href="#">Get a Quote</a>-->

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

    <!-- website design description -->
    <div hidden class="col-md-12" id="website_design">
        <h2 class="column-title mrt-0">Website Design</h2>
        <p>We encompass many different skills and disciplines in the production and maintenance of websites.
            The different areas of web design include web graphic design; user interface design (UI design); including standardised code and proprietary software;
            user experience design (UX design); and search engine optimization. We develop standardized websites according to your needs, from static websites to dynamic web apps.
            We have designed static websites for companies such as <strong>Gidz-Mart</strong> among many others</p>
        <p>A website for your company is beneficial: It builds creditability; simple to set up and mantain; improvement on customer service e.t.c. Contact us for any website design you elicitate: We provide the best solution.</p>
    </div>

    <!-- website hosting description -->
    <div hidden class="col-md-12" id="website_hosting">
        <h2 class="column-title mrt-0">Website Hosting & Registration</h2>
        <p>
            We offer internet hosting services for clients who want to host their websites online. We provide facilities required for you to create and mantain a site to make it easily accessible
            on the World Wide Web. Adjacent to web hosting, we offer website registration, so you can register your website in the domain name system and offer emails that suit your company's naming convention for more professionalism.
        </p>
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
    <div hidden class="col-md-12" id="custom_apps">
        <h2 class="column-title mrt-0">Custom Made Applications</h2>
        <p>We design , create and deploy tailor-made software applications
            for specific users. For instance, many schools, healthcare providers and businesses can enquire from us,
            to create for them, their own custom portals for students, patients and employees alike, to be used for a variety of purposes.
            Some of your best applications include: <strong>Housing Care System, School Management System, Hospital Management System</strong> among others.</p>
        <p>Many businesses need specific software solutions to successfully deliver services to their customers. Custom software development creates applications
            specially designed to meet the specific requirements of these organizations and users. Through working with us, we get to produce for you,
            a unique solution that belongs to your business only, a personalized solution that satisfies you and comes with security, integration,flexibility and reliability. </p>
    </div>

    <!-- housing care system -->
    <div hidden class="col-md-12" id="housing_care_system">
        <h2 class="column-title mrt-0">Housing Care System</h2>
        <p>
            OLIMEM Housing Care Management System is a powerful and flexible IT solution that brings all aspects of
            planning and housing operations in one common environment, giving Local Authorities the ability to
            logically and effectually manage their housing procedures. It is a desktop application that accomodates unlimited users; has favoured system requirements; GIS integration and integration with other accounting software.
        </p>
        <p>
            It has the following <strong>modules</strong>
        <ul>
            <li>Core Module &RightArrow; consists of the following submodules: <ul>
                    <div class="gap-20"></div>
                    <li>Stand Repossessions</li>
                    <li>Lease Extensions</li>
                    <li>Stand Applications</li>
                    <li>Leases</li>
                    <li>Stand Allocations</li>
                    <li>Waiting List</li>
                    <div class="gap-20"></div>
                </ul>
            </li>
            <li>Costing Module - includes: Sitting; tacheometric survey; layout design; pegging and servicing etc.</li>
            <div class="gap-20"></div>
            <li>Cemetry - Management of cemetery data; registry of the deceased; no more deterioration of records and conversion of records into electronic.
            </li>
            <div class="gap-20"></div>
            <li>Registry</li>
            <li>SMS Platfrom</li>
        </ul>
        </p>
    </div>

    <!-- schools management system -->
    <div hidden class="col-md-12" id="schools_management_system">
        <h2 class="column-title mrt-0">Schools Management System</h2>
        <p>
            Is an IT solution that enables schools to effectively manage and monitor school activites in a systematic manner.
        </p>
        <p>
            This system comprises of the following modules: <br>
        <ul>
            <li>Core Module &RightArrow; consists of the following submodules: <ul>
                    <div class="gap-20"></div>
                    <li>Student's Profiles</li>
                    <li>Student's Transfers</li>
                    <li>Misbehaving Records</li>
                    <li>Fees Payment</li>
                    <li>Customized Reports</li>
                    <li>Financial Statements</li>
                    <li>Assets</li>
                    <li>Employee Management</li>
                    <div class="gap-20"></div>
                </ul>
            </li>
            <li>The Library Module - enables students to effectively control or manage all books in the library.</li>
            <li>The Hostel Management Module - For boarding schools and allows users to manage hostel operations. </li>
            <li>The Perfomance & Grading Module - Captures and records students' academic marks and evaluate students', teachers' and overall school perfomance</li>
        </ul>
        </p>
    </div>

</section><!-- Main container end -->

<!-- modal for get a quote/ get a request
required fields: select desired services - checkbox to select several services
                 client contact details - email; phone number
                 comment fields - to include specifics if possible
                 
-->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content justify-contents-centre">
        <span class="close">&times;</span>
        <p><strong>REQUEST FOR QUOTE</strong></p>
        <form action="postEmail" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email">
            <div class="gap-20"></div>
            <input type="text" name="phone" placeholder="Phone Number">
            <div class="gap-20"></div>
            <fieldset>
                <legend style="font-size: 15px; font-weight: bold;">Services</legend>
                <input type="checkbox" name="services[]" value="Sage Evolution ERP"> Sage Evolution ERP</br>
                <input type="checkbox" name="services[]" value="Software Development"> Software Development</br>
                <input type="checkbox" name="services[]" value="GIS"> GIS</br>
                <input type="checkbox" name="services[]" value="Payroll & HR"> Payroll & HR</br>
                <input type="checkbox" name="services[]" value="IT Support"> IT Support</br>
                <input type="checkbox" name="services[]" value="Reporting"> Reporting</br>
            </fieldset>
            <div class="gap-20"></div>
            <input type="text" name="comment" placeholder="Comment">
            <div class="gap-20"></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

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

    function schoolsManagement() {
        var new_t = document.getElementById("schools_management_system").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("housing_care_system_active").className = " ";
        document.getElementById("schools_management_system").className = "active";
    }
</script>
@endsection