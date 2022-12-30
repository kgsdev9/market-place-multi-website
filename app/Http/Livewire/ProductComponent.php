<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;




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
           $this->dispatchBrowserEvent('message', [
            'text' => 'Produit ajouté au panier',
            'type'  => 'info',
            'status'  => 401
           ]);
           session()->put('cart', $cart);
           $this->emit('updateCartCount');


       }

    public function render()
    {
        $this->product = Product::where('price', '<' ,60)->take(30)->get();
        return view('livewire.product-component', [
            'product'  =>$this->product
        ]);
    }



}
