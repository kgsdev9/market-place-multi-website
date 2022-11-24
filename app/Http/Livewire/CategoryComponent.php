<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {
        
        $category  = Product::paginate(30);
        return view('livewire.category-component', [
            'category' =>$category
        ])
        ->extends('layout.app')
        ->section('content');
    }
}
