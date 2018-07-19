<!-- Home page News start here -->
<div class="home-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                    
                <div class="site-section-area">
                    <h2>Latest Jobs</h2>
                </div>
            </div>
        </div>
        <div class="row total-homenews">
            @php($i = 0)
            @foreach($jobs as $job)
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 <div class="single-news">
                     <div class="news-image">
                        <a href="{{route('job',['job' => $job->id])}}"><img src="{{$job->image ? Storage::disk('jobs')->url($category->image):asset('theme/defaultImages/job'.$i.'.jpg') }}" alt=""></a>
                         <div class="news-date">                                    
                         <p>{{$job->created_at->format('d')}} <br/>{{$job->created_at->format('F')}}<br/>{{$job->created_at->format('Y')}}</p>
                         </div>
                     </div>
                     <h3><a href="{{route('job',['job' => $job->id])}}">{{$job->name_en}}</a></h3>
                     <p>{{$job->location_en}}</p>
                 </div>
             </div> 
             @php($i++)
             @endforeach
        </div>                
    </div>
</div>
<!-- Home page Blog end here -->