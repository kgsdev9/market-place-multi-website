<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class Actioncomponent extends Component
{


    public function increment($id) {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);

    }

    public function delete($id) {
        $cart = session()->get('cart' , []);
        dd($cart);
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
