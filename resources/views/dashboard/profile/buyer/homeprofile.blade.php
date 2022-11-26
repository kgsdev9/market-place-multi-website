@extends('dashboard.layout.app')

@section('main')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">je modifie mes informations de mon compte</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Booking" aria-label="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> </span>
                                         <a href="{{route('user.update.form')}}" class="btn btn-primary">Cliquez-ici !</a>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Informations acheteur</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">

                                        <a href="{{ route('buyer.register.form')}}" class="btn btn-primary" role="button">Cliquez - Ici </a>
                                    </div>

                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="card card-bordered  card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Je  modifie  le  mot de passe De Mon Compte</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Expenses" aria-label="Total Expenses"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                            <a href="{{ route('user.update.password.form') }}" class="btn btn-primary">Cliquez-ici !</a>
                                        </span>
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

    @include('sweetalert::alert')


@endsection
