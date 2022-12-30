@extends('admin.apps.adminlayout')

@section('admin')
<div id="main-content" class="taskboard">
    <div class="container-fluid">
        <div class="row clearfix row-deck">
            <div class="col-lg-6 col-md-12">
                <div class="card progress_task">
                    <div class="header">
                        <h2>INFORMATION DU MESSAGE</h2>
                    </div>
                    <div class="body taskboard">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">

                                    <div class="dd-content p-15">
                                        <h5> Message envoyé par L'utilisateur   {{$source->repondeur->name}}</h5>
                                        <h5> Posté par  L'utilisateur {{$source->annonceur->name}}</h5>

                                        <h5> L'IDENTIFIANT DU POSTE : {{$source->id}}</h5>
                                        <hr>

                                    </div>
                                </li>


                            </ol>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
