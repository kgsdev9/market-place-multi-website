@extends('dashboard.layout.app')

@section('main')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="mobile-left">
                        <a class="btn btn-primary toggle-email-nav collapsed" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
                            <span class="btn-label"><i class="la la-bars"></i></span>
                            Menu
                        </a>
                    </div>
                    <div class="mail-inbox">
                        <div class="mail-left collapse" id="email-nav">

                        </div>
                        <div class="mail-right">
                            <div class="header d-flex align-center">
                                <h2>Commentaires réçus {{count($comments)}} </h2>

                            </div>

                            <div class="mail-list">
                                <ul class="list-unstyled">
                                    @foreach ($comments as $c)
                                    <article class="media mb-3">
                                        <a href="#"><img class="img-sm mr-3" src=""></a>
                                        <div class="media-body">

                                          <h6 class="mt-0"><a href="#">{{$c->user->name}}</a></h6>
                                          <p>produit: {{$c->product->name}}</p>
                                          <p class="mb-2"><u>Commentaire</u>   <p>{{$c->content}} </p> </p>
                                          <p class="mb-2">Ajouté le : {{$c->created_at}}</p>
                                          <p class="mb-2">Dernière modification  : {{$c->updated_at}}</p>
                                        </div>
                                        <p class="mb-2">





                                            </p>
                                      </article>
                                      <hr>
                                    @endforeach


                                </ul>


                            </div>

                            <div>
                                {{$comments->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
