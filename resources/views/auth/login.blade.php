@extends('pages.layout')
@section('content')
<section class="section-content padding-y">
    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Se Connnecter</h4></header>
            <form method="POST" action="{{route('login')}}">
                @csrf
                    <div class="form-row">
                    <div class="form-group">
                        <label>Email  @error('email')
                            <small style="color:red;"> {{$message}}</small>
                        @enderror</label>
                        <input type="email" class="form-control" placeholder="Entrer votre adresse E-mail" name="email" value="{{old('email')}}">
                    </div> <!-- form-group end.// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>   Entrer votre mot de passe @error('password')
                                <small style="color:red;"> {{$message}}</small>
                            @enderror</label>
                            <input class="form-control" type="password" name="password" placeholder="Entrer votre mot de passe">
                        </div> <!-- form-group end.// -->
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-dark"> Se Connecter  </button>
                            </div>
                          <div class="col-sm-2">

                          </div>
                            <div class="col-sm-4 pt-2">
                                <a href="{{route('password.request')}}" > Mot de passe oublié</a>
                            </div>
                        </div>
                    </div> <!-- form-group// -->
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Vous n'avez pas de compte  ?<a href="{{route('register')}}">Inscrivez-Vous </a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    </section>



@endsection
