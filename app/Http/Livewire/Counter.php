<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    protected $listeners = ['updateCartCount' => 'getCartCounter'];

    public function render()
    {
        $this->getCartCounter();
        return view('livewire.counter');
    }

    public function getCartCounter() {
        count((array) session('cart')) ;
    }
}
