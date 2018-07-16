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

        @include('partials.welcome-partials.header')
        @include('partials.welcome-partials.slider')
        @include('partials.welcome-partials.values')
        @include('partials.welcome-partials.ICT_Section1Test')
        @include('partials.welcome-partials.ICT_Section2')
        @include('partials.welcome-partials.resources')
        @include('partials.welcome-partials.jobs')
        @include('partials.welcome-partials.contact')
        
        <footer>
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
