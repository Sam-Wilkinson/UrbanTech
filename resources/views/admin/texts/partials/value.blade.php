<!-- Value Nav -->
                    <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <!-- Knowledge subsection -->
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{$valuesSection1[0]->content_en}}</a>
                                <!-- Personnel subsection -->
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{$valuesSection2Texts[0]->content_en}}</a>
                              <!-- Services subsection -->
                              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">{{$valuesSection3[0]->content_en}}</a>
                              <!-- Flexibility subsection -->
                              <a class="nav-item nav-link" id="nav-flex-tab" data-toggle="tab" href="#nav-flex" role="tab" aria-controls="nav-flex" aria-selected="false">{{$valuesSection4[0]->content_en}}</a>
                            </div>
                          </nav>
<!-- Value Content -->
                          <div class="tab-content" id="nav-tabContent">
                              <!-- Subsection1  -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="my-2">
                                <h2>Section Title</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection1[0]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[0]->content_en}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[0]->content_fr}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Nederlands</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[0]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                        </div>
                                    </form>
                                    <h2>Section Content</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection1[1]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[1]->content_en}}</textarea>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[1]->content_fr}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Nederlands</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection1[1]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Subsection 2 -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="my-2">
                                <h2>Section Title</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection2Texts[0]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[0]->content_en}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[0]->content_fr}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Nederlands</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[0]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                        </div>
                                    </form>
                                    <h2>Section Content</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection2Texts[1]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[1]->content_en}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[1]->content_fr}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Nederlands</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection2Texts[1]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                        </div>
                                    </form>
                                    <div class="row justify-content-between">
                                        <h2 class="col-5">List Items</h2>
                                    </div>
                                    <ul class="list-group col-5">
                                        @foreach($valuesSection2list as $title)
                                            <li class="list-group-item">
                                                <form class="row justify-content-between" method="POST" action="{{route('texts.update',['text' => $title->id])}}">
                                                        @csrf
                                                        @method('PUT')
                                                    <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_en}}">
                                                    <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_fr}}">
                                                    <input name="text" type="text" class=" col-8 form-control" value="{{$title->content_nl}}">
                                                    <button class="btn btn-warning text-dark" href="{{route('texts.edit',['text' => $title->id])}}">Edit</button>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Subsection 3 -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="my-2">
                                <h2>Section Title</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection3[0]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[0]->content_en}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[0]->content_fr}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Section Title</label>
                                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[0]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                        </div>
                                    </form>
                                    <h2>Section Content</h2>
                                    <form method="POST" action="{{route('texts.update',['text' => $valuesSection3[1]->id])}}">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">English</label>
                                            <textarea  name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[1]->content_en}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Francais</label>
                                            <textarea  name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[1]->content_fr}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Nederlands</label>
                                            <textarea  name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection3[1]->content_nl}}</textarea>
                                            <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Subsection 4 -->
                            <div class="tab-pane fade" id="nav-flex" role="tabpanel" aria-labelledby="nav-flex-tab">
                                    <div class="my-2">
                                    <h2>Section Title</h2>
                                            <form method="POST" action="{{route('texts.update',['text' => $valuesSection4[0]->id])}}">
                                                    @csrf
                                                    @method('PUT')
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">English</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[0]->content_en}}</textarea>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Francais</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[0]->content_fr}}</textarea>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Nederlands</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[0]->content_nl}}</textarea>
                                                    <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                                                </div>
                                            </form>
                                            <h2>Section Content</h2>
                                            <form method="POST" action="{{route('texts.update',['text' => $valuesSection4[0]->id])}}">
                                                    @csrf
                                                    @method('PUT')
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">English</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[1]->content_en}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Francais</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[1]->content_fr}}</textarea>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Nederlands</label>
                                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$valuesSection4[1]->content_nl}}</textarea>
                                                    <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                                                </div>
                                            </form>
                                        </div>
                            </div>
                          </div>