<!-- Request for call back area start Here -->
        <div class="home-callback-area" style="padding:5px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="call-back-content">
                            <h2>{{$general[0]->content_en}}</h2>
                            <div class=" contact-us-page-area" style="padding-top:0">
                              <div class="row contact-box">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="single-contact-box">
                                          <p class=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{$general[1]->content_en}} ,{{$general[2]->content_en}},<br/><span>{{$general[3]->content_en}}, {{$general[4]->content_en}}.</span></p>
                                      </div>
                                  </div>
                                  <div class="w-100"></div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="single-contact-box">
                                          <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            {{$general[7]->content_en}}</p>
                                      </div>
                                  </div>
                                  <div class="w-100"></div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="single-contact-box">
                                          <p><i class="fa fa-phone" aria-hidden="true"></i>{{$general[5]->content_en}} <br/> <span>{{$general[6]->content_en}}</span></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                                        <option>Non Binary</option>
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
                                      <input type="text" name="subject" class="form-control" placeholder="{{$contact[6]->content_en}}">
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                        <textarea type="text" name="message" class="form-control" row="6" placeholder="{{$contact[7]->content_en}}" style="resize: vertical" ></textarea>
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
        <!-- Request for call back area end Here -->