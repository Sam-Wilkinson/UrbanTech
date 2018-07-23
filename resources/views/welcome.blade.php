@extends('layouts.front')

@php($locale = Session::get('locale')) 
       
@section('content')

    @include('partials.welcome-partials.slider')
    @include('partials.welcome-partials.values')
    @include('partials.welcome-partials.ICT_Section1Test')
    @include('partials.welcome-partials.ICT_Section2')
    @include('partials.welcome-partials.resources')
    @include('partials.welcome-partials.jobs')
    @include('partials.welcome-partials.contact')
            
@endsection