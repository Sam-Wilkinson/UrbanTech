    @extends('layouts.front')
    @section('content')
        <!-- Inner Page Header serction start here -->
        <div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>Contact Us</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{route('welcome')}}">Home /</a> Contact</li>                                 
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->      
        <!-- Contact Us page Start Here -->
        <div class="contact-us-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-us-page">
                            <h2>
                                @if(Session::get('locale') == 'nl')
                                    @if($general[0]->content_nl != "")
                                    {{$general[0]->content_nl}}
                                    @else
                                    {{$general[0]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($general[0]->content_fr != "")
                                    {{$general[0]->content_fr}}
                                    @else
                                    {{$general[0]->content_en}}
                                    @endif
                                @else
                                {{$general[0]->content_en}}
                                @endif
                                
                            </h2
                        </div>
                    </div>
                </div>
                <div class="row contact-box">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box">
                             <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                @if(Session::get('locale') == 'nl')
                                    @if($general[1]->content_nl != "")
                                    {{$general[1]->content_nl}}
                                    @else
                                    {{$general[1]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($general[1]->content_fr != "")
                                    {{$general[1]->content_fr}}
                                    @else
                                    {{$general[1]->content_en}}
                                    @endif
                                @else
                                {{$general[1]->content_en}}
                                @endif
                                 ,
                                 @if(Session::get('locale') == 'nl')
                                    @if($general[2]->content_nl != "")
                                    {{$general[2]->content_nl}}
                                    @else
                                    {{$general[2]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($general[2]->content_fr != "")
                                    {{$general[2]->content_fr}}
                                    @else
                                    {{$general[2]->content_en}}
                                    @endif
                                @else
                                {{$general[2]->content_en}}
                                @endif
                                 ,<br/><span>
                                    @if(Session::get('locale') == 'nl')
                                        @if($general[3]->content_nl != "")
                                        {{$general[3]->content_nl}}
                                        @else
                                        {{$general[3]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($general[3]->content_fr != "")
                                        {{$general[3]->content_fr}}
                                        @else
                                        {{$general[3]->content_en}}
                                        @endif
                                    @else
                                    {{$general[3]->content_en}}
                                    @endif
                                    ,
                                    @if(Session::get('locale') == 'nl')
                                        @if($general[4]->content_nl != "")
                                        {{$general[4]->content_nl}}
                                        @else
                                        {{$general[4]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($general[4]->content_fr != "")
                                        {{$general[4]->content_fr}}
                                        @else
                                        {{$general[4]->content_en}}
                                        @endif
                                    @else
                                    {{$general[4]->content_en}}
                                    @endif
                                    .</span></p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box">
                             <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                @if(Session::get('locale') == 'nl')
                                    @if($general[7]->content_nl != "")
                                    {{$general[7]->content_nl}}
                                    @else
                                    {{$general[7]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($general[7]->content_fr != "")
                                    {{$general[7]->content_fr}}
                                    @else
                                    {{$general[7]->content_en}}
                                    @endif
                                @else
                                {{$general[7]->content_en}}
                                @endif
                            </p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box last-child">
                             <p><i class="fa fa-phone" aria-hidden="true"></i>
                                @if(Session::get('locale') == 'nl')
                                    @if($general[5]->content_nl != "")
                                    {{$general[5]->content_nl}}
                                    @else
                                    {{$general[5]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($general[5]->content_fr != "")
                                    {{$general[5]->content_fr}}
                                    @else
                                    {{$general[5]->content_en}}
                                    @endif
                                @else
                                {{$general[5]->content_en}}
                                @endif
                                 <br/> <span>
                                    @if(Session::get('locale') == 'nl')
                                        @if($general[6]->content_nl != "")
                                        {{$general[6]->content_nl}}
                                        @else
                                        {{$general[6]->content_en}}
                                        @endif
                                    @elseif(Session::get('locale') == 'fr')
                                        @if($general[6]->content_fr != "")
                                        {{$general[6]->content_fr}}
                                        @else
                                        {{$general[6]->content_en}}
                                        @endif
                                    @else
                                    {{$general[6]->content_en}}
                                    @endif
                                </span></p>
                         </div>
                     </div>
                </div>
                <!-- Google Maps -->
                <div id="googleMap" style="width:100%;height:400px;"></div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="leave-comments-area">
                            <h4>
                                @if(Session::get('locale') == 'nl')
                                    @if($contact[0]->content_nl != "")
                                    {{$contact[0]->content_nl}}
                                    @else
                                    {{$contact[0]->content_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($contact[0]->content_fr != "")
                                    {{$contact[0]->content_fr}}
                                    @else
                                    {{$contact[0]->content_en}}
                                    @endif
                                @else
                                {{$contact[0]->content_en}}
                                @endif
                               
                            </h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                          <div class="call-back-form">                 
                                <form action="{{route('contactus')}}" method="post">
                                  @csrf
                                  @method('POST')                   
                                  <fieldset name="content">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                          <select class="form-control" name="title" id="sel1">
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                            <option>NA</option>
                                          </select>
                                      </div>
                                      </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="text" name="firstName" class="form-control" 
                                        @if(Session::get('locale') == 'nl')
                                            @if($contact[2]->content_nl != "")
                                            placeholder="{{$contact[2]->content_nl}}*"
                                            @else
                                            placeholder="{{$contact[2]->content_en}}*"
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($contact[2]->content_fr != "")
                                            placeholder="{{$contact[2]->content_fr}}*"
                                            @else
                                            placeholder="{{$contact[2]->content_en}}*"
                                            @endif
                                        @else
                                        placeholder="{{$contact[2]->content_en}}*"
                                        @endif >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="text" name="lastName" class="form-control" 
                                        @if(Session::get('locale') == 'nl')
                                            @if($contact[2]->content_nl != "")
                                            placeholder="{{$contact[3]->content_nl}}*"
                                            @else
                                            placeholder="{{$contact[3]->content_en}}*"
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($contact[3]->content_fr != "")
                                            placeholder="{{$contact[3]->content_fr}}*"
                                            @else
                                            placeholder="{{$contact[3]->content_en}}*"
                                            @endif
                                        @else
                                        placeholder="{{$contact[3]->content_en}}*"
                                        @endif >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="email" name="email" class="form-control" 
                                        @if(Session::get('locale') == 'nl')
                                            @if($contact[4]->content_nl != "")
                                            placeholder="{{$contact[4]->content_nl}}*"
                                            @else
                                            placeholder="{{$contact[4]->content_en}}*"
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($contact[4]->content_fr != "")
                                            placeholder="{{$contact[4]->content_fr}}*"
                                            @else
                                            placeholder="{{$contact[4]->content_en}}*"
                                            @endif
                                        @else
                                        placeholder="{{$contact[4]->content_en}}*"
                                        @endif >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="text" name="firm" class="form-control" 
                                        @if(Session::get('locale') == 'nl')
                                            @if($contact[5]->content_nl != "")
                                            placeholder="{{$contact[5]->content_nl}}*"
                                            @else
                                            placeholder="{{$contact[5]->content_en}}*"
                                            @endif
                                        @elseif(Session::get('locale') == 'fr')
                                            @if($contact[5]->content_fr != "")
                                            placeholder="{{$contact[5]->content_fr}}*"
                                            @else
                                            placeholder="{{$contact[5]->content_en}}*"
                                            @endif
                                        @else
                                        placeholder="{{$contact[5]->content_en}}*"
                                        @endif >
                                      </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <input type="text" name="subject" class="form-control" 
                                            @if(Session::get('locale') == 'nl')
                                                @if($contact[6]->content_nl != "")
                                                placeholder="{{$contact[6]->content_nl}}*"
                                                @else
                                                placeholder="{{$contact[6]->content_en}}*"
                                                @endif
                                            @elseif(Session::get('locale') == 'fr')
                                                @if($contact[6]->content_fr != "")
                                                placeholder="{{$contact[6]->content_fr}}*"
                                                @else
                                                placeholder="{{$contact[6]->content_en}}*"
                                                @endif
                                            @else
                                            placeholder="{{$contact[6]->content_en}}*"
                                            @endif >
                                        </div>
                                      </div>
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                            <textarea type="text" name="message" class="form-control" row="6"  style="resize: vertical"
                                            @if(Session::get('locale') == 'nl')
                                                @if($contact[7]->content_nl != "")
                                                placeholder="{{$contact[7]->content_nl}}*"
                                                @else
                                                placeholder="{{$contact[7]->content_en}}*"
                                                @endif
                                            @elseif(Session::get('locale') == 'fr')
                                                @if($contact[7]->content_fr != "")
                                                placeholder="{{$contact[7]->content_fr}}*"
                                                @else
                                                placeholder="{{$contact[7]->content_en}}*"
                                                @endif
                                            @else
                                            placeholder="{{$contact[7]->content_en}}*"
                                            @endif ></textarea>
                                          </div>
                                        </div>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <button class="btn-send" type="submit">Submit</button>
                                      </div>
                                    </div>
                                  </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Contact Us page end Here -->
        @endsection

        @section('google_api')
        <script>
                function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(50.834640,4.325620),
                    zoom:15,
                };
                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                // Create a marker and set its position.
                var marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(50.834640,4.325620) ,
                title: 'UrbanTech'
                });
            }
        </script>
        @endsection
