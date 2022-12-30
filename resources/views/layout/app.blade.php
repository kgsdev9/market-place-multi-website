
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
          <meta name="keywords" content="VENDEZ,VOYAGEZ,ACHETEZ SUR VTP">
          <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

          <!-- WEBPAGE TITLE -->
          <title>VTP MARKET - Place</title>

          <!-- FAVICON -->
          <link rel="icon" href="{{asset('assets/vtp-logo.png')}}">

          <!-- FONTS -->
          <link rel="stylesheet" href="{{asset('assets/pages/fonts/flaticon/flaticon.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/fonts/icofont/icofont.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/fonts/fontawesome/fontawesome.min.css')}}">

          <!-- VENDOR -->
          <link rel="stylesheet" href="{{asset('assets/pages/vendor/venobox/venobox.min.css')}}">

          <link rel="stylesheet" href="{{asset('assets/pages/vendor/slickslider/slick.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/vendor/niceselect/nice-select.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

          <!-- CUSTOM -->
          <link rel="stylesheet" href="{{asset('assets/pages/css/main.css')}}">
          {{-- <link rel="stylesheet" href="{{asset('assets/pages/css/index.css')}}"> --}}

          <link rel="stylesheet" href="'{{asset('assets/pages/css/home-standard.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/product-details.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/home-grid.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/blog-author.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/product-details.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/product-grid.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/wallet.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/brand-single.css')}}">
          <link rel="stylesheet" href="{{asset('assets/pages/css/error.css')}}">
          <script src="{{asset('assets/pages/js/ajaxjquery.min.js')}}"></script>
          @livewireStyles
            <style>
                <style>
    div#social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li {
        display: inline-block;
    }
    div#social-links ul li a {


        font-size: 20px ;



    }
