@extends('dashboard.layout.app')
@section('main')
<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Product Detail</h3>
                            <div class="nk-block-des text-soft">
                                <p>{{ $product->category->name }}</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="javascript:history.back()" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                            <a href="" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block ">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-7">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <div class="example-carousel">
                                                <div id="carouselExCap" class="carousel slide" data-bs-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-bs-target="#carouselExCap" data-bs-slide-to="0" class="active" aria-current="true"></li>
                                                        <li data-bs-target="#carouselExCap" data-bs-slide-to="1" class=""></li>
                                                        <li data-bs-target="#carouselExCap" data-bs-slide-to="2" class=""></li>
                                                    </ol>
                                                    <div class="carousel-inner text-white">
                                                        <div class="carousel-item active">
                                                            <img     src="{{asset('cover/'.$product->cover_image )}}" class="d-block w-50">
                                                            <div class="carousel-caption d-none d-md-block">

                                                            </div>
                                                        </div>
                                                        @foreach ( $product->images as $i  )
                                                                <div class="carousel-item">
                                                                    <img src="{{asset('images/'.$i->image)}}" class="d-block w-50" alt="...">
                                                                    <div class="carousel-caption d-none d-md-block">

                                                                    </div>
                                                                 </div>
                                                        @endforeach


                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExCap" role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">précédant</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExCap" role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Suivant</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->

                            </div><!-- .row -->
                            <hr class="hr border-light">
                            <div class="row g-gs flex-lg-row pt-5">
                                <div class="col-lg-6">
                                    <div class="product-details ">
                                        <h3>Description du produit </h3>
                                        <p>{{$product->description }}</p>
                                        <ul class="list list-sm list-checked">
                                            <li>Pays de provenance {{$product->country }} </li>
                                            <li>Ville  de provenance {{$product->city }}</li>
                                            <li>Quantite {{$product->quantity }}</li>

                                        </ul>


                                        <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#modalDefault">Modifier le produit</button>

                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info pt-2">
                                        <h4 class="product-price ">Prix  :  {{$product->price }}€ </h4>
                                        <h4 class="product-title">libellé produit :  {{$product->name }}</h2>

                                        <div class="product-excrept text-soft">
                                            <p class="lead">Nouveau Prix Negocié : &nbsp;&nbsp;
                                                <span class="text-danger">{{  $product->high_price }} €</span>
                                            </p>
                                        </div>



                                        <div class="product-meta">
                                            <ul class="d-flex flex-wrap ailgn-center g-2 pt-1">

                                                <li>
                                                </li>

                                            </ul>
                                        </div><!-- .product-meta -->
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row       -->
<hr>
                            <div class="row g-gs flex-lg-row pt-5">
                                <div class="col-lg-12">
                                    <div class="">
                                        <h4>Politique des coupons </h4>

                                        <p>
                                                 <ul  type="number">
                                                     <li>1-Le montant  est négocié  au  rabais  avec un potentiel acheteur</li>
                                                     <li>2-Le coupon est généré à partir du prix négocié au  rabais  </li>
                                                     <li>3-Le coupon est n'est utilisable qu'une seule fois  </li>
                                                 </ul>
                                        </p>
                                        <p>

                                            <form action="{{route('create.coupon')}}" method="POST">
                                             @csrf
                                             <div class="form-group">
                                                <input type="text"  name="high_price" class="form-control"  placeholder="entrer le prix négocier">
                                             </div>
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="submit"   value="Generer un coupon sur le nouveau prix négocier" class="btn btn-light" href="{{route('create.coupon',$product->id)}}" >

                                            </form>


                                        </p>

                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row     -->
                            <div class="row g-gs flex-lg-row pt-5">
                                <div class="col-lg-12">
                                    <div class="">
                                        <h4>Liste des coupons </h4>


                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>

                                                <th scope="col">coupon</th>
                                                <th scope="col">montant</th>
                                                <th scope="col">utiliser</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                    @foreach ($coupons as $c)


                                    <tr>
                                        <td>
                                            {{$c->coupon}}
                                        </td>
                                        <td>
                                            {{$c->price}}  €
                                        </td>
                                        <td>
                                            @if ($c->used==true)
                                            <span class="text-success">Oui</span>

                                            @else
                                            <span class="text-danger">Non</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a href="{{route('delete.coupon',$c->id)}}" class="btn btn-danger">supprimer</a>
                                        </td>
                                    </tr>

                                    @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row     -->

                        </div>



                    </div>
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>

</div>
<!-- Modal Content Code -->
<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="modalDefault">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        @method('PUT')
                        <div class="row clearfix">

                            <input type="hidden" name="product_id"  value="{{  $product->id }}">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nom du produt </label>
                                    <input type="text" class="form-control"  name="name" value="{{ $product->name }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nom Du Produit </label>
                                    <input type="text" class="form-control" name="slug"  value="{{ $product->slug }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Pays De Provenance Du produit  </label>
                                    <input type="text" class="form-control"  name="country"  value="{{ $product->country }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Ville De Provenance Du produit</label>
                                    <input type="text" class="form-control"  name="city" value="{{ $product->city }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Statut  actuelle:  {{  $product->statut}} </label>
                                    <select name="statut" id="" class="form-control">
                                        <option value="disponible">disponible</option>
                                        <option value="stock vide ">indisponible</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Prix Du Produit </label>
                                    <input type="text" class="form-control"  name="price" value="{{ $product->price }}">
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Quantite Du produit  </label>
                                    <input type="number" class="form-control"  name="quantity" value="{{ $product->quantity }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Image de couverture </label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Autres Images </label>
                                    <input type="file" class="form-control" name="images" multiple>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Catégorie   </label>
                                    <select name="category_id" id="" class="form-control">

                                        <option value="{{$product->category->id }}">{{ $product->category->name }}</option>
                                        @foreach ($categories as $c)
                                        @if (strcmp($product->category->name, $c->name)!=0)
                                        <option value="{{ $c->id}}">{{ $c->name }}</option>
                                        @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Description du produit </label>
                                    <textarea  id="" cols="20" rows="5" class="form-control" name="description">{{ $product->description }}</textarea>

                                </div>

                            </div>


           </div>
            <div class="modal-footer bg-light">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Modifier Le Produit </button>
                    </div>


            </div>
       </form>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
