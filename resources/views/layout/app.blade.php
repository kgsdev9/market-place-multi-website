
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="kgsdev/datchsimon">
        <meta name="email" content="khmsgroup225@gmail.com">
        <meta name="profile" content="KHMSGROUP">

        <!-- TEMPLATE META -->
        <meta name="name" content="VTP">
        <meta name="title" content="VTP GROUP">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">


        <!-- WEBPAGE TITLE -->
        <title>VTP MARKET - Place</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('assets/pages/images/favicon.png')}}">

        <!-- FONTS -->
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/fontawesome/fontawesome.min.css')}}">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/venobox/venobox.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/pages/vendor/slickslider/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/niceselect/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.css')}}">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{asset('assets/pages/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/css/index.css')}}">

        @livewireStyles
    </head>
    <body style="background-color: #fff;">
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="header-top-welcome">
                            <p>Bienvenue Sur VTP MARKET!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="header-top-select">
                            <div class="header-select">
                                <i class="icofont-world"></i>
                                    <p class="text-white">Vendez vos articles sur VTP</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="offer.html">Soulagez</a></li>
                            <li><a href="faq.html">Vos Voyages</a></li>
                            <li><a href="contact.html">Sur VTP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="{{asset('assets/pages/images/user.png')}}" alt="user"></button>
                        <a href="{{url('/')}}"><img src="{{asset('assets/pages/images/logo.png')}}" alt="logo"></a>

                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="index.html" class="header-logo">
                        <img src="{{asset('assets/pages/images/logo.png')}}" alt="logo">
                    </a>
                    <a href="{{route('login')}}" class="header-widget" title="My Account">
                        <img src="{{asset('assets/pages/images/user.png')}}" alt="user">

                        <span>Mon compte</span>
                    </a>

                    <form class="header-form">
                        <input type="text" placeholder="Rechercher un produit......">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <a href="" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a>
                        <a href="{{route('intent.product')}}" class="header-widget" title="Liste d'envie">
                            <i class="fas fa-heart"></i>

                        </a>
                        @livewire('counter')
                    </div>
                </div>
            </div>
        </header>



                @yield('content')


        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">

                                <img src="{{asset('assets/pages/images/logo.png')}}" alt="">
                            </a>
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">Contact</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>vtpmarket2022@gmail.com</span>
                                        <span>vtpsupport2022@gmail.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+120 279 532 13</span>
                                        <span>+120 279 532 14</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Liens Utils</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Connexion</a></li>
                                    <li><a href="#">inscription</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Nouveau arrivage</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Nos Produits</a></li>
                                    <li><a href="{{route('category.index')}}">Nos Categories</a></li>
                                    <li><a href="#"> Nos Vendeurs</a></li>
                                    <li><a href="#">Nos Transporteurs</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Application Mobile</h3>
                            <p class="footer-desc">Notre Application Mobile est bientot disponible veuillez patientez chers clienrs</p>
                            <div class="footer-app">
                                <a href="#"><img src="{{asset('assets/pages/images/google-store.png')}}" alt="google"></a>

                                <a href="#"><img src="{{asset('assets/pages/images/app-store.png')}}" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  Tous Droits réservés à VTP GROUP<a target="" href=""></a></p>
                            <div class="footer-card">
                                <a href="#"><img src="{{asset('assets/pages/images/payment/jpg/01.jpg')}}" alt="payment"></a>

                                <a href="#"><img src="{{asset('assets/pages/images/payment/jpg/02.jpg')}}" alt="payment"></a>
                                <a href="#"><img src="{{asset('assets/pages/images/payment/jpg/03.jpg')}}" alt="payment"></a>
                                <a href="#"><img src="{{asset('assets/pages/images/payment/jpg/04.jpg')}}" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        @livewireScripts
        <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
        <x-livewire-alert::scripts />
        <script src="{{asset('assets/pages/vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/countdown/countdown.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/niceselect/nice-select.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/slickslider/slick.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/venobox/venobox.min.js')}}"></script>

        <!-- CUSTOM -->
        <script src="{{asset('assets/pages/js/nice-select.js')}}"></script>
        <script src="{{asset('assets/pages/js/countdown.js')}}"></script>
        <script src="{{asset('assets/pages/js/accordion.js')}}"></script>
        <script src="{{asset('assets/pages/js/venobox.js')}}"></script>
        <script src="{{asset('assets/pages/js/slick.js')}}"></script>
        <script src="{{asset('assets/pages/js/main.js')}}"></script>

    </body>
</html>






