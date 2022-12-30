@extends('dashboard.layout.app')

@section('main')
<hr>
<div id="main-content" style="margin-top: 6%">

    <div class="container-fluid">
        <form class="js-validate" novalidate="novalidate" method="POST" action="{{ route('seller.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <!-- Form Group -->
                    <div class="js-form-message form-group col-md-6">
                        <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

                    <small style="color:red">{{ $message}}</small>
                                    @enderror</label>
                                                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom"  value="{{$seller->sirname}}"  >
                                    </div>
                                    <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div class="js-form-message form-group col-md-6">
                                                <label class="form-label" for="signinSrnomExample3">Entrer Votre prénom @error('firstname')

                    <small style="color:red">{{ $message}}</small>
                    @enderror</label>
                                                            <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="firstname"  placeholder="Entrer votre prénom"  value="{{$seller->firstname}}"
                            ">
                            </div>
                            <!-- End Form Group -->

            </div>
            <div class="row">
                <div class="col-md-6">
                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="form-label" for="signinSrPasswordExample2">Entrer votre numéro téléphone <span class="text-danger">*</span>  @error('phonenumber')

                                <small style="color:red">{{ $message}}</small>
                                @enderror</label></label>
                                                                    <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="Entrer votre numéro de téléphone"  value="{{$seller->phonenumber}}"
                                                                >
                        </div>
                        <!-- End Form Group -->
                </div>

                <div class="col-md-6">
                      <!-- Form Group -->
                      <div class="js-form-message form-group">
                        <label class="form-label" for="signinSrPasswordExample2">Entrer le lien d'un compte Facebook ou autre  <span class="text-danger">*</span>  @error('media')

                            <small style="color:red">{{ $message}}</small>
                            @enderror</label></label>
                                                                <input type="text" class="form-control" name="media" id="signinSrPasswordExample2" placeholder="Compte social ( facultatif )"  value="{{$seller->media}}"
                                                            >
                    </div>
                    <!-- End Form Group -->
                </div>
            </div>
            <!-- Form Group -->
            <div class="js-form-message form-group">
                <label class="form-label" for="signinSrPasswordExample2">Fréquence d'envoie des produits <span class="text-danger">*</span>  @error('frequence')

                                    <small style="color:red">{{ $message}}</small>
                                    @enderror</label></label>
                                    <input type="text" class="form-control" name="frequence" id="signinSrPasswordExample2" placeholder="Exple : 2 mois ou 1 an "  value="{{$seller->frequence}}">
            </div>
            <!-- End Form Group -->
<!-- End Form Group -->
            <div class="row">
                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader une photo @error('photo')

                    <small style="color:red">{{ $message}}</small>
                    @enderror
                    <a href="{{asset('seller/images/photo/'.$seller->photo)}}" target="about_blank">consulter</a>

                </label>


                                                            <span class="text-danger">*</span>
                                </label>
                                <input type="file" class="form-control" name="photo"
                            ">
                </div>
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader votre carte nationale d'indidentité @error('cni')


                <small style="color:red">{{ $message}}</small>
                                @enderror
                                <a href="{{asset('seller/images/cni/'.$seller->cni)}}" target="about_blank">consulter</a>
                            </label>
                                                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" name="cni"  placeholder="Entrer votre nom"   >
                                </div>
                                <!-- End Form Group -->

                                        <!-- Form Group -->

                        <!-- End Form Group -->

            </div>
            <div class="row">
                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader votre rib
                            <a href="{{asset('seller/images/rib/'.$seller->rib)}}" target="about_blank">consulter</a>

                        @error('rib')

                <small style="color:red">{{ $message}}</small>
                                @enderror</label>
                                                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" name="rib"  placeholder="Entrer votre nom" >
                                </div>
                                <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Uploader Votre pièce de  résidence
                                                <a href="{{asset('seller/images/house/'.$seller->house_piece)}}" target="about_blank">consulter</a>

                                                @error('house_piece')

                            <small style="color:red">{{ $message}}</small>
                            @enderror</label>
                                                        <span class="text-danger">*</span>
                            </label>
                            <input type="file" class="form-control" name="house_piece">
                        </div>
                        <!-- End Form Group -->

            </div>
<!-- Button -->
            <div class="mb-1">
                <div class="mb-3">



                    <button type="submit" class="btn btn-primary">Modifier mon  inscription</button>


                </div>

            </div>
            <!-- End Button -->
        </form>

     </div>

</div>
</div>

@include('sweetalert::alert')
@endsection
