<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;



class Sectionproductcomponent extends Component
{


    public function addsectioncart($id) {
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
        $product = Product::where('price' , '>=' , 100)->get();
        return view('livewire.sectionproductcomponent' , [
            'product' =>$product
        ]);
    }
}
