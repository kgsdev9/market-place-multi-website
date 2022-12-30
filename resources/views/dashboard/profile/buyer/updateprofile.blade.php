@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Je Mets à jour mes informations Acheteur</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <form class="js-validate" novalidate="novalidate" method="POST" action="{{route('buyer.update')}}">
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
                                            <input type="text" class="form-control" name="sirname"  placeholder="Entrer votre nom" aria-label="Username or nom address"   value="{{$buyer->sirname}}" required >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="signinSrnomExample3">Entrer Votre prénom @error('firstname')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                            <input type="text" class="form-control" name="firstname"  placeholder="" aria-label="Username or nom address" value="{{$buyer->firstname}}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="signinSrPasswordExample2">Entrer votre numéro téléphone <span class="text-danger">*</span>  @error('phonenumber')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                            <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder="" aria-label="Password"  value="{{$buyer->phonenumber}}" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group" style="margin-top:10px;">
                                        <button type="submit" class="btn btn-primary">Je modifie mes informations</button>
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

