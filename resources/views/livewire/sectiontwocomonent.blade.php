<div>
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2> Produits Récommandés VIP </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-price"></i>
                                <span>RUBRIQUE POPULAIRE</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    @foreach ( $ressourcesproduct as $productsection )
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">Mieux notés</label>
                                </div>

                                <a class="product-image" href="{{route('product.detail', $productsection->id)}}">
                                    <img src="{{asset('cover/'.$productsection->cover_image)}}" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="{{route('product.detail', $productsection->id)}}">({{count($productsection->comments)}})</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="{{route('product.detail', $productsection->id)}}">{{$productsection->name}}</a>
                                </h6>
                                <h6 class="product-price">

                                    <span>{{$productsection->price}}€</span>
                                </h6>
                                <button wire:click="addtoproduct({{$productsection->id}})" class="product-add" title="Ajouter au panier">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Ajouter au panier</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="{{route('index.product')}}" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>Consulter D'autres Produits</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
