@extends('dashboard.layout.app')

@section('main')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Message recu </h3>

                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>

                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">

                        @foreach ($user_annonce as $c )
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="project">
                                        <div class="project-details">
                                            <p>{{$c->message}}</p>

                                            <p>   Adresse E-mail    {{$c->email}}</p>
                                            <p>   Telephone    {{$c->number}}</p>

                                        </div>
                                        
                                        <div class="project-meta">
                                            <ul class="project-users g-1">
                                                <li>
                                                    Adresse E-mail    {{$c->email}}
                                                </li>


                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @endforeach






                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
