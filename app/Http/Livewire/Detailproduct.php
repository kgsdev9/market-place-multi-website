<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Detailproduct extends Component
{
    public function render()
    {

        
        return view('livewire.detailproduct')

        ->extends('layout.app')
        ->section('content');
    }
}
