<!-- Home Page About Us area start here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="about-title-area">
                            <h2>ICT & Engineering</h2>
                            <p> {{$ICTText->content_en}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset('theme/main/placeholder/img/about/about.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content-area">
                            <div class="about-content-area">
                                <h2><span>{{$ICTSection1[0]->content_en}}</span></h2>
                                <p>{{$ICTSection1[1]->content_en}}</p>
                                <ul class="">
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[2]->content_en}}  </li>
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[3]->content_en}}   </li>
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[4]->content_en}}  </li>
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[5]->content_en}}  </li>
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[6]->content_en}} </li>
                                    <li href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$ICTSection1[7]->content_en}} </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page About Us area end here -->