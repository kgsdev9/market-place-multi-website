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
                                            <h4 class="nk-block-title">Liste des offres Des transporteurs</h4>
                                            <div class="nk-block-des">
                                                <p>Offre disponible</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">

                                            @foreach ($offres as $o)
                                            <div class="card-inner">
                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                    <div class="nk-block-text">
                                                        <h6>Titre : {{ $o->name}}  &nbsp; <span class="badge bg-success ms-0">envoyé le dss </span></h6>
                                                        <p>Prix : {{ $o->price}} €</p>

                                                    </div>
                                                    <div class="nk-block-actions">
                                                        <a href="{{ route('seller.offers.detail',$o->id) }}" class="btn btn-primary">Detail</a>
                                                     
                                                    </div>
                                                </div>
                                            </div><!-- .card-inner -->
                                            @endforeach
                                        </div><!-- .card-inner-group -->

                                        {{$offres->links()}}
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div><!-- .card-inner -->

                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>





@endsection
