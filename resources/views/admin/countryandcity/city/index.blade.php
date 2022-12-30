
@extends('admin.apps.adminlayout')

@section('admin')
<br>
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluif">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>TOUTES LES VILLES</h2>

                            <ul class="header-dropdown">
                            <a href="{{url('/create/city')}}" class="btn btn-info">Ajouter une ville</a>

                            </ul>

                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nom </th>


                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($city as $cate )
                                        <tr>
                                            <td>{{$cate->name}}</td>



                                                <td>
                                                    <a href="{{route('edit.city', $cate->id)}}" class="btn btn-secondary">Editer</a>
                                                    <a href="{{route('destroy.city', $cate->id)}}" class="btn btn-danger"  onclick="return confirm('voulez vous Vraiment Supprimer  ?')">Supprimer</a>
                                                </td>

                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                                {{$city->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



</div>

@endsection












