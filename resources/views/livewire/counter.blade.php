
        <button class="header-widget header-cart" title="Panier">
            <a href="{{url('/cart')}}"> <i class="fas fa-shopping-basket"></i></a>
            <sup>{{ count((array) session('cart')) }}</sup>
        </button>

