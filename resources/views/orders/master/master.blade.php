
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>PAIEMENT</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/fontawesome/fontawesome.min.css')}}">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/venobox/venobox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/slickslider/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/niceselect/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.css')}}">
        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{asset('assets/pages/css/user-auth.css')}}">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>

             @yield('oders')

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

        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>
