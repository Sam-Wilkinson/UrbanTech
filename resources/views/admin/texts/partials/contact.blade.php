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
                    <h2>Section Title</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[0]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[0]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[0]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[0]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Name Form -->
                    <h2>Name</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[1]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[1]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[1]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[1]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Street Form -->
                    <h2>Street</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[2]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[2]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[2]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[2]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- City Form -->
                    <h2>City</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[3]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[3]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[3]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[3]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Country Form -->
                    <h2>Country </h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[4]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[4]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[4]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[4]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Phone form -->
                    <h2>Phone Number</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[5]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[5]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[5]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[5]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Fax form -->
                    <h2>Fax Number </h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[6]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[6]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[6]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[6]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>

                    <!-- Email Form -->
                    <h2>Email</h2>
                    <form method="POST" action="{{route('texts.update',['text' => $address[7]->id])}}">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">English</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[7]->content_en}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Francais</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[7]->content_fr}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nederlands</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$address[7]->content_nl}}</textarea>
                            <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                        </div>
                    </form>     

                </div>
            </div>

        <!-- Subsection 2 forms -->
        <div class="tab-pane fade" id="nav-contacting" role="tabpanel" aria-labelledby="nav-contacting-tab">
            <div class="my-2">

                <!-- Title form -->
                <h2>Section Title</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[0]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[0]->content_en}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[0]->content_fr}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[0]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Prefix form -->
                <h2>Prefix</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[1]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[1]->content_en}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[1]->content_fr}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[1]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- First Name form -->
                <h2>First Name</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[2]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">First Name</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[2]->content_en}}</textarea>
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">First Name</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[2]->content_fr}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">First Name</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[2]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Last Name form -->
                <h2>Last Name </h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[3]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[3]->content_en}}</textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[3]->content_fr}}</textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[3]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Email form -->
                <h2>E mail</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[4]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[4]->content_en}}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[4]->content_fr}}</textarea>
                    
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[4]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Firm form -->
                <h2>Firm</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[5]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[5]->content_en}}</textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[5]->content_fr}}</textarea>
                     
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[5]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Subject form -->
                <h2>Subject</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[6]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[6]->content_en}}</textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[6]->content_fr}}</textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[6]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

                <!-- Message Form -->
                <h2>Message</h2>
                <form method="POST" action="{{route('texts.update',['text' => $contact[7]->id])}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">English</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[7]->content_en}}</textarea>
                    
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Francais</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[7]->content_fr}}</textarea>
                    
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nederlands</label>
                        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact[7]->content_nl}}</textarea>
                        <button type="submit" class="btn btn-warning text-dark mt-2">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>