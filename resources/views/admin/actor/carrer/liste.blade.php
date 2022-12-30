@extends('admin.apps.adminlayout')
@section('admin')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Liste des Transporteurs</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Accuel</li>
                        <li class="breadcrumb-item active">Sellers</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix row-deck">

            @foreach ($carrer as $sellers )
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body text-center">
                        <div class="chart easy-pie-chart-1" data-percent="75"> <span><img src="{{asset('carrier/images/logo/'.$sellers->logo)}}" alt="user" class="rounded-circle"></span> <canvas height="100" width="100"></canvas></div>
                        <h6>{{$sellers->sirname}}   {{$sellers->firstname}}</h6>
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>
                        <small>Telephone {{$sellers->phonenumber}}  </small>
                            <div>
                                <a href="{{route('carrer.detail', $sellers->id)}}" class="btn btn-light">Profil</a>
                            </div>
                    </div>
                </div>
            </div>

                @endforeach

        </div>
    </div>
</div>

@endsection
