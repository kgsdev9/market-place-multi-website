

<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Produit VTP </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nos Produits</li>
            </ol>
        </div>
    </section>

    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    <div class="shop-widget-promo">
                        <a href="#"><img src="{{asset('assets/pages/images/promo/shop/01.jpg')}}" alt="promo"></a>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Trié par Prix</h6>
                        <form>
                            <div class="shop-widget-group">
                                <input type="text" placeholder="Min ">
                                <input type="text" placeholder="Max">
                            </div>
                            <button class="shop-widget-btn">
                                <i class="fas fa-search"></i>
                                <span>Afficher</span>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Publicite</h6>

                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">PUBLCIITE</h6>

                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filtrer Par Category</h6>
                        <form>
                            <input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand1">
                                        <label for="brand1">mari gold</label>
                                    </div>
                                    <span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand2">
                                        <label for="brand2">tredar</label>
                                    </div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand3">
                                        <label for="brand3">keya</label>
                                    </div>
                                    <span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand4">
                                        <label for="brand4">diamond</label>
                                    </div>
                                    <span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand5">
                                        <label for="brand5">lilly's</label>
                                    </div>
                                    <span class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand6">
                                        <label for="brand6">fremant</label>
                                    </div>
                                    <span class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand7">
                                        <label for="brand7">avocads</label>
                                    </div>
                                    <span class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand8">
                                        <label for="brand8">boroclas</label>
                                    </div>
                                    <span class="shop-widget-number">(85)</span>
                                </li>
                            </ul>
                            <button class="shop-widget-btn">
                                <i class="far fa-trash-alt"></i>
                                <span>clear filter</span>
                            </button>
                        </form>
                    </div>

                    <div class="shop-widget">
                        <h6 class="shop-widget-title">PUBLICITE</h6>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-short">
                                    <label class="filter-label">Trié Par Pays :</label>
                                    <select class="form-select pca"  >
                                        @foreach ( $country as $value )
                                        <option  value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="filter-short">
                                    <label class="filter-label">Trié Par Ville :</label>
                                    <select class="form-select pca" >
                                        @foreach ( $city as $val )
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="filter-action">
                                    <a href="shop-3column.html" title="Three Column"><i class="fas fa-th"></i></a>
                                    <a href="shop-2column.html" title="Two Column"><i class="fas fa-th-large"></i></a>
                                    <a href="shop-1column.html" title="One Column"><i class="fas fa-th-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">

                        @foreach ($randomproduct as $random )
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">new</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
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
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
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
            </div>
        </div>
    </section>
</div>
