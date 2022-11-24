<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Services\CategoryService;

class Productcatecomponent extends Component
{


    // public function dd($id) {
    //     $product = Product::findOrFail($id);
    //        $cart = session()->get('cart', []);
    //        if(isset($cart[$id])) {
    //            $cart[$id]['quantity']++;
    //        } else {
    //            $cart[$id] = [
    //                "name" => $product->name,
    //                "quantity" => 1,
    //                "price" => $product->price,
    //                "image" => $product->cover_image,
    //                "statut"  => $product->statut,
    //                "product_id"  =>$product->id,
    //            ];
    //        }
    //        session()->put('cart', $cart);
    //        $this->emit('updateCartCount');
    //        return Redirect()->back();
    //    }



    public function render()
    {

        return view('livewire.productcatecomponent', [

        ])->extends('layout.app')
        ->section('content');
    }




}
