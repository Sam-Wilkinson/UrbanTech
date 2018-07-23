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
                                @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[0]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[0]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[0]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[0]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[0]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[0]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[0]->content_en}}</a></li>
                                @endif

                                @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[1]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[1]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[1]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[1]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[1]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[1]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[1]->content_en}}</a></li>
                                @endif

                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[2]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[2]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[2]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[2]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[2]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[2]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[2]->content_en}}</a></li>
                                @endif

                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[3]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[3]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[3]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[3]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[3]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[3]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[3]->content_en}}</a></li>
                                @endif

                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[4]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[4]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[4]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[4]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[4]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[4]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[4]->content_en}}</a></li>
                                @endif

                                 @if(Session::get('locale') == 'nl')

                                    @if($homeListTitles[5]->content_nl !="")
                                        <li><a href="#">{{$homeListTitles[5]->content_nl}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[5]->content_en}}</a></li>
                                    @endif
                                    
                                @elseif(Session::get('locale') == 'fr')

                                    @if($homeListTitles[5]->content_fr !="")
                                        <li><a href="#">{{$homeListTitles[5]->content_fr}}</a></li>
                                    @else
                                        <li><a href="#">{{$homeListTitles[5]->content_en}}</a></li>
                                    @endif

                                @else
                                    <li><a href="#">{{$homeListTitles[5]->content_en}}</a></li>
                                @endif
                        
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- slider end-->