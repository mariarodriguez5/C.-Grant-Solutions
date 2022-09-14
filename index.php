<?php 
    if(isset($_POST['submit'])){
        $to = "jlatham247@yahoo.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $business = $_POST['business'];
        $subject = "Form submission";
        $message = "Name: " . $name . "\n" . "Business: " . $business . "\n" . "Email: " . $from . "\n\n" . "Message: " . $_POST['message'];
        $headers = "From:" . $from;

        mail($to,$subject,$message,$headers);
        echo '<script>alert("Mail Sent. Thank you, we will contact you shortly.")</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Grant Writing and Training & Research for Funding" />
    <meta name="author" content="Capital Grant Solutions" />
    <title>
        Capital Grant Solutions | Grant Writing and Training | Research for Funding
    </title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css" />
    <!-- Bootstrap + Rubic main styles -->
    <link rel="stylesheet" href="assets/css/rubic.css" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix"
        data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="assets/imgs/logo.png" height="70" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#memberships">Memberships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header d-flex justify-content-center" id="home">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-7">
                    <div class="header-content">
                        <h3 class="header-title">
                            <strong class="text-primary">A simple way to apply for grants</strong>
                        </h3>
                        <h4 class="header-subtitle">
                            Real People, Real Answers, Really Quick!
                        </h4>
                        <p>
                            Let us know the details of your project or mission. We'll get in
                            touch with you in 24-48 hours and set up a FREE face-to-face or
                            online consultation at your earliest convenience. We look
                            forward to hearing from you!
                        </p>
                        <a rel="noopener" class="btn btn-outline-light btn-flat" data-ux-btn="external" data-ux="ButtonExternal" href="https://wa.me/14357314118" target="_blank" data-aid="CONTACT_INFO_WHATS_APP_REND" data-tccl="ux2.contact.whatsapp.click,click" icon="whatsApp" data-typography="false" class="x-el x-el-a c1-6w c1-bn c1-c c1-6o c1-bo c1-bp c1-8x c1-6z c1-15 c1-3p c1-3l c1-3m c1-3n c1-3o c1-bq c1-br c1-bs c1-bt c1-bu c1-bv c1-2v c1-6y c1-16 c1-1n c1-2u c1-1j c1-1i c1-s c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-1 c1-2 c1-bw c1-bx c1-by c1-bz c1-c0 c1-c1 c1-7c c1-c2 c1-c3 c1-c4 c1-c5"><span data-ux="Element" class="x-el x-el-span c1-c c1-bo c1-s c1-c6 c1-1z c1-2s c1-2t"><span data-ux="Element" class="x-el x-el-span c1-c7 c1-c8 c1-6a c1-c9 c1-6c c1-ca c1-cb c1-cc c1-cd c1-bo c1-c"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" class="x-el x-el-svg c1-6n c1-37 c1-38 c1-bo c1-c"><svg viewBox="0 0 496 497"><defs><linearGradient id="a" x1="247.32" x2="247.32" y1="446.09" y2="39.9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient><linearGradient id="b" x1="247.32" x2="247.32" y1="453.37" y2="32.61" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f9f9f9"></stop><stop offset="1" stop-color="#fff"></stop></linearGradient></defs><path d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"></path><path fill="url(#a)" d="M45.13 446.09l28.57-104.3a200.82 200.82 0 0 1-26.88-100.62c0-111 90.36-201.27 201.34-201.27A201.35 201.35 0 0 1 449.5 241.32c0 111-90.37 201.28-201.33 201.28h-.09a201.31 201.31 0 0 1-96.21-24.49z"></path><path fill="url(#b)" d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"></path><path fill="#fff" d="M196.07 153.94c-3.91-8.68-8-8.85-11.73-9-3-.14-6.51-.13-10-.13a19.15 19.15 0 0 0-13.89 6.52c-4.78 5.22-18.24 17.82-18.24 43.46s18.67 50.42 21.28 53.9 36.05 57.77 89 78.66c44 17.36 53 13.91 62.53 13s30.83-12.61 35.18-24.78 4.34-22.59 3-24.77-4.78-3.48-10-6.08-30.83-15.22-35.61-16.95-8.25-2.61-11.73 2.61-13.45 16.94-16.5 20.42-6.08 3.92-11.29 1.31-22-8.11-41.9-25.86c-15.5-13.82-26-30.87-29-36.09s-.32-8 2.29-10.63c2.34-2.34 5.21-6.09 7.82-9.13s3.47-5.21 5.21-8.69.87-6.52-.44-9.13-11.35-28.34-15.98-38.64z"></path></svg></svg></span><span data-ux="Element" class="x-el x-el-span iconText c1-c c1-bo c1-5y c1-1n c1-ce c1-1z c1-2s c1-2t">Message us on WhatsApp</span></span></a>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block" >
                    <form class="header-form" method="post" enctype="multipart/form-data" action="">
                        <div class="head">Get in Touch.</div>
                        <div class="body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name*" name="name" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*" name="email" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Business Url or name" name="business" />
                            </div>
                            <div class="form-group">
                                <textarea rows="4"
                                    placeholder="Tell us about the areas of your business, school, nonprofit, or research that need support."
                                    class="form-control"
                                    name="message"
                                    required>
                                </textarea>
                            </div>
                        </div>
                        <div class="footer">
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Get Started"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="social-wrapper" id="features">
        <div class="container">
            <div class="social-txt">
                <h6 class="title">PROUD MEMBERS OF THE GRANT PROFESSIONAL ASSOCIATION!</h6>
                <p class="subtitle"></p>
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/CapitalGrantSolutions/" class="link" target="_blank"><i
                        class="ti-facebook"></i></a>
                <a href="https://www.linkedin.com/company/capital-grant-solutions/about/?viewAsMember=true" class="link"
                    target="_blank"><i class="ti-linkedin"></i></a>
                <a href="https://www.youtube.com/watch?v=GdciquRm93Q" class="link" target="_blank"><i
                        class="ti-youtube"></i></a>
                <a href="tel:+13853120118" class="link"><i class="ti-mobile"></i><span>+1 (385) 312-0118</span></a>
                <a href="javascript:void(0)" class="link"></a>
                <a href="javascript:void(0)" class="link"></a>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 align-self-center mb-4 mb-md-0">
                    <img src="https://img1.wsimg.com/isteam/ip/8af66628-172d-4c0e-88ec-ea0706b91207/blob-0003.png/:/cr=t:16.67%25,l:0%25,w:66.67%25,h:66.67%25/rs=w:1000,h:1000,cg:true,m" alt="" class="shadow w-100" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <h6 class="title">We provide:</h6>
                    <ul class="list-unstyled mt-4">
                        <li class="media">
                            <div class="circle-40 mr-3 mt-1"><i class="ti-gift"></i></div>
                            <div class="media-body">
                                <h6 class="mb-2">Grant Writing and Training</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-40 mr-3 mt-1">
                                <i class="ti-face-smile"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-2">Research for Funding</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-40 mr-3 mt-1">
                                <i class="ti-microphone"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-2">Proposal Writing/RFPs</h6>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="pricing">
        <div class="container text-center mb-5">
            <small class="text-left">PRICING GUIDE:</small>
            <h6 class="display-4 has-line"> Our Services</h6>
            <p>
                All consultations are free! Depending on the project, we have flexible pricing options such as hourly rates, milestones, and fixed rates (i.e if you are interested in receiving a list of grant funding opportunities to apply to yourself).
            </p>
            <div class="row pt-5">
                
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="pricing-card">
                        <div class="head">Grant/Proposal Writing</div>
                        <div class="body">
                            <h1><small>Milestones, Flat, or Hourly Rate</small></h1>
                        </div>
                        <div class="content">
                            <img src="https://img1.wsimg.com/isteam/stock/11720/:/rs=w:360,h:270,cg:true,m/cr=w:360,h:270" alt="" class="shadow w-100" />
                            <br /><br />
                            <p>
                                The bulk of our work is drafting and submitting the grant
                                proposal/RFPs. This includes all preliminary research, project
                                scope, milestones, budget, submission, and post-award
                                follow-up.
                            </p>
                            <p>
                                Many think that big government grant will solve their problems
                                while they may indirectly complicate the liquidity and
                                stipulations of YOUR project; thus hindering your autonomous
                                potential and power to create lasting change! Contact us
                                below.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="pricing-card">
                        <div class="head">Funding Opportunity List</div>
                        <div class="body">
                            <h1><small>$150 Each</small></h1>
                        </div>
                        <div class="content">
                            <img src="assets/imgs/pexels-energepiccom-110473.jpeg" alt="" class="shadow w-100" />
                            <br /><br />
                            <p>
                                Want to write the grant yourself, but just need some help of where to look? We offer individual grant Opportunity lists that are specified to your project and organization. With access to a data base of over 40,000 public and private grant-funded opportunities, we can help you find what you are looking for. 
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="pricing-card">
                        <div class="head">Training</div>
                        <div class="body">
                            <h1><small>$</small>149</h1>
                        </div>
                        <div class="content">
                            <img src="https://img1.wsimg.com/isteam/stock/Rr9d93w/:/rs=w:360,h:270,cg:true,m/cr=w:360,h:270" alt="" class="shadow w-100" />
                            <br /><br />
                            <p>
                                If you need a mentor to coach you through the grant writing
                                process, you've found the best in the industry! Our
                                servant-leaders equip employees, staff, and volunteers with
                                the valuable skills required to draft and submit award-winning
                                grant proposals/RFPs.
                            </p>
                            <p>
                                Online, virtual, and face-to-face training available.
                                Tools/templates can be downloaded for FREE.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="pricing-card">
                        <div class="head">Strategic Analysis</div>
                        <div class="body">
                            <h1><small>Varies</small></h1>
                        </div>
                        <div class="content">
                            <img src="https://img1.wsimg.com/isteam/stock/4403/:/rs=w:360,h:270,cg:true,m/cr=w:360,h:270" alt="" class="shadow w-100" />
                            <br /><br />
                            <p>
                                Whether you're a nonprofit, new venture, researcher, or
                                business, our experienced consultants can deliver an
                                actionable GAP analysis. Our analysis may cover:
                            </p>
                            <ul>
                                <li>Organizational structuring</li>
                                <li>Funding options and networks</li>
                                <li>Corporate Social Responsibility</li>
                                <li>Tool kits and financial modeling/budget planning</li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h6 class="display-4 has-line">Other Services</h6>
            <p>
                We fulfill a variety of functions when it comes to your business or nonprofit/school. Choose the best
                function for you, or inquire for additional help and support. If it's unique, we can critique!
            </p>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="pricing-card">
                        <div class="head">Editing</div>
                        <div class="body">
                            <h1><small>Per word</small></h1>
                        </div>
                        <div class="content">
                            <img src="https://img1.wsimg.com/isteam/stock/38659/:/rs=w:360,h:270,cg:true,m/cr=w:360,h:270" alt="" class="shadow w-100" />
                            <br /><br />
                            <p>
                                Perhaps you need a fresh pair of eyes to look over a large manual, handbook, report, or
                                article that will be sent to your clients or customers. We offer a rate of $0.03 to
                                $0.05 cents per word depending on the size and deadline.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section" id="about">
        <div class="container">
            <h6 class="display-4 has-line text-center">About Us</h6>
            <div class="row justify-content-around">
                <div class="col-lg-6">
                    <div class="tabs-container">
                        <ul class="nav tab-nav" id="pills-tab">
                            <li class="item">
                                <a class="link active" id="pills-goal-tab" data-toggle="pill" href="#pills-goal"
                                    aria-selected="true">Goal</a>
                            </li>
                            <li class="item">
                                <a class="link" id="pills-mission-tab" data-toggle="pill" href="#pills-mission"
                                    aria-selected="false">Mission</a>
                            </li>
                            <li class="item">
                                <a class="link" id="pills-target-tab" data-toggle="pill" href="#pills-target"
                                    aria-selected="false">Target</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-goal">
                                <h4 class="title">Our Goal</h4>
                                <p>
                                    Capital Grant Solution's goal is to move your organization forward while creating lasting partnerships, outstanding customer service, and repeat business for years to come. Capital Grant Solutions offers:
                                <ul>
                                    <li>Milestone Guarantees.</li>
                                    <li>Flexible deadlines.</li>
                                    <li>Extended hours of operation and support.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-mission">
                                <h4 class="title">Our Mission: "Provide Simple Service With Textual Tenacity"</h4>
                                <p>
                                    We add value and insight to any business, nonprofit, school or university concerning
                                    the grant process. We strive to serve those who innovate, create, and make a
                                    difference in the world. Concerning the grant writing process, Capital Grant
                                    Solutions handles:
                                <ul>
                                    <li>Research for Grant Funding Opportunities.</li>
                                    <li>Letters of Inquiry (LOI).</li>
                                    <li>Writing Grant Proposals (Private, State, Federal).</li>
                                    <li>Pre/Post award follow-up.</li>
                                    <li>Fundraising and donor strategies.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="pills-target">
                                <h4 class="title">Who We Serve</h4>
                                <p>
                                    Small businesses, nonprofits, research institutions, k-12, universities, local municipalities, county, and state governments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block align-self-center">
                    <div class="video-container">
                        <iframe class="responsive-iframe " src="https://www.youtube.com/embed/GdciquRm93Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="memberships">
        <div class="container">
            <h6 class="display-4 has-line text-center">Memberships</h6>
            <div class="row justify-content-between">
                <div class="col-md-5 mt-4 mt-md-0">
                    <img src="https://isteam.wsimg.com/ip/8af66628-172d-4c0e-88ec-ea0706b91207/cg2.png/:/cr=t:30.47%25,l:22.38%25,w:55.24%25,h:39.06%25/rs=w:600,h:300,cg:true,m/qt=q:88" alt="" class="shadow w-100" />
                </div>
                <div class="col-md-6 col-lg-5 align-self-center">
                    <h6 class="title">Capital Grant Solutions' Network: Join the Elites</h6>
                    <p>
                        Our network is comprised of selfless servants, industry experts, and university professors from
                        Harvard, Georgetown, Michigan State, Duke, Pitt, ASU, Florida International University and more.
                        Others are physicians, project management professionals, software engineers, and philanthropists
                        with decades of experience. They're happy to answer high context questions related to your area
                        of expertise.
                    </p>
                    <p>
                        The Capital Grant Solutions' Network is unlike any other grant firm network in the country. Our
                        headquarters are based in Utah, but our reach is global and growing fast. Join our network of
                        experts and receive the benefits of our connections as well as specific project newsletters,
                        grant alerts, deals/promotions, conference updates, certifications and more!
                    </p>
                    <p>
                        The benefits of our memberships differ from level to level. <br>Call <a href="tel:+13853120118">
                            385-312-0118 </a> for more details.
                    </p>
                    <p>
                        <strong>Bronze Membership (Annually):</strong>
                    <ul>
                        <li>Single Member $199</li>
                        <li>Organization $399</li>
                    </ul>
                    </p>
                    <p>
                        <strong>Membership (Annually):</strong>
                    <ul>
                        <li>Single Member $499</li>
                        <li>Organization $699</li>
                    </ul>
                    </p>
                    <p>
                        <strong>Gold Membership (Annually):</strong>
                    <ul>
                        <li>Single Member $799</li>
                        <li>Organization $1099</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section">
      <div class="container text-center">
        <h6 class="display-4 has-line">WHY THIS IS AWESOME</h6>
        <p class="mb-5 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>

        <div class="row">
          <div class="col-lg-4">
            <div class="circle-100 mb-3"><i class="ti-light-bulb"></i></div>
            <h6 class="title mb-3">Thoughtful Design</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
              eveniet laborum, vero doloremque sunt tempora.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="circle-100 mb-3"><i class="ti-paint-bucket"></i></div>
            <h6 class="title mb-3">WELL CRAFTED</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
              eveniet laborum, vero doloremque sunt tempora.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="circle-100 mb-3"><i class="ti-marker-alt"></i></div>
            <h6 class="title mb-3">EASY TO CUSTOMIZE</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
              eveniet laborum, vero doloremque sunt tempora.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="review">
      <div class="container text-center">
        <h6 class="display-4 has-line">WHAT OUR CUSTOMERS ARE SAYING</h6>
        <p class="mb-5 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <div class="row text-left">
          <div class="col-md-4">
            <div class="testmonial">
              <p class="description">
                <i
                  >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Excepturi, eaque, repellat. Corporis facilis reprehenderit,
                  cupiditate.</i
                >
              </p>
              <div class="media">
                <img
                  class="mr-3"
                  src="assets/imgs/avatar1.jpg"
                  width="60"
                  alt="Generic placeholder image"
                />
                <div class="media-body">
                  <h6 class="title">Emma Re</h6>
                  <p class="text-muted">Web Designer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testmonial">
              <p class="description">
                <i
                  >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Excepturi, eaque, repellat. Corporis facilis reprehenderit,
                  cupiditate.</i
                >
              </p>
              <div class="media">
                <img
                  class="mr-3"
                  src="assets/imgs/avatar2.jpg"
                  width="60"
                  alt="Generic placeholder image"
                />
                <div class="media-body">
                  <h6 class="title">John Doe</h6>
                  <p class="text-muted">Freelancer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testmonial">
              <p class="description">
                <i
                  >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Excepturi, eaque, repellat. Corporis facilis reprehenderit,
                  cupiditate.</i
                >
              </p>
              <div class="media">
                <img
                  class="mr-3"
                  src="assets/imgs/avatar3.jpg"
                  width="60"
                  alt="Generic placeholder image"
                />
                <div class="media-body">
                  <h6 class="title">Emily Roe</h6>
                  <p class="text-muted">Graphic Designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section has-img-bg text-center">
      <div class="container">
        <h6 class="display-3 has-line">STYLISH AXURE DESIGN</h6>
        <h5 class="mb-5 font-weight-light">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore,
          itaque.
        </h5>
        <button class="btn btn-outline-light btn-flat">Download</button>
      </div>
    </section> -->
    <section class="section" id="contact">
        <div class="container text-center">
            <h6 class="display-4 has-line">CONTACT US</h6>
            <form method="post" enctype="multipart/form-data" action="">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group pb-1">
                            <input type="text" class="form-control" required placeholder="Name" name="name" />
                        </div>
                        <div class="form-group pb-1">
                            <input type="email" class="form-control" required placeholder="Email" name="email" />
                        </div>
                        <div class="form-group pb-1">
                        <input type="text" class="form-control" placeholder="Business Url or name" name="business" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <textarea name="message" id="" cols="" rows="7" class="form-control" required
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send Message" />
            </form>
        </div>
    </section>
    <footer class="footer py-4 bg-dark text-light">
        <div class="container text-center">
            <div class="social-links">
                <a href="https://www.facebook.com/CapitalGrantSolutions/" class="link" target="_blank"><i
                        class="ti-facebook"></i></a>
                <a href="https://www.linkedin.com/company/capital-grant-solutions/about/?viewAsMember=true" class="link"
                    target="_blank"><i class="ti-linkedin"></i></a>
                <a href="https://www.youtube.com/watch?v=GdciquRm93Q" class="link" target="_blank"><i
                        class="ti-youtube"></i></a>
                <a href="tel:+13853120118" class="link"><i class="ti-mobile"></i><span>+1 (385) 312-0118</span></a>
                <a href="javascript:void(0)" class="link"></a>
                <a href="javascript:void(0)" class="link"></a>
            </div>
        </div>
    </footer>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>
</body>

</html>