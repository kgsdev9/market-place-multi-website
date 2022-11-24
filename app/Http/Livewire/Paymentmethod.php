<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Paymentmethod extends Component
{
    public function render()
    {
        return view('livewire.paymentmethod')
        ->extends('layout.app')
        ->section('content');
    }
}
