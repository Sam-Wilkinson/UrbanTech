<!-- Home Page teat start  here -->
        <div class="home-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                    
                        <div class="site-section-area">
                            <h2>Resources</h2>
                            <p>{{$recText->content_en}}</p>
                        </div>
                    </div>
                </div>
                <div class="row total-team">
                    @php($i = 0)
                    @foreach($recSections as $section)
                    <div class="text-center">                    
                        <div class="single-team">
                            <div class="overley">
                                <a href="#">
                                    <img src="{{asset('theme/main/placeholder/img/team/1.png')}}" alt="">
                                </a>
                                <div class="social-media-icons">
                                    <ul>
                                        @foreach($section as $text)
                                        <li>{{$text->content_en}}</li><br>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="team-details">
                                <h3><a >{{$recTitles[$i]->content_en}}</a></h3>
                                @php($i++)
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Home Page teat end  here -->