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
                            <h2>{{$general[0]->content_en}}</h2
                        </div>
                    </div>
                </div>
                <div class="row contact-box">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box">
                             <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$general[1]->content_en}} ,{{$general[2]->content_en}},<br/><span>{{$general[3]->content_en}},{{$general[4]->content_en}} .</span></p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box">
                             <p><i class="fa fa-envelope-o" aria-hidden="true"></i>{{$general[7]->content_en}}</p>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <div class="single-contact-box last-child">
                             <p><i class="fa fa-phone" aria-hidden="true"></i> {{$general[5]->content_en}} <br/> <span>{{$general[6]->content_en}}</span></p>
                         </div>
                     </div>
                </div>
                <!-- Google Maps -->
                <div id="googleMap" style="width:100%;height:400px;"></div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="leave-comments-area">
                            <h4>{{$contact[0]->content_en}}</h4>
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
                                <form action="http://127.0.0.1:8000/contactus" method="post">
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
                                        <input type="text" name="firstName" class="form-control" placeholder="{{$contact[2]->content_en}}*">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="text" name="lastName" class="form-control" placeholder="{{$contact[3]->content_en}}*">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="{{$contact[4]->content_en}}*">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input type="text" name="firm" class="form-control" placeholder="{{$contact[5]->content_en}}">
                                      </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                          <input type="text" name="subject" class="form-control" placeholder="{{$contact[6]->content_en}}*">
                                        </div>
                                      </div>
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                            <textarea type="text" name="message" class="form-control" row="6" placeholder="{{$contact[7]->content_en}}" style="resize: vertical"></textarea>
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
