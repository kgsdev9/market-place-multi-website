<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{


    public function render()
    {

        $annonce  = Annonce::all();
        $category = Category::all();
        return view('livewire.home-component', compact('category', 'annonce'))
        ->extends('layout.app')
        ->section('content');
    }



}
