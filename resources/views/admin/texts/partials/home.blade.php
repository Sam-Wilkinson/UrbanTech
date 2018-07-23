<!-- Home Nav -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
            <!-- Home Text button -->
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Text</a>
        </li>
        <!-- Home List button -->
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">List</a>
        </li>
    </ul>
</div>
    <!-- Home Content -->
    <div class="tab-content" id="myTabContent">
        <!-- Home Tab 1 -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Home Text Form -->
            <form method="POST" action="{{route('texts.update',['text' => $homeDescription->id])}}">
                @csrf
                @method('PUT')
                <h2>Section Description</h2>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">English</label>
                    <textarea name="text_en" class="form-control" id="exampleFormControlTextarea1" rows="10">{{$homeDescription->content_en}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Francais</label>
                    <textarea name="text_fr" class="form-control" id="exampleFormControlTextarea1" rows="10">{{$homeDescription->content_fr}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nederlands</label>
                    <textarea name="text_nl" class="form-control" id="exampleFormControlTextarea1" rows="10">{{$homeDescription->content_nl}}</textarea>
                    <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                </div>
            </form>
        </div>
        <!-- Home Tab 2 -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Home List Titles -->
            <div class="row justify-content-between">
                <h2 class="col-5">List Item</h2>
                <h2 class="col-5">List Item Subtitle</h2>
            </div>
            <!-- Home Lists -->
            <div class="row justify-content-between pl-2">
                <!-- Home List title Forms -->
                <ul class="list-group col-5">
                    @foreach($homeListTitles as $title)
                    <li class="list-group-item my-2">
                        <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                @csrf
                                @method('PUT')
                            <input name="text_en" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                            <input name="text_fr" type="text" class=" col-8 form-control" value="{{$title->content_fr}}">
                            <input name="text_nl" type="text" class=" col-8 form-control" value="{{$title->content_nl}}">

                            <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                <!-- Home List Subtitle Forms -->
                <ul class="list-group col-5">
                    <li class="list-group-item my-2">
                        <input name="text_en" type="text" readonly class="form-control-plaintext col-8" id="staticEmail" value="No Text Availible">
                        <input name="text_fr" type="text" readonly class="form-control-plaintext col-8" id="staticEmail" value="No Text Availible">
                        <input name="text_nl" type="text" readonly class="form-control-plaintext col-8" id="staticEmail" value="No Text Availible">
                    </li>
                    @foreach($homeListSubtitles as $subtitle)
                    <li class="list-group-item my-2">
                        <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $subtitle->id])}}">
                                @csrf
                                @method('PUT')
                            <input  name="text_en" type="text" class=" col-8 form-control" value="{{$subtitle->content_en}}">
                            <input  name="text_fr" type="text" class=" col-8 form-control" value="{{$subtitle->content_fr}}">
                            <input  name="text_nl" type="text" class=" col-8 form-control" value="{{$subtitle->content_nl}}">
                            <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $subtitle->id])}}">Edit</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>       
    </div>