
<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>{{$productcategory->name}}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$productcategory->name}}</li>
            </ol>
        </div>
    </section>
        <div class="container">

                <div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                        @foreach ($product as $ressources )
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">{{$ressources->category->name}}</label>
                                    </div>
                                    <button  wire:click="Heart({{$ressources->id}})"  class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="{{route('product.detail', $ressources->id)}}">
                                        <img src="{{asset('cover/'.$ressources->cover_image)}}" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="{{route('product.detail', $ressources->id)}}">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="{{route('product.detail', $ressources->id)}}">{{ Str::limit($ressources->name, 17)}}</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>{{$ressources->price }} ???</span>
                                    </h6>
                                    <div>
                                        <button  wire:click="adfunction({{$ressources->id}})" class="product-add" title="Ajouter au panier">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>Ajouter au Panier</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Produits Certifi??s par VTP</p>
                        <ul class="pagination">
                                {{$product->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>


</div>
