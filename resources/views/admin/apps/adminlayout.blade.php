
<!doctype html>
<html lang="en">

<head>
<title>Administration Generale</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/toastr.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/plugin.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/css/h-menu.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body data-theme="light" class="font-nunito h_menu">

<div id="wrapper" class="theme-cyan">


    <!-- Horizontal menu  -->
    <div class="over-menu"></div>
    <header class="header" id="header-sroll">
        <div class="container">
            <div class="desk-menu">
                <div class="logo">
                    <div class="d-flex">
                        <h1 class="logo-adn"><a title="Iconic" href="#">Iconic <span>Admin</span></a></h1>
                        <ul class="nav navbar-nav">


                                <form id="logout-form"  action="{{ route('logout') }}" method="POST" class="m-2">
                                    @csrf
                                    <button class="btn btn-dark" type="submit">
                                        {{ __('Deconnection') }}
                                    </button>
                                </form>



                        </ul>
                    </div>
                </div>
                <nav class="box-menu">
                    <div class="menu-container">
                        <div class="menu-head">
                            <h4 class="text-left mb-0">Menu</h4>
                        </div>
                        <div class="menu-header-container">
                            <ul id="cd-primary-nav" class="menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Acteurs</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item active"><a href="{{url('/dashboard/admin/seller/liste')}}">Liste Des Vendeurs</a></li>
                                        <li class="menu-item"><a href="{{route('buyer.all')}}">Liste Des Acheteurs</a></li>
                                        <li class="menu-item"><a href="{{url('/dashboard/admin/carrier/liste')}}">Liste Des Transporteurs</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a >Mes Commande</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{route('admin.order')}}">Liste Des Commandes</a></li>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Categories</a>
                                    <ul class="sub-menu">
                                        <li >
                                            <a href="{{url('/dashboard/admin/cate/forms')}}">Ajouter une categorie </i></a>

                                        </li>
                                        <li>
                                            <a href="{{url('/dashboard/admin/cate/list')}}">Liste Des Categorie </a>

                                        </li>


                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#"> Annonces</a>
                                    <ul class="sub-menu">
                                        <li >
                                            <li class="menu-item"><a href="{{route('admin.announce')}}">Toutes Les Annonces</a></li>
                                        </li>
                                        <li>
                                            <a href="{{route('senbox.announce')}}">Messages liés aux announces </a>
                                        </li>


                                    </ul>
                                </li>


                                <li class="">
                                    <a href="{{route('transport.offre')}}">Offre de transport</a>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pays & Ville</a>
                                    <ul class="sub-menu">
                                        <li >
                                            <li class="menu-item"><a href="{{route('country.index')}}">Gestion de pays</a></li>
                                        </li>
                                        <li>
                                            <a href="{{route('city.index')}}">Gestion de ville</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Gestion de compte </a>
                                    <ul class="sub-menu">
                                        <li class="">
                                            <a href="{{route('profile')}}">Profil</a>
                                        </li>
                                        <li class="contact menu-item ">
                                            <a href="{{url('dashboard/admin')}}">Accueil </a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="line"></li>
                            </ul>
                        </div>
                        <div class="menu-foot">
                            <div class="social">
                                <a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <hr/>
                            <address>
                                <span class="email"><i class="icon-mail"></i> info@thememakker.com</span>
                            </address>
                        </div>
                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Setting section div  -->
    <div class="setting_div">
        <h6>Choose Skin</h6>
            <ul class="choose-skin list-unstyled">
                <li data-theme="purple"><div class="purple"></div></li>
                <li data-theme="blue"><div class="blue"></div></li>
                <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                <li data-theme="green"><div class="green"></div></li>
                <li data-theme="orange"><div class="orange"></div></li>
                <li data-theme="blush"><div class="blush"></div></li>
                <li data-theme="red"><div class="red"></div></li>
            </ul>

            <ul class="list-unstyled font_setting mt-3">
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                        <span class="custom-control-label">Nunito Google Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                        <span class="custom-control-label">Ubuntu Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                        <span class="custom-control-label">Raleway Google Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                        <span class="custom-control-label">IBM Plex Google Font</span>
                    </label>
                </li>
            </ul>

            <ul class="list-unstyled mt-3">
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-switch">
                        <input type="checkbox">
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable Dark Mode!</span>
                </li>
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-rtl">
                        <input type="checkbox">
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable RTL Mode!</span>
                </li>
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-high-contrast">
                        <input type="checkbox">
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable High Contrast Mode!</span>
                </li>
            </ul>

            <hr>
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Allowed Notifications</span>
                    </label>
                </li>
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Offline</span>
                    </label>
                </li>
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Location Permission</span>
                    </label>
                </li>
            </ul>


    </div>
    @yield('admin')

    <!-- Javascript -->
<script src="{{asset('assets/admin/js/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('assets/admin/js/c3.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/h-menu.js')}}"></script>
<script src="{{asset('assets/admin/js/index.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>
