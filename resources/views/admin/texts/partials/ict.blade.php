<!-- ICT Nav -->
<nav class="nav-tabs-custom">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-text-tab" data-toggle="tab" href="#nav-text" role="tab" aria-controls="nav-text" aria-selected="true">Text</a>
        <a class="nav-item nav-link" id="nav-ICT-tab" data-toggle="tab" href="#nav-ICT" role="tab" aria-controls="nav-ICT" aria-selected="false">ICT</a>
        <a class="nav-item nav-link" id="nav-Engineering-tab" data-toggle="tab" href="#nav-Engineering" role="tab" aria-controls="nav-Engineering" aria-selected="false">Engineering</a>
    </div>
</nav>
<!-- ICT Content -->
      <div class="tab-content" id="nav-tabContent">
            <!-- ICT Subsection 1 -->
        <div class="tab-pane fade show active" id="nav-text" role="tabpanel" aria-labelledby="nav-text-tab">
              <!-- ICT main text form-->
              <form method="POST" action="{{route('texts.update',['text' => $ICTText->id])}}">
                    @csrf
                    @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Section Title</label>
                          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$ICTText->content_en}}</textarea>
                          <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                      </div>
              </form>
        </div>
        <!-- ICT Subsection 2 -->
        <div class="tab-pane fade" id="nav-ICT" role="tabpanel" aria-labelledby="nav-ICT-tab">
              <div class="my-2">
                      <!-- subsection text form -->
                  <form method="POST" action="{{route('texts.update',['text' => $ICTSection1Texts[0]->id])}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Section Title</label>
                          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$ICTSection1Texts[0]->content_en}}</textarea>
                          <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                      </div>
                  </form>
                  <form method="POST" action="{{route('texts.update',['text' => $ICTSection1Texts[1]->id])}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Section Content</label>
                          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$ICTSection1Texts[1]->content_en}}</textarea>
                          <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                      </div>
                  </form>
                  <!-- subsection list forms -->
                  <div class="row justify-content-between">
                      <h2 class="col-5">List Items</h2>
                  </div>
                  <ul class="list-group col-5">
                      @foreach($ICTSection1list as $title)
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
          <!-- ICT Subsection 3 -->
        <div class="tab-pane fade" id="nav-Engineering" role="tabpanel" aria-labelledby="nav-Engineering-tab">
              <div class="my-2">
                      <!-- subsection text forms -->
                  <form method="POST" action="{{route('texts.update',['text' => $ICTSection2Texts[0]->id])}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Section Title</label>
                          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$ICTSection2Texts[0]->content_en}}</textarea>
                          <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                      </div>
                  </form>
                  <form method="POST" action="{{route('texts.update',['text' => $ICTSection2Texts[1]->id])}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Section Content</label>
                          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$ICTSection2Texts[1]->content_en}}</textarea>
                          <button type="submit" class="btn btn-warning text-dark mt-2"s>Edit</button>
                      </div>
                  </form>
                  <!-- subsection list forms -->
                  <div class="row justify-content-between">
                      <h2 class="col-5">List Items</h2>
                  </div>
                  <ul class="list-group col-5">
                      @foreach($ICTSection2list as $title)
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