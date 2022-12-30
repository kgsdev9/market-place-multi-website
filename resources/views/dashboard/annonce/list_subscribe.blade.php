@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">Liste de vos souscriptions </h5>
                                    </div>
                                </div><!-- .card-title-group -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date de souscription</th>
                                        <th scope="col">Date d'expiration</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subscriptions as $s)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$s->created_at}}</td>
                                            <td>{{$s->trial_ends_at}}</td>
                                            
                                          </tr>
                                        @endforeach


                                    </tbody>
                                  </table>
                            </div><!-- .card-inner -->

                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>





@endsection
