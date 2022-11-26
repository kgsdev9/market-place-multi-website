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
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title"> Entreprise  :{{ $offre->entreprise->name }} </h5>
                                                <div class="nk-block-des">
                                                    <p>{{ $offre->description }}.</p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <h6 class="lead-text">Prix De L'offre {{ $offre->price }} €</h6>
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="media media-center gx-3 wide-xs">
                                                    <div class="media-object">
                                                        <em class="icon icon-circle icon-circle-lg">TS</em>
                                                    </div>
                                                    <div class="media-content">
                                                        <p>Contactez le transporteurs pour avoir plus de detail sur son offre et ses services .</p>
                                                    </div>
                                                </div>
                                                <div class="nk-block-actions flex-shrink-0">
                                                    <a href="{{route('form.sms.to_carrier',$offre->entreprise->user->owner_id)}}" class="btn btn-lg btn-danger">Contactez le transporteur</a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-card-inner -->
                                    </div><!-- .nk-card -->
                                    <h6 class="lead-text">Adresse Complementaire</h6>
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                <div class="media media-center gx-3 wide-xs">
                                                    <div class="media-object">
                                                        <em class="icon icon-circle icon-circle-lg ni ni-google"></em>
                                                    </div>
                                                    <div class="media-content">
                                                        <p>Lien De son Site Web. <em class="d-block text-soft">Du Transporteur</em></p>
                                                    </div>
                                                </div>
                                                <div class="nk-block-actions flex-shrink-0">
                                                    <a href="{{ $offre->entreprise->website }}" class="btn btn-lg btn-dim btn-primary">Consulter Son Site Web</a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-card-inner -->
                                    </div><!-- .nk-card -->
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-head-content">
                                            <h6 class="nk-block-title">En cas de difficultés veuillez contactez notre equipe. </h6>
                                            <div class="nk-block-des">
                                                <p>L'equipe Technique de VTP</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                </div>
                            </div>

                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@endsection
