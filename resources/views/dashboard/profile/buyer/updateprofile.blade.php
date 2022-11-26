@extends('dashboard.layout.app')

@section('main')

<div class="container"">

                <div class="mb-4" style="margin-top: 2%;text-decoration:underline">
                    <h2 class="text-center">Formulaire Acheteur</h2>
                </div>
                <div class="my-8 my-xl-8">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0 justify-center">

                            <form class="js-validate" novalidate="novalidate" method="POST" action="{{route('buyer.update')}}">
                                @csrf
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

<small style="color:red">{{ $message}}</small>
@enderror</label>
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom" aria-label="Username or nom address"   value="{{$buyer->sirname}}" required >
                                </div>
                                <!-- End Form Group -->



                                              <!-- Form Group -->
                                              <div class="js-form-message form-group">
                                                <label class="form-label" for="signinSrnomExample3">Entrer Votre prénom @error('firstname')

            <small style="color:red">{{ $message}}</small>
            @enderror</label>
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="firstname"  placeholder="" aria-label="Username or nom address" value="{{$buyer->firstname}}" required
                                               ">
                                            </div>
                                            <!-- End Form Group -->



                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="signinSrPasswordExample2">Entrer votre numéro téléphone <span class="text-danger">*</span>  @error('phonenumber')

<small style="color:red">{{ $message}}</small>
@enderror</label></label>
                                    <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="" aria-label="Password"  value="{{$buyer->phonenumber}}" required
                                   >
                                </div>
                                <!-- End Form Group -->




                                <!-- Button -->
                                <div class="mb-1">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Je modifie mes informations</button>
                                    </div>

                                </div>
                                <!-- End Button -->
                            </form>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>


 <!-- espace d'authentification -->






@include('sweetalert::alert')

@endsection

