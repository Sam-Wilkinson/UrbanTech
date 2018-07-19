<!-- Blog Area Start -->
        <div class="total-blog-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="single-blog-post">
                    <h2>{{$job->name_en}}</h2>
                  <div class="blog-image">
                    <a><img src="{{$job->image ? Storage::disk('jobs')->url($category->image):asset('theme/defaultImages/job0.jpg')}}" style="height:424px"alt="family"></a>
                  </div>
                  <h2>{{$texts[0]->content_en}}</h2>
                  <p>{{$job->description_en}}</p>
                  <h2>{{$texts[1]->content_en}}</h2>
                  <p>{{$job->skills_en}}</p>
                  <h2>{{$texts[2]->content_en}}</h2>
                  <p>{{$job->location_en}}</p>
                  <div class="download">
                      <a href="#">{{$texts[3]->content_en}}</a>
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
                          <a class="{{$category->id == $job->categories_id? 'before':''}}">{{$category->name_en}}</a>
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