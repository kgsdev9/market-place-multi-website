<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Comment;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Detailproduct extends Component
{

    use WithPagination ;

    protected $paginationTheme = 'bootstrap';

    public $id_detail  ;
    public $comments ;
    public $product_detail  ;

    public function mount($id)  {
        $this->id_detail = $id ;
        $this->comments = Comment::where('product_id',$id)->get();
        $this->product_detail   = Product::findOrFail($id);
    }


    public function  simon($id) {
        dd($id);
    }

    public function detailaddtocart($id) {
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




        return view('livewire.detailproduct')

        ->extends('layout.app')
        ->section('content');
    }
}
