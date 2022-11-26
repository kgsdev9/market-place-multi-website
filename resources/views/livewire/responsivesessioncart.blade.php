<div>
    <a href="{{url('/cart')}}" title="Home Page">
        <i class="fas fa-shopping-basket"></i>
        <sup>{{ count((array) session('cart')) }}</sup>
        <span>Panier</span>
    </a>
</div>
