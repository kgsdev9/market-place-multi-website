@extends('dashboard.layout.app')

@section('main')


<div id="main-content" class="taskboard">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">

            </div>
        </div>

        <div class="row clearfix row-deck">


            <div class="col-lg-12 col-md-12">
                <div class="card progress_task">
                    <div class="header">
                        <h2>Expediteur  {{$expediteur->name}} {{$expediteur->role->name}} </h2>
                    </div>
                    <div class="body taskboard">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                <li class="dd-item">
                                    <div class="dd-handle"></div>
                                    <div class="dd-content p-15">
                                        <h5>   Objet : {{$message->sujet}}     </h5>
                                        <p class="alert alert-success">Message: {{$message->contenu}}</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <button type="button"  data-toggle="modal" data-target="#addcontact" class="btn btn-sm btn-outline-secondary" title="Répondre">répondre</button>
                                            </div>



                                        </div>
                                        <div class="col-lg-12">
                                            <!-- Default Size -->
                                            <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="title" id="defaultModalLabel">Formulaire</h6>
                                                        </div>


                                                                <div class="modal-body">
                                                                    <form id="basic-form" method="post"  action="{{route('send.sms')}}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label>objet </label>
                                                                            <input type="text" class="form-control" required="" name="subjet" value={{$message->sujet}}>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Destinataire : {{$expediteur->name}} </label>
                                                                            <input type="hidden" class="form-control" required="" name="destinateur" value="{{$expediteur->id}}">
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label>Message </label>
                                                                            <textarea class="form-control" rows="5" cols="30" required="" name="content"></textarea>
                                                                        </div>



                                                                        <br>
                                                                        <button type="submit" class="btn btn-primary" >Envoyer</button>
                                                                    </form>
                                                                </div>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>
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
