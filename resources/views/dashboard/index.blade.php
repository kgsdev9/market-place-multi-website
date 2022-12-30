@extends('dashboard.layout.app')


@section('main')

@can('is_seller')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tableau de gestion</h3>
                            <div class="nk-block-des text-soft">
                                <p>une vue globale de vos activités sur VTP</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>

                                        </li>
                                        <li class="nk-block-tools-opt"><a href="{{url('/')}}" class="btn btn-primary" target="about_blank"><em class="icon ni ni-home"></em><span>Accueil</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Product </h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Booking" aria-label="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> {{$total_product}} </span>

                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Message</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> {{$sms_recu}} </span>
                                    </div>

                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->







                        </div><!-- .col -->


                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endcan

@can('is_carrier')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tableau de gestion</h3>
                            <div class="nk-block-des text-soft">
                                <p>une vue globale de vos activités sur VTP</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>

                                        </li>
                                        <li class="nk-block-tools-opt"><a href="{{url('/')}}" class="btn btn-primary" target="about_blank"><em class="icon ni ni-home"></em><span>Accueil</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Offre</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Booking" aria-label="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> {{$total_offre}} </span>

                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Message</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount">{{ $sms_recu}}</span>
                                    </div>

                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                        </div><!-- .col -->


                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endcan

@can('annonce_account')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tableau de gestion</h3>
                            <div class="nk-block-des text-soft">
                                <p>un apercu de vos activités sur VTP</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>

                                        </li>
                                        <li class="nk-block-tools-opt"><a href="{{url('/')}}" class="btn btn-primary" target="about_blank"><em class="icon ni ni-home"></em><span>Accueil</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Annonces</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Booking" aria-label="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount">{{$annonces}} </span>

                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Message</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> {{$message}} </span>
                                    </div>

                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                        </div><!-- .col -->


                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endcan

@can('is_buyer')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tableau de gestion</h3>
                            <div class="nk-block-des text-soft">
                                <p>un apercu de vos activités sur VTP</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>

                                        </li>
                                        <li class="nk-block-tools-opt"><a href="{{url('/')}}" class="btn btn-primary" target="about_blank"><em class="icon ni ni-home"></em><span>Accueil</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Commandes</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Booking" aria-label="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount">{{$commande}} </span>

                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Message</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> {{$sms_recu}} </span>
                                    </div>

                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                        </div><!-- .col -->


                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endcan

@endsection
