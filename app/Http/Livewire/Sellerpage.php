<?php

namespace App\Http\Livewire;

use App\Models\Seller;
use Livewire\Component;

class Sellerpage extends Component
{
    public function render()
    {
        $sellers = Seller::paginate(20);
        return view('livewire.sellerpage', [
            'sellerspages' => $sellers
        ])->extends('layout.app');
    }
}
