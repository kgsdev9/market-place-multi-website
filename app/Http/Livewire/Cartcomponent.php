<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;


class Cartcomponent extends Component
{

    public function render()
    {
        $category = Category::paginate(80);
        return view('livewire.cartcomponent', [
            'category' => $category
        ])
        ->extends('layout.app')
        ->section('content');
    }
}
