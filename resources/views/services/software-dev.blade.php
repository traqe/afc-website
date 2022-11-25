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
                        <ul class="nav service-menu">
                            <li class="active" id="remodel" onclick="customApps()"><a>Custom Made Applications</a></li>
                            <li class=" " id="web_design_active" onclick="websiteDesign()"><a>Website Design</a></li>
                            <li class=" " id="web_hosting_active" onclick="websiteHosting()"><a>Web Hosting & Registration</a></li>
                            <li class=" " id="custom_emails_active" onclick="customEmails()"><a>Custom Company Emails</a></li>
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            </div>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CEO, First Choice Group</span>
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
                            <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
                            <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
                                tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
                                iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="images/projects/project1.jpg" alt="project-slider-image" />
                        </div>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="images/projects/project2.jpg" alt="project-slider-image" />
                        </div>
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">What Makes Us Different</h3>

                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat
                                tincidunt nunc posuere.</p>
                            <ul class="list-arrow">
                                <li>Partnership Strategy tristique eleifend.</li>
                                <li>Opporutnity to work with amet elit a.</li>
                                <li>Saving Time to Deal with commodo iaculis.</li>
                                <li>Leadership skills to manage erat volutpat.</li>
                                <li>Cut cost without sacrificing dolore magna.</li>
                                <li>Automate your business elis tristique.</li>
                            </ul>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3 class="column-title-small">You Should Know</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Does the law require head protection on construction sites?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf
                                            moon officia aute, non cupidata
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What are the first aid requirements for sites?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.
                                            Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea
                                            com
                                            matat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What is an appointed person?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the
                                            industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                            and
                                            scrambled it to make a type specimen book.
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
        <h2 class="column-title mrt-0">Website Design</h2>
        <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
        <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
    </div>

    <!-- website hosting description -->
    <div hidden class="col-md-12" id="website_hosting">
        <h2 class="column-title mrt-0">Website Hosting & Registration</h2>
        <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
        <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
    </div>

    <!-- custom emails -->
    <div hidden class="col-md-12" id="custom_emails">
        <h2 class="column-title mrt-0">Custom Company Emails</h2>
        <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
        <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
    </div>

    <!-- custom made applications -->
    <div hidden class="col-md-12" id="custom_apps">
        <h2 class="column-title mrt-0">Custom Made Applications</h2>
        <p>We design , create and deploy tailor-made software applications for specific users. For instance, many schools, healthcare providers and businesses can enquire from us, to create for them, their own custom portals for studetns, patients and employees alike, to be used for a variety of purposes.</p>
        <p>Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. , nec
            tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo
            iaculis ligula, ac dapibus quam ornare ut. Praesent ac hendrerit sem, et tempus sem</p>
    </div>

</section><!-- Main container end -->

<script>
    active_tags = ['website_design_active', 'web_hosting_active', 'custom_emails_active', 'remodel'];

    function websiteDesign() {
        var new_t = document.getElementById("website_design").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_emails_active").className = " ";
        document.getElementById("web_design_active").className = "active";
    }

    function websiteHosting() {
        var new_t = document.getElementById("website_hosting").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("custom_emails_active").className = " ";
        document.getElementById("web_hosting_active").className = "active";
    }

    function customEmails() {
        var new_t = document.getElementById("custom_emails").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_emails_active").className = "active";
    }

    function customApps() {
        var new_t = document.getElementById("custom_apps").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_emails_active").className = " ";
        document.getElementById("remodel").className = "active";
    }
</script>
@endsection