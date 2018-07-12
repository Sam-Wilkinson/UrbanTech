@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    @include('partials.feedback-partials.notification')
    <div class="row">
        <h1 class="col-4">Texts</h1>
    </div>
@stop

@section('content')
<div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Value</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">ICT/Engineering</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Resources</a>
            <a class="nav-link" id="v-pills-jobs-tab" data-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">Resources</a>
            <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contact</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Text</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">List</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Section Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">{{$homeDescription->content_en}}</textarea>
                                <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row justify-content-between">
                            <h2 class="col-5">List Item</h2>
                            <h2 class="col-5">List Item Subtitle</h2>
                        </div>
                        <div class="row justify-content-between">
                            <ul class="list-group col-5">
                                @foreach($homeListTitles as $title)
                                <li class="list-group-item">
                                    <form class="row justify-content-between">
                                        <input type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                        <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                                    </form>
                                </li>
                                @endforeach
                                
                            </ul>
                            <ul class="list-group col-5">
                                <li class="list-group-item">
                                    <input type="text" readonly class="form-control-plaintext col-8" id="staticEmail" value="No Text Availible">
                                </li>
                                @foreach($homeListSubtitles as $subtitle)
                                <li class="list-group-item">
                                    <form class="row justify-content-between">
                                        <input type="text" class=" col-8 form-control" value="{{$subtitle->content_en}}">
                                        <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $subtitle->id])}}">Edit</button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Knowledge</a>
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Personnel</a>
                              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Services</a>
                              <a class="nav-item nav-link" id="nav-flex-tab" data-toggle="tab" href="#nav-flex" role="tab" aria-controls="nav-flex" aria-selected="false">Flexibility</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="my-2">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Section Title</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[0]->content_en}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                        </div>
                                    </form>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Section Content</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[1]->content_en}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="my-2">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Section Title</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[0]->content_en}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                        </div>
                                    </form>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Section Content</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[1]->content_en}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                        </div>
                                    </form>
                                    <div class="row justify-content-between">
                                        <h2 class="col-5">List Items</h2>
                                    </div>
                                    <ul class="list-group col-5">
                                        @foreach($valuesSection2list as $title)
                                            <li class="list-group-item">
                                                <form class="row justify-content-between">
                                                    <input type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                                    <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">ccc</div>
                            <div class="tab-pane fade" id="nav-flex" role="tabpanel" aria-labelledby="nav-flex-tab">ddd</div>
                          </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...cccccccccccccccccc</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...ddddddddddddddddd</div>
            <div class="tab-pane fade" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">...eeeeeeeeeeeeeeeeeeeee</div>
            <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">..ffffffffffffffffffffffffffffff</div>
          </div>
        </div>
      </div>
@stop

@section('bootstrapTab_js')

  
@stop
