@extends('admin.apps.adminlayout')

@section('admin')

<div id="main-content">
    <div class="container-fluid">


        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">

                    <div class="body">
                        <h3>DETAIL DE L'ANNONCE </h3>
                        <ul class="nav nav-tabs-new2">
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong> TITRE DE L'ANNONCE {{$detail->title}}</strong><br>
                                           AUTEUR DE L'ANNONCE : {{$detail->user->name}}  <br>
                                            PAYS DE DEPART   {{$detail->country_start}}<br>
                                            <abbr title="Phone">VILLE  DE DEPART:</abbr> {{$detail->city_start}}
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="mb-0"><strong>PAYS DE DESTINATION : </strong>  {{$detail->country_destination}}</p>
                                        <p class="mb-0"><strong>VILLE DE DESTINATION </strong> <span class="badge badge-warning mb-0">  {{$detail->city_destination}}</span></p>
                                        <p><strong>DATE DE LA COMMANDE </strong> {{$detail->created_at}}</p>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>N° ANNONCE</th>
                                                        <th>TITRE</th>
                                                        <th class="hidden-sm-down">PRIX</th>
                                                        <th>KILO kg</th>
                                                        <th class="hidden-sm-down">DATE DEPART  </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$detail->id}}</td>
                                                        <td>{{$detail->title}}</td>
                                                        <td class="hidden-sm-down">{{$detail->price}}€</td>
                                                        <td>{{$detail->kilo}}</td>
                                                        <td class="hidden-sm-down">{{$detail->start_date}}</td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
