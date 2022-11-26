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
                            <div class="mail-compose m-b-20">
                                <a href="" class="btn btn-danger btn-block">Detail du message</a>
                            </div>

                        </div>
                        <div class="mail-right">
                            <div class="header d-flex align-center">
                                <h2>Inbox</h2>
                                <form class="ml-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Mail" aria-label="Search Mail" aria-describedby="search-mail">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="mail-action clearfix">
                                <div class="float-left">
                                    <div class="fancy-checkbox d-inline-block">
                                        <label>
                                            <input class="select-all" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                    </div>



                                </div>

                            </div>
                            <div class="mail-list">
                                <ul class="list-unstyled">
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Herman Beck</a> <span class="badge badge-default mb-0">Marketing</span></h6>
                                            <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            <span class="time">23 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                <span></span>
                                            </label>
                                            <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Mary Adams</a></h6>
                                            <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                            <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="javascript:void(0);"><i class="fa fa-archive"></i></a>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </li>
                                    <li class="clearfix unread">



                                    </li>
                                </ul>
                            </div>
                            <div class="mail-detail-full" id="mail-detail-open" style="">

                                <div class="detail-header">
                                    <div class="media">
                                        <div class="float-left">
                                            <div class="mr-3"><img src="assets/images/sm/avatar1.jpg" alt=""></div>
                                        </div>
                                        <div class="media-body">
                                            <p class="mb-0"><strong class="text-muted m-r-5">Addre E-mail de l'interessé:</strong><a class="text-default" href="">{{$detail_annnonce->email}}</a> <span class="text-muted text-sm float-right">Date D'envoi</span></p>
                                            <p class="mb-0"><strong class="text-muted m-r-5">De:</strong>NOM de l'envoyeur  <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>{{$detail_annnonce->created_at}}</small></p>
                                            <p class="mb-0"><strong class="text-muted m-r-5">à:</strong><a class="text-default" href="">{{Auth::user()->email}}</a></p>
                                            <p class="mb-0"><strong class="text-muted m-r-5">Telephone</strong><a class="text-default" href="">{{$detail_annnonce->number}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-cnt">
                                    <p> {{$detail_annnonce->message}}</p>
                                    <hr>


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
