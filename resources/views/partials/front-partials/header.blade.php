<header>            
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="{{route('welcome')}}"><img style="border-radius:25px" src="{{asset('theme/defaultImages/logo.jpg')}}" alt="site logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="main-menu">
                            <ul>
                                <li class="{{Route::currentRouteName()=='welcome'? 'active':''}}"><a href="{{route('welcome')}}">Home <span></span> </a></li>
                                
                                <li class="{{Route::currentRouteName()=='jobs'? 'active':''}}"><a href="{{route('jobs')}}">Jobs <span></span> </a>
                                </li>
                                
                                <li class="{{Route::currentRouteName()=='contact'? 'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 acurate">
                        @if(session('message'))
                            <h4 style="color:black">{{session('message')}}</h4 >
                        @endif
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