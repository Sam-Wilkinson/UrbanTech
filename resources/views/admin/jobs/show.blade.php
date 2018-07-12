@extends('adminlte::page')

@section('title', 'Jobs')

@section('job_css')
<link rel="stylesheet" href="{{asset('theme/main/placeholder/style.css')}}">
@endsection

@section('content_header')
    @include('partials.feedback-partials.notification')
@stop
    
@section('content')

    <div class="total-blog-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="single-blog-post">
                <div class="blog-image">
                  <a href="single.html"><img class="img-fluid" src="{{asset('theme/main/placeholder/img/single-services.jpg')}}" alt="family"></a>
                </div>
                <h2>{{$job->name_en}}</h2>
                <p>{!! $job->description_en !!}</p>
                <h2>Skills</h2>
                <p>{!! $job->skills_en !!}</p>
              </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="blog-sidebar-area">
                <div class="single-sidebar">
                  <h2>Category</h2>
                  <div class="sidebar-category">
                    <ul>
                      <li><a href="{{route('categories.index')}}">{{$job->category->name_en}}</a></li>
                    </ul>
                  </div>
                </div>
                <div class="single-sidebar">
                  <h2>Admin</h2>
                  <div class="sidebar-testimonial">
                    <div class="single-testimonia">
                        <div class="testimonial-conten">
                            <a class="btn btn-warning text-dark d-inline mx-3 py-2 px-3" href="{{route('jobs.edit',['job' => $job->id])}}">Edit</a>
                            <form action="{{route('jobs.destroy',['job' => $job->id])}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Archive</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop
