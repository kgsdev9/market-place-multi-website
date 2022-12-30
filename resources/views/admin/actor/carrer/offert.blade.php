@extends('admin.apps.adminlayout')

@section('admin')





    <!-- mani page content body part -->
    <div id="main-content">

        <div class="container-fluid">
            <div class="row clearfix" style="margin-top:100px;">
                <div class="col-lg-12">
                    <div class="card product_item_list">
                        <div class="header">

                            <h2>Liste  Des Offres</h2>

                            <ul class="header-dropdown">

                                <form action="">

                                    <input type="search" placeholder="Recherche Produit...." class="form-control" >
                                </form>
                            </ul>

                        </div>
                        <div class="body">
                            <div class="table-responsive"  >
                                <table class="table table-hover mb-0" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Pays</th>
                                                <th>Ville</th>
                                                <th>Prix</th>
                                                <th>Quantite</th>
                                                <th>Statut</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($offre  as  $offres)


                                        <tr>
                                            <td><a href="{{ asset('cover/'.$offre->cover_image)}}"><img src="{{ asset('cover/'.$offre->cover_image)}}" width="48" alt="Product img"></a> </td>
                                             <td>{{ Str::limit($offre->name, 10)}}</td>
                                            <td>{{$offres->country }}</td>
                                            <td>{{ $offres->city  }}</td>
                                            <td>{{ $offres->price  }} €</td>
                                            <td>{{ $offres->quantity  }} </td>
                                            <td>
                                                @if($offres->statut=="disponible")
                                                <span class="badge badge-success bg-success text-white">Disponible</span>
                                                @elseif($offres->statut=="stock vide")
                                                <span class="badge badge-danger bg-danger text-white">Stock Vide</span>

                                                    @endif
                                            </td>



                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                                        {{ $offre->links() }}


                            </div>
                        </div>
                    </div>

                </div>


            </div>


@endsection
