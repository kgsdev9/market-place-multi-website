<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\View\Components\Alert;

class ProductComponent extends Component
{
    public function addtocart($id) {
        $product = Product::findOrFail($id);
           $cart = session()->get('cart', []);
           if(isset($cart[$id])) {
               $cart[$id]['quantity']++;
           } else {
               $cart[$id] = [
                   "name" => $product->name,
                   "quantity" => 1,
                   "price" => $product->price,
                   "image" => $product->cover_image,
                   "statut"  => $product->statut,
                   "product_id"  =>$product->id,
               ];
           }
           session()->put('cart', $cart);
           $this->emit('updateCartCount');
           return Redirect()->back();
       }
    public function render()
    {
        $this->product = Product::get();
        return view('livewire.product-component', [
            'product'  =>$this->product
        ]);
    }



}
