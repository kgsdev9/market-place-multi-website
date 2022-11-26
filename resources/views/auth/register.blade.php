@extends('layout.app')

@section('content')


<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">S'inscrire Sur Vtp</h4></header>
            <form method="POST" action="{{route('register')}}">
                @csrf
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Nom Utilisateur </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $name ?? old('name') }}"  autocomplete="name" autofocus>
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Choissiez Votre role @error('role')
                                <small style="color:red;"> {{$message}}</small>
                            @enderror </label>
                            <select id="inputState" class="form-control" name="role">
                                <option value=""> Choisir...</option>
                                @foreach ($roles as $r)
                                <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach

                              </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Email  @error('email')

                            <small style="color:red;"> {{$message}}</small>
                        @enderror</label>
                        <input type="email" class="form-control" placeholder="Entrer votre adresse E-mail" name="email" value="{{old('email')}}">

                    </div> <!-- form-group end.// -->



                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label> Créer un mot de passe (Au moins 8 Caracteres) @error('password')
                                <small style="color:red;"> {{$message}}</small>
                            @enderror</label>
                            <input class="form-control" type="password" name="password" placeholder="Entrer votre mot de passe">
                        </div> <!-- form-group end.// -->

                        <div class="form-group col-md-12">
                            <label>Confirmer  Votre mot de passe  @error('password_confirmation')
                                <small style="color:red;"> {{$message}}</small>
                            @enderror</label>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                        </div> <!-- form-group end.// -->
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox"><div class="custom-control-label"> J'ai lu et j'accepte les
                            Conditions générales de Vtp
                            </a>  </div> </label>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark"> S'inscrire  </button>
                    </div> <!-- form-group// -->

                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Vous avez deja un compte ?<a href="{{route('login')}}">Connectez-Vous </a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


    </section>



@endsection
