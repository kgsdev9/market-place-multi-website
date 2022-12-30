@extends('layout.app')
@section('content')

<div class="row">

    <div class="col">
        <section class="section-content padding-y">

            <!-- ============================ COMPONENT REGISTER   ================================= -->
                <div class="card mx-auto text-center" style="max-width:520px; margin-top:40px;">
                  <article class="card-body">
                    <header class="mb-4"><h4 class="card-title">Terminez votre inscription !!</h4></header>
                  <form action={{route('email.confirmated')}}  method="POST">
                        @csrf

                          <input type="hidden" value="{{$user->id}}" name="id">
                            <div class="form-group">
                                <input  class="form-control"  type="text" name="code" value="{{$user->code}}">
                            </div> <!-- form-group end.// -->


                                <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> confirmer </button>
                            </div> <!-- form-group// -->



                        </form>
                    </article><!-- card-body.// -->
                </div> <!-- card .// -->

                <br><br>
            <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


            </section>

    </div>


</div>





@endsection
