<tbody>
    @foreach( session('cart') as $id => $details)
    <tr>
        @php $total = 0 @endphp
        @php $total += $details['price'] * $details['quantity'] @endphp
        <td class="table-image"><img src="{{asset('assets/pages/images/product/01.jpg')}}" alt="product"></td>
        <td class="table-name"><h6>{{ Str::limit($details['name'], 30) }}</h6></td>
        <td class="table-price"><h6>{{ $details['price']  }} €</h6></td>
        <td class="table-status">
        <h6 class="stock-out">Indisponible</h6>
        </td>
        <td class="table-shop">
         <div class="cart-action-group">
         <div class="product-action">
        <button  wire:click="decrement({{$details['product_id']}})"  class="action" title="Dimunier"><i class="icofont-minus"></i></button>
          <input class="action-input"   title="Quantity Number"  value="{{ $details['quantity']}}">
          <button  wire:click="increment({{$details['product_id']}})"  class="action" title="Augmenter"><i class="icofont-plus"></i> </button>
          </div>
          </div>
        </td>
        <td>{{ $details['price'] * $details['quantity'] }} €</td>
        <td class="table-action">
        <button wire:click="delete({{$details['product_id']}})" class="text-danger"><i class="icofont-trash" ></i></button>
        </td>
    </tr>
    @endforeach
</tbody>
