@extends('dashboard.layout.app')
@section('content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>User Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Extra</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex flex-row-reverse">
                        <div class="page_action">
                            <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                            <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                        </div>
                        <div class="p-2 d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Mon compte</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Mes informations Vendeurs</a></li>

                        </ul>
                    </div>

                    <div class="tab-content">




                        <div class="tab-pane active" id="Settings">


                            <div class="body">
                                <h6>Modifier mes informations du compte</h6>
                                <div class="row clearfix">

                                    <div class="col">
                                        <form action="{{route('user-profile-information.update')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="name" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Last Name"  value="{{Auth::user()->email}}">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark">Modifier mes informations</button>
                                        </div>

                                        </form>
                                    </div>




                                </div>


                            </div>



                            <div class="body">
                                <h6>Nouveau mot de passe</h6>
                                <div class="row clearfix">

                                    <div class="col">
                                        <form action="{{route('user-password.update')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        <div class="form-group">
                                            <input type="password" class="form-control"  name="password" >
                                        </div>
                                        <div class="form-group">
                                            <h6>Confirmer le nouveau  mot de passe</h6>
                                            <input type="password" class="form-control" name="password_confirmation"  >
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark">Modifier mes informations</button>
                                        </div>

                                        </form>
                                    </div>




                                </div>


                            </div>











                        </div>

                        @can('seller_account_create')

                        <div class="tab-pane" id="billings">

                            <div class="container-fluid">
                               <form class="js-validate" novalidate="novalidate" method="POST" action="{{route('seller.store')}}" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                           <!-- Form Group -->
                                           <div class="js-form-message form-group col-md-6">
                                               <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

                                           <small style="color:red">{{ $message}}</small>
                                                           @enderror</label>
                                                                                                   <span class="text-danger">*</span>
                                                               </label>
                                                               <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
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
                                                                                           <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="Entrer votre numéro de téléphone" aria-label="Password"
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
                                                                                       <input type="text" class="form-control" name="media" id="signinSrPasswordExample2" placeholder="Compte social ( facultatif )" aria-label="Password"
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
                                                           <input type="text" class="form-control" name="frequence" id="signinSrPasswordExample2" placeholder="Exple : 2 mois ou 1 an " aria-label="Password">
                                   </div>
                                   <!-- End Form Group -->
           <!-- End Form Group -->
                                   <div class="row">
                                       <!-- Form Group -->
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader une photo @error('photo')

                                           <small style="color:red">{{ $message}}</small>
                                           @enderror</label>
                                                                                   <span class="text-danger">*</span>
                                                       </label>
                                                       <input type="file" class="form-control" name="photo"  aria-label="Username or nom address"
                                                   ">
                                       </div>
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader votre carte nationale d'indidentité @error('cni')

                                       <small style="color:red">{{ $message}}</small>
                                                       @enderror</label>
                                                                                               <span class="text-danger">*</span>
                                                           </label>
                                                           <input type="file" class="form-control" name="cni"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
                                                       </div>
                                                       <!-- End Form Group -->

                                                               <!-- Form Group -->

                                               <!-- End Form Group -->

                                   </div>
                                   <div class="row">
                                       <!-- Form Group -->
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader votre rib @error('rib')

                                       <small style="color:red">{{ $message}}</small>
                                                       @enderror</label>
                                                                                               <span class="text-danger">*</span>
                                                           </label>
                                                           <input type="file" class="form-control" name="rib"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
                                                       </div>
                                                       <!-- End Form Group -->

                                                               <!-- Form Group -->
                                                               <div class="js-form-message form-group col-md-6">
                                                                   <label class="form-label" for="signinSrnomExample3">Uploader Votre pièce de  résidence @error('house_piece')

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
                                           <button type="submit" class="btn btn-primary">Finaliser mon  inscription</button>
                                       </div>

                                   </div>
                                   <!-- End Button -->
                               </form>

                            </div>

                           </div>

                        @endcan

                        @can('seller_account_update')


                        <div class="tab-pane" id="billings">

                            <div class="container-fluid">
                               <form class="js-validate" novalidate="novalidate" method="POST" action="" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                           <!-- Form Group -->
                                           <div class="js-form-message form-group col-md-6">
                                               <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

                                           <small style="color:red">{{ $message}}</small>
                                                           @enderror</label>
                                                                                                   <span class="text-danger">*</span>
                                                               </label>
                                                               <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
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
                                                                                           <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="Entrer votre numéro de téléphone" aria-label="Password"
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
                                                                                       <input type="text" class="form-control" name="media" id="signinSrPasswordExample2" placeholder="Compte social ( facultatif )" aria-label="Password"
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
                                                           <input type="text" class="form-control" name="frequence" id="signinSrPasswordExample2" placeholder="Exple : 2 mois ou 1 an " aria-label="Password">
                                   </div>
                                   <!-- End Form Group -->
           <!-- End Form Group -->
                                   <div class="row">
                                       <!-- Form Group -->
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader une photo @error('photo')

                                           <small style="color:red">{{ $message}}</small>
                                           @enderror</label>
                                                                                   <span class="text-danger">*</span>
                                                       </label>
                                                       <input type="file" class="form-control" name="photo"  aria-label="Username or nom address"
                                                   ">
                                       </div>
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader votre carte nationale d'indidentité @error('cni')

                                       <small style="color:red">{{ $message}}</small>
                                                       @enderror</label>
                                                                                               <span class="text-danger">*</span>
                                                           </label>
                                                           <input type="file" class="form-control" name="cni"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
                                                       </div>
                                                       <!-- End Form Group -->

                                                               <!-- Form Group -->

                                               <!-- End Form Group -->

                                   </div>
                                   <div class="row">
                                       <!-- Form Group -->
                                       <div class="js-form-message form-group col-md-6">
                                           <label class="form-label" for="signinSrnomExample3">Uploader votre rib @error('rib')

                                       <small style="color:red">{{ $message}}</small>
                                                       @enderror</label>
                                                                                               <span class="text-danger">*</span>
                                                           </label>
                                                           <input type="file" class="form-control" name="rib"  placeholder="Entrer votre nom" aria-label="Username or nom address"  >
                                                       </div>
                                                       <!-- End Form Group -->

                                                               <!-- Form Group -->
                                                               <div class="js-form-message form-group col-md-6">
                                                                   <label class="form-label" for="signinSrnomExample3">Uploader Votre pièce de  résidence @error('house_piece')

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
                                           <button type="submit" class="btn btn-primary">Mette à Jour Mes Informations</button>
                                       </div>

                                   </div>
                                   <!-- End Button -->
                               </form>

                            </div>

                           </div>

                        @endcan



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
