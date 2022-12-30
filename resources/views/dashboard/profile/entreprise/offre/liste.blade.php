@extends('dashboard.layout.app')

@section('main')

<div class="nk-wrap "  style="margin-top:50px;">
    <!-- main header @s -->

    <!-- main header @e -->
    <!-- content @s -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h5 class="title">Liste de mes offres</h5>
                                        </div>


                                    </div><!-- .card-title-group -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <table class="table table-tranx">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th class="tb-tnx-id"><span class="">Numero de l'offre</span></th>
                                                <th class="tb-tnx-info">
                                                    <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                        <span>Libelle</span>
                                                    </span>
                                                    <span class="tb-tnx-date d-md-inline-block d-none">

                                                        <span class="d-none d-md-block">
                                                            <span> Description </span>

                                                        </span>
                                                    </span>
                                                </th>
                                                <th class="tb-tnx-amount is-alt">
                                                    <span class="tb-tnx-total">Prix </span>
                                                    <span class="tb-tnx-status d-none d-md-inline-block">Statut </span>
                                                </th>
                                                <th class="tb-tnx-action">
                                                    <span>&nbsp;</span>
                                                </th>
                                            </tr><!-- tb-tnx-item -->
                                        </thead>
                                        <tbody>
                                            @foreach($liste as $l)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <a href="#"><span>{{$l->id}}</span></a>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{$l->name}}</span>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span class="date">{{ Str::limit($l->description, 30)}}</span>

                                                    </div>
                                                </td>
                                                <td class="tb-tnx-amount is-alt">
                                                    <div class="tb-tnx-total">
                                                        <span class="amount">{{$l->price}} €</span>
                                                    </div>
                                                    <div class="tb-tnx-status">
                                                        @if($l->statut=="yes")
                                                        <span class="badge badge-dot bg-success">Disponible</span>
                                                        @elseif($l->statut=="no")
                                                        <span class="badge badge-dot bg-warning">Indisponible</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="{{route('delete.offert',$l->id)}}">Supprimer l'offre</a></li>
                                                                <li><a href="{{route('edit.offert', $l->id)}}">Modifier l'offre</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><!-- tb-tnx-item -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul><!-- .pagination -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s -->
    <div class="nk-footer">
        <div class="container-fluid">
            <div class="nk-footer-wrap">
                <div class="nk-footer-copyright"> © 2022 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                </div>
                <div class="nk-footer-links">
                    <ul class="nav nav-sm">
                        <li class="nav-item dropup">
                            <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <ul class="language-list">
                                    <li>
                                        <a href="#" class="language-item">
                                            <span class="language-name">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <span class="language-name">Español</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <span class="language-name">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <span class="language-name">Türkçe</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer @e -->
</div>
@endsection
