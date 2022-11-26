<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Responsivesessioncart extends Component
{

    protected $listeners = [
        'updateCartCount' => 'getCartCounter' ,
    ];

    public function render()
    {

        $this->getCartCounter();
        return view('livewire.responsivesessioncart');
    }

    public function getCartCounter() {
        count((array) session('cart')) ;
    }
}
