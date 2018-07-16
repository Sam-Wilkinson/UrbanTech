<!-- About Page content area start here -->
<div class="inner-page">
<div class="about-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="about-title-area">
                    <h2>ICT & Engineering</h2>
                    <p> {{$ICTText->content_en}}</p>
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
                <div class="about-main-content row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <h3>{{$ICTSection1[0]->content_en}}</h3>
                        <p>{{$ICTSection1[1]->content_en}}</p>
                    </div>
                    <ul class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                        <li>{{$ICTSection1[2]->content_en}}</li>
                        <li>{{$ICTSection1[3]->content_en}}</li>
                        <li>{{$ICTSection1[4]->content_en}}</li>
                        <li>{{$ICTSection1[5]->content_en}}</li>
                        <li>{{$ICTSection1[6]->content_en}}</li>
                        <li>{{$ICTSection1[7]->content_en}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
</div>
<!-- About Page content area end here -->