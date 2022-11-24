<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Cardproductcomponent extends Component
{

    public $productcategory ;

    public function mount($id) {
        $this->productcategory = Product::find($id);
    }

    public function render()
    {
        $product  = Product::where('category_id','=',$this->productcategory->id)->paginate(20);
        return view('livewire.cardproductcomponent', [
            'product' =>$product
        ])->extends('layout.app');

    }

    public function adfunction($id) {

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

           public function Heart($id) {

        if(Auth::check()) {
            if(Coeur::where('user_id', Auth::user()->id)->where('product_id', $id)->exists()){
                // Alert::toast("Ce Produit existe deja à la liste d'envie",'warning');
                return Redirect()->back();
            }else {
          $whishlist =  Coeur::create([
                    'user_id' => Auth::user()->id,
                    'product_id' =>$id
                  ]);
                //   Alert::toast("Ajouter à la liste d'envies",'success');
                  return Redirect()->back();
            }
        } else {
            return redirect()->route('login');
        }
    }


}
