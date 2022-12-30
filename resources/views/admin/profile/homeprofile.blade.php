@extends('admin.apps.adminlayout')

@section('admin')


    <!-- mani page content body part -->
    <div id="main-content ">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>GESTION DE COMPTE</h2>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="javascript:history.back()" class="btn btn-primary">Retour</a>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">

                            <h6 class="mb-4 font-weight-bold">je modifie mes informations de mon compte</h6>

                            <a href="{{route('admin.update.form')}}" class="btn btn-primary" role="button">Cliquez - Ici </a>
                        </div>
                    </div>
                </div>






                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">

                            <h6 class="mb-4 font-weight-bold"> Je  modifie  le mot mot de passe De Mon Compte</h6>

                            <a href="{{ route('admin.update.password.form') }}" class="btn btn-primary" role="button">Cliquez-ici </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
