@extends('adminlte::page')

@section('title', 'Projects')

@section('content_header')
    <h1> Add a Job</h1>
@stop

@section('content')
<form method="POST" action="{{route('jobs.store')}}" enctype="multipart/form-data">
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
    
    <div class="p-1 my-1">
        <label for="">Name in English *</label>
        <input type="text" name="name_en" id="name_en" class="form-control border {{$errors->has('name_en')? 'border-danger': ''}}" value="{{old('name_en')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
        <label for="">Location in English *</label>
        <input type="text" name="location_en" id="location_en" class="form-control border {{$errors->has('location_en')? 'border-danger': ''}}" value="{{old('location_en')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
        <label for="">Description in English*</label>
        <textarea class="form-control border {{$errors->has('description_en')? 'border-danger': ''}}" name="description_en" id="description_en" rows="3" placeholder="">{{old('description_en')}}</textarea>
    </div>

    <div class="p-1 my-1">
        <label for="">Skills in English *</label>
        <textarea class="form-control border {{$errors->has('skills_en')? 'border-danger': ''}}" name="skills_en" id="skills_en" rows="3" placeholder="">{{old('skills_en')}}</textarea>
    </div>




    <div class="p-1 my-2">
        <label for="">Name in French</label>
        <input type="text" name="name_fr" id="name_fr" class="form-control border {{$errors->has('name_fr')? 'border-danger': ''}}" value="{{old('name_fr')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
        <label for="">Location in French</label>
        <input type="text" name="location_fr" id="location_fr" class="form-control border {{$errors->has('location_fr')? 'border-danger': ''}}" value="{{old('location_fr')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
            <label for="">Description in French</label>
            <textarea class="form-control border {{$errors->has('description_fr')? 'border-danger': ''}}" name="description_fr" id="description_fr" rows="3" placeholder="">{{old('description_fr')}}</textarea>
        </div>
    
        <div class="p-1 my-1">
            <label for="">Skills in French</label>
            <textarea class="form-control border {{$errors->has('skills_fr')? 'border-danger': ''}}" name="skills_fr" id="skills_fr" rows="3" placeholder="">{{old('skills_fr')}}</textarea>
        </div>




    <div class="p-1 my-2">
        <label for="">Name in Dutch</label>
        <input type="text" name="name_nl" id="name_nl" class="form-control border {{$errors->has('name_nl')? 'border-danger': ''}}" value="{{old('name_nl')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
        <label for="">Location in Dutch</label>
        <input type="text" name="location_nl" id="location_nl" class="form-control border {{$errors->has('location_nl')? 'border-danger': ''}}" value="{{old('location_nl')}}" aria-describedby="helpId">
    </div>

    <div class="p-1 my-1">
            <label for="">Description in Dutch</label>
            <textarea class="form-control border {{$errors->has('description_nl')? 'border-danger': ''}}" name="description_nl" id="description_nl" rows="3" placeholder="">{{old('description_nl')}}</textarea>
        </div>
    
        <div class="p-1 my-1">
            <label for="">Skills in Dutch</label>
            <textarea class="form-control border {{$errors->has('skills_nl')? 'border-danger': ''}}" name="skills_nl" id="skills_nl" rows="3" placeholder="">{{old('skills_nl')}}</textarea>
        </div>

    <div class="p-1 my-1">    
        <label for="">Image</label>
        <div class="custom-file my-3 p-1">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image" >Choose file</label>
        </div>
    </div>

    <div class="p-1 my-1">
        <label for="">Category</label>
        @foreach($categories as $category)
            <div class="border bg-light p-3 mx-2">
                <input type="radio" id="category" name="category" value="{{$category->id}}"><label for="coding">{{$category->name_en}}</label>
            </div>
        @endforeach
        @can('admin-only')
        <div class="border bg-light p-3 mx-2">
            <a class="text-dark" href="{{route('categories.create')}}">Create a Category</a>
        </div>
        @endcan
    </div>  
    <div class="row justify-content-end px-4">
        <button class="btn btn-success mt-3" type="submit">Create</button>
    </div>
</form>

@stop

@section('CKEditor_js')
<script>
        CKEDITOR.replace( 'description_en' );
        CKEDITOR.replace( 'skills_en' );
        CKEDITOR.replace( 'description_fr' );
        CKEDITOR.replace( 'skills_fr' );
        CKEDITOR.replace( 'description_nl' );
        CKEDITOR.replace( 'skills_nl' );
</script>
@endsection