<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>Produits Simialires</h2>
                </div>
            </div>
        </div>


            @if (count($otherproducts)>0)

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                @foreach ($otherproducts as $value )
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">{{$value->category->name}}</label>
                            </div>
                            <button  wire:click="addWishlist({{$value->id}})" class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="{{route('product.detail', $value->id)}}">
                                <img src="{{asset('cover/'.$value->cover_image)}}" alt="product">
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
                                <a href="{{route('product.category.index', $value->category->id)}}">{{Str::limit($value->name, 17)}}</a>
                            </h6>
                            <h6 class="product-price">

                                <span>{{$value->price}}<small> €</small></span>
                            </h6>
                            <button   wire:click="otherproductadd({{$value->id}})"  class="product-add" title="Ajouter au panier">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Ajouter au panier</span>
                            </button>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="{{route('product.category.index', $value->category->id)}}" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>Consulter D'autres Produits </span>
                        </a>
                    </div>
                </div>
            </div>
            @else
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col">

                </div>
        </div>
            @endif




    </div>
</section>
