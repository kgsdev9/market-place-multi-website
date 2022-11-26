@extends('dashboard.layout.app')

@section('main')

<div id="main-content">
    <div class="container-fluid">


        <div class="block-header">
            <div class="row">


            </div>
        </div>



            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste De Vos offres</h2>
                            <ul class="header-dropdown">


                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>libelle</th>
                                            <th>statut</th>

                                            <th>Prix </th>
                                            <th>Date De creation</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($liste as $l)
                                        <tr>
                                            <td>{{$l->name}}</td>


                                            <td>
                                                @if($l->statut=="yes")
                                                <label for=""class="text-success">disponible</label>
                                                @elseif($l->statut=="no")
                                               <label for="" class="text-danger">indisponible</label>
                                               @endif
                                            </td>

                                            <td>{{$l->price}} </td>
                                            <td>{{$l->created_at}}</td>

                                            <td><a href={{route('delete.offert',$l->id)}} type="button"  class="btn btn-danger" title="spprimer"><i class="fa fa-trash"></i></a>
                                                <button type="button" data-toggle="modal" data-target="#addcontact{{$l->id}}" class="btn btn-primary" title="Détail"><i class="fa fa-eye"></i></button>
                                                <div class="modal fade" id="addcontact{{$l->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="title" id="defaultModalLabel">Modifer le Produit</h6>
                                                            </div>


                                                                    <div class="modal-body">


                                                                        <form id="basic-form" action="{{route('offert.offert',$l->id)}}" method="post" novalidate>
                                                                            @csrf

                                                                            @method('PATCH')
                                                                            <div class="form-group">
                                                                                <label>Libellé De  l'offre
                                                                                    @error('name')
                                                                                    <small class="text-danger">{{$message}}</small>
                                                                                    @enderror

                                                                                </label>
                                                                                <input type="text" class="form-control" required name="name" value="{{$l->name}}">
                                                                            </div>


                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Statut De L'Offre
                                                                                            @error('statut')
                                                                                            <small class="text-danger">{{$message}}</small>
                                                                                            @enderror
                                                                                        </label>
                                                                                      <select name="statut" id="" class="form-control" >
                                                                                            @if($l->statut=="yes")
                                                                                        <option value="yes">indisponible</option>
                                                                                        <option value="yes">disponible</option>
                                                                                            @elseif($l->statut=="no")
                                                                                        <option value="no">Disponible</option>
                                                                                        <option value="no">indisponible</option>
                                                                                             @endif
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
                                                                                        <input type="number" class="form-control" name="price"  value="{{$l->price}}"required>
                                                                                    </div>

                                                                                </div>

                                                                            </div>




                                                                            <div class="form-group">
                                                                                <label>Description De l'Offre
                                                                                    @error('description')
                                                                                    <small class="text-danger">{{$message}}</small>
                                                                                    @enderror
                                                                                </label>
                                                                                <textarea class="form-control" rows="5" cols="30" name="description" required>{{$l->description}}</textarea>
                                                                            </div>



                                                                            <br>
                                                                            <button type="submit" class="btn btn-primary">Modifer Mes Offres</button>
                                                                        </form>


                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>



                                        </tr>


                                         @endforeach






                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

@include('sweetalert::alert')

@endsection
