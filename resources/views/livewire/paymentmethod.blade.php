<div>

    <section class="inner-section wallet-part" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card">
                        <h3 class="account-title">VOTRE COMMANDE</h3>
                        <div class="my-wallet">
                            <p> {{Auth::user()->name}} Vous y est presque</p>

                        </div>
                        <div class="wallet-card-group">
                            <div class="wallet-card">
                                <p>TOTAL COMMANDE</p>
                                <h3>{{$totalpanier}} €</h3>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: -80px;">
                    <div class="account-card mb-0">
                        <div class="account-title">
                            <h4>OPTION DE PAIEMENT</h4>

                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card ">
                                       <a href="{{route('stripeforms')}}"> <img src="{{asset('assets/imagesvtp/payment-method.png')}}" alt="payment"></a>
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>

                                       <a href="{{URL::SignedRoute('stripeforms')}}" class="text-dark">PROCEDER AU PAIMENT</a>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card">
                                      <a href=""> <img src="{{asset('i')}}" alt="payment"></a>
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>

                                       <a href="" class="text-dark">PROCEDER AU PAIMENT</a>
                                    </div>
                                </div>

 --}}

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
