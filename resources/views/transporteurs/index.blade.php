@extends('layout.app')

@section('content')
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>NOS TRANSPORTEURS</h2>

    </div>
</section>


<section class="section feature-part">
    <div class="container">

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col">
                <div class="feature-card">
                    <div class="feature-media">


                        <a class="feature-image" href="product-video.html">
                            <img src="{{asset('transport/1409855953courierdhlupsemstorussianukraine.jpg')}}" alt="product">
                            <img src="" alt="">
                        </a>

                    </div>
                    <div class="feature-content">
                        <h6 class="feature-name">
                            <a >DHL EXPRESS</a>
                        </h6>


                        <p class="feature-desc">DHL, leader mondial du transport et de la logistique. DHL offre un portefeuille inégalé de services de logistique, allant de la distribution nationale et ...</p>



                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-card">
                    <div class="feature-media">

{{asset('transport/Chronopost.jpg')}}
                        <a class="feature-image" href="product-video.html">
                            <img src="{{asset('transport/65373453_1210455865783238_767002805977219072_n.png')}}" alt="product">
                            <img src="" alt="">
                        </a>

                    </div>
                    <div class="feature-content">
                        <h6 class="feature-name">
                            <a href="product-video.html">UPELA</a>
                        </h6>


                        <p class="feature-desc">DHL, leader mondial du transport et de la logistique. DHL offre un portefeuille inégalé de services de logistique, allant de la distribution nationale et ...</p>


                    </div>
                </div>
            </div>

            <div class="col">
                <div class="feature-card">
                    <div class="feature-media">


                        <a class="feature-image" href="product-video.html">
                            <img src="{{asset('transport/Screenshot_1-300x225.jpg')}}" alt="product">
                            <img src="" alt="">
                        </a>

                    </div>
                    <div class="feature-content">
                        <h6 class="feature-name">
                            <a href="product-video.html">PACKLINK</a>
                        </h6>


                        <p class="feature-desc">Packlink PRO est une plateforme destinée aux entreprises et autonomes permettant d'automatiser et d'optimiser la logistique des envois. Packlink PRO est un outil totalement gratuit, vous ne payez uniquement que ce que vous envoyez. Il n'y a aucun frais d'inscription ou d'utilisation.
                        </p>


                    </div>
                </div>
            </div>







        </div>

    </div>
</section>


@endsection
