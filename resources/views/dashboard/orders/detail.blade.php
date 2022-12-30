@extends('dashboard.layout.app')

@section('main')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                          
                                            <h4 class="nk-block-title">NUMERO DE LA COMMANDE {{$order['code']}} </h4>
                                            <div class="nk-block-des">
                                                <p>Merci de faire confiance à VTP GROUP</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Information sur la commande</h6>
                                        </div>
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Nom Et Prenom</span>
                                                <span class="data-value">{{$order['fullname']}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">TELEPHONE</span>
                                                <span class="data-value"> {{$order['phone']}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->

                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Pays de Livraison</span>
                                                <span class="data-value text-soft">{{$order['country_delivry']}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->



                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Ville de livraison</span>
                                                <span class="data-value text-soft">{{$order['city_delivry']}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->



                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Addresse de livraison </span>
                                                <span class="data-value">{{$order['adresse_delivry']}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Detail Du Paiement</h6>
                                        </div>
                                        @foreach($order->products as $s)
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Produit </span>
                                                <span class="data-value">  {{$s->name}}  x {{$s->pivot->quantity}}</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Montant Payé</span>
                                                <span class="data-value">{{$s->pivot->amount}} €</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->

                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Total</span>
                                                <span class="data-value"> {{$order['amount']}}€</span>
                                            </div>
                                            <div class="data-col data-col-end"></div>
                                        </div><!-- data-item -->
                                        @endforeach

                                        <div class="data-item">

                                            <div class="data-col data-col-end"><a href="{{route('donwload.pdf',$order->id)}}" class=" btn btn-dark">IMPRIMER</a></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                </div><!-- .nk-block -->
                            </div>

                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>


@endsection
