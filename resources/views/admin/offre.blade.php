@extends('admin.apps.adminlayout')

@section('admin')
 <!-- mani page content body part -->
 <div id="main-content">

    <div class="container-fluid">



        <div class="row clearfix" style="margin-top:100px;">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="header">
                        <h2>Liste  Des offres</h2>
                        <ul class="header-dropdown">
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive"  >
                            <table class="table table-hover mb-0" >
                                <thead class="thead-dark">
                                    <tr>
                                        <tr>
                                            <th>Libelle de l'offre</th>
                                            <th>stutut</th>
                                            <th>Prix</th>
                                            <th>Description de l'offre</th>

                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($offre  as  $b)


                                    <tr>

                                         <td>{{ $b->name}}</td>
                                        <td>
                                            @if($b->statut =="yes")
                                            <span>disponible</span>
                                            @elseif($b->statut =="no")
                                            <span>indisponible</span>
                                            @endif
                                        </td>
                                        <td>{{ $b->price }} €</td>
                                        <td>{{ $b->description}}</td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>

                            {{$offre->links() }}


                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


@endsection
