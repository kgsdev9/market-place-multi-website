@if(session()->get('cart') >0 )
<section class="inner-section wishlist-part" style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-scroll">
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Nom du produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sous-total</th>
                                <th scope="col">Sous-total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            @livewire('actioncomponent')
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-5">
                    <button class="btn btn-outline">
                       <a href="{{route('payement.method')}}" class="text-success">Passer au paiement</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>related this items</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/01.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                            <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/02.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/03.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/04.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/05.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/06.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/07.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/08.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card product-disable">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/09.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label">
                            <label class="label-text sale">sale</label>
                        </div>
                        <button class="product-wish wish">
                            <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                            <img src="images/product/10.jpg" alt="product">
                        </a>
                        <div class="product-widget">
                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item" data-autoplay="true" data-vbtype="video"></a>
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
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25">
                    <a href="shop-4column.html" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>view all related</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endif
