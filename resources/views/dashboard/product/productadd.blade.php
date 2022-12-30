@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">

      @can('seller_account_update')
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">NOUVEAU PRODUIT</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <form method="POST" action="{{route('create.product')}}"   enctype="multipart/form-data">
                        @csrf
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Nom produit
                                                @error('name')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                              <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <!--col-->
                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Ville d'origine
                                                @error('city')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                          <select name="city" id="" class="form-control">
                                                    <option value="">-----------------------</option>
                                                    @foreach ( $country as $value  )
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                          </select>
                                        </div>
                                    </div>
                                    <!--col-->

                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label" for="last-name">Pays D'origine
                                                @error('country')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                            </label>

                                          <select name="country" id="" class="form-control">
                                                    <option value="">-----------------------</option>
                                                    @foreach ( $city as $ville  )
                                                        <option value="{{$ville->id}}">{{$ville->name}}</option>
                                                    @endforeach
                                          </select>
                                        </div>
                                    </div>



                                    <div class="col-md-6 col-lg-6 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Prix de vente en €
                                                @error('price')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                                <input type="number" name="price" class="form-control" placeholder="valeur en Euro"  value="{{old('price')}}">

                                        </div>
                                    </div>


                                    <div class="col-md-6 col-lg-6 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Statut
                                                @error('statut')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                            <select name="statut" id="" class="form-control">
                                                <option value="">-------------------</option>

                                                <option value="disponible">disponible</option>
                                                <option value="stock vide">indisponible</option>
                                              </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Catégorie
                                                @error('category_id')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                            <select  name="category_id" id="" class="form-control">
                                                <option value="">-------------------</option>
                                                        @foreach ($cate as $liste)
                                                        <option value="{{$liste->id}}">{{$liste->name}}</option>
                                                        @endforeach

                                              </select>
                                        </div>
                                    </div>




                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="sku" value="{{Auth::user()->id}}">

                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Quantite Du Produit
                                                @error('quantity')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                              <input type="number"  name="quantity" class="form-control" placeholder="Entrer La Quantite Du Produit">
                                        </div>
                                    </div>
                                    <!--col-->

                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                       <label class="form-label">Image De premier Plan
                                             @error('first_image')
                                              <small style="color: red" >{{$message}}</small>
                                                @enderror
                                             </label>
                                             <input type="file" name="first_image" class="form-control"   value="{{old('first_image')}}">
                                        </div>
                                    </div>
                                    <!--col-->
                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">Inserer Vos Images
                                                @error('images')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                              <input type="file" name="images[]" multiple   class="form-control" placeholder="" value="{{old('images')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label">AJouter des tags
                                                @error('tag')
                                                <small style="color: red" >{{$message}}</small>
                                                @enderror
                                              </label>
                                            <textarea name="tag" id="" cols="10" rows="0" class="form-control"></textarea>
                                        </div>
                                    </div>



                                    <!--col-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-form-textarea">Description
                                                @error('description')

                                            <small class="text-danger">{{$message}}</small>

                                          @enderror</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" value="{{old('description')}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                                        </div>
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                            </div><!-- .card-inner-group -->
                        </div>
                    </form>
                    <!-- .card -->
                </div><!-- .nk-block -->
            </div>
     @elsecan('seller_account_create')
        </div>
        <div class="card md-3" style="margin-top: 30px">


            <div class="card-body">
              <h4 class="text-danger"> veuillez renseigner vos informations vendeur svp !    </h4>  <span> <a href="{{route('seller.register.form')}}">cliquez ici</a> </span>
            </div>

          </div>
          @endcan
    </div>
</div>
@include('sweetalert::alert')
 @endsection
