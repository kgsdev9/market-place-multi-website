<!DOCTYPE html>
<html lang="en">
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
              <meta name="keywords" content="VTP MARKET est une plateforme d'achat et de vente francaise qui tire principalement ses revenus de ses activités sur Internet, dont un marché public destiné à faciliter les échanges entre clients et vendeurs">
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
        </head>
<body>

</body>
</html>

<section class="error-part">
    <div class="container">
        <h1>Paiement effectué avec succés</h1>
        <img class="img-fluid" src="{{asset('assets/imagesvtp/succes.png')}}" alt="error">
        <h3>Votre Paiment à été effectué.</h3>
        <p>les références de la transaction vous ont étés envoyées par courrier électronique. <br>
            Veuillez acceder à votre espace si vous désirez consulter et suivre votre commande
        </p>
        <p>Cordialement</p>
       <p><strong>VTP GROUP</strong></p>
        <a href="{{route('home')}}">Retourner à l'accueil</a>
    </div>
</section>


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
