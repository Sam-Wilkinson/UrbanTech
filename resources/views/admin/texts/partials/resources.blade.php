<!-- Section 4 Nav -->
<div class="nav-tabs-custom">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-rtext-tab" data-toggle="tab" href="#nav-rtext" role="tab" aria-controls="nav-rtext" aria-selected="true">Text</a>
        <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Administration</a>
        <a class="nav-item nav-link" id="nav-engineer-tab" data-toggle="tab" href="#nav-engineer" role="tab" aria-controls="nav-engineer" aria-selected="false">Engineer</a>
        <a class="nav-item nav-link" id="nav-expert-tab" data-toggle="tab" href="#nav-expert" role="tab" aria-controls="nav-expert" aria-selected="false">Experts</a>
        <a class="nav-item nav-link" id="nav-pcexpert-tab" data-toggle="tab" href="#nav-pcexpert" role="tab" aria-controls="nav-pcexpert" aria-selected="false">Computer Expert</a>
    </div>
</div>
<!-- Section 4 Content -->
    <div class="tab-content" id="nav-tabContent">
        <!-- Subsection text form -->
        <div class="tab-pane fade show active" id="nav-rtext" role="tabpanel" aria-labelledby="nav-rtext-tab">
                <div class="my-2">
                    <form method="POST" action="{{route('texts.update',['text' => $recText->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$recText->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                </div>
        </div>
        <!-- Subsection 1-->
        <div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                <div class="my-2">
                    <!-- Subsection 1 title form -->
                    <form method="POST" action="{{route('texts.update',['text' => $recSection1title->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$recSection1title ->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                <!-- Subsection 1 list form -->
                <div class="row justify-content-between">
                    <h2 class="col-5">List Items</h2>
                </div>
                <ul class="list-group col-5">
                    @foreach($recSection1list as $title)
                        <li class="list-group-item">
                            <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                    @csrf
                                    @method('PUT')
                                <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Subsection 2 -->
        <div class="tab-pane fade" id="nav-engineer" role="tabpanel" aria-labelledby="nav-engineer-tab">
                <div class="my-2">
                        <!-- Subsection 2 title form -->
                    <form method="POST" action="{{route('texts.update',['text' => $recSection2title->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$recSection2title ->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                
                <!-- Subsection 2 list form -->
                <div class="row justify-content-between">
                    <h2 class="col-5">List Items</h2>
                </div>
                <ul class="list-group col-5">
                    @foreach($recSection2list as $title)
                        <li class="list-group-item">
                            <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                    @csrf
                                    @method('PUT')
                                <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Subsection 3-->
        <div class="tab-pane fade" id="nav-expert" role="tabpanel" aria-labelledby="nav-expert-tab">
            <div class="my-2">
                    <!-- Subsection 3 title form -->
                    <form method="POST" action="{{route('texts.update',['text' => $recSection3title->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$recSection3title ->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                
                <!-- Subsection3 list form -->
                <div class="row justify-content-between">
                    <h2 class="col-5">List Items</h2>
                </div>
                <ul class="list-group col-5">
                    @foreach($recSection3list as $title)
                        <li class="list-group-item">
                            <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                    @csrf
                                    @method('PUT')
                                <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Subsection 4-->
        <div class="tab-pane fade" id="nav-pcexpert" role="tabpanel" aria-labelledby="nav-pcexpert-tab">
                <div class="my-2">
                        <!-- Subsection4 title form -->
                    <form method="POST" action="{{route('texts.update',['text' => $recSection4title->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$recSection4title ->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                
                <!-- Subsection4 list form -->
                <div class="row justify-content-between">
                    <h2 class="col-5">List Items</h2>
                </div>
                <ul class="list-group col-5">
                    @foreach($recSection4list as $title)
                        <li class="list-group-item">
                            <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                    @csrf
                                    @method('PUT')
                                <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
