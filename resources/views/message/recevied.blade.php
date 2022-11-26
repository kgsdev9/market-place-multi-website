@extends('dashboard.layout.app')
@section('main')





<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-2">
                    <h2></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Messages</li>
                        <li class="breadcrumb-item active">reçus</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="mobile-left">

                    </div>
                    <div class="mail-action clearfix">
                        <div class="float-left">
                            <div class="fancy-checkbox d-inline-block">
                                <label>

                                    <span></span>
                                </label>
                            </div>

                        </div>
                        <div class="float-right ml-auto">
                            <div class="pagination-email d-flex align-items-center">
                                <p> </p>
                                <div class="btn-group ml-2">
                                    {{$messages->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-inbox">
                        <div class="mail-left collapse" id="email-nav">

                        </div>
                        <div class="mail-right">
                            <div class="header d-flex align-center">
                                <h2>Messages reçus    {{count($messages)}}</h2>
                                <form class="ml-auto">
                                    <div class="input-group">

                                    </div>
                                </form>
                            </div>
                            <div class="mail-action clearfix">
                                <div class="float-left">
                                    <div class="fancy-checkbox d-inline-block">
                                        <label>

                                            <span></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="float-right ml-auto">

                                </div>
                            </div>
                            <div class="mail-list">
                                <ul class="list-unstyled">
                                    @foreach ($messages as $msg)
                                    <li class="clearfix">
                                        <div class="mail-detail-left">
                                            <label class="fancy-checkbox">

                                                <span></span>
                                            </label>

                                        </div>
                                        <div class="mail-detail-right">
                                            <h6 class="sub"><a href="javascript:void(0);" class="mail-detail-expand">Objet : {{$msg->sujet}} </span></h6>

                                            <span class="time"> Date :  {{$msg->created_at}}</span>
                                        </div>
                                        <div class="hover-action">
                                            <a class="btn btn-warning mr-2" href="{{route('see.sms',$msg->id)}}"  title="ouvrir"><i class="fa fa-eye"></i></a>

                                        </div>
                                    </li>
                                    @endforeach



                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert');
@endsection

