

<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>BOUTIQUE OFFICIELLE VTP </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nos Produits</li>
            </ol>
        </div>
    </section>

    <section class="inner-section shop-part">
        <div class="container">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                @foreach ($products as $p )

                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text new">{{$p->category->name}}</label>
                            </div>
                            <button  wire:click="addWishlist({{$p->id}})" class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="{{route('product.detail', $p->id)}}">
                                <img src="{{asset('cover/'.$p->cover_image)}}" alt="product">
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
                                <a href="product-video.html">{{$p->name}}</a>
                            </h6>
                            <h6 class="product-price">
                                <span>{{$p->price}}<small> €</small></span>
                            </h6>
                            <button  wire:click="selleraddtocart({{$p->id}})" class="product-add" title="Add to Cart">
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
</div>
