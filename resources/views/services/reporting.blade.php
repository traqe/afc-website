@extends('services.header')

@section('content')

<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/banner/banner4.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">SAGE B.I REPORTING</h1>
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
                            <li class="active" id="what is it" onclick="intelligence()"><a>B.I REPORTING</a></li>
                            <li class=" " id="essentia_l" onclick="essential()"><a>ESSENTIAL REPORTS</a></li>
                            <li class=" " id="detaile_d" onclick="detailed()"><a>DETAILED REPORTS</a></li>
                            <li class=" " id="cas_h" onclick="cash_reports()"><a>CASH REPORTS</a></li>


                            <!--<li class=" " id="custom_emails_active" onclick="customEmails()"><a>Custom Company Emails</a></li>-->
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                            "Every accountant has something that works for them; Sage works for me. It puts me in the pulse of my clients’ businesses – and that’s where lasting relationships form."                            </div>

                            <div class="quote-item-footer">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">MUNASHE MARIMIRA</h3>
                                    <span class="quote-subtext">HOD, BI REPORTING</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->

                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">
                    <div class="row">
                        <div class="col-md-12" id="intro">
                            <h2 class="column-title mrt-0">WHAT IS BUSINESS INTELLIGENCE REPORTING</h2>
                            A flexible reporting and analytics solution built for Sage customers.It is a tool used to pull data across the entire SAGE system(any module)
                            into a single location so as to slice,dice and analyze the numbers. You can filter the report data and then export them in PDF or CSV format as
needed.
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                       

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/report/pic1.png" alt="project-slider-image" />
                        </div>

                       

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="{{ asset('public') }}/img/services/report/landing.png" alt="project-slider-image" />
                        </div>

                      
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">What Makes Us Different</h3>
           <p>our Bi intelligence  is informative and anayltic reports that can help the business to identify presents details of events, activities, individuals, or conditions.
            our software also helps solve problems, demonstrate relationships, or make recommendations within your organisation.
                            <ul
                             class="list-arrow">
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
                                                PURPOSE  OF REPORTING 
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Sage Intelligence for Accounting allows you to customise your financial accounting reports—so, 
                                                    you don't need to be an accountant to report on your finances.</li>
                                                    <li>Simply view your Profit and Loss report or Balance Sheet. 
                                                        Next time your bank manager asks for these reports, you'll have them on their desk in record time!</li>
                                                        <li>Drill-down directly to the details of transactions by clicking on a line in the report, if the reports are presented in detail</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                ATTRIBUTES OF REPORTING 
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <ul>
                                                <li>Real-time data.</li>
                                                <li>Track what matters</li>
                                                <li>Customized reports.</li>
                                                <li>Visualization</li>
                                                <li>Layout</li>
                                                
                                            </ul>
                                        </div>
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
    <div hidden class="col-md-12" id="essential_reports">
        <h2 class="column-title mrt-0">ESSENTIAL REPORTS</h2>
        <p>View the worth and performance of your business,such as:</p>
        <h4><li>The Profit and Loss report</h4></li>
        The Profit and Loss report shows the performance of your business over a 
        specified period of time. It shows the value for sales, direct expenses including cost of sales, 
        and overheads in the given period. It also shows the resulting gross and net profit or loss. When running the
         report, you can drill down on the values to see what transactions are included
         <h4><li>create the Balance Sheet report</h4></li>
         The balance sheet is a snapshot of the worth of your business from the day you started trading, up to the date you specify. It details your company's assets and liabilities.
          The balance sheet includes values for your:
<ul>
<li>Fixed assets</li>
<li>current assets</li>
<li>liabilities</li>
<li>equity</li>
         </ul>
<h4



    </div>

    <!-- website hosting description -->
    <div hidden class="col-md-12" id="detailed_reports">
        <h2 class="column-title mrt-0">DETAILED REPORTS</h2>
        View transaction reports for sales, expense, and ledger accounts such as:.
        <h4><li>PROFIT ANAYLSIS</h4></li>
        this is report that we offer so as to summarize your companies profit in a detailed manner.The summary report shows the net, cost, and profit amounts and the percentage of 
        the profit made for each transaction, as well as an overall total
        <h4><li>SALES REVENUE </h4></li>
         IT is a report that displays a list of items sold in a selected period or date range. The report shows the item type (stock, non-stock, or service), quantity
         (or hours for services) sold, net sale amount, cost amount, profit amount, and profit percentage of each item.

      
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
    <div hidden class="col-md-12" id="cash_reports">
        <h2 class="column-title mrt-0">CASH REPORTS </h2>
        <p>this report helps you to monitor the cash coming into and going out of your business, using the cash flow statements,however cash flow report statements help to estimate how much money your business will have, or need, at any point in the future, 
            helping you to plan ahead.</p>
            The values calculated for the cash flow statement are from payments and receipts already paid or received. The values on the forecast, are based on when payments and receipts are due to be paid or received.
    </div>
    <div hidden class="col-xl-8 col-lg-8">
                <div class="content-inner-page">
                    <div class="row">
                        <div class="col-md-12" id="intro2">
                            <h2 class="column-title mrt-0">WHAT IS BUSINESS INTELLIGENCE REPORTING</h2>
                            A flexible reporting and analytics solution built for Sage customers.It is a tool used to pull data across the entire SAGE system(any module)
                            into a single location so as to slice,dice and analyze the numbers. You can filter the report data and then export them in PDF or CSV format as
needed.
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

</section><!-- Main container end -->

<script>
    function intelligence() {
        var new_t = document.getElementById("intro").innerHTML;
        document.getElementById("intro").innerHTML = new_t;
        document.getElementById("essentia_l").className = " ";
        document.getElementById("detaile_d").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("what is it").className = "";
    }

    function essential() {
        var new_t = document.getElementById("essential_reports").innerHTML;
        document.getElementById("intro").innerHTML = new_t;
        document.getElementById("essentia_l").className = " ";
        document.getElementById("detaile_d").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("essentia_l").className = "active";
    }

    /*function customEmails() {
        var new_t = document.getElementById("custom_emails").innerHTML;
        document.getElementById("build").innerHTML = new_t;
        document.getElementById("remodel").className = " ";
        document.getElementById("web_design_active").className = " ";
        document.getElementById("web_hosting_active").className = " ";
        document.getElementById("custom_emails_active").className = "active";
    }*/

    

    function detailed() {
        var new_t = document.getElementById("detailed_reports").innerHTML;
        document.getElementById("intro").innerHTML = new_t;
        document.getElementById("essentia_l").className = " ";
        document.getElementById("detaile_d").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("detaile_d").className = "active";
    }
    function cash_reports() {
        var new_t = document.getElementById("cash_reports").innerHTML;
        document.getElementById("intro").innerHTML = new_t;
        document.getElementById("essentia_l").className = " ";
        document.getElementById("detaile_d").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("cas_h").className = "active";
    }
   
    function intelligence() {
        var new_t = document.getElementById("intro2").innerHTML;
        document.getElementById("intro").innerHTML = new_t;
        document.getElementById("essentia_l").className = " ";
        document.getElementById("detaile_d").className = " ";
        //document.getElementById("custom_emails_active").className = " ";
        document.getElementById("what is it ").className = "";
    }
</script>




@endsection