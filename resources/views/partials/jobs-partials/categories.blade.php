<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="blog-sidebar-area">
          <div class="single-sidebar">
            <h2>Categories</h2>
            <div class="sidebar-category">
              <ul>
                    @foreach($categories as $category)
                        <li><a href="{{route('category',['category'=>$category->id])}}">{{$category->name_en}}</a></li>
                    @endforeach
              </ul>
            </div>
          </div>
          <div class="single-sidebar">
            <a href="contact.html"><img src="{{asset('theme/main/placeholder/img/contact-add.jpg" alt=""></a>
          </div>
        </div>
      </div>