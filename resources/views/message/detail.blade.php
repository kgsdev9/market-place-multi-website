@extends("dashboard.layout.app")
@section('main')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Détail message </h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <form id="basic-form" method="post"  action="{{route('update.sms')}}">
                        @csrf
                        <input type="hidden" name="sms_id" value="{{$message->id}}">
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>objet </label>
                                                <input type="text" class="form-control" required="" name="subjet" value="{{$message->sujet}}">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Destinataire : {{$message->destinataire->role->name}}  {{$message->destinataire->name}} </label>
                                                <input type="hidden" class="form-control" required="" name="message" value="{{$message->id}}">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <!--col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message </label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" rows="5" cols="30" required="" name="content"> {{$message->contenu}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->

                    </form>

            </div>
        </div>
    </div>
</div>

@endsection
