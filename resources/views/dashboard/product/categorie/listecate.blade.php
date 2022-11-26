@extends('dashboard.layout.app')

@section('main')

<br>
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluif">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>TOUTES LES CATEGORIES</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nom de la categorie</th>
                                            <th>Slug de la categorie</th>
                                            <th>Date D'ajout de la categorie</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categorie as $cate )
                                        <tr>
                                            <td>{{$cate->name}}</td>
                                            <td>{{$cate->slug}}</td>
                                            <td>
                                                {{$cate->created_at}}</td>


                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                                {{$categorie->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



</div>









@endsection


