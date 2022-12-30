<?php

namespace App\Http\Livewire;
use session;
use Livewire\Component;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class Actioncomponent extends Component
{


    // protected $listeners = [ 'updateCartCount' =>  'count_price'];

    public $removecart  ;

    public function increment($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);
    }

    public function delete($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->emit('updateCartCount');
    }



    public function decrement($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] >1 ) {
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
            } else {
                //messsage
            }

        }

    }
    public function render()
    {

        return view('livewire.actioncomponent');
    }
}
