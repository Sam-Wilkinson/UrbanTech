<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Welcome || Viktor Home 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/meanmenu.min.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/owl.carousel.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/font-awesome.min.css')}}">
        <!-- Flaticons css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/flaticon.css')}}">
        
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/inc/custom-slider/css/nivo-slider.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/inc/custom-slider/css/preview.css')}}" type="text/css" media="screen" />

		<!-- style css -->
		<link rel="stylesheet" href="{{asset('theme/main/placeholder/style.css')}}">
        <!-- CSS Color Plate -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/multicolor-css/skype-color.css')}}">
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/multicolor-css/red-color.css')}}">
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/multicolor-css/green-color.css')}}">
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/multicolor-css/blue-color.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('theme/main/placeholder/css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('theme/main/placeholder/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!-- Google Analytics JS -->
        <script src="http://www.digitalcenturysf.com/google_analytics.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>            
            <div class="main-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="index.html"><img src="{{asset('theme/main/placeholder/img/logo.png')}}" alt="site logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="main-menu">
                                <ul>
                                    <li class="active"><a href="index.html">Home <span></span> </a></li>
                                    <li><a href="about.html">About </a></li>
                                    <li><a href="services.html">Services <span></span></a></li>
                                    <li><a href="project.html">Projects <span></span> </a>
                                    </li>
                                    <li><a href="news.html">News <span></span> </a>
                                    </li>
                                    <li><a href="#">Pages <span></span> </a>
                                        <ul>
                                            <li><a href="single-services.html">Single Services</a></li>
                                            <li><a href="single-project.html">Single Project</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                            <li><a href="404.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 acurate">
                            <div class="search-area">
                                <div id="custom-search-input">
                                    <div class="input-group">
                                        <input type="text" class="search-query form-control" placeholder="Search Here..." />
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                <ul>
                                    <li class="active"><a href="index.html">Home <span></span> </a></li>
                                    <li><a href="about.html">About </a></li>
                                    <li><a href="services.html">Services <span></span></a></li>
                                    <li><a href="project.html">Projects <span></span> </a>
                                    </li>
                                    <li><a href="news.html">News <span></span> </a>
                                    </li>
                                    <li><a href="#">Pages <span></span> </a>
                                        <ul>
                                            <li><a href="single-services.html">Single Services</a></li>
                                            <li><a href="single-project.html">Single Project</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                            <li><a href="404.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                </nav>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end here -->
        <!-- slider area-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides"> 
                    <img src="{{asset('theme/main/placeholder/img/slider/slide1.jpg')}}" alt="" title="#slider-direction-1"  />
                    <img src="{{asset('theme/main/placeholder/img/slider/slide2.jpg')}}" alt="" title="#slider-direction-2"  />
                    <img src="{{asset('theme/main/placeholder/img/slider/slide3.jpg')}}" alt="" title="#slider-direction-3"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                     <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Grow Your Business</h1>
                            <div class="title2" >Ne homero prompta constituam provtim omnis porro eu, iusto deserunt incorrupte sea ad. Aliquam compre hensam definitionem eam ea ius facete nominaviId vim laudem nusquamtion. </div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Get Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Quick Call Back <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Planning Your Dream</h1>
                            <div class="title2" >Ne homero prompta constituam provtim omnis porro eu, iusto deserunt incorrupte sea ad. Aliquam compre hensam definitionem eam ea ius facete nominaviId vim laudem nusquamtion. </div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Get Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Quick Call Back <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-3" class="t-cn slider-direction">
                     <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">We Make Your Dream True</h1>
                            <div class="title2" >Ne homero prompta constituam provtim omnis porro eu, iusto deserunt incorrupte sea ad. Aliquam compre hensam definitionem eam ea ius facete nominaviId vim laudem nusquamtion. </div>
                            <div class="slider-botton" >
                                <ul>
                                    <li class="acitve"><a href="#">Get Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Quick Call Back <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- slider end-->
        <!-- Home page faq start here -->
        <div class="home-faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="faq-area">
                            <h2>Frequently Asked Questions</h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     How can i get financial aid to live off campus?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard d leap into electronic typesetting, remaining essentially unchanged. I1500s, when an unknown printer took a galley of type and scrambled.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      How do i link multiple accounts with my profile?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard d leap into electronic typesetting, remaining essentially unchanged. I1500s, when an unknown printer took a galley of type and scrambled.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      How can i get financial aid to live off campus?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard d leap into electronic typesetting, remaining essentially unchanged. I1500s, when an unknown printer took a galley of type and scrambled.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="headingFour">
                                      How can i get financial aid to live off campus?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
                                  <div class="panel-body">
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard d leap into electronic typesetting, remaining essentially unchanged. I1500s, when an unknown printer took a galley of type and scrambled.
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="faq-image-area">
                            <a href="about.html"><img src="{{asset('theme/main/placeholder/img/faq.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home page faq end here -->
        <!-- About Page content area start here -->
        <div class="inner-page">
        <div class="about-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="about-title-area">
                            <h2>Let’s Introduce About Us</h2>
                            <p> Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummyprinter took easewhen an unknown printer took a galley of type and scrambled.</p>
                        </div>
                    </div>
                </div>
                <div class="row feature-image">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset('theme/main/placeholder/img/about/about-image.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                        <div class="about-main-content">
                            <h4>Who We Are</h4>
                            <h3>We Are Expert In Financing</h3>
                            <p>Fimply dummy text of the printing and typesetting industryIpsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Fimply dummy text of the printing and typesetting industrem Ipsum has been .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
        <!-- About Page content area end here -->
        <!-- About Page content area start here -->
        <div class="inner-page">
        <div class="about-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="about-title-area">
                            <h2>Let’s Introduce About Us</h2>
                            <p> Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummyprinter took easewhen an unknown printer took a galley of type and scrambled.</p>
                        </div>
                    </div>
                </div>
                <div class="row feature-image">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset('theme/main/placeholder/img/about/about-image.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                        <div class="about-main-content">
                            <h4>Who We Are</h4>
                            <h3>We Are Expert In Financing</h3>
                            <p>Fimply dummy text of the printing and typesetting industryIpsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Fimply dummy text of the printing and typesetting industrem Ipsum has been .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
        <!-- About Page content area end here -->      
        <!-- Service section area start here -->
        <div class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="media">
                              <div class="pull-left">
                                <a href="single-services.html">
                                  <span class="flaticon-graph"></span>
                                </a>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><a href="single-services.html">Business Plan</a></h4>
                                <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                <div class="read-more">
                                    <a href="single-services.html">Read More  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="media">
                              <div class="pull-left">
                                <a href="single-services.html">
                                  <span class="flaticon-finances"></span>
                                </a>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><a href="single-services.html">Mutual Trust</a></h4>
                                <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                <div class="read-more">
                                    <a href="single-services.html">Read More  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="media">
                              <div class="pull-left">
                                <a href="single-services.html">
                                  <span class="flaticon-presentation"></span>
                                </a>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading"><a href="single-services.html">Business Consulting</a></h4>
                                <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                <div class="read-more">
                                    <a href="single-services.html">Read More  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service section area end here -->
        <!-- Home Page About Us area start here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content-area">
                            <div class="about-content-area">
                                <h2>Know About <span>Viktor Finance</span></h2>
                                <p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="botton-area">
                                    <a href="about.html">Get Consultancy   <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset('theme/main/placeholder/img/about/about.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page About Us area end here -->
        <!-- home page core services start here -->
        <div class="home-page-core-activities-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="home-activities-area">
                            <h2>Viktor Projects</h2>
                            <div class="single-activities">
                                <div class="media">
                                  <div class="pull-left">
                                    <a href="single-services.html">
                                      <span class="flaticon-presentation"></span>
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading"><a href="single-services.html">Business Consulting</a></h4>
                                    <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="single-activities">
                                <div class="media">
                                  <div class="pull-left">
                                    <a href="single-services.html">
                                      <span class="flaticon-graph"></span>
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading"><a href="single-services.html">Saving & Invest</a></h4>
                                    <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="single-activities">
                                <div class="media">
                                  <div class="pull-left">
                                    <a href="single-services.html">
                                      <span class="flaticon-piggy-bank"></span>
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading"><a href="single-services.html">Requirements</a></h4>
                                    <p>Simply dummy text of the printing andrety esetting industry. Lorem Ipsum has beeyan the indust standard unknown.</p>
                                  </div>
                                </div>
                            </div>
                        </div> 
                     </div>
                </div>
            </div>
        </div>
        <!-- home page core services end here -->
        <!-- Home Page Counter Down start Here -->
        <div class="home-counter-down-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="home-counter-down-title">
                            <h2>We have <span>50 Years</span> </h2>
                            <p>Of Experiences</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ab-count">
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list">
                                    <h1 class="about-counter">3000</h1>
                                    <p>Clients</p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->                 
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list">
                                    <h1 class="about-counter">2500</h1>
                                    <p>Projects </p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->                 
                            <!-- ABOUT-COUNTER-LIST START -->
                            <div class="col-md-4">
                                <div class="about-counter-list last-child">
                                    <h1 class="about-counter">1000</h1>
                                    <p>Adwards</p>
                                </div>
                            </div>
                            <!-- ABOUT-COUNTER-LIST END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page Counter Down end Here -->
        <!-- Home Page teat start  here -->
        <div class="home-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                    
                        <div class="site-section-area">
                            <h2>Our Expert Team</h2>
                            <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since, when an unknown printer took a galley of type and scrambled. </p>
                        </div>
                    </div>
                </div>
                <div class="row total-team">
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/1.png')}}" alt="">                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Ms. Zara Thapar</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/2.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Smith</a></h3>
                                <p>Accountance</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/3.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Ms. Farhana Ema</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/4.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Luice</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/1.png')}}" alt="">                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Ms. Zara Thapar</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/2.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Smith</a></h3>
                                <p>Accountance</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/3.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Ms. Farhana Ema</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/4.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Luice</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/2.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Smith</a></h3>
                                <p>Accountance</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/3.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Ms. Farhana Ema</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/4.png')}}" alt="">
                                    
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a href="#">Mr. David Luice</a></h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page teat end  here -->
        <!-- Request for call back area start Here -->
        <div class="home-callback-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="call-back-content">
                            <h2>Request For Call Back</h2>
                            <p>Rsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. I typesetting industry. Lorem Ipsum has been the industrys standard dummy,</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="call-back-form">                           
                            <form>
                             <fieldset>
                                <div class="col-sm-12">
                                <div class="form-group">
                                      <select class="form-control" id="sel1">
                                        <option>Discussions with Financial Experts</option>
                                        <option>Financial Experts</option>
                                        <option>Invest Funds</option>
                                        <option>Investment and Funds</option>
                                      </select>
                                  </div>
                                  </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name*">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name*">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email*">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone*">
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <button class="btn-send" type="submit">Submit</button>
                                  </div>
                                </div>
                              </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request for call back area end Here -->
        <!-- Home page News start here -->
        <div class="home-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                    
                        <div class="site-section-area">
                            <h2>Latest News</h2>
                            <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since, when an unknown printer took a galley of type and scrambled. </p>
                        </div>
                    </div>
                </div>
                <div class="row total-homenews">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-news">
                             <div class="news-image">
                                <a href="single-news.html"><img src="{{asset('theme/main/placeholder/img/news/1.png')}}" alt=""></a>
                                 <div class="news-date">                                    
                                 <p>10 <br/>June<br/>2016</p>
                                 </div>
                             </div>
                             <h3><a href="single-news.html">Why People Choose Viktor Finance</a></h3>
                             <p>Simply dummy text of the printing and typesetting industr Ipsum been the industry since.</p>
                         </div>
                     </div> 
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-news">
                             <div class="news-image">
                                <a href="single-news.html"><img src="{{asset('theme/main/placeholder/img/news/2.png')}}" alt=""></a>
                             <div class="news-date">                                 
                                 <p>10 <br/>June<br/>2016</p>
                             </div>
                             </div>
                             <h3><a href="single-news.html">Why People Choose Viktor Finance</a></h3>
                             <p>Simply dummy text of the printing and typesetting industr Ipsum been the industry since.</p>
                         </div>
                     </div>  
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-news">
                             <div class="news-image">
                                <a href="single-news.html"><img src="{{asset('theme/main/placeholder/img/news/3.png')}}" alt=""></a>
                             <div class="news-date">
                                 <p>10 <br/>June<br/>2016</p>
                             </div>
                             </div>
                             <h3><a href="single-news.html">Why People Choose Viktor Finance</a></h3>
                             <p>Simply dummy text of the printing and typesetting industr Ipsum been the industry since.</p>

                         </div>
                     </div>    
                </div>                
            </div>
        </div>
        <!-- Home page Blog end here -->
        <!-- home page testimonial start here -->
        <div class="home-testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="total-testimonial">
                        <div class="home-testimonial">
                            <div class="single-testimonial text-center">
                                <p> <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since thewhen an unknown printer took.</p>
                                <div class="details">
                                    <h3>Mr. Mack Magragor</h3>
                                    <p>CEO, Advisor</p>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <p> <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since thewhen an unknown printer took.</p>
                                <div class="details">
                                    <h3>Javis Rey</h3>
                                    <p>CEO</p>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <p> <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since thewhen an unknown printer took.</p>
                                <div class="details">
                                    <h3>Mr. Mack Magragor</h3>
                                    <p>CEO, Advisor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home page testimonial end here -->
        <!-- footer area start here -->
        <footer>
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="footer-top">
                                <p>Quick Contact Us</p>
                                <h2><i class="fa fa-phone" aria-hidden="true"></i> +123 456 78910</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row main-footer">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-footer">
                                <a href="index.html">
                                    <img src="{{asset('theme/main/placeholder/img/footer-logo.png')}}" alt="">
                                </a>
                                <p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. Suspen disse at eros tempus, congue metus ac consequat.Fusce sit amet urna feugiat.</p>
                                <div class="footer-social-media-area">
                                  <nav>
                                    <ul>
                                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                  </nav>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-footer footer-two">
                                <h3>Services</h3>
                                <nav>
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Business Consulting</li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Financial Help</li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Fund Receive</li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Business Loan</li>
                                        <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Fundraising</li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-footer footer-three">
                                <h3>Corporate Office</h3>
                                <nav>
                                    <ul>
                                        <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Australia Melborne, 58 street</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>+ 123 456 7891 </li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@viktor.com</li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i> + 123 456 7891 </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-footer footer-four">
                                <h3>Instagram</h3>
                                <ul>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/1.png')}}" alt="instagram photo"></a></li>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/2.png')}}" alt="instagram photo"></a></li>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/3.png')}}" alt="instagram photo"></a></li>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/4.png')}}" alt="instagram photo"></a></li>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/5.png')}}" alt="instagram photo"></a></li>
                                    <li><a href="#"><img src="{{asset('theme/main/placeholder/img/instagram/6.png')}}" alt="instagram photo"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <p>&copy; Copyrights viktorfinance. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end here -->
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('theme/main/placeholder/js/vendor/jquery-1.12.0.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{asset('theme/main/placeholder/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('theme/main/placeholder/js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('theme/main/placeholder/js/jquery.meanmenu.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('theme/main/placeholder/js/jquery-ui.min.js')}}"></script>
		<!-- wow js -->
        <script src="{{asset('theme/main/placeholder/js/wow.min.js')}}"></script>
        <!-- jquery.counterup js -->
        <script src="{{asset('theme/main/placeholder/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('theme/main/placeholder/js/waypoints.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('theme/main/placeholder/js/plugins.js')}}"></script>
        <!-- Nivo slider js
        ============================================ -->        
        <script src="{{asset('theme/main/placeholder/inc/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('theme/main/placeholder/inc/custom-slider/home.js')}}" type="text/javascript"></script>
		<!-- main js -->
        <script src="{{asset('theme/main/placeholder/js/main.js')}}"></script>
    </body>
</html>
