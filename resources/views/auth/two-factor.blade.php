@extends('layout.app')


@section('content')

  <!-- ============================ COMPONENT REGISTER   ================================= -->
  <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
    <article class="card-body">
      <header class="mb-4"><h4 class="card-title">Authentification à Double Factor</h4></header>
      <p>Saisissez l'adresse e-mail associé à votre compte VTP. Nous vous enverrons un lien sur cette adresse e-mail pour réinitialiser votre mot de passe.

        @if (session('status') == "two-factor-authentication-disabled")
        <div class="alert alert-success" role="alert">
            L'authentification à deux facteurs a été desactivée
        </div>
    @endif

    @if (session('status') == "two-factor-authentication-enabled")
        <div class="alert alert-success" role="alert">
            L'authentification à deux facteurs a été activée.
        </div>
    @endif


      </p>
      <form  method="POST" action="/user/two-factor-authentication">
          @csrf
                    @if(Auth()->user()->two_factor_secret)
                        @method('DELETE')
                        <div >
                            {{ auth()->user()->twoFactorQrCodeSvg()  }}
                 </div>
                <div class="form-group">
                    <button  class="btn btn-primary btn-block">Descativer</button><br>
                </div>
                @else
                <div class="form-group">
                    <button  class="btn btn-danger btn-block">Activer</button><br>
                </div>

                    @endif
          </form>
      </article>
  </div>

  <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->



@endsection
