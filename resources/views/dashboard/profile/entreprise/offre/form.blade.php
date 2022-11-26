@extends('dashboard.layout.app')

@section('main')

<div id="wrapper" class="theme-cyan container" style="margin-top:100px;">

    <!-- mani page content body part -->
    <div id="main-content">

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Decrivez Brievement L'Offre</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{route('offre.store')}}" method="post" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Libellé De  l'offre
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror

                                </label>
                                <input type="text" class="form-control" required name="name" value="{{old('name')}}">
                            </div>


                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Statut De L'Offre
                                            @error('statut')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                      <select name="statut" id="" class="form-control">

                                        <option value="yes">Disponible</option>
                                        <option value="no">Non Disponible</option>
                                      </select>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prix De L'offre
                                            @error('price')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                        <input type="number" class="form-control" name="price"  value="{{old('price')}}"required>
                                    </div>

                                </div>

                            </div>




                            <div class="form-group">
                                <label>Description De l'Offre
                                    @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </label>
                                <textarea class="form-control" rows="5" cols="30" name="description" required></textarea>
                            </div>


                            <div class="col-md-13">
                                <div class="form-group">
                                    <label>Enregistrer une image Pour L'offre
                                        @error('image')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </label>
                                    <input type="file" class="form-control" name="image"  value="{{old('image')}}"required>
                                </div>

                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary">Enregistrer Cette Offre </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>




@endsection
