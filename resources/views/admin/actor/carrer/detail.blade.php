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
                        <h2>Profil  Du Transporteur </h2>

                    </div>
                    <div class="body">



                            <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>Nom et prénom : {{$carrer_detail->sirname}} {{$carrer_detail->firstname}}</strong><br>
                                          <br>
                                            <br>
                                            <abbr title="Phone">Contact : </abbr> {{$carrer_detail->seller_phonenumber}}
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="mb-0"><strong>Date d'inscription : </strong>  {{$carrer_detail->created_at}}</p>
                                        <p></p>
                                        <p class="mb-0"><strong>Dernière modification: </strong>  {{$carrer_detail->updated_at}}</p>

                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>Adresse De Facturation </th>
                                                        <th>Site Web</th>
                                                        <th>Logo</th>
                                                        <th>Kibs</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                            <tr>
                                                                <td>
                                                                        {{$carrer_detail->address_payment}}
                                                                </td>
                                                                <td>
                                                                <a href="{{$carrer_detail->website}}" target="about_blank">Lien du site web</a>
                                                                </td>
                                                                <td>

                                                                    <a href="{{asset('carrier/images/logo/'.$carrer_detail->logo) }}" target="about_blank">  <img width="100px" src="{{asset('carrier/images/logo/'.$carrer_detail->logo) }}" alt="" srcset="" style="width: 50px; height:50px;"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="{{asset('carrier/images/kibs/'.$carrer_detail->kibs)}}" target="about_blank">  <img width="100px" src="{{asset('carrier/images/kibs/'.$carrer_detail->kibs)}}" alt="" srcset="" style="width: 50px; height:50px;"></a>
                                                                </td>
                                                            </tr>




                                                </tbody>
                                            </table>
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

</div>


@endsection
