@extends('dashboard.layout.app')

@section('main')
<hr>
<div id="main-content" style="margin-top: 6%">

    <div class="container-fluid">
                                   <!-- Form Group -->
                                   <form class="js-validate" novalidate="novalidate" method="POST" action="{{route('carrier.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                            <!-- Form Group -->
                                            <div class="js-form-message form-group col-md-6">
                                                <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

                                            <small style="color:red">{{ $message}}</small>
                                                            @enderror</label>
                                                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom" aria-label="Username or nom address"  value="{{$carrier->sirname}}" >
                                                            </div>
                                                            <!-- End Form Group -->

                                                                    <!-- Form Group -->
                                                                    <div class="js-form-message form-group col-md-6">
                                                                        <label class="form-label" for="signinSrnomExample3">Entrer Votre prénom @error('firstname')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                                                                    <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="firstname"  placeholder="Entrer votre prénom" aria-label="Username or nom address"
                                                  value="{{$carrier->firstname}}">
                                                    </div>
                                                    <!-- End Form Group -->

                                    </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label class="form-label" for="signinSrPasswordExample2">Entrer Numéro de téléphone du contact privilégiée <span class="text-danger">*</span>  @error('phonenumber')

                                                        <small style="color:red">{{ $message}}</small>
                                                        @enderror</label></label>
                                                                                            <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder=" Numéro de téléphone" aria-label="Password" value="{{$carrier->phonenumber}}"
                                                                                        >
                                                </div>
                                                <!-- End Form Group -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Form Group -->
                                            <div class="js-form-message form-group">
                                                <label class="form-label" for="signinSrPasswordExample2">Entrer le Numéro de téléphone du commercial  <span class="text-danger">*</span>  @error('seller_phonenumber')

                                                    <small style="color:red">{{ $message}}</small>
                                                    @enderror</label></label>
                                                                                        <input type="number" class="form-control" name="seller_phonenumber" id="signinSrPasswordExample2" placeholder="Numéro de téléphone" aria-label="Password"
                                                                       value="{{$carrier->seller_phonenumber}}"             >
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- End Form Group -->
                                        </div>
                                    </div>









                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label class="form-label" for="signinSrPasswordExample2">Entrer Adresse  de facturation <span class="text-danger">*</span>  @error('address_payment')

                                                            <small style="color:red">{{ $message}}</small>
                                                            @enderror</label></label>
                                                            <input type="text" class="form-control" name="address_payment" id="signinSrPasswordExample2" placeholder=" " aria-label="Password" value="{{$carrier->address_payment}}"
                                       >
                                    </div>
                                    <!-- End Form Group -->


                                    <div class="js-form-message form-group ">
                                        <label class="form-label" for="signinSrnomExample3">Uploader votre lien de sit web (ce champs est facultatif ) @error('website')

                                    <small style="color:red">{{ $message}}</small>
                                                    @enderror</label>
                                                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="website"  placeholder="Entrer votre nom" aria-label="Username or nom address" value="{{$carrier->website}}" >
                                                    </div>


            <!-- End Form Group -->



                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Uploader votre kibs @error('kibs')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                                                                    <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="file" class="form-control" name="kibs"  aria-label="Username or nom address"
                                                    ">
                                        </div>
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Uploader votre logo (ce champs est facultatif ) @error('logo')

                                        <small style="color:red">{{ $message}}</small>
                                                        @enderror</label>
                                                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" name="logo"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
                                                        </div>
                                                        <!-- End Form Group -->

                                                                <!-- Form Group -->

                                                <!-- End Form Group -->

                                    </div>







                                    <!-- Button -->
                                    <div class="mb-1">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary px-5">Modifier</button>
                                        </div>

                                    </div>
                                    <!-- End Button -->
                                </form>

     </div>

</div>
</div>


@endsection
