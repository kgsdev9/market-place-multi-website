@extends('dashboard.layout.app')

@section('main')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Information de profil</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->

                <form action="{{route('user-profile-information.update')}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nom De User  @error('name',  'updateProfileInformation')

                                            <small>{{ $message }}</small>
                                        @enderror</label>
                                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Adresse Email  @error('email', 'updateProfileInformation')
                                            <small class="text-danger">{{ $message }}</small>

                                    @enderror</label>
                                    <input type="email" class="form-control" name="email"   value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
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
