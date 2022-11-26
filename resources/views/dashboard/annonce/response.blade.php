@extends('dashboard.layout.app')

@section('main')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">

                        <h2>Repondre à {{$detail_poster->user->name}} </h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate="">
                            <div class="form-group">
                                <input type="hidden" name="reponder_id" value="{{$detail_poster->repondeur_id}}">
                                <input type="hidden"   name="annonce_id" value="{{$detail->poste_id}}">
                                <label>Contenu du message</label>
                                <textarea class="form-control" rows="5" cols="30" required="" name=""></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
