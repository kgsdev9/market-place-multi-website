<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{


    public function render()
    {

        return view('livewire.home-component',

        )
        ->extends('layout.app')
        ->section('content');
    }



}
