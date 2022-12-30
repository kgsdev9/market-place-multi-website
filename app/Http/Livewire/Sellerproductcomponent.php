<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Seller;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Sellerproductcomponent extends Component
{

    use WithPagination ;
    protected $paginationTheme = 'bootstrap';


    public $product_seller ;
    public $seller;


    public function selleraddtocart($id) {
        $product = Product::findOrFail($id);
            $cart = session()->get('cart', []);
            Alert::toast('Produit ajouté avec succès!','success');
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
            Alert::toast('Produit ajouté avec succès!','success');
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



    public function  mount($id) {
        $this->seller  = Seller::find($id);
        $this->product_seller  = Product::where('seller_id', '=', $id)->get();


    }


    public function render()
    {

        $urlcurrent =  url()->current() ;

        $shareComponent = \Share::page(
            $urlcurrent
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('livewire.sellerproductcomponent', [
            'shareComponent' =>  $shareComponent
        ])->extends('layout.app');;
    }
}
