<?php

namespace App\Http\Livewire;

use App\Models\Seller;
use Livewire\Component;
use Livewire\WithPagination;

class Sellerpage extends Component
{

    protected $paginationTheme = 'bootstrap';
    use  WithPagination ;

    public function render()
    {
        $sellers = Seller::paginate(20);
        return view('livewire.sellerpage', [
            'sellerspages' => $sellers
        ])->extends('layout.app');
    }
}
