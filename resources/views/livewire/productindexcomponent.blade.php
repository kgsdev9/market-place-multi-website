

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
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                    <form class="col" wire:submit.prevent="filterByCountry">
                        <div class="filter-short">
                            <label class="filter-label">Trié par Pays :</label>
                            <select class="form-select pca" wire:model="country" id="country_select">
                                <option value="">Tout</option>
                                @foreach ($countries as $ct )

                                <option value="{{$ct->id}}">{{$ct->name}}</option>
                                @endforeach

                            </select>
                            <input id="search_country_btn" type="submit" style="display: none">
                        </div>
                    </form>
                    <form  class="col"   wire:submit.prevent="filterByCity">
                        @csrf
                        <div class="filter-short">
                            <div>  </div>

                            <label class="filter-label">Trié par  Ville :</label>
                            <select class="form-select" wire:model='city' id="city_select">
                                <option value="">Tout</option>
                                @foreach ($cities as $c )
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach


                            </select>
                            <input id="search_city_btn" type="submit" style="display: none">


                            <div></div>
                        </div>

                    </form>

                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">

                @foreach ($randomproduct as $random )
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text new">-10%</label>
                            </div>
                            <button  wire:click="addWishlist({{$random->id}})" class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="{{route('product.detail', $random->id)}}">
                                <img src="{{asset('cover/'.$random->cover_image)}}" alt="product">
                            </a>

                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="{{route('product.detail', $random->id)}}">({{count($random->comments)}})</a>
                            </div>
                            <h6 class="product-name">
                                <a href="{{route('product.detail', $random->id)}}"> {{ Str::limit($random->name, 16)}}</a>
                            </h6>
                            <h6 class="product-price">
                                <span>{{ $random->price}}<small>€</small></span>
                            </h6>
                            <button  wire:click="add({{$random->id}})" class="product-add" title="Ajouter au panier">
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
