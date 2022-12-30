<div>
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Les Tendances du moment </h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                    @foreach ($product as $value )
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">Africaine</label>
                                </div>

                                <a class="feature-image" href="{{route('product.detail', $value->id)}}">
                                    <img src="{{asset('cover/'.$value->cover_image)}}" alt="">

                                </a>

                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="{{route('product.detail', $value->id)}}">{{$value->name}}</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="{{route('product.detail', $value->id)}}">({{count($value->comments)}})</a>
                                </div>
                                <h6 class="feature-price">

                                    <span>{{$value->price}}<small> €</small></span>
                                </h6>
                                <p class="feature-desc">{{Str::limit($value->description, 100)}}</p>
                                <button  wire:click="addsectioncart({{$value->id}})" class="product-add" title="Ajouter au panier">
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
