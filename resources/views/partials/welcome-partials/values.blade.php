<!-- Home page value start here -->
        <div class="home-faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="faq-area">
                            <h2>Values</h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    @if(Session::get('locale') == 'nl')
                                      @if($values1[0]->content_nl !="")
                                           {{$values1[0]->content_nl}}
                                      @else
                                          {{$values1[0]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values1[0]->content_fr !="")
                                          {{$values1[0]->content_fr}}
                                      @else
                                           {{$values1[0]->content_en}}
                                      @endif
                                     
                                    @else
                                      {{$values1[0]->content_en}}
                                    @endif
                                     
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                  @if(Session::get('locale') == 'nl')
                                      @if($values1[1]->content_nl !="")
                                          {{$values1[1]->content_nl}}
                                      @else
                                          {{$values1[1]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values1[1]->content_fr !="")
                                          {{$values1[1]->content_fr}}
                                      @else
                                          {{$values1[1]->content_en}}
                                      @endif
                                    @else
                                      {{$values1[1]->content_en}}
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    @if(Session::get('locale') == 'nl')
                                      @if($values2[0]->content_nl !="")
                                          {{$values2[0]->content_nl}}
                                      @else
                                          {{$values2[0]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[0]->content_fr !="")
                                          {{$values2[0]->content_fr}}
                                      @else
                                          {{$values2[0]->content_en}}
                                      @endif
                                    @else
                                      {{$values2[0]->content_en}}
                                    @endif
                                    
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                  @if(Session::get('locale') == 'nl')
                                      @if($values2[1]->content_nl !="")
                                           {{$values2[1]->content_nl}}
                                      @else
                                           {{$values2[1]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[1]->content_fr !="")
                                           {{$values2[1]->content_fr}}
                                      @else
                                           {{$values2[1]->content_en}}
                                      @endif
                                    @else
                                      {{$values2[1]->content_en}}
                                    @endif
                      
                                  </div>
                                  <ul class="panel-body">

                                  @if(Session::get('locale') == 'nl')
                                      @if($values2[2]->content_nl !="")
                                          <li>{{$values2[2]->content_nl}}</li>
                                      @else
                                          <li>{{$values2[2]->content_en}}</li>
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[2]->content_fr !="")
                                          <li>{{$values2[2]->content_fr}}</li>
                                      @else
                                          <li>{{$values2[2]->content_en}}</li>
                                      @endif
                                    @else
                                      <li>{{$values2[2]->content_en}}</li>
                                    @endif

                                    @if(Session::get('locale') == 'nl')
                                      @if($values2[3]->content_nl !="")
                                          <li> {{$values2[3]->content_nl}}</li>
                                      @else
                                          <li> {{$values2[3]->content_en}}</li>
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[3]->content_fr !="")
                                          <li> {{$values2[3]->content_fr}}</li>
                                      @else
                                          <li> {{$values2[3]->content_en}}</li>
                                      @endif
                                    @else
                                      <li>{{$values2[3]->content_en}}</li>
                                    @endif

                                    @if(Session::get('locale') == 'nl')
                                      @if($values2[4]->content_nl !="")
                                          <li> {{$values2[4]->content_nl}}</li>
                                      @else
                                          <li> {{$values2[4]->content_en}}</li>
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[4]->content_fr !="")
                                          <li> {{$values2[4]->content_fr}}</li>
                                      @else
                                          <li> {{$values2[4]->content_en}}</li>
                                      @endif
                                    @else
                                      <li>{{$values2[4]->content_en}}</li>
                                    @endif

                                    @if(Session::get('locale') == 'nl')
                                      @if($values2[5]->content_nl !="")
                                          <li> {{$values2[5]->content_nl}}</li>
                                      @else
                                          <li> {{$values2[5]->content_en}}</li>
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values2[5]->content_fr != "")
                                          <li> {{$values2[5]->content_fr}}</li>
                                      @else
                                          <li> {{$values2[5]->content_en}}</li>
                                      @endif
                                    @else
                                      <li>{{$values2[5]->content_en}}</li>
                                    @endif

                      
                                    
                                  </ul>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    @if(Session::get('locale') == 'nl')
                                      @if($values3[0]->content_nl !="")
                                          {{$values3[0]->content_nl}}
                                      @else
                                          {{$values3[0]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values3[0]->content_fr != "")
                                          {{$values3[0]->content_fr}}
                                      @else
                                          {{$values3[0]->content_en}}
                                      @endif
                                    @else
                                      {{$values3[0]->content_en}}
                                    @endif
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    @if(Session::get('locale') == 'nl')
                                      @if($values3[1]->content_nl !="")
                                          {{$values3[1]->content_nl}}
                                      @else
                                          {{$values3[1]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values3[1]->content_fr != "")
                                          {{$values3[1]->content_fr}}
                                      @else
                                          {{$values3[1]->content_en}}
                                      @endif
                                    @else
                                      {{$values3[1]->content_en}}
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="headingFour">
                                    @if(Session::get('locale') == 'nl')
                                      @if($values4[0]->content_nl !="")
                                          {{$values4[0]->content_nl}}
                                      @else
                                          {{$values4[0]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values4[0]->content_fr != "")
                                          {{$values4[0]->content_fr}}
                                      @else
                                          {{$values4[0]->content_en}}
                                      @endif
                                    @else
                                      {{$values4[0]->content_en}}
                                    @endif
                                      
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
                                  <div class="panel-body">
                                  @if(Session::get('locale') == 'nl')
                                      @if($values4[1]->content_nl !="")
                                          {{$values4[1]->content_nl}}
                                      @else
                                          {{$values4[1]->content_en}}
                                      @endif
                                    @elseif(Session::get('locale') == 'fr')
                                      @if($values4[1]->content_fr != "")
                                          {{$values4[1]->content_fr}}
                                      @else
                                          {{$values4[1]->content_en}}
                                      @endif
                                    @else
                                      {{$values4[1]->content_en}}
                                    @endif
                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="faq-image-area">
                            <a><img src="{{asset('theme/defaultImages/services.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home page faq end here -->