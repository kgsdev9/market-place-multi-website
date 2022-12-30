


<div>

    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            padding:10px;
            border: 1px solid #ccc;
            margin: 1px;
            margin-left:30px;
            font-size: 30px;
            color: #222;
            background-color: #ccc;
        }
    </style>

    <section class="single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>BOUTIQUE  DE {{$seller->firstname  }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                <li class="breadcrumb-item"><a >Boutique </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$seller->firstname  }}</li>
            </ol>
        </div>
    </section>


    <div class="brand-single">
        <a href="#"><img src="{{asset('assets/vendeur.jpg')}}" alt="brand"></a>
        <a href="#"><h3>{{$seller->sirname  }}   {{$seller->firstname  }}</h3></a>
        <ul>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star"></li>
            <li class="total">(163 ratings)</li>
        </ul>
        <p>  ({{count($product_seller)}}  Produits Ajoutés)</p>
    </div>


    <section class="inner-section shop-part" style="margin-top:40px;">
        <div class="container">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                @foreach ($product_seller as $productseller )

                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text new">{{$productseller->category->name}}</label>
                            </div>
                            <button  wire:click="addWishlist({{$productseller->id}})" class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="{{route('product.detail', $productseller->id)}}">
                                <img src="{{asset('cover/'.$productseller->cover_image)}}" alt="product">
                            </a>

                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.html">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.html">{{$productseller->name}}</a>
                            </h6>
                            <h6 class="product-price">
                                <span>{{$productseller->price}}<small> €</small></span>
                            </h6>
                            <button  wire:click="selleraddtocart({{$productseller->id}})" class="product-add" title="Ajouter au panier">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Ajouter au panier</span>
                            </button>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <h2 style="color: #fff;">{!! $shareComponent !!}</h2>


</div>
