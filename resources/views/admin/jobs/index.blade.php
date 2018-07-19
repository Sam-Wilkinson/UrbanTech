@extends('adminlte::page')

@section('title', 'Jobs')

@section('content_header')
    @include('partials.feedback-partials.notification')
    <h1>Jobs</h1>
@stop

@section('content')
<div>
    <a href="{{route('jobs.create')}}" class="btn btn-success pull-right">Create New Job</a>
</div>
    <table class="table box">
        <thead class="">
            <tr >
                <th>#</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Location</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody class="box-body">
            <?php $count = 1; ?>
            @forEach($jobs as $job)
            <tr >
                <td>{{$jobs->perPage()*($jobs->currentPage()-1)+$count}}</td>
                <?php $count++; ?>
                <td>{{$job->name_en}}</td>
                <td>{{$job->created_at}}</td>
                <td>{{$job->location_en}}</td>
                <td>
                    <a href="{{route('jobs.show',['job'=>$job->id])}}" class="btn btn-success">GO</a>
                </td>
            </tr>
            @endforEach
        </tbody>
    </table>
    <div class="d-flex justify-content-center box-footer">
        <div class="pagination-area">
            {!!$jobs->links();!!}
        </div>
    </div>
@stop