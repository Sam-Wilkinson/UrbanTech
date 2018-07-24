<!-- Blog Area Start -->
        <div class="total-blog-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="single-blog-post">
                    <h2>
                      @if(Session::get('locale') == 'nl')
                        @if($job->name_nl != "")
                        {{$job->name_nl}}
                        @else
                        {{$job->name_en}}
                        @endif
                      @elseif(Session::get('locale') == 'fr')
                        @if($job->name_fr != "")
                        {{$job->name_fr}}
                        @else
                        {{$job->name_en}}
                        @endif
                    @else
                    {{$job->name_en}}
                    @endif
                    </h2>
                  <div class="blog-image">
                    <a><img src="{{$job->image ? Storage::disk('jobs')->url($category->image):asset('theme/defaultImages/job0.jpg')}}" style="height:424px"alt="family"></a>
                  </div>
                  <h2>
                    @if(Session::get('locale') == 'nl')
                      @if($texts[0]->content_nl != "")
                      {{$texts[0]->content_nl}}
                      @else
                      {{$texts[0]->content_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($texts[0]->content_fr != "")
                      {{$texts[0]->content_fr}}
                      @else
                      {{$texts[0]->content_en}}
                      @endif
                    @else
                    {{$texts[0]->content_en}}
                    @endif
                    
                  </h2>
                  <p>
                    @if(Session::get('locale') == 'nl')
                      @if($job->description_nl != "")
                      {{$job->description_nl}}
                      @else
                      {{$job->description_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($job->description_fr != "")
                      {{$job->description_fr}}
                      @else
                      {{$job->description_en}}
                      @endif
                    @else
                    {{$job->description_en}}
                    @endif
                    
                  </p>
                  <h2>
                      @if(Session::get('locale') == 'nl')
                      @if($texts[1]->content_nl != "")
                      {{$texts[1]->content_nl}}
                      @else
                      {{$texts[1]->content_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($texts[1]->content_fr != "")
                      {{$texts[1]->content_fr}}
                      @else
                      {{$texts[1]->content_en}}
                      @endif
                    @else
                    {{$texts[1]->content_en}}
                    @endif
                    
                  </h2>
                  <p>
                    @if(Session::get('locale') == 'nl')
                      @if($job->skills_nl != "")
                      {{$job->skills_nl}}
                      @else
                      {{$job->skills_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($job->skills_fr != "")
                      {{$job->skills_fr}}
                      @else
                      {{$job->skills_en}}
                      @endif
                    @else
                    {{$job->skills_en}}
                    @endif
                    
                  </p>
                  <h2>
                  @if(Session::get('locale') == 'nl')
                      @if($texts[2]->content_nl != "")
                      {{$texts[2]->content_nl}}
                      @else
                      {{$texts[2]->content_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($texts[2]->content_fr != "")
                      {{$texts[2]->content_fr}}
                      @else
                      {{$texts[2]->content_en}}
                      @endif
                    @else
                    {{$texts[2]->content_en}}
                    @endif
                    
                  </h2>
                  <p>
                    @if(Session::get('locale') == 'nl')
                      @if($job->location_nl != "")
                      {{$job->location_nl}}
                      @else
                      {{$job->location_en}}
                      @endif
                    @elseif(Session::get('locale') == 'fr')
                      @if($job->location_fr != "")
                      {{$job->location_fr}}
                      @else
                      {{$job->location_en}}
                      @endif
                    @else
                    {{$job->location_en}}
                    @endif
                    
                    
                  </p>
                  <div class="download">
                      <a href="#">
                        @if(Session::get('locale') == 'nl')
                          @if($texts[3]->content_nl != "")
                          {{$texts[3]->content_nl}}
                          @else
                          {{$texts[3]->content_en}}
                          @endif
                        @elseif(Session::get('locale') == 'fr')
                          @if($texts[3]->content_fr != "")
                          {{$texts[3]->content_fr}}
                          @else
                          {{$texts[3]->content_en}}
                          @endif
                        @else
                        {{$texts[3]->content_en}}
                        @endif
                      </a>
                  </div>
                </div>
              
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="blog-sidebar-area">
                  <div class="single-sidebar">
                    <h2>Category</h2>
                    <div class="sidebar-category">
                      <ul>
                        @foreach($categories as $category)
                        <li>
                          <a class="{{$category->id == $job->categories_id? 'before':''}}">
                              @if(Session::get('locale') == 'nl')
                                @if($category->name_nl != "")
                                {{$category->name_nl}}
                                @else
                                {{$category->name_en}}
                                @endif
                              @elseif(Session::get('locale') == 'fr')
                                @if($category->name_fr!= "")
                                {{$category->name_fr}}
                                @else
                                {{$category->name_en}}
                                @endif
                              @else
                              {{$category->name_en}}
                              @endif
                            
                          </a>
                        </li>    
                        @endforeach               
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog Area End -->