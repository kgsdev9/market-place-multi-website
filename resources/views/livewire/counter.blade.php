<button class="header-widget header-cart" title="Cartlist">
    <a href="{{url('/cart')}}"> <i class="fas fa-shopping-basket"></i></a>
    <sup>{{ count((array) session('cart')) }}</sup>
    {{-- <span>PRIX TOTAL<small> {{$total}} €</small></span> --}}
</button>
