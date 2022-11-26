<?php

namespace App\Http\Livewire;

use App\Models\Coeur;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Detailotherproduct extends Component
{

    public $otherproducts ;
    public function mount($id_product,$id_category)  {
        $this->otherproducts=Product::where('category_id',$id_category )
        ->where('id','!=',$id_product)
        ->get();
    }



    public function otherproductadd($id) {
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
        return view('livewire.detailotherproduct');
    }
}
