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
                                <img class="media-object" style="height:70px;width;62px" src="{{$job->image ? Storage::disk('jobs-tiny')->url($job->image):asset('theme/defaultImages/job0.jpg') }}" alt="post">
                            </a>
                        </div>
                        <div class="media-body">                                            
                            <div class="posted-date">
                                <a href="{{route('job',['job'=>$job->id])}}">{{$job->created_at->format('F')}} {{$job->created_at->format('d')}}, {{$job->created_at->format('Y')}}</a>
                            </div>
                            <p>
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
                                
                            </p>                 
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
                            <a class="{{isset($category)? $category == $cat->id? 'before':'':'before'}}" href="{{route('category',['category'=>$cat->id])}}">
                                @if(Session::get('locale') == 'nl')
                                    @if($cat->name_nl != "")
                                    {{$cat->name_nl}}
                                    @else
                                    {{$cat->name_en}}
                                    @endif
                                @elseif(Session::get('locale') == 'fr')
                                    @if($cat->name_fr != "")
                                    {{$cat->name_fr}}
                                    @else
                                    {{$cat->name_en}}
                                    @endif
                                @else
                                {{$cat->name_en}}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
