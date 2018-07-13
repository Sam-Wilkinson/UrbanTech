@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @include('partials.feedback-partials.notification')
    <div class="row">
        <h1 class="col-4">Texts</h1>
    </div>
@stop

@section('content')
<div class="row mr-2">
        <!-- Vertical tabs for each section of the website -->
        <div class="col-3">
            @include('admin.texts.partials.main_nav')
        </div>
        <!-- Content of the pages -->
        <div class="col-9 box box-info pb-2">
            <div class="tab-content" id="v-pills-tabContent">

                <!-- section 1 Home-->     
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">   
                    @include('admin.texts.partials.home')
                </div>
            
                <!-- Section 2 Value -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    @include('admin.texts.partials.value')
                </div>
                
                <!-- Section 3 ICT -->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    @include('admin.texts.partials.ict')        
                </div>
                
                <!-- Section 4 Resources -->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    @include('admin.texts.partials.resources')        
                </div>

                <!-- Section 5 Jobs -->
                <div class="tab-pane fade" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
                    @include('admin.texts.partials.jobs')
                </div>

                <!-- Section 6 Contact-->
                <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                    @include('admin.texts.partials.contact')
                </div>
            </div>
        </div>
</div>
@stop

@section('bootstrapTab_js')

  
@stop
