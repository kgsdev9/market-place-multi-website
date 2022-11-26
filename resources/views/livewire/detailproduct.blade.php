

        <!--=====================================
                PRODUCT DETAILS PART START
        =======================================-->
        <section class="inner-section" style="margin-top: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="details-gallery">
                            <div class="details-label-group">
                                <label class="details-label new">{{$product_detail->category->name}}</label>
                                <label class="details-label off">-10%</label>
                            </div>
                            <ul class="details-preview">
                                <li><img src="{{asset('items/1.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/3.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/12.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/4.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/7.jpg')}}" alt="product"></li>
                            </ul>
                            <ul class="details-thumb">
                                <li><img src="{{asset('items/1.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/3.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/14.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/4.jpg')}}" alt="product"></li>
                                <li><img src="{{asset('items/7.jpg')}}" alt="product"></li>
                            </ul>
                        </div>
                    </div>
             <div class="col-lg-6">
                        <ul class="product-navigation">
                            <li class="product-nav-prev">
                                <a href="{{route('product.detail',$product_detail->id-1)}}">
                                    <i class="icofont-arrow-left"></i>
                                   Produit Precedent

                                </a>
                            </li>
                            <li class="product-nav-next">
                                <a href="{{route('product.detail',$product_detail->id+1)}}">
                                   Produit Suivant
                                    <i class="icofont-arrow-right"></i>

                                </a>
                            </li>
                        </ul>
                        <div class="details-content">
                            <h3 class="details-name"><a href="#">{{$product_detail->name}}</a></h3>
                            <div class="details-meta">
                                <p>SKU:<span>1234567</span></p>
                                <p>BRAND:<a href="#">radhuni</a></p>
                            </div>
                            <div class="details-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="#">({{count($product_detail->comments)}}) Commentaires</a>
                            </div>
                            <h3 class="details-price">
                                @if ($product_detail->high_price!=null)
                                <del>Prix negocié  {{$product_detail->high_price}} €</del>
                                @endif
                                <span>{{$product_detail->price}}<small>€</small></span>
                            </h3>
                            <p class="details-desc">{{Str::limit($product_detail->description, 169)}}</p>
                            <div class="details-list-group">
                                <label class="details-list-title">tags:</label>
                                <ul class="details-tag-list">
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">fruits</a></li>
                                    <li><a href="#">chilis</a></li>
                                </ul>
                            </div>
                            <div class="details-list-group">
                                <label class="details-list-title">Partager le produit:</label>
                                <ul class="details-share-list">
                                    <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                    <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                    <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                </ul>
                            </div>
                            <div class="details-add-group">
                                <button   wire:click="detailaddtocart({{$product_detail->id}})" class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>Ajouter au panier</span>
                                </button>

                            </div>
                            <div class="details-action-group">
                                <a class="details-wish wish" href="javascript:void(0)" wire:click="addWishlist({{$product_detail->id}})" title="Add Your Wishlist">
                                    <i class="icofont-heart"></i>
                                    <span>Ajouter aux envies</span>
                                </a>
                                <a class="details-compare" href="{{route('form.sms.to_seller', $product_detail->seller->id)}}" title="Compare This Item">
                                    <i class="fas fa-envelope"></i>
                                    <span>Contactez le vendeur</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                PRODUCT DETAILS PART END
        =======================================-->


        <!--=====================================
                  PRODUCT TAB PART START
        =======================================-->
        <section class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#tab-desc" class="tab-link" data-bs-toggle="tab">descriptions</a></li>
                            <li><a href="#tab-spec" class="tab-link active" data-bs-toggle="tab">Specifications</a></li>
                            <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">Commentaires  ({{count($product_detail->comments)}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-desc">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-frame">
                                <div class="tab-descrip">
                                    <p>{{$product_detail->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="tab-spec">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-frame">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Product code</th>
                                            <td>SKU: 101783</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Quantite Du Produit </th>
                                            <td>{{$product_detail->quantity}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pays -Ville </th>
                                            <td>{{$product_detail->country->name}} - {{$product_detail->city->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Catégorie </th>
                                            <td>{{$product_detail->category->name}} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vendeur : {{$product_detail->seller->sirname}}  {{$product_detail->seller->firstname}}</th>
                                            <td><a href="{{route('sellers.products.index',$product_detail->seller->id)}}" class="text-dark">Consulter la boutique du vendeur </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-reve">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-frame">
                                <ul class="review-list">
                                    @foreach ($comments as $c  )
                                    <li class="review-item">
                                        <div class="review-media">
                                            <a class="review-avatar" href="#">
                                                <img src="{{asset('assets/pages/images/avatar/01.jpg')}}" alt="review">
                                            </a>
                                            <h5 class="review-meta">
                                                <a href="#">{{$c->user->name}}</a>
                                                <span>Posté le {{$c->created_at}}</span>
                                            </h5>
                                        </div>
                                        <ul class="review-rating">
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rating"></li>
                                            <li class="icofont-ui-rate-blank"></li>
                                        </ul>
                                        <p class="review-desc">{{$c->content}}</p>


                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="product-details-frame">
                                <h3 class="frame-title">Commenter le produit</h3>
                                <form action='{{route('comment.add')}}' method="POST" >
                                    @csrf
                                    <input type="hidden" value="{{$product_detail->id}}" name="product">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <input type="radio" name="rating" id="star-1"><label for="star-1"></label>
                                                <input type="radio" name="rating" id="star-2"><label for="star-2"></label>
                                                <input type="radio" name="rating" id="star-3"><label for="star-3"></label>
                                                <input type="radio" name="rating" id="star-4"><label for="star-4"></label>
                                                <input type="radio" name="rating" id="star-5"><label for="star-5"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control"   name="content"  placeholder="messsage..."></textarea>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <button class="btn btn-inline">
                                                <i class="icofont-water-drop"></i>
                                                <span>Poster votre commantaire</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PRODUCT TAB PART END
        =======================================-->


        <!--=====================================
                 PRODUCT RELATED PART START
        =======================================-->
        @livewire('detailotherproduct',[ $product_detail->id,$product_detail->category->id])

        <!--=====================================
                 PRODUCT RELATED PART END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>ESPACE PUBLICITAIRE </h2>
                            <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">

                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START

        <!--=====================================
                    INTRO PART END
        =======================================-->






