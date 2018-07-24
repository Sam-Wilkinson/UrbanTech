<!-- Home Page About Us area start here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row" style="font-size:16px">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                            <div class="about-content-area">
                                <h2><span>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection2[0]->content_nl != "")
                                            {{$ICTSection2[0]->content_nl}}
                                            @else
                                            {{$ICTSection2[0]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection2[0]->content_fr != "")
                                            {{$ICTSection2[0]->content_fr}}
                                            @else
                                            {{$ICTSection2[0]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection2[0]->content_en}}
                                        @endif
                                    
                                </span></h2>
                                <p>
                                    @if(Session::get('locale') == 'nl')
                                        @if($ICTSection2[1]->content_nl != "")
                                        {{$ICTSection2[1]->content_nl}}
                                        @else
                                        {{$ICTSection2[1]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($ICTSection2[1]->content_fr != "")
                                        {{$ICTSection2[1]->content_fr}}
                                        @else
                                        {{$ICTSection2[1]->content_en}}
                                        @endif
                                    @else
                                    {{$ICTSection2[1]->content_en}}
                                    @endif
                                    
                                </p>
                                <ul>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection2[2]->content_nl != "")
                                            {{$ICTSection2[2]->content_nl}}
                                            @else
                                            {{$ICTSection2[2]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection2[2]->content_fr != "")
                                            {{$ICTSection2[2]->content_fr}}
                                            @else
                                            {{$ICTSection2[2]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection2[2]->content_en}}
                                        @endif
                                        
                                    </li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection2[3]->content_nl != "")
                                            {{$ICTSection2[3]->content_nl}}
                                            @else
                                            {{$ICTSection2[3]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection2[3]->content_fr != "")
                                            {{$ICTSection2[3]->content_fr}}
                                            @else
                                            {{$ICTSection2[3]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection2[3]->content_en}}
                                        @endif
                                        
                                    </li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection2[4]->content_nl != "")
                                            {{$ICTSection2[4]->content_nl}}
                                            @else
                                            {{$ICTSection2[4]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection2[4]->content_fr != "")
                                            {{$ICTSection2[4]->content_fr}}
                                            @else
                                            {{$ICTSection2[4]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection2[4]->content_en}}
                                        @endif
                                         
                                    </li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        @if(Session::get('locale') == 'nl')
                                            @if($ICTSection2[5]->content_nl != "")
                                            {{$ICTSection2[5]->content_nl}}
                                            @else
                                            {{$ICTSection2[5]->content_en}}
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($ICTSection2[5]->content_fr != "")
                                            {{$ICTSection2[5]->content_fr}}
                                            @else
                                            {{$ICTSection2[5]->content_en}}
                                            @endif
                                        @else
                                        {{$ICTSection2[5]->content_en}}
                                        @endif
                                         
                                        </li>
                                </ul>
                            </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-featured-image">
                            <a><img src="{{asset('theme/defaultImages/Engineering.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page About Us area end here -->