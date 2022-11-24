<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Stripecomponent extends Component
{
    public function render()
    {
        return view('livewire.stripecomponent')
        ->extends('layout.app')
        ->section('content');
    }
}
