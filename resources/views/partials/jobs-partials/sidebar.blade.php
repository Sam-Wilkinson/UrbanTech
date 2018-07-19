<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="news-page-area">
        <div class="sidebar-area">
            <div class="single-sidebar">
              <h2>SEARCH</h2>
                <form action="{{route('searching')}}" method="get">
                    @csrf
                    @method('GET')
                    <div class="sidebar-search">
                        <input type="text" placeholder="Search Name Here..." name="search">
                        <span>
                            <button type="submit"><i class="fa fa-search"></i></button> 
                        </span>
                    </div>
                </form>
                </div>
            <div class="single-sidebar">
            <h2>Recent Jobs</h2>
                <div class="sidebar-recent-post">
                    @foreach($recentJobs as $job)
                    <div class="media single-post">
                        <div class="pull-left">
                            <a  href="{{route('job',['job'=>$job->id])}}">
                                <img class="media-object" style="height:70px;width;62px" src="{{$job->image ? Storage::disk('jobs')->url($category->image):asset('theme/defaultImages/job0.jpg') }}" alt="post">
                            </a>
                        </div>
                        <div class="media-body">                                            
                            <div class="posted-date">
                                <a href="{{route('job',['job'=>$job->id])}}">{{$job->created_at->format('F')}} {{$job->created_at->format('d')}}, {{$job->created_at->format('Y')}}</a>
                            </div>
                            <p>{{$job->name_en}}</p>                 
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
    <div class="blog-sidebar-area">
        <div class="single-sidebar">
            <h2>Categories</h2>
            <div class="sidebar-category">
                <ul>
                    @foreach($categories as $cat)
                        <li>
                            <a class="{{isset($category)? $category == $cat->id? 'before':'':'before'}}" href="{{route('category',['category'=>$cat->id])}}">{{$cat->name_en}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
