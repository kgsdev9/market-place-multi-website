<div class="col-lg-6">
    <form class="contact-form"    {{route('stripe.store')}}  method="POST" id="form">
        @csrf
        <h4>Remplissez Le Formualire de paiement</h4>
        <div class="form-group">
            <input type="hidden" name="amount"  value="50">


            <div class="form-input-group">
                <input class="form-control" type="text" placeholder="Your Name">
                <i class="icofont-user-alt-3"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input class="form-control" type="text" placeholder="Your Email">
                <i class="icofont-email"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <input class="form-control" type="text" placeholder="Your Subject">
                <i class="icofont-book-mark"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-input-group">
                <textarea class="form-control" placeholder="Your Message"></textarea>
                <i class="icofont-paragraph"></i>
            </div>
        </div>

        <div id="card-element">

        </div>

        <input type="hidden" name="payment_method" id="payment_method">

        <button type="submit" class="form-btn-group" id="submit-button">
            <i class="fas fa-envelope"></i>
            <span>send message</span>
        </button  >
    </form>
</div>

   <script src="https://js.stripe.com/v3/"></script>

   <script>
    const stripe = Stripe("{{env('STRIPE_KEY') }}");

    const elements = stripe.elements();
    const cardElement = elements.create('card', {
        classes: {
            base:'StripeElement bg-white w-1/2   p-2 my-2 rounded-lg'
        }
    });
    cardElement.mount('#card-element');


   </script>


