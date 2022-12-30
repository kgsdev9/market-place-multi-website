@extends('orders.master.master')

@section('oders')
<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-6   col-lg-4col-xl-5">
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>Payer en toute securité</h2>
                        <p>AVEC VTP SECURE </p>
                    </div>
                    <form class="user-form"  action="{{route('Stripe.forms')}}" method="POST"  id="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput"placeholder="Ecrivez Brievement votre nom" name="fullname" value=" {{$buyer->sirname}}  {{$buyer->firstname}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Entrer un numero de telephone valide" name="phone" value="{{$buyer->phonenumber}}">
                        </div>


                        <div class="form-group">
                            <input type="text" value="{{Auth::user()->email}}" class="form-control" placeholder="" name="email">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pays du recepteur" name="country">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Ville du recepteur" name="city">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="adresse_delivry" placeholder="Adresse de livraison"></textarea>
                        </div>

                        <input type="hidden" name="payment_method" id="payment_method">

                        <div id="card-element">


                        </div>


                        <div class="form-group" style="margin-top:20px;">
                            {!! NoCaptcha::renderJs('fr', false, 'recaptchaCallback') !!}
                            {!! NoCaptcha::display() !!}

                        </div>

                        <div class="cart-checkout-btn" style="margin-top:50px;">
                            <button type="submit" class="text-white" id="submit-form">Confirmer Le Paiement De    |  {{$total_cart}} €</button>
                        </div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>Retourner <a href="{{route('cart.index')}}">au panier</a></p>
                </div>
                <div class="user-form-footer">
                    <p>VTP SECRURE | © Copyright by <a href="#">VTP GROUP</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@livewire('stripejscomponent')

@endsection
