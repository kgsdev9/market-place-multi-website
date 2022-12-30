@extends('dashboard.layout.app')

@section('main')

<div class="nk-wrap ">


    <div class="nk-content " style="margin-top:70px;">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    VOUS AVEZ CHOISI CE PACK {{ number_format($plan->price, 2) }} €  pour {{ $plan->name }} Plan

                                </div>
                            </div>
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="fv-full-name">NOM DE LA CARD</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" id="card-holder-name" class="form-control"   placeholder="Name on the card">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="fv-email">DETAILS DE LA CARTE</label>
                                                    <div id="card-element"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Payer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->



                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s -->

    <!-- footer @e -->
</div>


<script src="https://js.stripe.com/v3/"></script>
<script>
   const stripe = Stripe('pk_test_51M0SbKJuTJSR5uqBGqbQlvTd8UTJ2gebBy7qtZdOBxnmFDAlcPMNcmFiqFuQv1xamJA1O0pszYGfTdPdXbvo9Zuz00jWzhJmkq');
    const elements = stripe.elements()
    const cardElement = elements.create('card')

    cardElement.mount('#card-element')

    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')

    form.addEventListener('submit', async (e) => {
        e.preventDefault()

        cardBtn.disabled = true
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }
        )

        if(error) {
            alert('Echec Du paiement , veuillez recharger la page puis reesayr');
            // cardBtn.disable = false
        } else {
            let token = document.createElement('input')
            token.setAttribute('type', 'hidden')
            token.setAttribute('name', 'token')
            token.setAttribute('value', setupIntent.payment_method)
            form.appendChild(token)
            form.submit();
        }
    })
</script>



@endsection
