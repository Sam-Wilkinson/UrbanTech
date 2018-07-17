@foreach($jobs as $job)
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center padding-top margin-top">
        <div class="single-project-one">
            <div class="project-feature-image">
                <a href="single-project.html"><img src="{{asset('theme/main/placeholder/img/project/3.jpg')}}" alt=""></a>
                <div class="overley">
                    <ul>
                        <li><a href="{{route('job',['job'=>$job->id])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <h6><a href="{{route('job',['job'=>$job->id])}}">{{$job->name_en}}</a></h6>
        </div>
    </div> 
@endforeach
  