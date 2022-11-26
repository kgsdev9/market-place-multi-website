@extends('dashboard.layout.app')

@section('main')



<div id="main-content">

    <div class="container-fluid">


        <div class="row clearfix" style="margin-top:100px;">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="header">

                        <h2> Avis sur vos produits </h2>

                        <ul class="header-dropdown">


                        </ul>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        </tr><tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Pays</th>
                                            <th>Ville</th>
                                            <th>Prix</th>

                                            <th>Total commentaires</th>


                                            <th>commentaire</th>
                                        </tr>

                                </thead>
                                <tbody>



                                    @foreach ( $products as  $p )


                                    <tr>
                                        <td><img src="{{ asset('cover/'.$p->cover_image)}}" width="48" alt="Product img"></td>
                                         <td>{{ Str::limit($p->name, 10)}}</td>
                                        <td>{{$p->country }}</td>
                                        <td>{{ $p->city  }}</td>
                                        <td>{{ $p->price  }} €</td>

                                        <td>
                                         {{ count($p->comments) }}
                                        </td>


                                        <td>
                                            <a href="{{ route('seller.product.commments', $p->id) }}" class="btn btn-outline-secondary">voir ...</a>

                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>

                            {{ $products->links() }}


                        </div>
                    </div>
                </div>

            </div>


        </div>

                    </div>
</div>

@endsection
