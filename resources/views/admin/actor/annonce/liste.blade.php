@extends('admin.apps.adminlayout')

@section('admin')
     <!-- mani page content body part -->
     <div id="main-content">

        <div class="container-fluid">



            <div class="row clearfix" style="margin-top:100px;">
                <div class="col-lg-12">
                    <div class="card product_item_list">
                        <div class="header">
                            <h2>Liste Des Announceurs</h2>
                            <ul class="header-dropdown">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive"  >
                                <table class="table table-hover mb-0" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <tr>
                                                <th>N° </th>
                                                <th>Titre</th>
                                                <th>Prix</th>
                                                <th>Date de départ</th>
                                                <th>Pays de destination</th>
                                                <th>Detail de l'annonce</th>

                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($annouce  as  $b)
                                        <tr>
                                            <td>{{$b->id}}</td>
                                             <td>{{$b->title}}</td>
                                            <td>{{$b->price}} €</td>
                                            <td>{{$b->start_date}}</td>
                                            <td>{{$b->country_destination}}</td>
                                            <td>
                                                <a  class="btn btn-primary" href="{{route('seller.annouce', $b)}}"><i class="fa fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                {{$annouce->links() }}


                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
