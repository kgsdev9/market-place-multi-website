
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VENDEZ,VOYAGEZ,ACHETEZ SUR VTP ">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Tableau Gestion VTP GROUP</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('ressources/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.3">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="{{route('dashboard')}}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('assets/pages/images/logo.png')}}" srcset="{{asset('assets/pages/images/logo.png')}}" alt="test">
                            <img class="logo-dark logo-img" src="{{asset('assets/pages/images/logo.png')}}" srcset="{{asset('assets/pages/images/logo.png')}}" alt="logos">
                        </a>
                    </div>
                </div>
                @include('dashboard.layout.sidebar')
            </div>
            <!-- sidebar @e -->
            <!-- wrap  -->
            <div class="nk-wrap ">
                @include('dashboard.layout.topbar')
                <!-- content  -->
                @yield('main')
                <!-- content  -->

            </div>
            <!-- wrap -->
        </div>
        <!-- main -->
    </div>

    @include('sweetalert::alert')
    <script src="{{asset('ressources/js/bundle.js')}}"></script>
    <script src="{{asset('ressources/js/scripts.js')}}"></script>
    <script src="{{asset('ressources/js/charts/gd-default.js')}}"></script>

</body>

</html>
