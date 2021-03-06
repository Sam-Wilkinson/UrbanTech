@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data" class="box">
    @csrf
    @method('POST')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="p-1 my-2">
        <label class="box-header" for="">Name in English * </label>
        <input type="text" name="name_en" id="name" class="form-control border {{$errors->has('name
        _en')? 'border-danger': ''}}" value="{{old('name_en')}}" aria-describedby="helpId">
    </div>
    <div class="p-1 my-2">
        <label class="box-header"  for="">Name in French</label>
        <input type="text" name="name_fr" id="name" class="form-control border {{$errors->has('name
            _fr')? 'border-danger': ''}}" value="{{old('name_fr')}}" aria-describedby="helpId">
    </div>
    <div class="p-1 my-2">
        <label class="box-header" for="">Name in Dutch</label>
        <input type="text" name="name_nl" id="name" class="form-control border {{$errors->has('name
            _nl')? 'border-danger': ''}}" value="{{old('name_nl')}}" aria-describedby="helpId">
    </div>

    <div class="custom-file my-3 p-1">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Choose file</label>
    </div>

    <button class="btn btn-success mt-3 pull-right" type="submit">Create</button>
</form>
@stop