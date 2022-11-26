@extends('dashboard.layout.app')

@section('main')


<div class="nk-block container" style="margin-top:100px">
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
                    <div class="invest-data">
                        <div class="invest-data-amount g-2">

                            <div class="invest-data-history" style="margin-top:30px;">
                                <a href="{{route('user.update.form')}}" class="btn btn-primary">cliquez ici</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-md-4">
            <div class="card card-bordered card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Informations vendeurs</h6>
                        </div>
                        <div class="card-tools">
                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Total Room" aria-label="Total Room"></em>
                        </div>
                    </div>

                    <div class="invest-data">
                        <div class="invest-data-amount g-2">

                            <div class="invest-data-history" style="margin-top:30px;">
                                <a href="{{ route('seller.register.form')}}" class="btn btn-primary">cliquez ici</a>
                            </div>
                        </div>
                        <div class="invest-data-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas class="iv-data-chart chartjs-render-monitor" id="totalRoom" width="181" height="48" style="display: block; width: 181px; height: 48px;"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->
        <div class="col-md-4">
            <div class="card card-bordered  card-full">
                <div class="card-inner">
                    <div class="card-title-group align-start mb-0">
                        <div class="card-title">
                            <h6 class="title">Je  modifie  le mot de passe De Mon Compte</h6>
                        </div>
                    </div>

                    <div class="invest-data">
                        <div class="invest-data-amount g-2">

                            <div class="invest-data-history" style="margin-top:30px;">
                                <a href="{{route('user.update.password.form')}}" class="btn btn-primary">cliquez ici</a>
                            </div>
                        </div>
                        <div class="invest-data-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas class="iv-data-chart chartjs-render-monitor" id="totalExpenses" width="193" height="48" style="display: block; width: 193px; height: 48px;"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .col -->


    </div><!-- .row -->
</div>



@endsection
