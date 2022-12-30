@extends('admin.apps.adminlayout')


@section('admin')

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Statistique Generale</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Administration</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">

                               <a href="{{url('/')}}" class="btn-btn-dark" target="about_blank">Accueil</a>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Total Vendeurs</span>
                            <h4 class="mb-0 mt-2">{{count($seller)}} </h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Total Acheteurs</span>
                            <h4 class="mb-0 mt-2">{{count($buyer)}}</h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Total Transporteurs</span>
                            <h4 class="mb-0 mt-2">{{count($transporteur)}}</h4>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Total Commandes</span>
                            <h4 class="mb-0 mt-2">{{count($order)}}</h4>

                        </div>

                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Total Annonces</span>
                            <h4 class="mb-0 mt-2">{{count($annonce)}}</h4>
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>



</div>






@endsection
