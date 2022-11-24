<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{


    public function render()
    {
        $annonce = Annonce::all();
        $category = Category::all();
        return view('livewire.home-component',
            [
                'category' =>$category ,
                'annonce' => $annonce ,
                ]
        )
        ->extends('layout.app')
        ->section('content');
    }



}
