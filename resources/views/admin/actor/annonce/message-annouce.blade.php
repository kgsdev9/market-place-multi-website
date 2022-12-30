@extends('admin.apps.adminlayout')

@section('admin')

<div id="main-content">
    <div class="container-fluid">







        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>TOUS LES MESSAGES</h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length">
                              </div></div></div></div>



                                     <div class="row">


                                        <div class="col-sm-12">

                                        <table class="table table-hover js-basic-example dataTable table-custom mb-0 no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead class="thead-dark">
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Date: activate to sort column descending" style="width: 136.359px;">Message</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 34.7656px;">Numero</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount BTC: activate to sort column ascending" style="width: 89.7812px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="BTC Remaining: activate to sort column ascending" style="width: 107.141px;">Date d'envoi</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="USD: activate to sort column ascending" style="width: 52.2344px;">Action</th>


                                </thead>
                                <tbody>
                                    @foreach ( $message as $sms )
                                <tr role="row" class="odd">
                                        <td class="sorting_1">{{$sms->message}}</td>
                                        <td>{{$sms->number}}</td>
                                        <td>{{$sms->email}}</td>
                                        <td>{{$sms->created_at}}</td>
                                        <td>
                                         <a href="{{route('relationship.inbox',$sms->id)}}" class="btn btn-dark">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                               </tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