</style>

            </style>
            @livewireStyles
    </head>
    <body style="background-color: #fff;">
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>

        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <div class="header-top" style="background-color: #088178;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="header-top-welcome">
                            <p>Bienvenue Sur VTP </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="header-top-select">
                            <div class="header-select">

                                <i class="icofont-money"></i>
                                <select class="select">
                                    <option value="">Vendez, Achetez, Voyagez Sur VTP</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="{{route('index.product')}}">VTP MARKET</a></li>
                            <li><a href="{{route('annonce.index')}}">VTP VOYAGE</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    HEADER TOP PART END
        =======================================-->



        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><i class="fa-solid fa-bars"></i></button>
                        <a href="{{url('/')}}"><img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="logo-responsive" style="height:60px;"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                            @guest
                            <a href="{{url('/')}}" class="header-logo">
                                <img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="vtp-logo/home" style="height:90px;">
                            </a>
                            <a href="{{route('login')}}" class="header-widget" title="Mon compte">
                                {{-- <img src="{{asset('')}}" alt=""> --}}
                                <span>Mon compte</span>
                            </a>
                                @else
                                <a href="{{url('/')}}" class="header-logo">
                                     <img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="" style="height: 60px;">
                                </a>
                                <a href="{{route('dashboard')}}" class="header-widget" title="Mon compte">
                                    {{-- <img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt=""> --}}
                                    <span>Tableau de bord</span>
                                </a>
                            @endguest



                    <form class="header-form" method="POST" action="{{route('search.product')}}">
                        @csrf
                        <input type="text" name="searchproduct" class="searchproducts"    placeholder="Rechercher un produit...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <a href="" class="header-widget" title="Centre D'aide">
                            <i class="fas fa-headset"></i>

                        </a>
                        <a href="{{route('intent.product')}}" class="header-widget" title="Liste d'envie">
                            <i class="fas fa-heart"></i>
                        </a>
                        @livewire('counter')
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item">
                                    <a class="navbar-link" href="{{url('/')}}">Accueil</a>

                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link " href="{{route('index.product')}}">Nos Produits</a>

                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="{{route('category.index')}}">Nos Categories</a>
                                   @livewire('categories-search-bar-list')
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">Nos Partenaires</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="{{route('seller.pages')}}">Nos Vendeurs</a></li>
                                        <li><a href="">Nos Ttansporteurs</a></li>
                                    </ul>
                                </li>

                                <li class="navbar-item dropdown">
                                    <a class="navbar-link" href="{{route('annonce.index')}}">Annonce De Voyage</a>
                                </li>
                            </ul>
                            <div class="navbar-info-group">
                                <div class="navbar-info">
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <small>Comprendre VTP VOYAGE</small>
                                        <a href="" class="text-dark"><span>Centre d'aide voyage</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->



        <!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->
            @livewire('categoryresponsivecomponent')
        <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->



        <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="#"><img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="logo" style="height:60px;"></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                @guest
                <div class="nav-btn">
                    <a href="{{route('login')}}" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Mon Compte</span>
                    </a>
                </div>
                    @else
                    <div class="nav-btn">
                        <a href="{{route('dashboard')}}" class="btn btn-inline">
                            <i class="fa fa-unlock-alt"></i>
                            <span>Tableau de bord</span>
                        </a>
                    </div>

                @endguest
                <ul class="nav-list">
                    <li>
                        <a class="nav-link" href="{{url('/')}}"><i class="icofont-home"></i>Accueil</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('index.product')}}"> <i class="icofont-food-cart"></i>Nos Produits</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('category.index')}}"><i class="icofont-page"></i>Nos Categories</a>

                    </li>
                    <li>
                        <a class="nav-link dropdown-link" ><i class="icofont-bag-alt"></i>Nos Partenaires</a>
                        <ul class="dropdown-list">
                            <li><a href="{{route('seller.pages')}}">Nos Vendeurs</a></li>
                            <li><a href="">Nos Transporteurs</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('/annonces/bagages')}}"> <i class="icofont-sale-discount"></i> Annonce De Voyage</a>

                    </li>
                    <li>
                        <a class="nav-link " href="#"><i class="icofont-book-alt"></i>Comprendre VTP</a>
                    </li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>Adresse E-Mail</small>
                            <span>vtpmarket2022@gmail.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>Bienvenue sur  <a href="#">VTP</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="mobile-menu">
            <a href="{{url('/')}}" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
            </a>
            <button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i>
                <span>Categories</span>
            </button>

                @livewire('responsivesessioncart')

            <a href="{{route('intent.product')}}" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>Envies</span>
            </a>
                @guest
                <a href="{{route('login')}}" title="Compare List">
                    <i class="fas fa-user"></i>
                    <span>Compte</span>
                </a>
                    @else
                    <a href="" title="Compare List">
                        <i class="fas fa-user"></i>
                        <span>Votre Espace</span>
                    </a>
                @endguest

        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->



        <!--=====================================
                    BANNER PART START
        =======================================-->

        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    SUGGEST PART START
        =======================================-->

        <!--=====================================
                    SUGGEST PART END
        =======================================-->


        <!--=====================================
                    RECENT PART START
        =======================================-->


        @yield('content')
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="" style="height: 70px; width:90px;">
                            </a>
                            <p class="footer-desc">VTP MARKET est une plateforme d'achat et de vente  francaise qui tire principalement ses revenus de ses activités sur Internet, dont un marché public destiné à faciliter les échanges entre clients et vendeurs</p>
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
                            <h3 class="footer-title">NOS CONTACTS</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span> vtp-marketplace@gmail.com</span>

                                    </p>
                                </li>

                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                            <a href="{{asset('assets/copyright/CGU.pdf')}}" class="text-dark">
                                                <span>Politique de Résolution des Litiges</span>
                                            </a>

                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">SERVICE CLIENT</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Comment acheter sur VTP ?</a></li>
                                    <li><a href="#">Comment se faire livrer </a></li>

                                </ul>
                                <ul>
                                    <li><a href="#">Comment Poster une annonce</a></li>
                                    <li><a href="{{route('index.product')}}">Nos Produits</a></li>
                                    <li><a href="{{route('category.index')}}">Nos Categories</a></li>
                                    <li><a href="{{route('seller.pages')}}">Nos Vendeurs</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">METHODE DE PAIEMENT</h3>
                            <p class="footer-desc">Nous vous offrons plusieurs options de paiement adaptées à votre zone geographique !</p>
                            <div class="footer-app">
                                <a href="#"><img src="{{asset('assets/imagesvtp/payment-method.png')}}" alt="google"></a>
                                <a href="#"><img src="{{asset('assets/imagesvtp/btn-paypal.png')}}" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        @livewireScripts
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
        <script src="{{asset('assets/pages/js/filter.js')}}"></script>
        <script src=" {{asset('assets/admin/js/change_image.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->

        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


        <script>
            $( function() {
              var availableTags = [];
              $.ajax({
               method:"GET",
               url:"/product/search",
               success:function(response){

                startAutocomplete(response);
               }
              })
              function startAutocomplete(availableTags){
                        $( ".searchproducts" ).autocomplete({
                        source: availableTags
                    });
              }
            } );
            ///
        </script>



<style>
    .ui-menu{
    display: flex;
    flex-direction: column !important;
    background-color: #fff!important;
    max-width: 645px;
    border: 1px solid;
    padding-left: 10px;
    z-index: 1000;

    }

</style>
  @include('sweetalert::alert')
    </body>
</html>




