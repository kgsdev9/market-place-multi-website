@extends('layout.app')

@section('content')

<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Aide avec le mot de passe</h4></header>
            <p>Saisissez l'adresse e-mail associé à votre compte VTP. Nous vous enverrons un lien sur cette adresse e-mail pour réinitialiser votre mot de passe.

                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            </p>
            <form  method="POST" action="{{ route('password.email') }}">
                @csrf

                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <small class="form-text text-muted">vérifiez bien qu'il s'agit  de l'adresse email qui a servi à l'inscription.</small>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Rénitialiser</button>
                    </div> <!-- form-group// -->

                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->

        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


    </section>


@endsection
