<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {

        $category  = Category::paginate(30);
        return view('livewire.category-component', [
            'category' =>$category
        ])
        ->extends('layout.app')
        ->section('content');
    }
}
