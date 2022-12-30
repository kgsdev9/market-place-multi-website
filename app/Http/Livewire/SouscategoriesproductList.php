<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Coeur;
use App\Models\Country;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SouscategoriesproductList extends Component
{



    public $name ;
    public $products;

    public $coutries;
    public $cities;
    public $city;

    public $country;


    public  function mount($name){

        $this->cities = City::orderBy('name')->get();
        $this->countries = Country::orderBy('name')->get();

        $this->name = $name ;
        $this->products=Product::where('name','like','%'.$this->name.'%')->get(); 
      


    }

    
    public function selleraddtocart($id) {
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


    public function addWishlist($id) {

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

    
    public function render()
    {
        return view('livewire.souscategoriesproduct-list')->extends('layout.app');
    }
}
