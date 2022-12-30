@extends('dashboard.layout.app')

@section('main')

<div id="main-content" style="margin-top: 10%">

    <div class="container-fluid">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="preview-block" data-select2-id="12">
                    <h4 class="title nk-block-title">Formulaire d'ajout d'offre</h4>
                    <form id="basic-form" action="{{route('update.offre', $resssourcesOffert->id)}}" method="post" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row gy-4" style="margin-top:10px;">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">

                                    <input type="text" class="form-control form-control-xl form-control-outlined" required name="name" value="{{$resssourcesOffert->name}}">

                                    <label class="form-label-outlined" for="outlined-normal">
                                        Libellé De  l'offre
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <select   name="statut" class="form-select js-select2 select2-hidden-accessible" data-ui="xl" id="outlined-select" data-select2-id="outlined-select" tabindex="-1" aria-hidden="true">
                                    <option value="yes">disponible</option>
                                    <option value="no">indisponible</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right xl">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>

                                    <input type="number" class="form-control form-control-xl form-control-outlined" name="price"  value="{{$resssourcesOffert->price}}" required>
                                    <label class="form-label-outlined" for="outlined-date-picker">
                                        Prix De L'offre
                                            @error('price')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap has-timepicker">
                                    <div class="form-icon form-icon-right xl">
                                        <em class="icon ni ni-clock"></em>
                                    </div>
                                    <textarea  name="description" id=""  class="form-control form-control-xl form-control-outlined "  cols="30" rows="10">{{$resssourcesOffert->description}}</textarea>
                                    <label class="form-label-outlined" for="outlined-time-picker">Description de l'offre


                                        @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4" style="margin-top:5px;">
                        <div class="col-lg-4 col-sm-6">
                            <button class="btn btn-dark">ENREGISTRER L'OFFRE</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

     </div>

</div>



@endsection
