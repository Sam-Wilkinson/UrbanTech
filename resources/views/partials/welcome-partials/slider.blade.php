<!-- slider area-->

        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides"> 
                    <img src="{{asset('theme/defaultImages/slider1.jpg')}}" alt="" title="#slider-direction-1"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                     <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Urban Tech</h1>
                            @if(Session::get('locale') == 'nl')
                                @if($homeDescription->content_nl != "")
                                    <div class="title2" >{{$homeDescription->content_nl}} </div>
                                @else
                                    <div class="title2" >{{$homeDescription->content_en}} </div>
                                @endif
                            @elseif(Session::get('locale') == 'fr')
                                @if($homeDescription->content_fr != "")
                                    <div class="title2" >{{$homeDescription->content_fr}} </div>
                                @else
                                    <div class="title2" >{{$homeDescription->content_en}} </div>
                                @endif
                            @else
                                <div class="title2" >{{$homeDescription->content_en}} </div>
                            @endif
                            <div class="slider-botton" >
                                <ul>
                                    <li class="listtitle1"><a>
                                @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[0]->content_nl !="")
                                        {{$homeListTitles[0]->content_nl}}
                                    @else
                                        homeListTitles[0]->content_en}}
                                    @endif
                                
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[0]->content_fr !="")
                                        {{$homeListTitles[0]->content_fr}}
                                    @else
                                        {{$homeListTitles[0]->content_en}}
                                    @endif

                                @else
                                    {{$homeListTitles[0]->content_en}}
                                @endif
                                    </a></li>
                                    <li class="listtitle2" onmouseover="hovering(1)" onmouseout="hoverout(1)"><a>
                                @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[1]->content_nl !="")
                                        {{$homeListTitles[1]->content_nl}}
                                    @else
                                        {{$homeListTitles[1]->content_en}}
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[1]->content_fr !="")
                                        {{$homeListTitles[1]->content_fr}}
                                    @else
                                        {{$homeListTitles[1]->content_en}}
                                    @endif

                                @else
                                    {{$homeListTitles[1]->content_en}}
                                @endif
                                </a></li>
                                <li class="listtitle3" onmouseover="hovering(2)" onmouseout="hoverout(2)"><a>
                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[2]->content_nl !="")
                                        {{$homeListTitles[2]->content_nl}}
                                    @else
                                        {{$homeListTitles[2]->content_en}}
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[2]->content_fr !="")
                                        {{$homeListTitles[2]->content_fr}}
                                    @else
                                        {{$homeListTitles[2]->content_en}}
                                    @endif

                                @else
                                    {{$homeListTitles[2]->content_en}}
                                @endif
                                </a></li>
                                <li class="listtitle4" onmouseover="hovering(3)" onmouseout="hoverout(3)"><a>
                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[3]->content_nl !="")
                                        {{$homeListTitles[3]->content_nl}}
                                    @else
                                        {{$homeListTitles[3]->content_en}}
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[3]->content_fr !="")
                                        {{$homeListTitles[3]->content_fr}}
                                    @else
                                        {{$homeListTitles[3]->content_en}}
                                    @endif

                                @else
                                    {{$homeListTitles[3]->content_en}}
                                @endif
                                </a></li>
                                <li class="listtitle5" onmouseover="hovering(4)" onmouseout="hoverout(4)"><a>
                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[4]->content_nl !="")
                                        {{$homeListTitles[4]->content_nl}}
                                    @else
                                        {{$homeListTitles[4]->content_en}}
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[4]->content_fr !="")
                                        {{$homeListTitles[4]->content_fr}}
                                    @else
                                        {{$homeListTitles[4]->content_en}}
                                    @endif

                                @else
                                    {{$homeListTitles[4]->content_en}}
                                @endif
                                </a></li>
                                <li class="listtitle6" onmouseover="hovering(5)" onmouseout="hoverout(5)"><a>
                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[5]->content_nl !="")
                                        {{$homeListTitles[5]->content_nl}}
                                    @else
                                        {{$homeListTitles[5]->content_en}}
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[5]->content_fr !="")
                                        {{$homeListTitles[5]->content_fr}}
                                    @else
                                        {{$homeListTitles[5]->content_en}}
                                    @endif

                                @else
                                {{$homeListTitles[5]->content_en}}
                                @endif
                                </a></li>
                                </ul>
                                @php($i = 1)
                                <ul style="margin-top:40px;position:relative">
                                    @foreach($homeListSubtitles as $subtitle)
                                    <li class="subject{{$i}}"><a>
                                        @if(Session::get('locale') == 'nl')

                                            @if($subtitle->content_nl !="")
                                                {{$subtitle->content_nl}}
                                            @else
                                                {{$subtitle->content_en}}
                                            @endif
                                            
                                        @elseif(Session::get('locale') == 'fr')
        
                                            @if($subtitle->content_fr !="")
                                                {{$subtitle->content_fr}}
                                            @else
                                                {{$subtitle->content_en}}
                                            @endif
        
                                        @else
                                            {{$subtitle->content_en}}
                                        @endif
                                    </a></li>
                                    @php($i++)
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- slider end-->