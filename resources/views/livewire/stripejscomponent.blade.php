<div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>

const stripe = Stripe('pk_test_51M0SbKJuTJSR5uqBGuQv1xamJA1O0pszYGfTdPdXbvo9Zuz00jWzhJmkq')
        const elements = stripe.elements()
        const cardElement = elements.create('card')
        cardElement.mount('#card-element')
        const form = document.getElementById('submit-form')

        form.addEventListener('click', async (e) => {
            e.preventDefault();
            const {paymentMethod, error}  = await stripe.createPaymentMethod('card', cardElement);
    if (error) {
   cardBtn.disable = false
    } else {

        document.getElementById('payment_method').value =   paymentMethod.id ;
    }

    document.getElementById('form').submit();
});


    </script>
</div>
