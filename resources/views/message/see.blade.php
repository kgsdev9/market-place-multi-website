@extends('dashboard.layout.app')

@section('main')


<div class="nk-wrap " >
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body" style="margin-top: 100px;">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Detail du message</h3>

                            </div><!-- .nk-block-head-content -->

                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-sm-6 col-lg-12 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="project">
                                            <div class="project-head">
                                                <a href="html/apps-kanban.html" class="project-title">
                                                    <div class="user-avatar sq bg-purple"><span>SMS</span></div>
                                                    <div class="project-info">
                                                        <h6 class="title">{{$message->sujet}}</h6>
                                                        <span class="sub-text">Expediteur :  {{$expediteur->name}}  </span>
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="project-details">
                                                <p>{{$message->contenu}}</p>
                                            </div>
                                            <div class="project-progress">
                                                <div class="project-progress-details">
                                                    <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>lu</span></div>
                                                    <div class="project-progress-percent">100%</div>
                                                </div>
                                                <div class="progress progress-pill progress-md bg-light">
                                                    <div class="progress-bar" data-progress="100%" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                            <div class=" col-12">
                                                <div class="nk-reply-form-header">
                                                    <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#reply-form">Répondre à  {{$expediteur->name}}  </a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="tab-content" style="margin-top:10px;">
                                                    <form id="basic-form" method="post"  action="{{route('send.sms')}}">
                                                        @csrf
                                                    <div class="tab-pane active" id="reply-form">
                                                        <div class="nk-reply-form-editor">
                                                            <label for="">Objet du message</label>
                                                            <input type="text" class="form-control"  name="subjet" value="">
                                                            <input type="hidden" class="form-control"  name="destinateur" value="{{$expediteur->id}}">
                                                            <div class="nk-reply-form-field">
                                                                <textarea class="form-control form-control-simple no-resize" name="content" placeholder="Contenu"></textarea>
                                                            </div>
                                                            <div class="nk-reply-form-tools">
                                                                <ul class="nk-reply-form-actions g-1">
                                                                    <li class="me-2"><button class="btn btn-primary" type="submit">Répondre</button></li>
                                                                </ul>
                                                            </div><!-- .nk-reply-form-tools -->
                                                        </div><!-- .nk-reply-form-editor -->
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>








                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>



    </div>


@endsection
