@extends('layout.app')

@section('content')
<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Renitilisatation de mot de passe</h4></header>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ request()->token }}">

                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" autofocus>
                        <small class="form-text text-muted">assurez-vous que ca soit l'adresse email associé a votre compte d'inscription.</small>
                    </div> <!-- form-group end.// -->

                    <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Nouveau Mot de passe</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                        </div> <!-- form-group end.// -->

                    </div> <!-- form-row.// -->

                    <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Confirmer Votre  Mot de passe</label>

                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div> <!-- form-group end.// -->

                    </div> <!-- form-row.// -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> renitialiser  </button>
                    </div> <!-- form-group// -->

                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->

        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


    </section>


@endsection
