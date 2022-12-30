@extends('layout.app')

@section('content')
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>DETAIL DE L'ANNONCE</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('annonce.index')}}">Annonce</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact De l'annonceur</li>
        </ol>
    </div>
</section>

<section class="inner-section contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-map">
                    <img src="{{asset('annonces/images/'.$detailannonce->image)}}" alt="" style="width:600px;" class="img-fluid">
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <i class="fas fa-user"></i>
                                <span>{{$detailannonce->user->name}}</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Publié le  {{$detailannonce->created_at->diffForHumans()}}</span>
                            </li>
                        </ul>
                        <h4 class="blog-title">
                            <a >{{$detailannonce->title}}</a> <span> Prix {{$detailannonce->price}} €</span>
                        </h4>
                        <p class="blog-desc">
                            {{Str::limit($detailannonce->description, 30)}}
                        </p>
                        <p class="blog-desc">
                            Où: {{$detailannonce->country_start}} -  Vers {{$detailannonce->country_destination}}
                        </p>


                        <a class="blog-btn" >
                            <span>Départ  {{$detailannonce->start_date}}</span>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="form-contact comment_form" action="{{route('response.annonce')}}"  method="POST">
                    @csrf
                    <h4>Contactez {{$detailannonce->user->name}}</h4>
                    <div class="form-group">
                        <div class="form-input-group">

                            <input class="form-control" name="fullname" id="name" type="text" placeholder="Votre Nom">
                            <i class="icofont-user-alt-3"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""> @error('number')
                                <small class="text-danger">{{$message}}</small>
                        @enderror</label>
                        <div class="form-input-group">

                            <input class="form-control" name="number" id="name" type="number" placeholder="Votre Telephone">
                            <i class="icofont-phone"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-input-group">
                            <textarea class="form-control w-100" name="message" id="comment" cols="30" rows="9" placeholder="Votre Message"></textarea>
                            <i class="icofont-paragraph"></i>
                        </div>
                    </div>

                    <input type="hidden" name="poster_id" value="{{$detailannonce->user->id}}">
                    <input type="hidden" name="annonce_id" value="{{$detailannonce->id}}">

                    <div class="form-group">
                        {!! NoCaptcha::renderJs('fr', false, 'recaptchaCallback') !!}
                        {!! NoCaptcha::display() !!}

                    </div>


                    <button type="submit" class="form-btn-group">
                        <i class="fas fa-envelope"></i>
                        <span>Répondre à l'annonce</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="row" style="margin-top:50px;">
            <h3>D'autres Annonces N'attendent que vous </h3>
                @foreach ($annonce as $value )
                <div class="col-sm-6 col-md-6 col-lg-3" style="margin-top:20px;">
                    <div class="blog-card">
                        <div class="blog-media">
                            <a class="blog-img" href="{{route('annnnonced.show', $value->id)}}">
                    <img src="{{asset('annonces/images/'.$value->image)}}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li>
                                    <i class="fas fa-user"></i>
                                    <span>{{ Str::limit($value->user->name, 10)}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>{{ $value->created_at->diffForHumans()}}</span>
                                </li>
                            </ul>
                            <h4 class="blog-title">
                                <a >{{ Str::limit($value->title, 20)}}</a>
                            </h4>
                            <p class="blog-desc">
                                {{ Str::limit($value->description, 20)}}
                            </p>
                            <a class="blog-btn" href="{{route('annnnonced.show', $value->id)}}">
                                <span>Consulter l'annonce</span>
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach













        </div>
    </div>
</section>
@endsection
