@extends('dashboard.layout.app')
@section('main')
<div class="nk-wrap ">
    <!-- main header @s -->
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ms-n1">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div><!-- .nk-header-brand -->


            </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
    </div>
    <!-- main header @e -->
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">

                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">NOS PLANS</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>chosisiez votre pack.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="row g-gs">
                            @foreach ($plan as $value )
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered pricing text-center">
                                    <div class="pricing-body">
                                        <div class="pricing-media">
                                            <img src="./images/icons/plan-s1.svg" alt="">

                                        </div>
                                        <div class="pricing-title w-220px mx-auto">
                                            <h5 class="title">{{$value->name}}</h5>
                                            <span class="sub-text">Le pack premium à 20€ pour le plan bagage de 1 mois vous donne le droit de poste autant d’annonce que vous souhaitez . </span>
                                        </div>
                                        <div class="pricing-amount">
                                            <div class="amount">{{$value->price}} €  /<span>Mois</span></div>
                                            {{-- <span class="bill">1 User, Billed Yearly</span> --}}
                                        </div>
                                        <div class="pricing-action">
                                            <a href="{{route('plan.show', $value->slug)}}" class="btn btn-primary">Souscrire</a>
                                        </div>
                                    </div>
                                </div><!-- .pricing -->
                            </div><!-- .col -->
                            @endforeach



                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s -->

    <!-- footer @e -->
</div>
@endsection
