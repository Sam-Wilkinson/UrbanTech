@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @include('partials.feedback-partials.notification')
    <div class="row">
        <h1 class="col-4">Categories</h1>
        <div class="col-4 offset-4">
            <a href="{{route('categories.create')}}" class="btn btn-success">Create</a>
        </div>
    </div>
@stop

@section('content')
<div class="row">
    @foreach($categories as $category)
    <div class="col-md-4 col-sm-6 ">
            <div class="card m-5">
                <div class="card-img-top d-flex mt-3">
                    <img class="m-auto" style="width:60px;height:60px"src="{{$category->image ? Storage::disk('categories')->url($category->image):asset('theme/defaultImages/category.png') }}" alt="">
                </div>
                <div class="card-body">
                        <h2 class="card-title text-center">{{$category->name_en}}</h2>
                    <ul class="list-group ">
                        @foreach($category->jobs as $job)
                            <a href="{{route('jobs.show',['job' => $job->id])}}"class="list-group-item">{{$job->name_en}}</a>
                        @endforeach
                    </ul>
                    <div class="row justify-content-around card-body">
                        <div class="card-link">
                            <a class="btn btn-warning text-dark" href="{{route('categories.edit',['category' => $category->id])}}">Edit</a>
                        </div>
                        <form action="{{route('categories.destroy',['category' => $category->id])}}" method="POST" class="d-inline col-4 card-link">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Archive</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@stop
