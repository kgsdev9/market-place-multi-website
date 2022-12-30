@extends('admin.apps.adminlayout')

@section('admin')

    <!-- mani page content body part -->
    <div id="main-content">

        <div class="container-fluid">



            <div class="row clearfix" style="margin-top:100px;">
                <div class="col-lg-12">
                    <div class="card product_item_list">
                        <div class="header">
                            <h2>Liste  Acheteurs</h2>
                            <ul class="header-dropdown">
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive"  >
                                <table class="table table-hover mb-0" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Numero</th>
                                                <th>Date de creation</th>

                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($buyer  as  $b)


                                        <tr>

                                             <td>{{ $b->sirname}}</td>
                                            <td>{{$b->firstname}}</td>
                                            <td>{{ $b->phonenumber }}</td>
                                            <td>{{ $b->created_at}}</td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                                {{$buyer->links() }}


                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection
