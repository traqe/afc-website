@extends('services.header')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(public/services/images/phr/pay3.webp)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading "hidden>
                  <h1 class="banner-title">PAYROLL AND HR</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item "><a href="#">Home</a></li>
                        <li class="breadcrumb-item "><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sage</li>
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
              <h3 class="widget-title">Solutions</h3>
              <ul class="nav service-menu">
                <li id="advanced" class="active"><a onclick="change_advanced()">Advanced Procurement</a></li>
                <li id="annuity" class=""><a onclick="change_annuity()">Annuity Billing</a></li>
                <li id="retail" class=""><a onclick="change_retail()">Retail Point of Sale</a></li>
                <li id="customer"><a onclick="change_customer()">CRM</a></li>
                <li id="fixed"><a onclick="change_fixed()">Fixed Assets</a></li>
                <li id="multi"><a onclick="change_multi()">Multi-Currency</a></li>
              </ul>
            </div><!-- Widget end -->
            <div class="widget">
              <div class="quote-item quote-border">
                <div class="quote-text-border">
                  To be or not to be that is the question
                </div>
  
                <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="public/services/images/clients/more.jpg" alt="HOD">
                  <div class="quote-item-info">
                    <h3 class="quote-author">Moreblessing Madondo</h3>
                    <span class="quote-subtext">HOD</span>
                  </div>
                </div>
              </div><!-- Quote item end -->
  
            </div><!-- Widget end -->
  
          </div><!-- Sidebar end -->
        </div><!-- Sidebar Col end -->
  
        <div class="col-xl-8 col-lg-8">
          <div class="content-inner-page">
  
            
  
            <div class="row" id="floating">
              <div class="col-md-12">
                <h2 class="column-title mrt-0">Advanced Procurement</h2>
                <p>One of the public sector's most stringently regulated and vigorously scrutinized industries is supply chain management. This necessitates the use of business software
                  that supports both operational functionality and legal compliance. The Sage 200 Evolution core smoothly integrates with the feature-rich add-on module known as Advanced Procurement. 
                  You can do things like draft and approve requisitions, get and assess quotes, and submit purchase orders with preferred vendors. </p>
               <p>By using this module, you can build trust with the many suppliers and players in the market. 
                 Analyze your supply chain and control the performance of your suppliers on a rotational basis, by industry, or according to predetermined supplier criteria. All motions are tracked against incidents thanks to Sage 200 Evolution CRM's complete integration.</p>
              </div><!-- col end -->
            </div><!-- 1st row end-->
  
            <div class="gap-40"></div>
  
            <div id="page-slider" class="page-slider">
              <div class="item">
                <img loading="lazy" class="img-fluid" src="public/services/images/slider-pages/sage_modules.jpg" alt="erp_benefits" />
              </div>
  
              <div class="item">
                <img loading="lazy" class="img-fluid" src="https://brilliantlink.co.za/wp-content/uploads/2020/02/0b906b8d-6c73-4e2d-8209-217657cb4317_theme4-carousel1.gif" alt="project-slider-image" />
              </div>
            </div><!-- Page slider end -->
  
            <div class="gap-40"></div>
  
            <div class="row">
              <div class="col-md-6">
                <h3 class="column-title-small">What Makes Us Different</h3>
  
                <p>Our successful piloting of the New National Chart of Accounts (IPSUS
                  compliant) at Zibagwe RDC has set us at par or beyond excellent in our field of both software provision and service
                  delivery.</p>
                <ul class="list-arrow">
                  <li>Saving Time to Deal with core matters of business</li>
                  <li>Cut costs without sacrificing service quality</li>
                  <li>Automate your day to day business routines </li>
                </ul>
              </div>
  
              <div class="col-md-6 mt-5 mt-md-0">
                <h3 class="column-title-small">You Should Know</h3>
  
                <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                          data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What are the System Requirements to run Sage?
                        </button>
                      </h2>
                    </div>
  
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                      data-parent="#construction-accordion">
                      <div class="card-body">
                        <ul>
                        <li>Recommended Single User: Dual Core 2.3 GHz/i5,6gb+ Ram </li>
                        <li>Recommended Server(11+ users): Dual Core 2.7 GHz/i7,32gb+ Ram </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What are add-on modules?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                      data-parent="#construction-accordion">
                      <div class="card-body">
                        Add on modules are modules that are available over and above the ‘core’ module purchased. More popular Add-On’s include Job Costing, Retail POS, Bills of Materials, Manufacturing, Serial Number Tracking, Lot Tracking & Advanced Procurement.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Why use Sage?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                      data-parent="#construction-accordion">
                      <div class="card-body">
                        The accounting software enables you to focus on what really matters and provides you with a streamlined accounting and management process. 
                        As a developer of accounting software packages, ERP software solutions and business management software, they have supported the growth of start-up, small, medium and large enterprises since 1989.
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
    <div class="row" id="annuity_billing" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">Annuity Billing</h2>
          <p>Sage 200 Evolution Annuity Billing offers repeating or recurring invoicing on a daily, weekly, monthly, or quarterly basis and integrates with both customers and inventory. 
            You can create templates for recurring invoices, specify contract durations, or just establish base amounts that will be billed to your clients on a regular basis. 
            Because it is a modular module, you can alter it to suit the unique needs of your company.</p>
          
        </div><!-- col end -->
      </div><!-- 1st row end-->
      <div class="row" id="advanced_proc" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">Advanced Procurement</h2>
          <p>One of the public sector's most stringently regulated and vigorously scrutinized industries is supply chain management. This necessitates the use of business software
             that supports both operational functionality and legal compliance. The Sage 200 Evolution core smoothly integrates with the feature-rich add-on module known as Advanced Procurement. 
             You can do things like draft and approve requisitions, get and assess quotes, and submit purchase orders with preferred vendors. </p>
          <p>By using this module, you can build trust with the many suppliers and players in the market. 
            Analyze your supply chain and control the performance of your suppliers on a rotational basis, by industry, or according to predetermined supplier criteria. All motions are tracked against incidents thanks to Sage 200 Evolution CRM's complete integration.</p>
        </div><!-- col end -->
      </div><!-- 1st row end-->
      <div class="row" id="retail_pos" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">Retail Point of Sale</h2>
          <p>Sage 200 Evolution Retail is a reliable, keyboard-driven application that's simple to use. Depending on user privileges or security profiles, the solution offers the ability to generate sales orders, invoices, and credit notes all from a single straightforward interface.
             It has been created for companies with significant retail volumes, several branch locations, and a need for branch retail independence and offline flexibility.</p>
          <ul>
            <li>Quotes, Orders, Invoices and Credit Note processing.</li>
            <li>Multiple payment methods (split tendering).</li>
            <li>Support for Windows printers and OPOS compliant POS printers, cash drawers and line-displays.</li>
            <li>Supervisor authorisation for unit price changes, discounts and Credit Notes</li>
          </ul>
        </div><!-- col end -->
      </div><!-- 1st row end-->
      <div class="row" id="crm" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">CRM</h2>
          <p>Sage 200 Evolution CRM has advanced the idea of conventional contact management by incorporating it into every aspect of the Sage 200 Evolution accounting platform. 
            This advancement has brought accounting software to a new logical level, enabling you to record not only financial data but also what are known as business activities. 
            Instead of just looking at the statistics, activity data is combined with the figures and shown simultaneously, giving you a complete picture of your company. With the help of this integration, you can manage not just your financial condition but also your interactions with clients, suppliers, and staff. 
            In Sage 200 Evolution CRM, an incident is defined as any problem that occurs in a company and is significant enough to be tracked.</p>
          
        </div><!-- col end -->
      </div><!-- 1st row end-->
      <div class="row" id="fixed_assets" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">Fixed Assets</h2>
          <p>Fixed assets are tangible possessions you buy for the purpose of operating your business, such as desks, computers, vehicles, and machinery. 
             Managing fixed assets for a firm can be tiresome and time-consuming. 
            Assets deteriorate or become obsolete as a result of use. Depreciation can be legitimately expensed in your accounts for tax purposes. This is all taken care of for you by the Sage fixed asset tracking software module.
            Managing your fixed assets includes the following tasks:</p>
            <ul>
              <li>Tracking each asset’s value, both from a tax and an accounting point of view</li>
              <li>epreciating assets correctly using an appropriate depreciation rate and method</li>
              <li>Updating the replacement values of your fixed assets for insurance purposes</li>
              <li>Maintaining an accurate fixed assets register which records information such as: date of purchase; date of disposal; purchase price; accumulated depreciation and net book value</li>
            </ul>
          
        </div><!-- col end -->
      </div><!-- 1st row end-->
      <div class="row" id="multi_currency" hidden>
        <div class="col-md-12">
            <h2 class="column-title mrt-0">Multi Currency</h2>
          <p>You can handle customer and supplier transactions in their native currencies using Sage 200 Evolution Multi-Currency. 
            You may keep track of international exchange rates as well as customer and supplier values in both the foreign and local currencies. Anytime, you can view your balances and transactions in either currency. 
            For each currency, you can keep distinct purchase and sell rates. In order to handle transactions at earlier dates using the most accurate conversion rate, Sage 200 Evolution Multi-Currency keeps track of historical exchange rates. 
            Sage 200 Evolution uses the current currency rate to determine any foreign exchange profit or loss, which is immediately reported, as you process customer receipts or supplier payments. 
            Sage 200 Evolution Multi-Currency also enables you to:</p>
            <ul>
              <li>Process and print customer and supplier sales and purchase documents in foreign currency or zwl.</li>
              <li>Print customer and supplier statements, age analysis and transaction reports using foreign currency or zwl.</li>
              <li>Process foreign currency cashbook transactions.</li>
            </ul>
          
        </div><!-- col end -->
      </div><!-- 1st row end-->
  </section><!-- Main container end -->

  <script>
    function change_advanced(){
        var new_t = document.getElementById("advanced_proc").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("annuity").className = " ";
        document.getElementById("retail").className = " ";
        document.getElementById("fixed").className = " ";
        document.getElementById("multi").className = " ";
        document.getElementById("customer").className = " ";
        document.getElementById("advanced").className= "active";
    }

    function change_annuity(){
        var new_t = document.getElementById("annuity_billing").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("advanced").className = " ";
        document.getElementById("retail").className = " ";
        document.getElementById("fixed").className = " ";
        document.getElementById("multi").className = " ";
        document.getElementById("annuity").className= "active";
    }
    function change_retail(){
        var new_t = document.getElementById("retail_pos").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("annuity").className = " ";
        document.getElementById("advanced").className = " ";
        document.getElementById("fixed").className = " ";
        document.getElementById("multi").className = " ";
        document.getElementById("customer").className = " ";
        document.getElementById("retail").className= "active";
    }
    function change_customer(){
        var new_t = document.getElementById("crm").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("retail").className = " ";
        document.getElementById("annuity").className = " ";
        document.getElementById("fixed").className = " ";
        document.getElementById("multi").className = " ";
        document.getElementById("advanced").className = " ";
        document.getElementById("customer").className= "active";
    }
    function change_fixed(){
        var new_t = document.getElementById("fixed_assets").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("retail").className = " ";
        document.getElementById("annuity").className = " ";
        document.getElementById("customer").className = " ";
        document.getElementById("multi").className = " ";
        document.getElementById("advanced").className = " ";
        document.getElementById("fixed").className= "active";
    }
    function change_multi(){
        var new_t = document.getElementById("multi_currency").innerHTML;
        document.getElementById("floating").innerHTML = new_t;
        document.getElementById("fixed").className = " ";
        document.getElementById("annuity").className = " ";
        document.getElementById("fixed").className = " ";
        document.getElementById("customer").className = " ";
        document.getElementById("advanced").className = " ";
        document.getElementById("multi").className= "active";
    }
    </script>
  @endsection