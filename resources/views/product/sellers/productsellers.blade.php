{{--
<section class="single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Boutique  {{$seller->firstname  }}  {{$seller->sirname  }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item"><a href="brand-list.html">Boutique</a></li>
            <li class="breadcrumb-item active" aria-current="page"> {{$seller->firstname  }}</li>
        </ol>
    </div>
</section>


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
                        <button  wire:click="add({{$productseller}})" class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="{{route('product.detail', $productseller->id)}}">
                            <img src="{{asset('assets/pages/images/product/01.jpg')}}" alt="product">
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
                        <button class="product-add" title="Add to Cart">
                            <i class="fas fa-shopping-basket"></i>
                            <span>add</span>
                        </button>
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach






        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-paginate">
                    <p class="page-info">Showing 12 of 60 Results</p>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">60</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 --}}
