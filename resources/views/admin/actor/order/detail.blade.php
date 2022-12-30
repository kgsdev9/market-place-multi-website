@extends('admin.apps.adminlayout')

@section('admin')
<br>
<!-- mani page content body part -->
<div id="main-content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Informations Sur La Commande</h2>

                    </div>
                    <div class="body">

                        <ul class="nav nav-tabs-new2">
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6">
                                        <address>


                                            <strong>Nom et Prenom: {{$order['fullname']}}.</strong><br>
                                            <strong> Telephone : {{$order['phone']}}.</strong><br>
                                            <strong> Pays :{{$order['country_delivry']}}.</strong><br>
                                            <strong> Ville  : {{$order['city_delivry']}}.</strong><br>

                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right p-2">
                                        <p class="mb-0 col"><strong>Date de la commande: </strong> {{$order->created_at}}</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                    <tr>

                                                        <th>Nom du produit </th>
                                                        <th> Information Vendeur  </th>
                                                        <th>Contact Vendeur</th>
                                                        <th>Quantite</th>
                                                        <th class="hidden-sm-down">Prix</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($order->products as $s)
                                                        <tr>
                                                            <td>{{Str::limit($s->name, 30)}}</td>
                                                                <td>{{$s->seller->sirname}}  {{$s->seller->firstname}}</td>
                                                            <td class="hidden-sm-down">{{$s->seller->phonenumber}}</td>
                                                            <td>{{$s->pivot->quantity}} </td>
                                                            <td>{{$s->pivot->amount}} €</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-md-6">

                                        <p> Adresse de livraison: <strong> {{$order['adresse_delivry']}}.</strong><br>  </p>
                                        <a  href="{{route('invoice.admin', $order->id)}}" class="btn btn-dark text-white" >IMPRIMER LE RECU</a>
                                    </div>
                                    <div class="col-md-6 text-right">

                                        <h3 class="mb-0 m-t-10">Total :  {{$order->amount}} €</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@endsection
