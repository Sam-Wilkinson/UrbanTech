<div>
    <!-- Section 1 -->
    <h2>SubSection Title 1</h2>
    <form method="POST" action="{{route('texts.update',['text' => $jobText[0]->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlTextarea1">English</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[0]->content_en}}</textarea>
           
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Francais</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[0]->content_fr}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nederlands</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[0]->content_nl}}</textarea>
            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
        </div>
    </form>

    <!-- Section 2 -->
    <h2>SubSection Title 2</h2>
    <form method="POST" action="{{route('texts.update',['text' => $jobText[1]->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlTextarea1">English</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[1]->content_en}}</textarea>
           
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Francais</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[1]->content_fr}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nederlands</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[1]->content_nl}}</textarea>
            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
        </div>
    </form>

    <!-- Section 3 -->
     <h2>SubSection Title 3</h2>
    <form method="POST" action="{{route('texts.update',['text' => $jobText[2]->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlTextarea1">English</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[2]->content_en}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Francais</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[2]->content_fr}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nederlands </label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[2]->content_nl}}</textarea>
            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
        </div>
    </form>

    <!-- Section 4-->
    <h2>Button Text</h2>
    <form method="POST" action="{{route('texts.update',['text' => $jobText[3]->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlTextarea1"> English </label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[3]->content_en}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"> Francais</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[3]->content_fr}}</textarea>
            
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"> Nederlands</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$jobText[3]->content_nl}}</textarea>
            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
        </div>
    </form>
</div>