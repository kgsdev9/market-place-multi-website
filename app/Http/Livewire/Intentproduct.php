<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Intentproduct extends Component
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
        return Redirect()->back();
    }


    public function render()
    {
        $user = Auth::user();
        $query  = Coeur::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('livewire.intentproduct', [
            'product'  =>$query
        ])
        ->extends('layout.app')
        ->section('content');
        ;
    }
}
