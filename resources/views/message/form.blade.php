@extends("dashboard.layout.app")
@section('main')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Formulaire de message</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <form id="basic-form" method="post"  action="{{route('send.sms')}}">
                        @csrf
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">  <label>objet </label></label>
                                        <input type="text" class="form-control" required="" name="subjet">
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Destinaire : {{$destinateur->role->name }}  {{$destinateur->name}}</label>
                                        <input type="hidden" class="form-control" required="" name="destinateur" value="{{$destinateur->id}}">
                                    </div>
                                </div>
                                <!--col-->













                                <!--col-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message </label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" rows="5" cols="30" required="" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Envoyez</button>
                                    </div>
                                </div>
                                <!--col-->
                            </div>
                            <!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->

                    </form>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
