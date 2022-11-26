@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">Liste de vos commandes</h5>
                                    </div>
                                </div><!-- .card-title-group -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <table class="table table-orders">
                                    <thead class="tb-odr-head">
                                        <tr class="tb-odr-item">
                                            <th class="tb-odr-info">
                                                <span class="tb-odr-id">Paiement Code</span>
                                                <span class="tb-odr-date d-none d-md-inline-block">Nom et Prenom</span>
                                            </th>
                                            <th class="tb-odr-amount">
                                                <span class="tb-odr-total">Quantite </span>
                                                <span class="tb-odr-status d-none d-md-inline-block">Montant</span>
                                            </th>
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">

                                        @foreach ( $user_commande as $c)
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="">{{$c->code}}</a></span>
                                                <span class="tb-odr-date">{{$c->fullname}}</span>
                                            </td>
                                            <td class="tb-odr-amount">
                                                <span class="tb-odr-total">
                                                    <span class="amount">{{$c->quantity}} </span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">{{$c->amount}} €  </span>
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    <a href="{{route('detail.order',$c->id)}}" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    <a href="{{route('detail.order',$c->id)}}" class="btn btn-dim btn-sm btn-primary">Detail de la commande</a>
                                                </div>
                                                <a href="{{route('detail.order',$c->id)}}" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                        </tr><!-- .tb-odr-item -->

                                        @endforeach






                                    </tbody>
                                </table>
                            </div><!-- .card-inner -->
                        
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>



@endsection
