


            <div>
                <style>
                   div#social-links {
                       margin: 0 auto;
                       max-width: 500px;
                   }
                   div#social-links ul li {
                       display: inline-block;
                   }
                   div#social-links ul li a {


                       font-size: 20px ;



                   }
               </style>



                       <section class="inner-section" style="margin-top: 50px;">
                           <div class="container">
                               <div class="row">
                                   <div class="col-lg-6">
                                       <div class="product-grid"  style="overflow-y: scroll;height:300px">
                                        <a href="{{asset('cover/'.$product_detail->cover_image)}}" target="about_blank">   <img   class="img-fluid" src="{{asset('cover/'.$product_detail->cover_image)}}" alt="product"></a>
                                           @foreach ($product_detail->images as $img)

                                          <a href="{{asset('images/'.$img->image)}}" target="about_blank"><img class="img-fluid" src="{{asset('images/'.$img->image)}}"    alt="product"></a>
                                           @endforeach


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
                                            @if($product_detail->statut =="disponible")
                                               <p>PRODUIT  :<a href="#" class="text-success">Disponible</a></p>
                                               @elseif($product_detail->statut =="stock vide")
                                               <p>PRODUIT  :<a href="#" class="text-danger">InDisponible</a></p>
                                               @endif
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
                                               <label class="details-list-title">Partager le produit:</label>
                                               <ul class="details-share-list">

                                                   <div class="container mt-4">

                                                       {!! $shareComponent !!}
                                                   </div>

                                                   {{-- <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                                   <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                                   <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                                   <li><a href="#" class="icofont-instagram" title="Instagram"></a></li> --}}
                                               </ul>
                                           </div>
                                           <div class="details-add-group">
                                               <button  class="product-add"  wire:click="detailaddtocart({{$product_detail->id}})"  title="Ajouter au panier">
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
                   </div>

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
                                       <div class="tab-descrip">
                                           <p>Quantite Du Produit {{$product_detail->quantity}}</p>
                                           <p>Pays -Ville   {{$product_detail->country->name}} - {{$product_detail->city->name}}</p>
                                           <p>Vendeur : {{$product_detail->seller->sirname}}  {{$product_detail->seller->firstname}}</p>


                                       </div>
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



                                               <p class="review-desc">{{$c->content}}</p>

                                               @can('update',$c)


                                               <form class="review-reply row" action="{{route('edit_comment')}}" method="POST">
                                                   @csrf
                                                   <div class="col-md-6">
                                                       <input type="hidden" name="comment_id" value="{{$c->id}}">
                                                       <input type="text" placeholder="Modifier mon commentaire ..."  name="content">
                                                   </div>

                                                   <div class="col-md-2">
                                                       <button><i class="icofont-reply "></i>Modifier</button>
                                                   </div>
                                                   <div class="col-md-2">
                                                       <a class="btn" href="{{route('supprimer_comment',$c->id)}}"><small>supprimer</small></a>
                                                   </div>



                                               </form>
                                               @endcan
                                               @can('delete',$c)





                                           @endcan


                                           </li>

                                           @endforeach


                                       </ul>
                                   </div>
                                   <div class="product-details-frame">
                                       <h3 class="frame-title">Commenter le produit</h3>
                                       <form action='{{route('add_comment')}}' method="POST" >
                                           @csrf
                                           <input type="hidden" name="product"  value="{{$product_detail->id}}" >
                                           <div class="row">

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
                                <h2>Boutique Du vendeur</h2>

                            </div>
                        </div>
                        <div class="col-md-7 col-lg-6 col-xl-5">
                            <form class="news-form">


                             <button><span><a href="{{route('sellers.products.index',$product_detail->seller->id)}}" class="text-white">consulter</a></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>






