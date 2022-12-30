@extends('dashboard.layout.app')

@section('main')
@include('sweetalert::alert')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Liste de mes Annonces</h4>

                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="tb-tnx-id"><span class=""></span></th>
                                        <th class="tb-tnx-info">
                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                <span>Titre De L'annonce</span>
                                            </span>
                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                <span class="d-md-none">Kilo</span>
                                                <span class="d-none d-md-block">
                                                    <span>Prix</span>
                                                    <span>Pays et ville  Départ</span>
                                                </span>
                                            </span>
                                        </th>
                                        <th class="tb-tnx-amount is-alt">
                                            <span class="tb-tnx-total">Pays et ville D'arrivée</span>
                                            <span class="tb-tnx-status d-none d-md-inline-block">Date  Départ</span>
                                        </th>
                                        <th class="tb-tnx-action">
                                            <span>&nbsp;</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($annonce as $cate )
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">

                                        </td>
                                        <td class="tb-tnx-info">
                                            <div class="tb-tnx-desc">
                                                <span class="title">{{$cate->title}} </span>
                                            </div>
                                            <div class="tb-tnx-date">
                                                <span class="date">{{$cate->price}} €</span>
                                                <span class="date"> {{$cate->country_start}}-{{$cate->city_start}}</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-amount is-alt">
                                            <div class="tb-tnx-total">
                                                <span class="amount">  {{$cate->country_destination}}-{{$cate->city_destination}}</span>
                                            </div>
                                            <div class="tb-tnx-status">
                                                <span class="badge badge-dot bg-warning">{{$cate->start_date}}</span>
                                            </div>
                                        </td>
                                        <td class="tb-tnx-action">
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                                    <ul class="link-list-plain">

                                                        <li><a href="{{route('edit.annonce', $cate->id)}}">Edition</a></li>
                                                        <li><a href="{{route('destroy.annonce', $cate->id)}}" onclick="return confirm('Etes vous surs de vouloir Supprimer ?')">Supprimer</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach




                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div><!-- nk-block -->





                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>


@endsection
