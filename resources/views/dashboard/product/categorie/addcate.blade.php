@extends('dashboard.layout.app')

@section('main')


<div id="wrapper" class="theme-cyan">



   <!-- mani page content body part -->
   <div id="main-content">

     <div class="card mb-3">
       <div class="card-header">
         <div class="row flex-between-end">
           <div class="col-auto align-self-center">
               <br><br>
             <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Formulaire d'ajout De Categorie<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
           </div>

         </div>
       </div>
       <div class="card-body bg-wite">
         <div class="tab-content">
           <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324" id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
             <form method="POST" action="{{route('cate.create')}}"   enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                 <div class="row">
                   <div class="col-md-6">
                     <label class="form-label">Nom de la categorie

                       @error('name')
                       <small style="color: red" >{{$message}}</small>
                       @enderror
                     </label>
                     <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}">
                   </div>

                   <div class="col-md-6">
                     <label class="form-label">Slug Du Produit

                       @error('slug')
                       <small style="color: red" >{{$message}}</small>
                       @enderror
                     </label>

                     <input type="text" class="form-control" name="slug" placeholder="Entrer le  nom  du produit" value="{{old('slug')}}">
                   </div>


                   <div class="col-md-12">
                    <label class="form-label">Description (Optionnel)

                      @error('slug')
                      <small style="color: red" >{{$message}}</small>
                      @enderror
                    </label>

                    <textarea name="description" id="" cols="30" rows="10"  class="form-control"></textarea>
                  </div>


                  <div class="col-md-12">
                    <label class="form-label">Image De la categorie
                      @error('photo')
                      <small style="color: red" >{{$message}}</small>
                      @enderror
                    </label>

                    <input type="file" class="form-control" name="photo"  value="{{old('photo')}}">
                  </div>


               </div>
               <br>
               <button class="btn btn-dark" type="submit">Ajouter la categorie</button>
             </form>
           </div>

         </div>
       </div>
     </div>







</div>



@endsection
