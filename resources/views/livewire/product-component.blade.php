
<section class="section recent-part">

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
                        <label class="label-text sale">Populaire</label>
                    </div>

                    <a class="product-image" href="product-video.html">
                        <img src="{{asset('assets/pages/images/product/01.jpg')}}" alt="">
                    </a>
                    <div class="product-widget">
                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                    </div>
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
                        <a href="product-video.html">{{$product->name}}</a>
                    </h6>
                    <h6 class="product-price">
                        <del>$34</del>
                        <span>$28<small>/piece</small></span>
                    </h6>

                <button  wire:click="addtocart({{$product->id}})" class="product-add" title="Add to Cart">
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
                    <a href="shop-4column.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>Consulter Cette Rubrique</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            RECENT PART END
=======================================-->
