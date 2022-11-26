@extends('dashboard.layout.app')

@section('main')


<div id="wrapper" class="theme-cyan" style="margin-top: 30px;">



    <!-- mani page content body part -->
    <div id="main-content">


      @can('seller_account_update')
      <div class="card mb-3">
        <div class="card-header">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <br><br>
              <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Formulaire d'ajout De Produit<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
            </div>

          </div>
        </div>
        <div class="card-body bg-wite">
          <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324" id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
              <form method="POST" action="{{route('create.product')}}"   enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label">Nom produit

                        @error('name')
                        <small style="color: red" >{{$message}}</small>
                        @enderror
                      </label>
                      <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}">
                    </div>



                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Pays d'origine
                          @error('country')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <input type="text" name="country" class="form-control" placeholder="exple : France " value="{{old('country')}}">
                    </div>
                  </div>


                    <div class="col-md-6">
                      <label class="form-label">Voulez-vous que vos produits soit classées parmi les tops ?

                        @error('referencies')
                        <small style="color: red" >{{$message}}</small>
                        @enderror
                      </label>
                          <select name="referencies" id="" class="form-control">
                          <option value="">Faites un choix ! </option>
                              <option value="oui" >Oui </option>
                              <option value="nom">Nom </option>
                          </select>
                    </div>







                </div>


                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Ville d'origine
                          @error('city')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <input type="text" name="city" class="form-control" placeholder="exple : Paris" value="{{old('city')}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Catégorie
                          @error('category_id')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <select class="form-control custom-select" name="category_id">

                          <option value="">Sélectionner la catégorie</option>
                                @foreach ($category as  $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach


                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Statut
                          @error('statut')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <select class="form-control custom-select" name="statut">
                          <option value="">Selectionner le statut du produit</option>
                          <option value="disponible">disponible</option>
                          <option value="stock vide">indisponible</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Prix de vente
                          @error('price')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <input type="text" name="price" class="form-control" placeholder="valeur en Euro"  value="{{old('price')}}">
                      </div>
                    </div>
                  </div>
                </div>




                {{-- addd --}}
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Quantite Du Produit
                          @error('quantity')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                              <input type="number"  name="quantity" class="form-control" placeholder="Entrer La Quantite Du Produit">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Image De premier Plan
                          @error('first_image')
                          <small style="color: red" >{{$message}}</small>
                          @enderror
                        </label>
                        <input type="file" name="first_image" class="form-control"   value="{{old('first_image')}}">
                      </div>
                    </div>
                  </div>
                </div>

                {{-- en add --}}



                <div class="mb-3">
                  <div class="form-group">
                    <label class="form-label">Inserer Vos Images
                      @error('images')
                      <small style="color: red" >{{$message}}</small>
                      @enderror
                    </label>
                    <input type="file" name="images[]" multiple   class="form-control" placeholder="" value="{{old('images')}}">
                  </div>
                </div>


                  <div class="mb-3">
                    <label class="form-label" for="basic-form-textarea">Description
                        @error('description')

                    <small class="text-danger">{{$message}}</small>

                  @enderror</label>
                    </label>
                    <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" value="{{old('description')}}"></textarea>
                  </div>


                <button class="btn btn-dark" type="submit">Enregister</button>
              </form>
            </div>

          </div>
        </div>
      </div>
      @elsecan('seller_account_create')

      <div class="card md-3" style="margin-top: 30px">


        <div class="card-body">
          <h2 class="text-danger"> veuillez renseigner vos informations vendeur svp !    </h2>  <span> <a href="{{route('seller.register.form')}}">cliquez ici</a> </span>
        </div>

      </div>
      @endcan







</div>



 @endsection
