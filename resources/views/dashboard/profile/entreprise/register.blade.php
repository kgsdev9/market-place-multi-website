@extends('dashboard.layout.app')

@section('main')


<div id="wrapper" class="theme-cyan" style="margin-top: 50px;">

   <!-- mani page content body part -->
   <div id="main-content">
     @can('carrier_account_update')
     <div class="card mb-3">
       <div class="card-header">
         <div class="row flex-between-end">
           <div class="col-auto align-self-center">
               <br><br>
             <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Formulaire d'ajout D'entreprise<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
           </div>

         </div>
       </div>
       <div class="card-body bg-wite">
         <div class="tab-content">
           <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324" id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
             <form method="POST" action="{{route('entreprise.store')}}"   enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                 <div class="row">
                   <div class="col-md-6">
                     <label class="form-label">Nom de l'entreprise

                       @error('name')
                       <small style="color: red" >{{$message}}</small>
                       @enderror
                     </label>
                     <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  de l' entreprise" value="{{old('name')}}">
                   </div>






                   <div class="col-md-6">
                     <label class="form-label"> Lien de sitweb (facultatif)

                       @error('referencies')
                       <small style="color: red" >{{$message}}</small>
                       @enderror
                     </label>
                     <input type="text" class="form-control" name="Website" placeholder="Entrer le  lien de votre site" value="{{old('website')}}">
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






               <div class="mb-3">
                 <div class="form-group">
                   <label class="form-label">Ajouter une image ou logo
                     @error('image')
                     <small style="color: red" >{{$message}}</small>
                     @enderror
                   </label>
                   <input type="file" name="image"   class="form-control" placeholder="" value="{{old('image')}}" required>
                 </div>
               </div>





               <button class="btn btn-dark" type="submit">Enregister</button>
             </form>
           </div>

         </div>
       </div>
     </div>
     @elsecan('carrier_account_create')

     <div class="card md-3" style="margin-top: 30px">


       <div class="card-body">
         <h2 class="text-danger"> veuillez renseigner vos informations de l'entreprise  svp !    </h2>  <span> <a href="{{route('carrier.register.form')}}">cliquez ici</a> </span>
       </div>

     </div>
     @endcan

</div>

@include('sweetalert::alert')

@endsection




