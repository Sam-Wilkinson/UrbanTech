<!-- Home page News start here -->
<div class="home-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                    
                <div class="site-section-area">
                    <h2>Jobs</h2>
                </div>
            </div>
        </div>
        <div class="row total-homenews">
            @php($i = 0)
            @foreach($jobs as $job)
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 <div class="single-news">
                     <div class="news-image">
                        <a href="{{route('job',['job' => $job->id])}}"><img src="{{$job->image ? Storage::disk('jobs-thumb')->url($job->image):asset('theme/defaultImages/job'.$i.'.jpg') }}" alt=""></a>
                         <div class="news-date">                                    
                            <p>
                                {{$job->created_at->format('d')}} 
                                <br/>
                                {{$job->created_at->format('F')}}
                                <br/>
                                {{$job->created_at->format('Y')}}
                            </p>
                        </div>
                     </div>
                     <h3>
                        <a href="{{route('job',['job' => $job->id])}}">
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
                            
                        </a>
                    </h3>
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
                 </div>
             </div> 
             @php($i++)
             @endforeach
        </div>                
    </div>
    <!-- Call to action area start here -->
        <div class="call-top-action">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                               <div class="subscribe-text">
                                   <h2>For more  <span>Information</span> about  our availible <span>Jobs</span></h2>
                               </div>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                               <div class="subscribe-now">
                                   <a href="{{route('jobs')}}">Check it out</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>       
        <!-- Call to action area end here -->       
</div>
<!-- Home page Blog end here -->