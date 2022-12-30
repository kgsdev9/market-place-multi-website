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
                        <h2>Profil  vendeurs </h2>

                    </div>
                    <div class="body">



                            <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>Nom et prénom : {{$seller_detail->sirname}} {{$seller_detail->firstname}}</strong><br>
                                          <br>
                                            <br>
                                            <abbr title="Phone">Contact : </abbr> {{$seller_detail->phonenumber}}
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="mb-0"><strong>Date d'inscription : </strong>  {{$seller_detail->created_at}}</p>
                                        <p></p>
                                        <p class="mb-0"><strong>Dernière modification: </strong>  {{$seller_detail->updated_at}}</p>
                                        
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>Photo </th>
                                                        <th>rib</th>
                                                        <th>cni</th>
                                                        <th>pièce de domicile</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="{{asset('seller/images/photo/'.$seller_detail->photo) }}">  <img width="100px" src="{{asset('seller/images/photo/'.$seller_detail->photo) }}" alt="" srcset=""></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{asset('seller/images/rib/'.$seller_detail->rib) }}">  <img width="100px" src="{{asset('seller/images/rib/'.$seller_detail->rib) }}" alt="" srcset=""></a>
                                                        </td>
                                                        <td>

                                                            <a href="{{asset('seller/images/photo/'.$seller_detail->cni) }}">  <img width="100px" src="{{asset('seller/images/cni/'.$seller_detail->cni) }}" alt="" srcset=""></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{asset('seller/images/house/'.$seller_detail->house_piece) }}">  <img width="100px" src="{{asset('seller/images/house/'.$seller_detail->house_piece) }}" alt="" srcset=""></a>
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
