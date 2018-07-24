<!-- Home Page About Us area start here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row" style="font-size:16px">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="home-faq-area">
                        <div class="faq-area">
                            <h2>ICT & Engineering</h2>
                            <p class="text-center">
                                @if(Session::get('locale') == 'nl')
                                    @if( $ICTText->content_nl != "")
                                    {{$ICTText->content_nl}}
                                    @else
                                    {{$ICTText->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($ICTText->content_fr != "")
                                    {{$ICTText->content_fr}}
                                    @else
                                    {{$ICTText->content_en}}
                                    @endif
                                @else
                                    {{$ICTText->content_en}}
                                @endif
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row" style="font-size:16px">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-featured-image">
                            <a><img src="{{asset('theme/defaultImages/itc.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content-area">
                            <div class="about-content-area ">
                                <h2><span>
                                    @if(Session::get('locale') == 'nl')
                                        @if($ICTSection1[0]->content_nl != "")
                                        {{$ICTSection1[0]->content_nl}}
                                        @else
                                        {{$ICTSection1[0]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($ICTSection1[0]->content_fr != "")
                                        {{$ICTSection1[0]->content_fr}}
                                        @else
                                        {{$ICTSection1[0]->content_en}}
                                        @endif
                                    @else
                                    {{$ICTSection1[0]->content_en}}
                                    @endif
                                    
                                </span></h2>
                                <p>
                                        @if(Session::get('locale') == 'nl')
                                        @if($ICTSection1[1]->content_nl != "")
                                        {{$ICTSection1[1]->content_nl}}
                                        @else
                                        {{$ICTSection1[1]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($ICTSection1[1]->content_fr != "")
                                        {{$ICTSection1[1]->content_fr}}
                                        @else
                                        {{$ICTSection1[1]->content_en}}
                                        @endif
                                    @else
                                    {{$ICTSection1[1]->content_en}}
                                    @endif
                                    
                                </p>
                                <ul class="">
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[2]->content_nl != "")
                                            {{$ICTSection1[2]->content_nl}}
                                            @else
                                            {{$ICTSection1[2]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[2]->content_fr != "")
                                            {{$ICTSection1[2]->content_fr}}
                                            @else
                                            {{$ICTSection1[2]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[2]->content_en}}
                                        @endif
                                    
                                    </li>
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[3]->content_nl != "")
                                            {{$ICTSection1[3]->content_nl}}
                                            @else
                                            {{$ICTSection1[3]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[3]->content_fr != "")
                                            {{$ICTSection1[3]->content_fr}}
                                            @else
                                            {{$ICTSection1[3]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[3]->content_en}}
                                        @endif
                                         
                                    </li>
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[4]->content_nl != "")
                                            {{$ICTSection1[4]->content_nl}}
                                            @else
                                            {{$ICTSection1[4]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[4]->content_fr != "")
                                            {{$ICTSection1[4]->content_fr}}
                                            @else
                                            {{$ICTSection1[4]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[4]->content_en}}
                                        @endif
                                    </li>
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[5]->content_nl != "")
                                            {{$ICTSection1[5]->content_nl}}
                                            @else
                                            {{$ICTSection1[5]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[5]->content_fr != "")
                                            {{$ICTSection1[5]->content_fr}}
                                            @else
                                            {{$ICTSection1[5]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[5]->content_en}}
                                        @endif
                                         
                                    </li>
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[6]->content_nl != "")
                                            {{$ICTSection1[6]->content_nl}}
                                            @else
                                            {{$ICTSection1[6]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[6]->content_fr != "")
                                            {{$ICTSection1[6]->content_fr}}
                                            @else
                                            {{$ICTSection1[6]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[6]->content_en}}
                                        @endif
                                        
                                    </li>
                                    <li> 
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection1[7]->content_nl != "")
                                            {{$ICTSection1[7]->content_nl}}
                                            @else
                                            {{$ICTSection1[7]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection1[7]->content_fr != "")
                                            {{$ICTSection1[7]->content_fr}}
                                            @else
                                            {{$ICTSection1[7]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection1[7]->content_en}}
                                        @endif
                                         
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page About Us area end here -->