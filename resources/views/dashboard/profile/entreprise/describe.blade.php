@extends('dashboard.layout.app')

@section('main')
<hr>
<div id="main-content" style="margin-top: 6%">

    <div class="container-fluid">
                                   <!-- Form Group -->
                                   <form method="POST" action="{{route('update.entreprise')}}"   enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <h3>Mes Informations Entreprise</h3>
                                            <!-- Form Group -->
                                            <div class="js-form-message form-group col-md-6">
                                                <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')
                                            <small style="color:red">{{ $message}}</small>
                                                 @enderror</label>
                                                    <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control"  name="name"  placeholder="Entrer votre nom"  value="{{$detail_entreprise->name}}">
                                                     </div>
                                                    <div class="js-form-message form-group col-md-6">
                                                    <label class="form-label"> Lien de site web (facultatif)
                                                    </label>
                                                    </label>
                                                    <input type="text" class="form-control" name="website"  placeholder="Entrer votre prénom" value="{{$detail_entreprise->website}}">
                                                    </div>
                                                    <!-- End Form Group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label class="form-label" for="signinSrPasswordExample2">Déscription de votre entreprise <span class="text-danger">*</span>  @error('phonenumber')

                                                        <small style="color:red">{{ $message}}</small>
                                                        @enderror</label></label>
                                                                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$detail_entreprise->description}}</textarea>
                                                </div>
                                                <!-- End Form Group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group col-md-12">
                                            <label class="form-label">Modifier la photo  <a href="{{asset('Entreprise/images/'.$detail_entreprise->image)}}" target="about_blank">Voir le logo</a>
                                                @error('image')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                                                                    <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="file" name="image"   class="form-control" placeholder="" value="{{$detail_entreprise->image}}">
                                        </div>



                                    </div>







                                    <!-- Button -->
                                    <div class="mb-2" style="margin-top:10px;">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary px-5">Modifer mes informations entreprises</button>
                                        </div>

                                    </div>
                                    <!-- End Button -->
                                </form>

     </div>

</div>
</div>


@endsection
