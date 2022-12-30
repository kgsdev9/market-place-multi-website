@extends('admin.apps.adminlayout')

@section('admin')


    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>GESTION COMPTE</h2>

                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">

                                <a href="{{ route('admin_dashbord') }}" class="btn btn-primary">Tableau de bord</a>

                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Modifier Vos Informations </h2>
                        </div>


                        <div class="body">
                            <form action="{{route('user-profile-information.update')}}" method="post" >


                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Nom De User  @error('name',  'updateProfileInformation')

                                        <small>{{ $message }}</small>
                                    @enderror</label>
                                    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Adresse Email  @error('email', 'updateProfileInformation')
                                            <small class="text-danger">{{ $message }}</small>

                                    @enderror</label>
                                    <input type="email" class="form-control" name="email"   value="{{Auth::user()->email}}">
                                </div>
                                <button type="submit" class="btn btn-dark">Modifier mes informations</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>




@endsection
