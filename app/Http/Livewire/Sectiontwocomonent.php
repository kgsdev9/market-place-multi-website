<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Sectiontwocomonent extends Component
{


        public function addtoproduct($id) {
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

        }



    public function render()
    {
        $ressourcesproduct = Product::where('price' , '>=' , 500)->get();
        return view('livewire.sectiontwocomonent', [
            'ressourcesproduct' => $ressourcesproduct
        ]);
    }
}
