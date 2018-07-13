<!-- Section 6 Nav -->

<nav class="nav-tabs-custom">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
        <a class="nav-item nav-link" id="nav-contacting-tab" data-toggle="tab" href="#nav-contacting" role="tab" aria-controls="nav-contacting" aria-selected="false">Contact</a>
    </div>
</nav>
<!-- Section 6 Content -->
        <div class="tab-content" id="nav-tabContent">
            <!-- Subsection 1 forms -->
            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                <div class="my-2">
                    <!-- Title Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[0]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section Title</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[0]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Name Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[1]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Name</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[1]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Street Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[2]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Street</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[2]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- City Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[3]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">City</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[3]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Country Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[4]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Country</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[4]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Phone form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[5]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phone number</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[5]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Fax form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[6]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Fax Number</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[6]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>
                    <!-- Email Form -->
                    <form method="POST" action="{{route('texts.update',['text' => $address[7]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[7]->content_en}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>                           
                </div>
            </div>
        <!-- Subsection 2 forms -->
        <div class="tab-pane fade" id="nav-contacting" role="tabpanel" aria-labelledby="nav-contacting-tab">
            <div class="my-2">
                <!-- Title form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[0]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Section Title</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[0]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Prefix form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[1]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Prefix</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[1]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- First Name form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[2]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">First Name</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[2]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Last Name form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[3]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Last Name</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[3]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Email form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[4]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">E mail</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[4]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Firm form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[5]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Firm</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[5]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Subject form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[6]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Subject</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[6]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
                <!-- Message Form -->
                <form method="POST" action="{{route('texts.update',['text' => $contact[7]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[7]->content_en}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>