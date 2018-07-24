@foreach($jobs as $job)
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center padding-top margin-top">
        <div class="single-project-one">
            <div class="project-feature-image">
                <a href="single-project.html"><img style="height:263px" src="{{$job->image ? Storage::disk('jobs')->url($category->image):asset('theme/defaultImages/job2.jpg')}}" alt=""></a>
                <div class="overley">
                    <ul>
                        <li><a href="{{route('job',['job'=>$job->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <h6><a href="{{route('job',['job'=>$job->id])}}">
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
            </h6>
        </div>
    </div> 
@endforeach
  