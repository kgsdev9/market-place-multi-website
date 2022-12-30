


<section class="section recent-part" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Produit recemments ajoutés </h2>
                </div>
            </div>
        </div>



        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @foreach ($product as $product )
            <div class="col">
                <div class="product-card">
                <div class="product-media">
                    <div class="product-label">
                        <label class="label-text sale">-10%</label>
                    </div>
                    <a class="product-image" href="{{route('product.detail', $product->id)}}">
                        <img src="{{asset('cover/'.$product->cover_image)}}" alt="">
                    </a>

                </div>
                <div class="product-content">
                    <div class="product-rating">
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="active icofont-star"></i>
                        <i class="icofont-star"></i>
                        <a href="{{route('product.detail', $product->id)}}">(3)</a>
                    </div>
                    <h6 class="product-name">
                        <a href="{{route('product.detail', $product->id)}}"> {{ Str::limit($product->name, 15)}}</a>
                    </h6>
                    <h6 class="product-price">
                        <span>{{$product->price}} €</span>
                    </h6>

                <button  wire:click="addtocart({{$product->id}})" class="product-add" title="Ajouter au panier">
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
<!--=====================================
            RECENT PART END
=======================================-->
