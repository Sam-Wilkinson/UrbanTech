@extends('layouts.front')
    @section('content')
    
        @include('partials.jobs-partials.banner')
                
        <!-- Our Project1 start here -->
        <div class="our-project-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="project-content-area">
                            @include('partials.jobs-partials.jobs')
                            <!-- pagination -->                          
                             <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <div class="pagination-area">
                                        {{ $jobs->links() }}
                                    </div>
                                 </div>
                            </div>
                            <!-- pagination end -->                       
                        </div>
                    </div>
                    @include('partials.jobs-partials.sidebar')
                </div>
            </div>
        </div>
        <!-- Our Project1 end here -->     
        
    @endsection