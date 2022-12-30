@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Je Complete mon profil</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <form  method="POST" action="{{route('buyer.store')}}">
                    @csrf

                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="signinSrnomExample3">Entrer Votre Nom @error('sirname')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                            <input type="text" class="form-control" name="sirname"  aria-label="Username or nom address" required >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="signinSrnomExample3">Entrer Votre prénom @error('firstname')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                            <input type="text" class="form-control" name="firstname"  aria-label="Username or nom address" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="signinSrPasswordExample2">Entrer votre numéro téléphone <span class="text-danger">*</span>  @error('phonenumber')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label></label>
                                            <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="" aria-label="Password" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group" style="margin-top:10px;">
                                        <button type="submit" class="btn btn-primary">Finaliser mon  inscription</button>
                                    </div>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->

    </form>
            </div>
        </div>
    </div>
</div>





@include('sweetalert::alert')

@endsection

