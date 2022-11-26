@extends('dashboard.layout.app')
@section('main')

@extends('dashboard.layout.app')

@section('main')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Je modifie mon mot de passe</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <form action="{{route('user-password.update')}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ancien Mot de passe   @error('current_password', 'updatePassword')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror</label>
                                    <input type="password" class="form-control" name="current_password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nouveau de mot passe  @error('password' , 'updatePassword')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror  </label>
                                        <input type="password" class="form-control"  name="password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Confirmer Votre Nouveau mot de passe</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Modifier le mot de passe</button>
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


@endsection


@endsection
