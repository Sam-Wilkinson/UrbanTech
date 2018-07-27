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
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:36px 25px ">
                        <div class="locale text-center">
                            <a href="{{route('changeLocale',['locale'=> 'en'])}}" class="{{Session::get('locale') == 'en'? 'active':''}}">EN</a>
                            |
                            <a href="{{route('changeLocale',['locale'=> 'fr'])}}" class="{{Session::get('locale') == 'fr'? 'active':''}}">FR</a>
                            |
                            <a href="{{route('changeLocale',['locale'=> 'nl'])}}" class="{{Session::get('locale') == 'nl'? 'active':''}}">NL</a>
                        </div>
                    </div>
                    @if(session('message'))
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                            <h4 style="color:black">{{session('message')}}</h4 >
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                            <ul>
                                <li class="{{Route::currentRouteName()=='welcome'? 'active':''}}"><a href="{{route('welcome')}}">Home <span></span> </a></li>
                                
                                <li class="{{Route::currentRouteName()=='jobs'? 'active':''}}"><a href="{{route('jobs')}}">Jobs <span></span> </a>
                                </li>
                                
                                <li class="{{Route::currentRouteName()=='contact'? 'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                            </nav>
                        </div>          
                    </div>
                    <div class="col-1">
                        <div class="locale text-center">
                            <a href="{{route('changeLocale',['locale'=> 'en'])}}" class="{{Session::get('locale') == 'en'? 'active':''}}">EN</a>
                            |
                            <a href="{{route('changeLocale',['locale'=> 'fr'])}}" class="{{Session::get('locale') == 'fr'? 'active':''}}">FR</a>
                            |
                            <a href="{{route('changeLocale',['locale'=> 'nl'])}}" class="{{Session::get('locale') == 'nl'? 'active':''}}">NL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end here -->