

@extends('admin.apps.adminlayout')


@section('admin')

<div id="wrapper" class="theme-cyan">



    <!-- mani page content body part -->
    <div id="main-content">

      <div class="card mb-3">
        <div class="card-header">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <br><br>
              <h5 class="mb-0" data-anchor="data-anchor" id="basic-form"> Modifier le pays<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
            </div>

          </div>
        </div>
        <div class="card-body bg-wite">
          <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324" id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
              <form method="POST" action="{{route('update.country', $edit->id)}}">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label">Nom du pays
                        @error('name')
                        <small style="color: red" >{{$message}}</small>
                        @enderror
                      </label>
                      <input type="text" class="form-control" name="name"   value="{{$edit->name}}">
                    </div>


                </div>
                <br>
                <button class="btn btn-dark" type="submit">Enregistrer le pays</button>
              </form>
            </div>

          </div>
        </div>
      </div>



 </div>


@endsection




